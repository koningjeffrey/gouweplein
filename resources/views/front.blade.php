@extends('layouts.index')
@section('scripts')
    <script>
        console.log('bacon');
    </script>
    @endsection
@section('content')
{{--needs to be added to app.cs--}}
    <style>
        .intro{
            background: #1b4b72;
        }
    </style>
                   <p>slider</p>
                   <div class="d-flex justify-content-center">
                   <img src="/img/613940.jpg" alt="">
                   </div>
@endsection

@section('usp')
    <div class="container d-flex justify-content-around">
        <div>
            <i class="fas fa-address-book"></i>
            <p>winkels</p>
        </div>
        <div>
            <i class="fas fa-address-book"></i>
            <p>plattegrond</p>
        </div>
        <div>
            <i class="fas fa-address-book"></i>
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
    <div class="d-flex justify-content-center intro">
                   <h2>Gouweplein Centrum Waddinxveen</h2>
    <p>Een supergezellig, winkelcentrum met alles erop en eraan, waar je even langs kunt wippen voor een
        boodschapje, maar ook voor een middag winkelen en koffie drinken. Feris ab invene explametur, nobit pe
        veror aut pere ne eat occusa qui volorenda quae officiur aut aut am asimi, seque prat.
    </p>
    </div>
@endsection
@section('news')
    <div class="na-box">
    <h2>Nieuws & Agenda</h2>
                   <p>
                       Welkom bij Winkelcentrum Gouweplein! Kijk hier
                       voor het laatste nieuws en voor de komende
                       evenementen van Winkelcentrum Gouweplein.
                   </p>
    </div>
    <div class="d-box">
    <h2>Nieuws & Agenda</h2>
                   <p>
                       Welkom bij Winkelcentrum Gouweplein! Kijk hier
                       voor het laatste nieuws en voor de komende
                       evenementen van Winkelcentrum Gouweplein.
                   </p>
    </div>
    <div class="i-box">
    <img src="/img/613940.jpg" alt="">
    </div>
@endsection


