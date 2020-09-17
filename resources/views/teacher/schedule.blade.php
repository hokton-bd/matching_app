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
          <div class="main_heading text_align_center mb-2">
            <h2>スケジュール</h2>
          </div>
        </div>
      </div>
    </div><!-- /row -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg px-2 d-block mx-auto" data-toggle="modal" data-target="#modelId">
    スケジュールを追加する
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">授業ができる日</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form method="post" action="{{route('shift.add')}}">
                @csrf
                    <div class="modal-body">
                            <input type="date" name="date" class="form-control mb-2" placeholder="" min="<?= date('Y-m-d'); ?>">
                            <div class="row px-3">
                                <select name="start_time" id="" class="form-control w-50 d-inline-block">
                                    @for($i = 9; $i < 19; $i ++)
                                        <option value="{{ $i }}">{{ $i }}:00</option>
                                    @endfor
                                </select>
                                ～  1時間
                            </div>                            
                    </div><!-- body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                        <button type="submit" class="btn btn-primary">追加</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="coming-classes my-5">
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


</div>
</div>
@endsection