<nav class="d-flex flex-column align-items-center">
    <ul class="p-0 mt-5 d-flex flex-column align-items-center">
        <li class="mb-2">
            <a class="sc-nav-link" href="{{ route('admin.home') }}">
                <i class="fa-solid fa-chart-line me-1"></i>
                <span class="d-none d-md-inline">Dashboard</span>
            </a>
        </li>
        <li class="mb-2">
            <a class="sc-nav-link" href="{{ route('admin.posts.index') }}">
                <i class="fa-regular fa-newspaper"></i>
                <span class="d-none d-md-inline">Posts</span>
            </a>
        </li>
        <li class="mb-2">
            <a class="sc-nav-link" href="{{ route('admin.posts.create') }}">
                <i class="fa-solid fa-plus"></i>
                <span class="d-none d-md-inline">Nuovo post</span>
            </a>
        </li>
    </ul>
</nav>
