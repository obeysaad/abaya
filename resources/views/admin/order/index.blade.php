@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> {{ __('admin.order') }} </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{ __('admin.home') }}</a>
                                </li>
                                <li class="breadcrumb-item active"> {{ __('admin.order') }}
                                </li>
                            </ol>
                        </div>
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
                                    <h4 class="card-title"> {{ __('admin.all_order') }}  </h4>
                                    @include('admin.includes.alert')

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

                                        <table
                                            id="table_id"
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>

                                                <th> Name</th>
                                                <th> Email</th>
                                                <th> Phone</th>
                                                <th> Total</th>
                                                <th> Print</th>
                                                <th>{{ __('admin.process') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>



                                            @isset($orders)
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->last_name }}</td>
                                                        <td>{{ $order->email }}</td>
                                                        <td>{{ $order->phone }}</td>
                                                        <td>{{ $order->total }}</td>
                                                        <td>



                                                            <a href="{{ route('print' ,$order->id )}}" class="btn btn-icon btn-light mr-1"><i class="fa fa-print" aria-hidden="true"></i> </a></td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="#"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1"> {{ __('admin.status') }}</a>




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
