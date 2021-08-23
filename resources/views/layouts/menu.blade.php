<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="side-menus {{ Request::is('cars*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cars.index') }}"><i class="fas fa-building"></i><span>Cars</span></a>
</li>

