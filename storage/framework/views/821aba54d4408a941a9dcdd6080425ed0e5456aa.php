<?php $__env->startSection('content'); ?>
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <!-- eCommerce statistic -->
      <div class="row ">


<div id="app" class="col-12">
  <?php echo $chart->container(); ?>

</div>
<script src="https://unpkg.com/vue"></script>
<script>
  var app = new Vue({
      el: '#app',
  });
</script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
<?php echo $chart->script(); ?>



</div>
</div>
</div>
</div>
  
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/admin/pages/chart.blade.php ENDPATH**/ ?>