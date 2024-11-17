<div class="sidebar">
    <div class="sidebar-header">
      <div>
        <a href="https://themepixels.me/demo/cassie/index.html" class="sidebar-logo"><span>DARCO</span></a>
        <small class="sidebar-logo-headline">Darco Courier Services</small>
      </div>
    </div><!-- sidebar-header -->
    <div id="dpSidebarBody" class="sidebar-body">
      <ul class="nav nav-sidebar">
        
        <li class="nav-item show">
          <a href="{{ route('admin.index') }}" class="nav-link active"><i data-feather="home"></i> DASHBOARD</a> </li> <br>

        <li class="nav-item">
          <a href="#" style="cursor: none!important;" class="nav-link active"><i data-feather="box"></i> SHIPMENT</a> </li>
          <li class="nav-item">
          <a href="#" class="nav-link with-sub"><i data-feather="box"></i> Manage Shipment</a>
          <nav class="nav nav-sub">
            <a href="{{ route('admin.courier.create') }}" class="nav-sub-link">Create Shipment</a>
            <a href="{{ route('admin.courier.index') }}" class="nav-sub-link">Manage Shipments</a>
            <a href="app-mail.html" class="nav-sub-link">Create Receipt</a>
          </nav>
        </li>
        <br>

        <li class="nav-item show">
          <a href="#" style="cursor: none!important;" class="nav-link active"><i data-feather="box"></i> SERVICES</a> </li> 
        <li class="nav-item">
          <a href="#" class="nav-link with-sub"><i data-feather="file-text"></i> Manage Services</a>
          <nav class="nav nav-sub">
            <a href="{{ route('admin.Pages.Create') }}" class="nav-sub-link">Create Service</a>
            <a href="{{ route('admin.manage.pages') }}" class="nav-sub-link">Manage Service</a>
            
          </nav>
        </li>
        <br>

        <li class="nav-item show">
          <a href="#" style="cursor: none!important;" class="nav-link active"><i data-feather="file-text"></i> BLOGS</a> </li> 
        <li class="nav-item">
          <a href="#" class="nav-link with-sub"><i data-feather="file-text"></i> Manage Blogs</a>
          <nav class="nav nav-sub">
            <a href="{{ route('admin.BlogsCreate') }}" class="nav-sub-link">Create Blog</a>
            <a href="{{ route('admin.blogs.index') }}" class="nav-sub-link">Manage Blog</a>
          </nav>
        </li>
        <br>
        
        <li class="nav-item show">
          <a href="#" style="cursor: none!important;" class="nav-link active"><i data-feather="box"></i> SETTINGS</a> </li> 
        <li class="nav-item">
          <a href="#" class="nav-link with-sub"><i data-feather="file-text"></i> Website Settings</a>
          <nav class="nav nav-sub">
            <a href="{{route('admin.settings.index')}}" class="nav-sub-link"><i data-feather="file-text"></i> Manage Content</a>
          </nav>
        </li>
        <br>

        <li class="nav-item show">
          <a href="#" style="cursor: none!important;" class="nav-link active"><i data-feather="box"></i> Admin</a> </li> 
        <li class="nav-item">
          <a href="#" class="nav-link with-sub"><i data-feather="file-text"></i> Manage Admin</a>
          <nav class="nav nav-sub">
            <a href="{{route('admin.userAccount')}}" class="nav-sub-link">Admin Setting</a>
            
          </nav>
        </li>
        
      </ul>

      <hr class="mg-t-30 mg-b-25">


    </div><!-- sidebar-body -->
  </div><!-- sidebar -->