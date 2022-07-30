<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a class="nav-link" href="/dashboard"><i
                        class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('dashboard/posts*') ? 'active' : '' }}"><a class="nav-link"
                    href="/dashboard/posts"><i class="fas fa-pen-square"></i>
                    <span>My Posts</span></a>
            </li>

            @can('admin')
                <li class="menu-header">Administrator</li>
                <li class="{{ Request::is('dashboard/categories*') ? 'active' : '' }}"><a class="nav-link"
                        href="/dashboard/categories"><i class="fas fa-pen-square"></i>
                        <span>Post Categories</span></a>
                </li>
            @endcan
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary btn-lg btn-block btn-icon-split"><i
                        class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
        </div>
    </aside>
</div>
