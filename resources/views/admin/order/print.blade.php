@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block"></h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Invoice</a>
                </li>
                <li class="breadcrumb-item active">Invoice Template
                </li>
              </ol>
            </div>
          </div>
        </div>


        <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <input type="button" value="Print" onclick="printDiv()" class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2"
/>

          </div>
        </div>

      </div>
      <div class="content-body" id="print">
        <section class="card">
          <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <div id="invoice-company-details" class="row">
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <div class="media">
                  <img src="{{ asset('login-assets/images/fashion.avif') }}" width="80" height="80" alt="company logo" class=""
                  />
                  <div class="media-body">
                    <ul class="ml-2 px-0 list-unstyled">
                      <li class="text-bold-800">Abaya Store</li>
                      <li>United Arabica,</li>
                      <li>Dubia,</li>
                      <li>Al Nahda,</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <h2>INVOICE</h2>
                <p class="pb-3"># INV-001001</p>
                <ul class="px-0 list-unstyled">
                  <li></li>
                  <li class="lead text-bold-800">AED {{ $order->total }}</li>
                </ul>
              </div>
            </div>
            <!--/ Invoice Company Details -->
            <!-- Invoice Customer Details -->
            <div id="invoice-customer-details" class="row pt-2">
              <div class="col-sm-12 text-center text-md-left">
                <p class="text-muted"></p>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <ul class="px-0 list-unstyled">
                    <li></li>
                    <li></li>
                  <li></li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <p>
                  <span class="text-muted">Invoice Date :</span> {{  $order->created_at }}</p>
                <p>
                  <span class="text-muted">Terms :</span> Due on Receipt</p>
                <p>
                  <span class="text-muted">Due Date :</span> {{ $order->created_at }}</p>
              </div>
            </div>
            <!--/ Invoice Customer Details -->
            <!-- Invoice Items Details -->
            <div id="invoice-items-details" class="pt-2">
              <div class="row">
                <div class="table-responsive col-sm-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Item & Description</th>
                        <th class="text-right">Quntity</th>
                        <th class="text-right">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>
                          <p>Create PSD for mobile APP</p>
                          <p class="text-muted">Simply dummy text of the printing and typesetting industry.</p>
                        </td>
                        <td class="text-right">120</td>
                        <td class="text-right">$ 2400.00</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>
                          <p>iOS Application Development</p>
                          <p class="text-muted">Pellentesque maximus feugiat lorem at cursus.</p>
                        </td>
                        <td class="text-right">260</td>
                        <td class="text-right">$ 6500.00</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>
                          <p>WordPress Template Development</p>
                          <p class="text-muted">Vestibulum euismod est eu elit convallis.</p>
                        </td>
                        <td class="text-right">300</td>
                        <td class="text-right">$ 6000.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 col-sm-12 text-center text-md-left">
                  <p class="lead">Payment Methods:</p>
                  <div class="row">
                    <div class="col-md-8">
                      <table class="table table-borderless table-sm">
                        <tbody>
                          <tr>
                            <td>type:</td>
                            <td class="text-right">Cash</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-12">
                  <p class="lead">Total due</p>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Sub Total</td>
                          <td class="text-right">{{ $order->total }}</td>
                        </tr>

                        <tr>
                          <td class="text-bold-800">Total</td>
                          <td class="text-bold-800 text-right"> {{ $order->total }}</td>
                        </tr>
                        <tr>
                          <td>Payment Made</td>
                          <td class="pink text-right">0</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <div class="text-center">
                    <p>Authorized person</p>
                    <img src="{{ asset('assets/admin-assets/images/pages/signature-scan.png')}}" alt="signature" class="height-100"
                    />
                    <h6>Mohamed Ahmed</h6>
                    <p class="text-muted">Managing Director</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>


  <script>
    function printDiv() {


        var divContents = document.getElementById("print").innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html><head><title></title>');
        a.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" type="text/css" />')
        a.document.write('<body >');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
</script>
@endsection
