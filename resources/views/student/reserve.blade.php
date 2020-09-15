@extends('layouts.base')
@include('layouts.head')
@include('layouts.footer')
@section('content')

@component('components.student_navbar')
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
            <h2>授業を予約</h2>
          </div>
        </div>
      </div>
    </div><!-- /row -->

    <div id="ad_teachers" class="available_teachers">

    <ul class="horizontal-list">
        
        @foreach($available_teachers as $teacher)
        <li class="horizontal-item">
          <div class="item-contents">
            <p class="item-text text-white"><i class="fas fa-flag-usa mr-1 fa-fw"></i>{{$teacher->name}}</p>
            <p class="item-text text-white"><i class="far fa-calendar-alt mr-1 fa-fw"></i>{{$teacher->date}}</p>
            <p class="item-text text-white"><i class="fas fa-chalkboard-teacher mr-1 fa-fw"></i>{{$teacher->subject_name}}</p>
          </div>
        </li>
        @endforeach

      </ul>

    </div>


</div><!-- container -->
</div><!-- /section -->
@endsection