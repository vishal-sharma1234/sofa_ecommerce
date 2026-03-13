<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
        <a href="/admin/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
                {{-- <svg width="32" height="22" viewbox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0"></path>
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616"></path>
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0"></path>
                </svg> --}}
                <img src="{{ asset('images/logos/elite.png') }}" width="32" height="32" alt="">
            </span>
            <span class="app-brand-text demo menu-text fw-bold text-sm">Elite Works</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.enquiries') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-phone"></i>
                <div data-i18n="Enquiries">Enquiries</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.users') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Profile">Customers</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.subscribers') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Subscribers">Subscribers</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.banners') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-board-split"></i>
                <div data-i18n="Banners">Banners</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.products') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-package"></i>
                <div data-i18n="Products">Products</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.product.categories') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-folder"></i>
                <div data-i18n="Categories">Categories</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.product.subcategories') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-tags"></i>
                <div data-i18n="Sub Categories">Sub Categories</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.colors') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div data-i18n="Colors">Colors</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.blogs') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-article"></i>
                <div data-i18n="Blogs">Blogs</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.blogs.categories') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-list"></i>
                <div data-i18n="Blog Categories">Blog Categories</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.reviews') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-star"></i>
                <div data-i18n="Customer Reviews">Customer Reviews</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.about_us.store') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-star"></i>
                <div data-i18n="About Us">About Us</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.teams') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Our Team">Our Team</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.faqs') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-question-mark"></i>
                <div data-i18n="Faq's">Faq's</div>
            </a>
        </li>
    </ul>
</aside>

<!-- / Menu -->
<!-- Layout container -->
<div class="layout-page">
    @includeIf('layouts.admin_layout.navbar')
