@extends('layouts.front')

@section('content')

<section class="comonSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sectionTitle text-center">
                    <h2>{{ __('message.about') }}</h2>
                    <div class="titleBars"></div>
                    <p>
                      {{ __('about.paragraph') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 aboutCall">
                <div class="aboutMinimal">
                    <div class="row">
                        <div class="col-lg-6  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="aboutImg">
                                <img alt="" src="{{  asset('assets/front-assets/images/hero.jpg') }}" width="700px;">
                            </div>
                        </div>
                        <div class="col-lg-6  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            <div class="aboutDesc">
                                <h4 class="poppins">{{ __('message.name') }}</h4>
                                <p>
                                      {{ __('about.detail') }}
                                </p>
                                <a class="vol_btn" href="{{ route('shop') }}">{{ __('message.shop') }}<i class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
