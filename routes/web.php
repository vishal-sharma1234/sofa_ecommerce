<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\admin as Admin;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductCollection as ProductCollection;
use App\Http\Controllers\admin\Module as Module;
use App\Http\Controllers\admin\Website as Website;

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Front as Front;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/* Cache Clear Routes - Direct Artisan Commands */

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return redirect()->back()->with('message', 'Cache cleared successfully!');
})->name('front.clear.cache');


/* 🧭 Front controller */
Route::any('/', [Front\FrontController::class, 'index'])->name('front.home');

Route::any('/contact-us', [Front\FrontController::class, 'contactUs'])->name('front.contact.us');

Route::any('/add-enquiry', [App\Http\Controllers\Front\EnquiryController::class, 'saveRecord'])->name('front.add.enquiry');

Route::any('/what-we-offer', [Front\FrontController::class, 'whatWeOffer'])->name('front.what.we.offer');

Route::any('/about-us', [Front\FrontController::class, 'aboutUs'])->name('front.about.us');


Route::any('/testimonials', [Front\FrontController::class, 'testimonials'])->name('front.testimonials');

Route::any('/privacy-policy', [Front\FrontController::class, 'privacyPolicy'])->name('front.privacy.policy');

Route::any('/comming-soon', [Front\FrontController::class, 'commingSoon'])->name('front.comming.soon');

/* Product Routes Start*/
Route::any('/shop', [ProductCollection\ProductController::class, 'shop'])->name('front.products');
Route::any('/product-datail/{slug}', [ProductCollection\ProductController::class, 'detail'])->name('product.detail');
Route::any('/store-recent-product', [ProductCollection\ProductController::class, 'storeRecent'])->name('store.recent.product');
/* Product Routes End*/


/* Category Routes Start */
// Route::any('/main-collection', [ProductCollection\CategoryController::class, 'categories'])->name('front.categories');

Route::any('/main-collection/{slug}', [ProductCollection\CategoryController::class, 'category'])->name('front.category');
/* Category Routes End */

// Route::any('/collection/{slug}', [ProductCollection\SubCategoryController::class, 'subCategory'])->name('front.sub.category');

Route::any('/blogs', [Module\BlogController::class, 'blogs'])->name('front.blogs');
Route::get('/blog/{slug}', [Module\BlogController::class, 'detail'])->name('front.blog.detail');

Route::any('/post-comment', [Module\BlogController::class, 'postComment'])->name('front.post.comment');

Route::any('/add-review', [App\Http\Controllers\Front\CustomerReviewController::class, 'saveRecord'])->name('front.add.review');

/* Add To Cart */
Route::any('/add-to-cart', [Front\FrontController::class, 'addToCart'])->name('front.add.to.cart');
Route::any('/cart', [Front\FrontController::class, 'shoppingCart'])->name('front.shopping.cart');
Route::any('/remove-cart/{id}', [Front\FrontController::class, 'removeFromCart'])->name('front.remove.shopping.cart');

/* Subscribe */
Route::any('/subscribe', [Front\FrontController::class, 'subscribe'])->name('front.subscribe');


/* 🧭 Front controller */
/* 🧭 Dashboard (for all authenticated users) */
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

