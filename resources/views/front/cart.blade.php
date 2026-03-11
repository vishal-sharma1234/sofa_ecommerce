@extends('layouts.front.master')
@section('title', 'Cart')
@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-about.jpg">
            <div class="material-parallax parallax"><img src="images/bg-about.jpg" alt=""
                    style="transform: translate3d(-50%, 184px, 0px); display: block;"></div>
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Cart Page</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="grid-shop.html">Shop</a></li>
                    <li class="active">Cart Page</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-xl bg-default">
        <div class="container">
            <!-- shopping-cart-->
            <div class="table-custom-responsive">
                <table class="table-custom table-cart">
                    <thead>
                        <tr>
                            <th>Product </th>
                            {{-- <th>Price</th> --}}
                            {{-- <th>Quantity</th> --}}
                            <th>Enquiry</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($content))
                            @foreach ($content as $item)
                                @php
                                    // dd($item);
                                @endphp
                                <tr>
                                    <td>
                                        <a class="table-cart-figure" href="{{ route('product.detail', $item['slug']) }}">
                                            <img src="{{ asset('sofaseller/product/' . $item['id'] . '/' . $item['image']) }}"
                                                alt="" width="146" height="132"></a><a class="table-cart-link"
                                            href="{{ route('product.detail', $item['slug']) }}">
                                            White Club Chair
                                        </a>
                                    </td>
                                    <td>
                                        <a href="https://wa.me/8078649462?text=Is%20this%20product%20available%3F%20{{ $item['name'] }}"
                                            target="_blank">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('front.remove.shopping.cart', $item['id']) }}"
                                            style="color: #e04444 !important;"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="text-center">
                                <h4>Cart Is Empty</h4>
                            </div>
                        @endif

                    </tbody>
                </table>
            </div>
            <div class="group-xl group-justify justify-content-center justify-content-md-between">
                <div>
                    <form class="rd-form rd-mailform rd-form-inline rd-form-coupon" novalidate="novalidate">
                        <div class="form-wrap">
                            <input class="form-input form-input-inverse" id="coupon-code" type="text" name="text"
                                fdprocessedid="xibci6">
                            <label class="form-label rd-input-label" for="coupon-code">Coupon code</label>
                        </div>
                        <div class="form-button">
                            <button class="btn btn-lg btn-secondary btn-zakaria" type="submit"
                                fdprocessedid="56ftpg">Apply</button>
                        </div>
                    </form>
                </div>
                <div>
                    <div class="group-xl group-middle">
                        <div>
                            <div class="group-md group-middle">
                                <div class="heading-5 fw-medium text-gray-500">Total</div>
                                <div class="heading-5 fw-normal">{{ count($content) }} Products</div>
                            </div>
                        </div>
                        <div>
                            <a id="share-whatsapp" class="btn btn-lg btn-primary btn-zakaria" href="javascript:void(0)"><i
                                    class="fa fa-whatsapp"></i> Checkout All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    @php
        $whatsappProducts = [];
        foreach ($content as $it) {
            $whatsappProducts[] = [
                'name' => $it['name'] ?? ($it['title'] ?? 'Product'),
                'qty' => $it['qty'] ?? ($it['quantity'] ?? 1),
                'price' => $it['price'] ?? null,
                'url' => isset($it['slug']) ? route('product.detail', $it['slug']) : (isset($it['id']) ? url('/') : ''),
            ];
        }
    @endphp
    <script>
        const whatsappProducts = @json($whatsappProducts);
        const shareBtn = document.getElementById('share-whatsapp');
        if (shareBtn) {
            shareBtn.addEventListener('click', function(e) {
                e.preventDefault();
                if (!whatsappProducts || !whatsappProducts.length) {
                    alert('Cart is empty');
                    return;
                }
                let lines = [];
                lines.push('Hello, here are the products from my cart:');
                let totalItems = 0;
                whatsappProducts.forEach((p, i) => {
                    const qty = p.qty || 1;
                    totalItems += Number(qty);
                    let line = `${i + 1}. ${p.name}` + (qty ? ` x${qty}` : '');
                    if (p.price) line += ` - ${p.price}`;
                    if (p.url) line += ` - ${p.url}`;
                    lines.push(line);
                });
                lines.push('');
                lines.push(`Total items: ${totalItems}`);
                const text = lines.join('\n');
                const url = 'https://wa.me/8078649462?text=' + encodeURIComponent(text);
                window.open(url, '_blank');
            });
        }
    </script>
@endsection
