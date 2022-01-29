@extends('frontend.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div id="loader" style="margin-right: 500px;">
    <img src="../img/loader.gif" style=" position: absolute;
    left: 0px;
    top: -50px;
    width: 50%;
    height: 100%;
    z-index: 99;
    opacity: 500;">
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $("#loader").fadeOut("slow");
});
</script> --}}
{{-- <script >
    jQuery(document).ready(function($) {
        $(window).load(function() { $(".preloading").fadeOut("slow"); })
    });
    </script> --}}



@endsection
