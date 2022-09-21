<div class="sidebar" style="direction: ltr">
    <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->




                @php
                    $users = App\Models\User::all()->count();
                @endphp
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            کاربران
                            <span class="right badge badge-danger">
                                {{ $users }}
                            </span>

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shells.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                            شل ها
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('myshell.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                            لیست دسترسی ها
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>
