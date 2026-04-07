<aside class="sidebar-right">
    <?php
        $list_sidebars = setting_item_with_lang("news_sidebar");
    ?>
    <?php if($list_sidebars): ?>
        <?php
            $list_sidebars = json_decode($list_sidebars);
        ?>
        <?php $__currentLoopData = $list_sidebars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('News::frontend.layouts.sidebars.'.$item->type, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</aside><?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/BC/News/Views/frontend/layouts/details/news-sidebar.blade.php ENDPATH**/ ?>