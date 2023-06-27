
<div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      @if (auth()->user()->role == 'Admin')
      <a href="/dash" style="font-size: 25px; color:white; text-decoration:none; font-weight:bold;">Dashboard {{ auth()->user()->role }}</a>
      @else
      <a href="/dash" style="font-size: 20px; color:white; text-decoration:none; font-weight:bold;">Dashboard {{ auth()->user()->role }}</a>
      @endif

        
    </div>
    <!-- End App Logo -->

  <!-- Start Sidebar Show Hide Button -->
  <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
  <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
  <!-- End Sidebar Show Hide Button -->

  <!-- Start Searchbox -->
  {{-- <form class="searchform">
    <input type="text" class="searchbox" id="searchbox" placeholder="Search">
    <span class="searchbutton"><i class="fa fa-search"></i></span>
  </form> --}}
  <!-- End Searchbox -->

  <!-- Start Top Menu -->
  <ul class="topmenu">
    {{-- <li><a href="#">Files</a></li>
    <li><a href="#">Authors</a></li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle">My Files <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Videos</a></li>
        <li><a href="#">Pictures</a></li>
        <li><a href="#">Blog Posts</a></li>
      </ul>
    </li> --}}
  </ul>
  <!-- End Top Menu -->

  <!-- Start Sidepanel Show-Hide Button -->
  {{-- <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a> --}}
  <!-- End Sidepanel Show-Hide Button -->

  <!-- Start Top Right -->
  <ul class="top-right">

  <li class="dropdown link">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox">
      @if (auth()->user()->image)
      <img src="{{asset('storage/' . auth()->user()->image)}}" alt="img"> 
      @else
      <img src="{{asset('dashboard/img/profileimg.png')}}" alt="img"> 
      @endif
      


      <strong></strong><span class="caret"></span></a>
      <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
        <li role="presentation" class="dropdown-header">Profile</li>
        <li><a href="/password"><i class="fa falist fa-wrench"></i>Change Password</a></li>
        <li><a href="/logout"><i class="fa falist fa-power-off"></i> Logout</a></li>
      </ul>
  </li>

  </ul>
  <!-- End Top Right -->
  {{-- {{ Auth::users()->name }} --}}
</div>
