
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('themes/bc/dist/frontend/module/event/css/event.css?_ver=' . config('app.asset_version'))); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/fotorama/fotorama.css')); ?>" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bc_detail_event">
        <?php echo $__env->make('Layout::parts.bc', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('Event::frontend.layouts.details.banner', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="bc_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <?php $review_score = $row->review_data ?>
                        <?php echo $__env->make('Event::frontend.layouts.details.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php echo $__env->make('Event::frontend.layouts.details.review', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <?php echo $__env->make('Tour::frontend.layouts.details.vendor', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php echo $__env->make('Event::frontend.layouts.details.form-book', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                </div>
                <div class="row end_tour_sticky">
                    <div class="col-md-12">
                        <?php echo $__env->make('Event::frontend.layouts.details.related', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('Event::frontend.layouts.details.form-book-mobile', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <?php echo App\Helpers\MapEngine::scripts(); ?>

    <script>
        jQuery(function($) {
            <?php if($row->map_lat && $row->map_lng): ?>
                new BCMapEngine('map_content', {
                    disableScripts: true,
                    fitBounds: true,
                    center: [<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>],
                    zoom: <?php echo e($row->map_zoom ?? '8'); ?>,
                    ready: function(engineMap) {
                        engineMap.addMarker([<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>], {
                            icon_options: {
                                iconUrl: "<?php echo e(get_file_url(setting_item('event_icon_marker_map'), 'full') ?? url('images/icons/png/pin.png')); ?>"
                            }
                        });
                    }
                });
            <?php endif; ?>
        })
    </script>
    <script>
        var bc_booking_data = <?php echo json_encode($booking_data); ?>

        var bc_booking_i18n = {
            no_date_select: '<?php echo e(__('Please select Start and End date')); ?>',
            no_guest_select: '<?php echo e(__('Please select at least one number')); ?>',
            load_dates_url: '<?php echo e(route('event.vendor.availability.loadDates')); ?>'
        };
    </script>
    <script type="text/javascript" src="<?php echo e(asset('libs/ion_rangeslider/js/ion.rangeSlider.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('libs/fotorama/fotorama.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('libs/sticky/jquery.sticky.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('module/event/js/single-event.js?_ver=' . config('app.asset_version'))); ?>">
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/BC/Event/Views/frontend/detail.blade.php ENDPATH**/ ?>