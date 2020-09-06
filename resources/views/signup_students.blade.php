@extends('layouts.base')
@include('layouts.head')
@include('layouts.footer')
@section('content')
@component('components.navbar')
@endcomponent
@component('components.inner_head', ['title' => 'REGISTER AS STUDENTS'])
@endcomponent
<div id="register-as-student" class="py-5">
        
            <h3 class="text-center">生徒として登録</h3>

        <div class="row">
            <form action="{{ route('register') }}" method="POST" class="w-50 mx-auto">
            @CSRF
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
        </div>

</div><!-- /row -->
@endsection