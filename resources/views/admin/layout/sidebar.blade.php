<div class="main-sidebar">
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Admin Panel</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html"></a>
    </div>

    <ul class="sidebar-menu">

        <li class="active"><a class="nav-link" href="{{ route('admin_home') }}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

        <!-- product -->
        <li class="{{ Request::is('admin/product/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_product_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="FAQ"><i class="fa fa-bolt"></i> <span>Manage product</span></a></li>



    </ul>
</aside>
</div>