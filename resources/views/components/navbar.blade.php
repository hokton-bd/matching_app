<!-- header -->
<header id="top" class="header_style_1">

  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="index"><img src="{{asset('images/logos/logo.png')}}" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="#top">トップ</a></li>
                <li> <a href="#about">特徴</a></li>
                <li> <a href="#service">ご利用</a></li>
                <li> <a href="#price">料金</a></li>
                <li> <a href="#contact">お問い合わせ</a></li>
                <li> <button id="nav-login-btn" class="login-btn header-login bg-primary">ログイン</button></li>
              </ul>


            </div><!--navbar-menu-->
          </div><!--menu-side-->
          <!-- menu end -->
        </div><!--/col-lg-9-->

        <button id="iso-login-btn" class="header-login bg-primary login-btn">ログイン</button>

      </div><!--/row-->
    </div><!--container-->
  </div><!--/header_bottom-->
  <!-- header bottom end -->

</header>
<!-- end header -->
<div class="login-modal modal-block">
  <div class="modal-bg"></div>
  <form method="post" action="user/login" class="login-modal-content">
    @csrf
    <span class="modal-closer"><i class="fas fa-times"></i></span>
    <input type="email" name="email" placeholder="メールアドレス" class="form-control mb-2">
    <input type="password" name="password" placeholder="パスワード" class="form-control mb-3">

    <input type="submit" name="login" value="ログイン" class="form-control btn btn-primary w-25 d-block mx-auto mb-2">
    <span class="or d-block mx-auto mb-2 text-center">または</span>
    <a href="signup" class="register-btn d-block btn btn-success w-25 mx-auto">初めてのかたはこちら</a>


  </form>

</div>
