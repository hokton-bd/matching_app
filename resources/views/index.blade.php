@extends('layouts.base')
@include('layouts.head')
@include('layouts.footer')
@section('content')
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="{{asset('images/loaders/loader_1.png')}}" alt="#" /> </div>
<!-- end loader -->
@component('components.navbar')
@endcomponent
@component('components.slider')
@endcomponent

<!-- section -->
<div id="about" class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>タイトル</h2>
            <!-- <p class="large">サブタイトル</p> -->
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="images/it_service/i1.png" alt="#" /> </div>
          </div>
          <h4 class="theme_color">テキストテキスト</h4>
          <p>テキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="images/it_service/i2.png" alt="#" /> </div>
          </div>
          <h4 class="theme_color">テキストテキスト</h4>
          <p>テキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="images/it_service/i3.png" alt="#" /> </div>
          </div>
          <h4 class="theme_color">テキストテキスト</h4>
          <p>テキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30 margin_0">
          <div class="center">
            <div class="icon"> <img src="images/it_service/i4.png" alt="#" /> </div>
          </div>
          <h4 class="theme_color">テキストテキスト</h4>
          <p>テキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div id="service" class="section padding_layout_1 light_silver gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>ご利用方法</h2>
            <!-- <p class="large">Easy and effective way to get your device repaired.</p> -->
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si1.png" alt="#" /></div>
                <h4 class="service-heading">テキスト</h4>
                <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si2.png" alt="#" /></div>
                <h4 class="service-heading">テキストテキスト</h4>
                <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si3.png" alt="#" /></div>
                <h4 class="service-heading">テキストテキスト</h4>
                <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si4.png" alt="#" /></div>
                <h4 class="service-heading">テキストテキスト</h4>
                <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si5.png" alt="#" /></div>
                <h4 class="service-heading">テキストテキスト</h4>
                <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si6.png" alt="#" /></div>
                <h4 class="service-heading">テキストテキスト</h4>
                <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div id="price" class="section padding_layout_1">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>料金</h2>
            <!-- <p class="large">We package the products with best services to make you a happy customer.</p> -->
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">

      <div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/1.jpg" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            <div class="product_price">
              <p><span class="old_price">$15.00</span> – <span class="new_price">$25.00</span></p>
            </div>
          </div>
        </div>
      </div><!-- /item -->

    </div><!-- /row -->
  </div>
</div>
<!-- end section -->

<!-- section -->
<div id="contact" class="section padding_layout_1">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>お問い合わせ</h2>
            <p class="large"></p>
          </div>
        </div>
      </div>
    </div><!-- /row -->

    <div class="row">

      <div class="col-lg-5 col-md-12 mb-md-5 col-sm-12 col-xs-12 faq mr-md-0 mr-sm-0 mr-xs-0">
        <ul class="faq-list">
          <h4>よくあるお問い合わせ</h4>
          <li class="faq-item">
            <p class="faq-q p-4"><i class="fas fa-plus mr-1"></i>テキストテキストテキストテキストテキストテキスト</p>
            <p class="faq-a pl-5">テキストテキストテキストテキストテキストテキスト</p>
          </li>
          <li class="faq-item">
            <p class="faq-q p-4"><i class="fas fa-plus mr-1"></i>テキストテキストテキストテキストテキストテキスト</p>
            <p class="faq-a pl-5">テキストテキストテキストテキストテキストテキスト</p>
          </li>
          <li class="faq-item">
            <p class="faq-q p-4"><i class="fas fa-plus mr-1"></i>テキストテキストテキストテキストテキストテキスト</p>
            <p class="faq-a pl-5">テキストテキストテキストテキストテキストテキスト</p>
          </li>
          <li class="faq-item">
            <p class="faq-q p-4"><i class="fas fa-plus mr-1"></i>テキストテキストテキストテキストテキストテキスト</p>
            <p class="faq-a pl-5">テキストテキストテキストテキストテキストテキスト</p>
          </li>
        </ul>
      </div>

      <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 contact-form">
        <form action="" method="">
          <input type="text" name="name" placeholder="お名前" class="form-control mb-2" required>
          <input type="email" name="email" placeholder="メールアドレス" class="form-control mb-2" required>
          <textarea name="message" id="" cols="30" rows="10" placeholder="お問い合わせ内容" class="form-control mb-2" required></textarea>
          <input type="submit" value="送信" class="form-control w-25 d-block mx-auto submit-btn btn-primary btn" name="submit">
        </form>
      </div>

    </div><!-- /row -->

  </div><!-- /container -->
</div><!-- /contact -->
<!-- end section -->
@endsection