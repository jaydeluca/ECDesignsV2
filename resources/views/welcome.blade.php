@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="container">
            <div class="heading">
                <h1 class="title">Portfolio.</h1>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container portfolio">

            <div class="portfolio-item">
                <img src="{{ asset('images/v1/2.1-guinness.jpg') }}">
            </div>

            <div class="portfolio-item">
                <img src="{{ asset('images/v1/3.1-veridium.jpg') }}">
            </div>

            <div class="portfolio-item">
                <img src="{{ asset('images/v1/4.1-belichick.jpg') }}">
            </div>

        </div>
    </section>


@endsection