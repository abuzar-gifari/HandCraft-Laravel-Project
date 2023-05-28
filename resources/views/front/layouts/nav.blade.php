<nav class="navbar">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('products') }}">products</a>
    @if (Auth::guard('customer')->user())
        <a href="{{ route('logout') }}">Logout</a>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('registration') }}">Registration</a>
    @endif
    @if (!Auth::guard('customer')->user())
    <a href="#">Cart</a>
    @else
    <a href="{{ route('cart') }}">Cart</a>
    @endif
    <a href="{{ route('admin_login') }}">Admin Login</a>
</nav>
