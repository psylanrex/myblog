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
                <a href="{{ route('manage.dashboard') }}" class="{{ Nav::isRoute('manage.dashboard') }}">Dashboard</a>
            </li>
        </ul>
        <hr class="dropdown-divider">
        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li>
                <a href="/manage/users" class="{{ Nav::isResource('users') }}">Manage Users</a>
            </li>
            <li>
                <a href="/manage/customers" class="{{ Nav::isResource('customers') }}">Manage Customers</a>
            </li>
            <li>
                <a class="has-submenu" class="{{ Nav::hasSegment(['roles', 'permissions'], 2) }}">Roles &amp; Permissions</a>
                <ul class="submenu">
                    <li><a href="{{ route('roles.index') }}" class="{{ Nav::isResource('roles') }}">Roles</a></li>
                    <li><a href="{{ route('permissions.index') }}" class="{{ Nav::isResource('permissions') }}">Permissions</a></li>
                </ul>
            </li>
        </ul>
        <hr class="dropdown-divider">
        <p class="menu-label">
            Blogging
        </p>
        <ul class="menu-list">
            <li>
                <a class="has-submenu" class="{{ Nav::isResource('posts') }}">Posts</a>
                <ul class="submenu">
                    <li>
                        <a href="{{ route('posts.index') }}" class="{{ Nav::isRoute('posts.index') }}">All Posts</a>
                    </li>
                    <li>
                        <a href="{{ route('posts.create') }}" class="{{ Nav::isRoute('posts.create') }}">Create New Post</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-submenu" class="{{ Nav::isResource('tags') }}">Tags</a>
                <ul class="submenu">
                    <li>
                        <a href="{{ route('tags.index') }}" class="{{ Nav::isRoute('tags.index') }}">All Tags</a>
                    </li>
                    <li>
                        <a href="{{ route('tags.create') }}" class="{{ Nav::isRoute('tags.create') }}">Create New Tag</a>
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