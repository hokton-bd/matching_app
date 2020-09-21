@extends('layouts.base')
@include('layouts.head')
@include('layouts.footer')
@section('content')

@component('components.teacher_navbar')
@endcomponent
@component('components.inner_head')
@endcomponent
<!-- section -->
<div class="section padding_layout_1" id="register">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>ホーム</h2>
          </div>
        </div>
      </div>
    </div><!-- /row -->

    <div class="coming-classes mb-5">
      <h5>次の授業</h5>
      <ul class="horizontal-list">

        @foreach($coming_lectures as $item)
          <li class="horizontal-item">
            <div class="item-contents">
              <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>日:<?= substr($item->date, 5);?></p>
              <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>時間: {{$item->start_time}}:00 - {{$item->end_time}}:00 </p>
              <p class="item-text text-white"><i class="fas fa-user mr-1 fa-fw"></i>生徒: {{$item->name}}</p>
            </div>
          </li>
        @endforeach

      </ul>
    </div><!-- /coming-classes -->

</div>
</div>
@endsection