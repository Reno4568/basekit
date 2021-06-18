<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ request()->is('backsite/dashboard') || request()->is('backsite/dashboard/*') ? 'active' : '' }}">
                <a href="{{ route('backsite.dashboard.index') }}">
                    <i class="{{ request()->is('backsite/dashboard') || request()->is('backsite/dashboard/*') ? 'bx bx-category-alt bx-flashing' : 'bx bx-category-alt' }}" ></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            
            <li class=" navigation-header"><span data-i18n="Application">Application</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Application"></i>
            </li>

            @can('management_access')
                <li class=" nav-item"><a href="#"><i class="{{ request()->is('backsite/permissions') || request()->is('backsite/permissions/*') || request()->is('backsite/*/permissions') || request()->is('backsite/*/permissions/*') || request()->is('backsite/roles') || request()->is('backsite/roles/*') || request()->is('backsite/*/roles') || request()->is('backsite/*/roles/*') || request()->is('backsite/users') || request()->is('backsite/users/*') || request()->is('backsite/*/users') || request()->is('backsite/*/users/*') ? 'bx bx-group bx-flashing' : 'bx bx-group' }}"></i><span class="menu-title" data-i18n="User Management">Management Access</span></a>
                    <ul class="menu-content">
                        @can('permission_access')
                            <li class="{{ request()->is('backsite/permissions') || request()->is('backsite/permissions/*') || request()->is('backsite/*/permissions') || request()->is('backsite/*/permissions/*') ? 'active' : '' }} ">
                                <a class="menu-item" href="{{ route('backsite.permissions.index') }}">
                                    <i></i><span>Permission</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                        <li class="{{ request()->is('backsite/roles') || request()->is('backsite/roles/*') || request()->is('backsite/*/roles') || request()->is('backsite/*/roles/*') ? 'active' : '' }} ">
                            <a class="menu-item" href="{{ route('backsite.roles.index') }}">
                                <i></i><span>Roles</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('backsite/users') || request()->is('backsite/users/*') || request()->is('backsite/*/users') || request()->is('backsite/*/users/*') ? 'active' : '' }} ">
                            <a class="menu-item" href="{{ route('backsite.users.index') }}">
                                <i></i><span>Users</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('master_data_access')
                <li class=" nav-item"><a href="#"><i class="{{ request()->is('backsite/categories') || request()->is('backsite/categories/*') || request()->is('backsite/*/categories') ? 'bx bx-unite bx-flashing' : 'bx bx-unite' }}"></i><span class="menu-title" data-i18n="Master Data">Master Data</span></a>
                    <ul class="menu-content">
                        @can('category_access')
                            <li class="{{ request()->is('backsite/categories') || request()->is('backsite/categories/*') || request()->is('backsite/*/categories') || request()->is('backsite/*/categories/*') ? 'active' : '' }} ">
                                <a class="menu-item" href="{{ route('backsite.categories.index') }}">
                                    <i></i><span>Category</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('workspace_access')
                <li class=" nav-item"><a href="#"><i class="{{ request()->is('backsite/ui_kits') || request()->is('backsite/ui_kits/*') || request()->is('backsite/*/ui_kits') ? 'bx bx-window-alt bx-flashing' : 'bx bx-window-alt' }}"></i><span class="menu-title" data-i18n="Workspace">Workspace</span></a>
                    <ul class="menu-content">
                        @can('ui_kit_access')
                            <li class="{{ request()->is('backsite/ui_kits') || request()->is('backsite/ui_kits/*') || request()->is('backsite/*/ui_kits') || request()->is('backsite/*/ui_kits/*') ? 'active' : '' }} ">
                                <a class="menu-item" href="{{ route('backsite.ui_kits.index') }}">
                                    <i></i><span>UI Kits</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

        </ul>
    </div>
</div>

<!-- END: Main Menu-->