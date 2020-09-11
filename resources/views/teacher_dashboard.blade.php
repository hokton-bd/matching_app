@extends('layouts.base')
@include('layouts.head')
@include('layouts.footer')
@section('content')

@component('components.navbar')
@endcomponent
@component('components.inner_head', ['title' => 'DASHBOARD'])
@endcomponent
<!-- section -->
<div class="section padding_layout_1" id="register">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>こんにちは{{ $info->name }}さん</h2>
          </div>
        </div>
      </div>
    </div><!-- /row -->

    <div class="coming-classes mb-5">
      <h5>予約した授業</h5>
      <ul class="horizontal-list">
        <li class="horizontal-item">
          <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-flag-usa mr-1 fa-fw"></i>英語</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-fw"></i>鈴木松雄</p>
          </div>
        </li>
        <li class="horizontal-item">
        <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-superscript mr-1 fa-fw"></i>数学</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-faw"></i>鈴木松雄</p>
          </div>
        </li>
        <li class="horizontal-item">
        <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-flask mr-1 fa-fw"></i>化学</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-faw"></i>鈴木松雄</p>
          </div>
        </li>
        <li class="horizontal-item">
        <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-history mr-1 fa-fw"></i>歴史</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-faw"></i>鈴木松雄</p>
          </div>
        </li>
        <li class="horizontal-item">
        <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-book mr-1 fa-faw"></i>国語</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-faw"></i>鈴木松雄</p>
          </div>
        </li>
      </ul>
    </div><!-- /coming-classes -->

    <div class="past-classes">
    <h5>今まで受けた授業</h5>
      <ul class="horizontal-list">
      <li class="horizontal-item">
          <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-flag-usa mr-1 fa-fw"></i>英語</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-fw"></i>鈴木松雄</p>
          </div>
        </li>
        <li class="horizontal-item">
        <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-superscript mr-1 fa-fw"></i>数学</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-faw"></i>鈴木松雄</p>
          </div>
        </li>
        <li class="horizontal-item">
        <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-flask mr-1 fa-fw"></i>化学</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-faw"></i>鈴木松雄</p>
          </div>
        </li>
        <li class="horizontal-item">
        <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-history mr-1 fa-fw"></i>歴史</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-faw"></i>鈴木松雄</p>
          </div>
        </li>
        <li class="horizontal-item">
        <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-book mr-1 fa-faw"></i>国語</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>9月2日15：00～</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-faw"></i>鈴木松雄</p>
          </div>
        </li>
      </ul>
    </div><!-- /past-classes -->


</div>
</div>
@endsection