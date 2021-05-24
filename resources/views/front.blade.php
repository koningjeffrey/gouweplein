@extends('layouts.index')
@section('scripts')
    <script>
        console.log('bacon');
        $(document).ready(function () {
            alert('kaas')
        })
    </script>
    @endsection
@section('content')
    <style>
        
    </style>
    <div class="cookies">
        <div class="d-flex justify-content-center align-items-center">

        </div>
    </div>
    <div class="slider row">
        <div class="col-xl-6 col-sm-12 slider-image">
            <div class="slides d-flex justify-content-center align-items-center">
                <img class="d-block w-100" src="/img/Ammerlaanbakker_.jpg" alt="First slide" id="slide1">
                <img class="d-block w-100" src="/img/Ammerlaanbakker_.jpg" alt="Second slide" id="slide2">
                <img class="d-block w-100" src="/img/Ammerlaanbakker_.jpg" alt="Third slide" id="slide3">
                <img class="d-block w-100" src="/img/Ammerlaanbakker_.jpg" alt="Fourth slide" id="slide4">
            </div>
        </div>
        <div class="col-xl-6 col-sm-12 slider-text text-center">
            <img src="/img/gouweplein_logo_clear.png">
            <h2>Shake it!</h2>
            <h3>Lache om vitamines</h3>
            <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-between slider-nav">
                <i class="fas fa-heart" id="s1 active"></i>
                <i class="fas fa-heart" id="s2"></i>
                <i class="fas fa-heart" id="s3"></i>
                <i class="fas fa-heart" id="s4"></i>
                </div>
            </div>
        </div>
    </div>
{{--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--    <div class="carousel-inner">--}}
{{--        <div class="carousel-item active">--}}
{{--            <img class="d-block w-100" src="/img/Ammerlaanbakker_.jpg" alt="First slide">--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="d-block w-100" src="/img/613940.jpg" alt="Second slide">--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="d-block w-100" src="/img/613940.jpg" alt="Third slide">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Previous</span>--}}
{{--    </a>--}}
{{--    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Next</span>--}}
{{--    </a>--}}
{{--</div>--}}
@endsection

@section('usp')
    <div class="container d-flex justify-content-around usp">
        <div class="text-center">
            <img src="/img/shopping.png" alt="">
            <p>winkels</p>
        </div>
        <div class="text-center">
            <img src="/img/map.png" alt="">
            <p>plattegrond</p>
        </div>
        <div class="text-center">
            <img src="/img/accessable.png" alt="">
            <p>bereikbaarheid</p>
        </div>
    </div>
@endsection
@section('usp')
    <div class="d-flex justify-content-center">
                   <p>usp</p>
    </div>
@endsection
@section('intro')
    <div class="flex-column justify-content-center intro">
        <div class="container">
        <div class="d-flex justify-content-start">
                   <h2>Gouweplein</h2><h2 style="color:#298b6e;">Centrum Waddinxveen</h2>
        </div>
        <div class="intro-body">
            <p>
                Een supergezellig, winkelcentrum met alles erop en eraan, waar je even langs kunt wippen voor een
                boodschapje, maar ook voor een middag winkelen en koffie drinken. Feris ab invene explametur, nobit pe
                veror aut pere ne eat occusa qui volorenda quae officiur aut aut am asimi, seque prat.
            </p>
        </div>
        </div>
    </div>
@endsection
@section('news')
    <div class="container">
    <div class="row">
        <div class="na-box col-xl-6">
        <h2>Nieuws & Agenda</h2>
                       <p>
                           Welkom bij Winkelcentrum Gouweplein! Kijk hier
                           voor het laatste nieuws en voor de komende
                           evenementen van Winkelcentrum Gouweplein.
                       </p>
        </div>
        <div class="na2-box col-xl-6">
            <div class="d-box">
                <h2>Zaterdag: Tulpendag</h2>
               <p>
                   Sequi nost, verepudit ullupta aut laborem
                   volor aut vollo cone ped est, to imolluptatem
               </p>
            </div>
            <div class="i-box">
                <img src="/img/613940.jpg" alt="">
            </div>
        </div>
    </div>
    </div>
@endsection


