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
            <h2>プロフィール</h2>
          </div>
        </div>
      </div>
    </div><!-- /row -->

    <form action="" method="post">

    <div class="row mb-3">
      <div class="image mx-auto w-75">

        <img src="<?= asset('images/students/'.$info->image); ?>" alt="" id="previewImg" class="w-100">

      </div>
    </div>

    <div class="row mb-4 user-image-box w-50 mx-auto">
        <input type="file" name="image" id="user-image" class="" onchange="previewFile(this);">
        <label for="user-image" class="image-change-btn">写真を選択</label>
    </div>

    <div class="row w-50 mx-auto">
    
      <span>ユーザー名: </span><input type="text" name="name" id="name" value="{{ $info->name }}" placeholder="ユーザー名" class="form-control mb-2" required>
      <span>メールアドレス: </span><input type="email" name="email" id="email" value="{{ $info->email }}" placeholder="メールアドレス" class="form-control mb-2" required>

      <button type="submit" class="btn btn-primary mx-auto">変更を保存</button>
    
    </div>

    </form>


</div>
</div>
@endsection