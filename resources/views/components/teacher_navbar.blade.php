<!-- header -->
<header id="top" class="header_style_1">

  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="{{ route('teacher/dashboard') }}"><img src="{{ asset('images/logos/logo.png') }}" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="" href="{{route('teacher/dashboard')}}">ホーム</a></li>
                <li> <a class="" href="{{route('teacher/schedule')}}">スケジュール</a></li>
                <li> <a href="{{route('teacher/profile')}}">プロフィール</a></li>
                <li> <a href="{{route('contact')}}">お問い合わせ</a></li>
                <li> <a href="{{ route('logout') }}" id="nav-login-btn" class="login-btn bg-primary header-login">ログアウト</a></li>
              </ul>


            </div><!--navbar-menu-->
          </div><!--menu-side-->
          <!-- menu end -->
        </div><!--/col-lg-9-->

        <a href="{{route('logout')}}" id="iso-login-btn" class="header-login bg-primary login-btn">ログアウト</a>

      </div><!--/row-->
    </div><!--container-->
  </div><!--/header_bottom-->
  <!-- header bottom end -->

</header>
