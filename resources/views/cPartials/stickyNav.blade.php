    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="{{url('/')}}">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{url('blog')}}" class="">
                <i class="icon-bars"></i>Blog
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{url('shop')}}" class="">
                <i class="icon-cart"></i>Shop
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{url('Login')}}" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{url('cart')}}" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}</span>
                </i>Cart
            </a>
        </div>
    </div>