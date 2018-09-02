<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Pages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/post')}}"><i class="fa fa-circle-o"></i>Post</a></li>
                    <li><a href="{{url('/addCategory')}}"><i class="fa fa-circle-o"></i>Add Category</a></li>

                    <li><a href="pages/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="pages/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="pages/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="pages/error404.html"><i class="fa fa-circle-o"></i>404 Error</a></li>
                    <li><a href="pages/error500.html"><i class="fa fa-circle-o"></i>500 Error</a></li>
                </ul>
            </li>

            <li class="">
                <a href="pages/all-post.html"><i class="fa fa-edit"></i> <span>All Post</span></a>
                <span class="pull-right-container">
            </span>
            </li>
            <li class="">
                <a href="pages/subscribr.html"><i class="fa fa-user"></i> <span>Subscriber</span></a>
                <span class="pull-right-container">
            </span>
            </li>
            <li>
                <a href="pages/mail.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
