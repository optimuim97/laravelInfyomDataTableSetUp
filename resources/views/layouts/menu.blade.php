<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>




<li class="side-menus {{ Request::is('accountTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('accountTypes.index') }}"><i class="fas fa-building"></i><span>Account Types</span></a>
</li>

<li class="side-menus {{ Request::is('advantages*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('advantages.index') }}"><i class="fas fa-building"></i><span>Advantages</span></a>
</li>

<li class="side-menus {{ Request::is('articles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('articles.index') }}"><i class="fas fa-building"></i><span>Articles</span></a>
</li>

<li class="side-menus {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}"><i class="fas fa-building"></i><span>Categories</span></a>
</li>

<li class="side-menus {{ Request::is('needs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('needs.index') }}"><i class="fas fa-building"></i><span>Needs</span></a>
</li>

<li class="side-menus {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-building"></i><span>Products</span></a>
</li>

<li class="side-menus {{ Request::is('productSpecifications*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productSpecifications.index') }}"><i class="fas fa-building"></i><span>Product Specifications</span></a>
</li>

<li class="side-menus {{ Request::is('productUsers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productUsers.index') }}"><i class="fas fa-building"></i><span>Product Users</span></a>
</li>

<li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-building"></i><span>Users</span></a>
</li>

<li class="side-menus {{ Request::is('settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('settings.index') }}"><i class="fas fa-building"></i><span>Settings</span></a>
</li>

