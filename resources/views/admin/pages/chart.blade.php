@extends('layouts.admin')

@section('content')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <!-- eCommerce statistic -->
      <div class="row ">


<div id="app" class="col-12">
  {!! $chart->container() !!}
</div>
<script src="https://unpkg.com/vue"></script>
<script>
  var app = new Vue({
      el: '#app',
  });
</script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
{!! $chart->script() !!}


</div>
</div>
</div>
</div>
  
  @endsection
