<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama"); ?></p>
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
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url('admin/write_post'); ?>">
            <i class="fa fa-edit"></i> <span>Write Post</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/post_list'); ?>">
            <i class="fa fa-table"></i> <span>Post List</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/feedback'); ?>">
            <i class="fa fa-envelope"></i> <span>Feedback</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/new_admin'); ?>">
            <i class="fa fa-user"></i> <span>Create New Admin</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>