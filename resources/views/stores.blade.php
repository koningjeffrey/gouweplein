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
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 slider-text-stores">
                <h2>Winkels</h2>
                <h3>Het Gouweplein heeft een veelzijdig én compleet aanbod. Naast de mode, lifestyle en dagelijkse boodschappen winkels een aanbod van horeca.</h3>
            </div>
        </div>
    </div>
@endsection

@section('usp')
    <div class="container d-flex justify-content-center usp">
        <div class="text-center">
            <img src="/img/basket.png" alt="">
            <p>Boodschappen</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($stores as $id => $store)
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <div class="store-name">{{$store}}</div>
                    <a href="/stores/{{$id}}"><img src="/img/{{$store}}.png" alt=""></a>
                </div>
            </div>
            @endforeach
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/Ammerlaan_Bakker.png" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/Ammerlaan_Bakker.png" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/Ammerlaan_Bakker.png" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/Ammerlaan_Bakker.png" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/Ammerlaan_Bakker.png" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/Ammerlaan_Bakker.png" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/Ammerlaan_Bakker.png" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/Ammerlaan_Bakker.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('intro')
    <div class="container d-flex justify-content-center usp">
        <div class="text-center">
            <img src="/img/horeca.png" alt="">
            <p>Boodschappen</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/horeca.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/horeca.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/horeca.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/horeca.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/horeca.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/horeca.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/horeca.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/horeca.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="thumbnail-img">
                    <img src="/img/horeca.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('news')

@endsection


