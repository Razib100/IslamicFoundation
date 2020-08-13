<div class="sidebar-nav navbar-collapse" style="margin-top: 15px">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>
            <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Category Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/category/add')}}">Add Category </a>
                </li>
                <li>
                    <a href="{{url('/category/manage')}}">Manage Category </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Important Books Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/importantBooks/add')}}">Add Important Books</a>
                </li>
                <li>
                    <a href="{{url('/importantBooks/manage')}}">Manage Important Books</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-table fa-fw"></i> Book List Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/bookList/add')}}">Add Book </a>
                </li>
                <li>
                    <a href="{{url('/bookList/manage')}}">Manage Book </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> About Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/about/add')}}">Add About </a>
                </li>
                <li>
                    <a href="{{url('/about/manage')}}">Manage About </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-wrench fa-fw"></i> Feedback Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/feedBack/manage')}}">Manage Feedback </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <!-- <li>
            <a href="#"><i class="fa fa-edit fa-fw"></i> NewsLetter Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/newsLetter/manage')}}">Manage NewsLetter </a>
                </li>
            </ul>
        </li> -->
        <!-- <li>
            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="blank.html">Blank Page</a>
                </li>
                <li>
                    <a href="login.html">Login Page</a>
                </li>
            </ul>
        </li> -->
    </ul>
</div>
<!-- /.sidebar-collapse -->