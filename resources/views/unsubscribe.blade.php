@extends('layouts.app2')
@section('title')
    Contact
@endsection
@section('css_content')
    <link rel="icon" type="image/png" href="{{URL::asset('images/icons/favicon.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/themify/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/elegant-font/html-css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
@endsection

@section('content')
    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-06.jpg);">
        <h2 class="l-text2 t-center">
            Contact
        </h2>
    </section>

    <a href="{{URL::to('/unsubscribe/'.$sub->id) }}">
        <button  class="btn btn-danger btn-sm" >
            <i class="fa fa-ban"></i> Unsubscribe
        </button>
    </a>
@endsection


@section('scripts')
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/select2/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
    <!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="{{URL::asset('js/map-custom.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{URL::asset('js/main.js')}}"></script>
@endsection