/* 👤 Profile routes */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* 🛡️ Admin routes (only for users with Admin role) */
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::any('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::any('/users', [UserController::class, 'index'])->name('users');
    Route::any('/delete-user/{id}', [UserController::class, 'deletUser'])->name('delete.user');
    Route::any('/settings', [AdminController::class, 'settings'])->name('settings');

    /*----------🌏︎ Start Website Routes-------------*/

    /* 1. About Us */
    Route::any('/admin/about-us', [AboutUsController::class, 'store'])
        ->name('about_us.store');

    /* 1. Banner */
    Route::any('/banners', [Website\BannerController::class, 'index'])->name('banners');
    Route::any('/add-update-website-banner/{id?}', [Website\BannerController::class, 'saveRecord'])->name('add.update.website.banner');
    Route::any('/delete-website-banner/{id}', [Website\BannerController::class, 'deleteRecord'])->name('delete.website.banner');

    /* 2. Customer Review */
    Route::any('/reviews', [App\Http\Controllers\Front\CustomerReviewController::class, 'index'])->name('reviews');
    Route::any('/delete-review/{id}', [App\Http\Controllers\Front\CustomerReviewController::class, 'deleteRecord'])->name('delete.review');

    /*----------🌏︎ Start Website Routes-------------*/

    /*----------🗂 Start Collection Routes-------------*/
    /* 1. Product */
    Route::any('/products', [ProductCollection\ProductController::class, 'index'])->name('products');
    Route::any('/save-product/{id?}', [ProductCollection\ProductController::class, 'saveRecord'])->name('add.update.product');
    Route::any('/delete-product/{id}', [ProductCollection\ProductController::class, 'deleteRecord'])->name('delete.product');
    // Route::any('/update-product/{id}', [ProductCollection\ProductController::class, 'updateProduct'])->name('update.product');
    Route::get('/get-subcategories/{category_id?}', [ProductCollection\ProductController::class, 'getSubCategories'])->name('get.subcategories');

    /* 2. Product Category */
    Route::any('/product-categories', [ProductCollection\CategoryController::class, 'index'])->name('product.categories');
    Route::any('/add-update-product-category/{id?}', [ProductCollection\CategoryController::class, 'saveCategpry'])->name('add.update.product.category');
    Route::any('/delete-product-category/{id}', [ProductCollection\CategoryController::class, 'deleteCategory'])->name('delete.product.category');


    /* 3. Product Sub Category */
    Route::any('/product-subcategories', [ProductCollection\SubCategoryController::class, 'index'])->name('product.subcategories');
    Route::any('/add-update-product-subcategory/{id?}', [ProductCollection\SubCategoryController::class, 'saveRecord'])->name('add.update.product.subcategory');
    Route::any('/delete-product-subcategory/{id}', [ProductCollection\SubCategoryController::class, 'deleteRecord'])->name('delete.product.subcategory');

    /*----------🗂 End Collection Routes-------------*/

    /*------------Start Module Routes------------*/
    /* 1. => Color */
    Route::any('/colors', [Module\ColorController::class, 'index'])->name('colors');
    Route::any('/add-update-color/{id?}', [Module\ColorController::class, 'saveRecord'])->name('add.update.color');
    Route::any('/delete-color/{id}', [Module\ColorController::class, 'deleteRecord'])->name('delete.color');

    /* 2. => Blog */
    Route::any('/blogs', [Module\BlogController::class, 'index'])->name('blogs');
    Route::any('/add-update-blog/{id?}', [Module\BlogController::class, 'saveRecord'])->name('add.update.blog');
    Route::any('/delete-blog/{id}', [Module\BlogController::class, 'deleteRecord'])->name('delete.blog');

    /* 3. => Blog Category */
    Route::any('/blog-categories', [Module\BlogCategoryController::class, 'index'])->name('blogs.categories');
    Route::any('/add-update-blog-category/{id?}', [Module\BlogCategoryController::class, 'saveCategpry'])->name('add.update.blog.category');
    Route::any('/delete-blog-category/{id}', [Module\BlogCategoryController::class, 'deleteCategory'])->name('delete.blog.category');

    /* 4. => Team */
    Route::any('/teams', [Admin\TeamController::class, 'index'])->name('teams');
    Route::any('/add-update-team/{id?}', [Admin\TeamController::class, 'saveRecord'])->name('add.update.team');
    Route::any('/delete-team/{id}', [Admin\TeamController::class, 'deleteRecord'])->name('delete.team');

    /* 5. => Faq's */
    Route::any('/faqs', [Admin\FaqController::class, 'index'])->name('faqs');
    Route::any('/add-update-faq/{id?}', [Admin\FaqController::class, 'saveRecord'])->name('add.update.faq');
    Route::any('/delete-faq/{id}', [Admin\FaqController::class, 'deleteRecord'])->name('delete.faq');

    /*------------End Module Routes------------*/
});

require __DIR__ . '/auth.php';
