<div class="side-menu">
    <aside class="menu m-t-30 m-l-10">
        @if(Auth::check())
            <p class="menu-label is-aligned-center">
                Hi {{ Auth::user()->name }}!
            </p>
        @endif
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li>
                <a href="{{ route('manage.dashboard') }}">Dashboard</a>
            </li>
        </ul>
        <hr class="dropdown-divider">
        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li>
                <a href="/manage/users">Manage Users</a>
            </li>
            <li>
                <a role="button">Roles &amp; Permissions</a>
                <ul>
                    <li><a href="{{ route('roles.index') }}">Roles</a></li>
                    <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                </ul>
            </li>
        </ul>
        <hr class="dropdown-divider">
        <p class="menu-label">
            Blogging
        </p>
        <ul class="menu-list">
            <li>
                <a href="#">Posts</a>
                <ul>
                    <li>
                        <a href="{{ route('posts.index') }}">All Posts</a>
                    </li>
                    <li>
                        <a href="{{ route('posts.create') }}">Create New Post</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Tags</a>
                <ul>
                    <li>
                        <a href="{{ route('tags.index') }}">All Tags</a>
                    </li>
                    <li>
                        <a href="{{ route('tags.create') }}">Create New Tag</a>
                    </li>
                </ul>
            </li>
        </ul>
        <hr class="dropdown-divider">
        <ul class="menu-list">
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                    Logout
                    <span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>
                </a>
                @include('includes.forms.logout')
            </li>
        </ul>
    </aside>
</div>