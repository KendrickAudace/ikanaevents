<?php if(count($car_related) > 0): ?>
    <div class="bc-list-car-related">
        <h2><?php echo e(__("You might also like")); ?></h2>
        <div class="row">
            <?php $__currentLoopData = $car_related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                    <?php echo $__env->make('Car::frontend.layouts.search.loop-grid',['row'=>$item,'include_param'=>0], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/BC/Car/Views/frontend/layouts/details/related.blade.php ENDPATH**/ ?>