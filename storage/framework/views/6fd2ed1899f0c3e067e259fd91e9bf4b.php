<div class="bc-list-tour <?php echo e($style_list); ?>">
    <!--[if BLOCK]><![endif]--><?php if(in_array($style_list,['normal','carousel','box_shadow'])): ?>
        <?php echo $__env->make("Tour::frontend.blocks.list-tour.style-normal", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if($style_list == "carousel_simple"): ?>
        <?php echo $__env->make("Tour::frontend.blocks.list-tour.style-carousel-simple", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/BC/Tour/Views/frontend/blocks/list-tour/index.blade.php ENDPATH**/ ?>