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
            <h2>支払い</h2>
          </div>
        </div>
      </div>
    </div><!-- /row -->

    <div class="content">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= substr($lecture_info->date, 5); ?> {{$lecture_info->start_time}}:00～{{$lecture_info->end_time}}:00</h4>
            </div>
            <div class="card-body">
                <p class="card-text">先生: {{$teacher_name}}</p>
                <p class="card-text">教科: {{$subject}}</p>
            </div>
            <div class="card-footer">
                <form action="../charge/{{ $lecture_info->id }}" method="POST">
                    {{ csrf_field() }}
                    
                    <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="{{ env('STRIPE_KEY') }}"
                            data-amount="1000"
                            data-name="Stripe Demo"
                            data-label="決済をする"
                            data-description="Online course about integrating Stripe"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto"
                            data-currency="JPY">
                    </script>
                </form>
            </div>
        </div>
    </div>

</div><!-- container -->
</div><!-- /section -->
@endsection