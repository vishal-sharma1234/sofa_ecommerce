<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Subscribe, CustomerRreview, AboutUs, Team, Banner,  Blog, Faq, Category, SubCategory, Product};
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;


class FrontController extends Controller
{

    public function index()
    {

        $banners = Banner::all();
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $products = Product::all();

        $highest = Product::orderBy('current_price', 'desc')
            ->take(3)
            ->get();

        // 4 Medium Price Products (middle slice)
        $medium = Product::orderBy('current_price', 'asc')
            ->skip(
                max(0, floor(Product::count() / 2) - 2) // skip to the middle
            )
            ->take(4)
            ->get();

        // Merge results
        $topSaleProducts = $highest->merge($medium);

        $latestCategories = Category::latest()->take(2)->get();

        $latestProducts = Product::latest()->take(3)->get();

        $blogs = Blog::latest()->get();


        $data = [
            'banners' => $banners,
            'categories' => $categories,
            'sub_categories' => $sub_categories,
            'products' => $products,
            'topSaleProducts' => $topSaleProducts,
            'latestCategories' => $latestCategories,
            'latestProducts' => $latestProducts,
            'blogs' => $blogs,
        ];

        return view('front.welcome', $data);
    }

    /* Contact Us */

    public function contactUs()
    {

        return view('front.contact_us');
    }


    public function whatWeOffer()
    {

        $faqs = Faq::latest()->get();
        return view('front.what_we_offer', compact('faqs'));
    }

    public function aboutUs(Request $request)
    {

        $aboutUs = AboutUs::firstOrFail();
        $teams = Team::latest()->get();
        $testimonials = CustomerRreview::latest()->get();
        return view('front.about_us', compact('aboutUs', 'teams', 'testimonials'));
    }

    public function shop(Request $request)
    {

        return view('front.product_collection.products');
    }

    public function testimonials(Request $request)
    {

        return view('front.testimonials');
    }

    public function privacyPolicy(Request $request)
    {

        return view('front.privacy_policy');
    }

    public function commingSoon(Request $request)
    {

        return view('front.comming_soon');
    }

    /* Add To Cart Method*/


    public function addToCart(Request $request)
    {

        // dd("sdfsd");

        $cartId = md5($request->ip() . $request->userAgent());

        Cart::session($cartId)->add([
            'id'        => $request->id,
            'name'      => $request->name,
            'price'     => 0,
            'quantity'  => 1,
            'attributes' => ['slug' => $request->slug, 'image' => $request->image],
        ]);

        $content = Cart::session($cartId)->getContent()->map(function ($item) {
            return ['id' => $item->id, 'name' => $item->name, 'slug' => $item->attributes['slug'] ?? null, 'image' => $item->attributes['image'] ?? null];
        });

        return response()->json(['message' => 'Product added to cart', 'data' => $content]);
    }

    public function shoppingCart(Request $request)
    {

        $cartId = md5($request->ip() . $request->userAgent());

        $content = Cart::session($cartId)->getContent()->map(function ($item) {
            return ['id' => $item->id, 'name' => $item->name, 'slug' => $item->attributes['slug'] ?? null, 'image' => $item->attributes['image'] ?? null];
        });
        // dd($content);

        return view('front.cart', compact('content'));
    }


    /* Remove From Cart Method */

    public function removeFromCart(Request $request)
    {
        $cartId = md5($request->ip() . $request->userAgent());

        Cart::session($cartId)->remove($request->id);

        $content = Cart::session($cartId)->getContent()->map(function ($item) {
            return ['id' => $item->id, 'name' => $item->name, 'slug' => $item->attributes['slug'] ?? null, 'image' => $item->attributes['image'] ?? null];
        });

        return redirect()->back()->with('message', 'Remove product from cart!');
    }
    public function subscribe(Request $request)
    {
        // dd($request->all());
        $subscribe = new Subscribe();
        $request->validate([
            'email' => 'required|email|unique:subscribes,email',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already subscribed.',
        ]);

        $subscribe->email = $request->email;
        $subscribe->ip = $request->ip();
        $isSave =  $subscribe->save();

        if (!$isSave) {
            return response()->json([
                'error' => true,
                'message' => 'Please try again later!'
            ]);
        }

        if (!$request->ajax() && $request->isMethod('post')) {
            return redirect('/')->with('success', 'Subscribed successfully');
        }

        return response()->json([
            'success' => true,
            'message' => 'Subscribed Successfully!'
        ]);
    }

}
