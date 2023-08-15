@extends('layouts.admin')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{ __('admin.home') }} </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('dress.index')}}"> {{ __('admin.product') }} </a>
                            </li>
                            <li class="breadcrumb-item active">  {{ __('admin.add') }} {{ __('admin.product') }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">  {{ __('admin.add') }} {{ __('admin.product') }} </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('discount.product.store')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf



                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> {{ __('admin.information') }} {{ __('admin.product') }} </h4>

                                                <input type="hidden" name="dress_id" value="{{ $dress->id }}" />

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2">  {{ __('admin.category') }} </label>
                                                        <select name="discount_id" class="select2 form-control">
                                                            <optgroup label="Please Choose Category    ">
                                                                @if($discounts && $discounts -> count() > 0)
                                                                    @foreach($discounts as $discount)
                                                                        <option
                                                                            value="{{$discount -> id }}">{{$discount -> name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </optgroup>
                                                        </select>
                                                        @error('maincategory_id')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>




                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> {{ __('admin.back') }}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{ __('admin.add') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection
