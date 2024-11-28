<div class="header">
    <div class="header-left">
      <a href="#" class="burger-menu"><i data-feather="menu"></i></a>

<form action="{{ route('admin.SearchShipment') }}" method="get">
  @csrf
      <div class="header-search">
       
        <input type="text" name="SearchID" class="form-control" placeholder="What are you looking for?">
       <button type="submit" style="border: 0px">  <i data-feather="search"></i></button>
      </div><!-- header-search -->
    </form>
    </div><!-- header-left -->

    <div class="header-right">
      <a href="#" class="header-help-link"><i data-feather="help-circle"></i></a>
      <div class="dropdown dropdown-notification">
        <a href="#" class="dropdown-link new" data-toggle="dropdown"><i data-feather="bell"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-menu-header">
            <h6>Notifications</h6>
            <a href="#"><i data-feather="more-vertical"></i></a>
          </div><!-- dropdown-menu-header -->
          <div class="dropdown-menu-body">
            <a href="#" class="dropdown-item">
              <div class="avatar"><span class="avatar-initial rounded-circle text-primary bg-primary-light">s</span></div>
              <div class="dropdown-item-body">
                <p><strong>Socrates Itumay</strong> marked the task as completed.</p>
                <span>5 hours ago</span>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="avatar"><span class="avatar-initial rounded-circle tx-pink bg-pink-light">r</span></div>
              <div class="dropdown-item-body">
                <p><strong>Reynante Labares</strong> marked the task as incomplete.</p>
                <span>8 hours ago</span>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="avatar"><span class="avatar-initial rounded-circle tx-success bg-success-light">d</span></div>
              <div class="dropdown-item-body">
                <p><strong>Dyanne Aceron</strong> responded to your comment on this <strong>post</strong>.</p>
                <span>a day ago</span>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="avatar"><span class="avatar-initial rounded-circle tx-indigo bg-indigo-light">k</span></div>
              <div class="dropdown-item-body">
                <p><strong>Kirby Avendula</strong> marked the task as incomplete.</p>
                <span>2 days ago</span>
              </div>
            </a>
          </div><!-- dropdown-menu-body -->
          <div class="dropdown-menu-footer">
            <a href="#">View All Notifications</a>
          </div>
        </div><!-- dropdown-menu -->
      </div>
      <div class="dropdown dropdown-loggeduser">
        <a href="#" class="dropdown-link" data-toggle="dropdown">
          <div class="avatar avatar-sm">
            <img src="{{ asset('backend/img/img1.jpg') }}" class="rounded-circle" alt="">
          </div><!-- avatar -->
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-menu-header">
            <div class="media align-items-center">
              <div class="avatar">
                <img src="{{ asset('backend/img/img1.jpg') }}" class="rounded-circle" alt="">
              </div><!-- avatar -->
              <div class="media-body mg-l-10">
                <h6>Louise Kate Lumaad</h6>
                <span>Administrator</span>
              </div>
            </div><!-- media -->
          </div>
          <div class="dropdown-menu-body">
            {{-- <a href="#" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
            <a href="#" class="dropdown-item"><i data-feather="edit-2"></i> Edit Profile</a>
            <a href="#" class="dropdown-item"><i data-feather="briefcase"></i> Account Settings</a>
            <a href="#" class="dropdown-item"><i data-feather="shield"></i> Privacy Settings</a> --}}
            <a href="{{ route('login') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="dropdown-item"><i data-feather="log-out"></i> Sign Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> 
          </div>
        </div><!-- dropdown-menu -->
      </div>
    </div><!-- header-right -->
  </div><!-- header -->