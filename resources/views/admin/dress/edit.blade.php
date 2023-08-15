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
                            <li class="breadcrumb-item active">  {{ __('admin.edit') }} {{ __('admin.product') }}
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
                                    <h4 class="card-title" id="basic-layout-form">  {{ __('admin.edit') }} {{ __('admin.product') }} </h4>
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
                                        <form class="form" action="{{route('dress.update' , $dress->id)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label> {{ __('admin.image') }}  </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>


                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> {{ __('admin.information') }} {{ __('admin.product') }} </h4>

                                                @foreach ( config('translatable.locales') as $locale )

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{ __('admin.name') }} {{ strtoupper($locale) }}</label>
                                                            <input type="text" value="{{ $dress->translate($locale)->name }}" id="name"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   name="{{ $locale }}[name]">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  {{ __('admin.description') }}  {{ strtoupper($locale) }}</label>
                                                            <input type="text" value="{{ $dress->translate($locale)->description }}" id="name"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   name="{{ $locale }}[description]">

                                                        </div>
                                                    </div>



                                                </div>


                                                @endforeach

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  {{ __('admin.quantity') }} </label>
                                                            <input type="number" value="{{ $dress->quantity }}" id="name"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   name="quantity">

                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">  {{ __('admin.category') }} </label>
                                                            <select name="category_id" class="select2 form-control">
                                                                <optgroup label="Please Choose Category    ">
                                                                    @if($categories && $categories -> count() > 0)
                                                                        @foreach($categories as $category)
                                                                            <option
                                                                            @if ($category->id == $dress->category_id)
                                                                             selected
                                                                            @endif
                                                                                value="{{$category -> id }}">{{$category -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                            @error('maincategory_id')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>



                                            <div class="row">


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ __('admin.price') }}  </label>
                                                        <input type="text" value="{{ $dress->price }}" id="name"
                                                               class="form-control"
                                                               placeholder=""
                                                               name="price">

                                                    </div>
                                                </div>

                                            </div>


                                                <input type="file"  name="images[]" multiple>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox"  value="1" name="active"
                                                               id="switcheryColor4"
                                                               class="switchery" data-color="success"
                                                               checked/>
                                                        <label for="switcheryColor4"
                                                               class="card-title ml-1">{{ __('admin.status') }} </label>

                                                        @error('active')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
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
