@extends('layouts.base')
@include('layouts.head')
@include('layouts.footer')
@section('content')
@component('components.navbar')
@endcomponent
@component('components.inner_head', ['title' => 'REGISTER'])
@endcomponent
<!-- section -->
<div class="section padding_layout_1" id="register">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>会員登録</h2>
            @error('email')
                  <strong class="text-danger">このメールアドレスはすでに使われています</strong>
            @enderror
          </div>
        </div>
      </div>
    </div><!-- /row -->

    <div class="card-deck">

        <div class="card">
            <img class="card-img-top" src="images/hero-view3.jpg" alt="">
            <div class="card-body">
                <button class="register-btn card-title btn btn-primary mx-auto d-block" data-target="#register-as-student">生徒として登録する</button>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="images/teacher-img.jpg" alt="">
            <div class="card-body">
                <button class="register-btn card-title btn btn-success d-block mx-auto" data-target="#register-as-teacher">先生として登録する</button>
            </div>
        </div>
    </div><!-- /card-deck -->                

</div><!-- /container -->
</div><!-- end section -->

<!-- modal -->
<div id="register-as-student" class="form-block register-modal modal-block">
<div class="modal-bg"></div>
<div class="register-block col-6">

<h3 class="text-center">生徒として登録</h3>

<form action="signup/student" method="post" class="register-form">
  @csrf
    <input type="hidden" name="status" value="S">
    <input type="text" name="name" placeholder="お名前（ニックネーム可）" class="form-control mb-2" required>
    <input type="email" name="email" placeholder="メールアドレス" class="form-control mb-2" required>
    <input type="password" name="password" placeholder="パスワード" class="form-control mb-2" required>
    <select name="grade" id="" class="form-control mb-4" required>
        <option value="1">中学1年生</option>
        <option value="2">中学2年生</option>
        <option value="3">中学3年生</option>
        <option value="4">高校1年生</option>
        <option value="5">高校2年生</option>
        <option value="6">高校3年生</option>
    </select>
    <button type="submit" class="form-control btn btn-primary mx-auto w-25 d-block" name="register-as-student">登録</button>
</form>

</div><!-- /as-student -->
</div><!-- /row -->

<div id="register-as-teacher" class="form-block register-modal modal-block">
<div class="modal-bg"></div>
<div class="register-block col-6">

<h3 class="text-center">先生として登録</h3>

<form action="signup/teacher" method="post" class="register-form">
  @csrf
    <input type="hidden" name="status" value="T">
    <input type="text" name="name" placeholder="名前（ニックネーム可）" class="form-control mb-2" required>
    <input type="email" name="email" placeholder="メールアドレス" class="form-control mb-2" required>
    <input type="password" name="password" placeholder="パスワード" class="form-control mb-2" required>
    <select name="grade" id="" class="form-control mb-4" required>
        <option value="1">大学1年生</option>
        <option value="2">大学2年生</option>
        <option value="3">大学3年生</option>
        <option value="4">大学4年生</option>
    </select>

    <p>教えられる教科</p>
    @foreach($subjects as $subject)
      <label for="{{ $subject->id }}"><input type="radio" name="teacher_subjects" id="{{ $subject->id }}" value="{{ $subject->id }}"> {{ $subject->name }} </label>
    @endforeach

    <button type="submit" class="form-control btn btn-primary mx-auto w-25 d-block" name="register-as-teacher">登録</button>
</form>

</div><!-- /as-student -->
</div><!-- /row -->
@endsection