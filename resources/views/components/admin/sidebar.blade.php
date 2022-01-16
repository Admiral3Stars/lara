<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.index') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route ('admin.news.index') }}">
                    <span data-feather="file"></span>
                    News
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route ('admin.categories.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Categories
                </a>
            </li>
        </ul>
    </div>
</nav>
