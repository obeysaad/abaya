<canvas style="display: none;" id="<?php echo e($chart->id); ?>" <?php echo $chart->formatContainerOptions('html'); ?>></canvas>
<?php echo $__env->make('charts::loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\vendor\consoletvs\charts\src/Views/chartjs/container.blade.php ENDPATH**/ ?>