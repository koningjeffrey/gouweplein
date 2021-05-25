@extends('layouts.index')
@section('scripts')
    <script>
        console.log('bacon');
    </script>
    @endsection
@section('content')
    <div class="container">
        <div class="slider row">
            <div class="col-xl-6 col-sm-12 slider-image">
                <div class="slides d-flex justify-content-center align-items-center">
                    <div class="item">
                        <img src="/img/AVEQ050915_0336TH.jpg" alt="First slide" id="slide1">
                    </div>
                    <div class="item">
                        <img src="/img/Ammerlaan_Bakker.png" alt="Second slide" id="slide2">
                    </div>
                    <div class="item">
                        <img src="/img/de kaashakker exterieur.png" alt="Third slide" id="slide3">
                    </div>
                    <div class="item">
                        <img src="/img/Gall&Gall_ex.png" alt="Fourth slide" id="slide4">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 slider-text text-center align-middle">
                <img src="/img/gouweplein_logo_clear.png" class="gp-logo">
                <h2>Winkels</h2>
                <h3>Het Gouweplein heeft een veelzijdig én compleet aanbod. Naast de mode, lifestyle en dagelijkse boodschappen winkels een aanbod van horeca.</h3>
            </div>
        </div>
    </div>
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


