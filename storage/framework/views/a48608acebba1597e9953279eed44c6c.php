<div class="list-item">
    <div class="row">
        <!--[if BLOCK]><![endif]--><?php if($rows->total() > 0): ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <?php echo $__env->make('Tour::frontend.layouts.search.loop-grid', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <?php else: ?>
            <div class="col-lg-12">
                <?php echo e(__("Tour not found")); ?>

            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<div class="bc-pagination">
    <?php echo e($rows->appends(request()->except(['_ajax']))->links()); ?>

    <!--[if BLOCK]><![endif]--><?php if($rows->total() > 0): ?>
        <span class="count-string"><?php echo e(__("Showing :from - :to of :total Tours",["from"=>$rows->firstItem(),"to"=>$rows->lastItem(),"total"=>$rows->total()])); ?></span>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/BC/Tour/Views/frontend/ajax/search-result.blade.php ENDPATH**/ ?>