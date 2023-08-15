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
                            <li class="breadcrumb-item"><a href="{{route('discount.index')}}"> {{ __('admin.discount') }} </a>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>

            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                  <a class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2"
                  id="btnGroupDrop1" href="{{ route('discount.create') }}"> Add Discount</a>

              </div>
            </div>
        </div>

            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> {{ __('admin.all_discount') }}  </h4>

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
{{--
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')  --}}

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        @include('admin.includes.alert')

                                        <table
                                            id="table_id"
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th> {{ __('admin.name') }}</th>
                                                <th>{{ __('admin.process') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($discounts)
                                                @foreach($discounts as $discount)
                                                    <tr>
                                                        <td>{{$discount -> name}}</td>

                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('discount.edit',$discount -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{ __('admin.edit') }}</a>



                                                                   <a href="{{ route('discount.destroy', $discount->id) }}"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1" data-toggle="tooltip"    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $discount->id }}').submit();">
                                                                    {{ __('admin.delete') }}
                                                                               </a>

                                                                                   <form id="delete-form-{{ $discount->id }}"
                                                                                       action="{{ route('discount.destroy', $discount->id) }}" method="POST"
                                                                                       style="display: none;">
                                                                                       @csrf
                                                                                       @method('DELETE')
                                                                                   </form>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
