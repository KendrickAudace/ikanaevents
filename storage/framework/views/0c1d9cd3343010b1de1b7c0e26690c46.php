<?php
/**
 * @var $translation \Modules\Event\Models\EventTranslation
 * @var $row \Modules\Event\Models\Event
 */
?>
<div class="g-header">
    <div class="left">
        <h1><?php echo e($translation->title); ?></h1>
        <?php if($translation->address): ?>
            <p class="address"><i class="fa fa-map-marker"></i>
                <?php echo e($translation->address); ?>

            </p>
        <?php endif; ?>
    </div>
    <div class="right">
        <?php if($row->getReviewEnable()): ?>
            <?php if($review_score): ?>
                <div class="review-score">
                    <div class="head">
                        <div class="left">
                            <span class="head-rating"><?php echo e($review_score['score_text']); ?></span>
                            <span class="text-rating"><?php echo e(__("from :number reviews",['number'=>$review_score['total_review']])); ?></span>
                        </div>
                        <div class="score">
                            <?php echo e($review_score['score_total']); ?><span>/5</span>
                        </div>
                    </div>
                    <div class="foot">
                        <?php echo e(__(":number% of guests recommend",['number'=>$row->recommend_percent])); ?>

                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

<?php if(!empty($row->duration)  or !empty($row->location->name)): ?>
    <div class="g-event-feature">
        <div class="row">
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-heart-beat"></i>
                    </div>
                    <div class="info">
                        <h4 class="name"><?php echo e(__("Wishlist")); ?></h4>
                        <p class="value">
                            <?php echo e(__("People interest: :number",['number'=>$row->getNumberWishlistInService()])); ?>

                        </p>
                    </div>
                </div>
            </div>
            <?php if($row->start_time): ?>
                <div class="col-xs-6 col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon">
                            <i class="icofont-wall-clock"></i>
                        </div>
                        <div class="info">
                            <h4 class="name"><?php echo e(__("Start Time")); ?></h4>
                            <p class="value">
                                <?php echo e($row->start_time); ?>

                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($row->duration): ?>
                <div class="col-xs-6 col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon">
                            <i class="icofont-infinite"></i>
                        </div>
                        <div class="info">
                            <h4 class="name"><?php echo e(__("Duration")); ?></h4>
                            <p class="value">
                                <?php echo e(duration_format($row->duration)); ?>

                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(!empty($row->location->name)): ?>
                <?php $location =  $row->location->translate() ?>
                <div class="col-xs-6 col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon">
                            <i class="icofont-island-alt"></i>
                        </div>
                        <div class="info">
                            <h4 class="name"><?php echo e(__("Location")); ?></h4>
                            <p class="value">
                                <?php echo e($location->name ?? ''); ?>

                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php echo $__env->make('Layout::global.details.gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php if($translation->content): ?>
    <div class="g-overview">
        <h3><?php echo e(__("Description")); ?></h3>
        <div class="description">
            <?php echo $translation->content ?>
        </div>
    </div>
<?php endif; ?>
<?php echo $__env->make('Event::frontend.layouts.details.attributes', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php if($translation->faqs): ?>
<div class="g-faq">
    <h3> <?php echo e(__("FAQs")); ?> </h3>
    <?php $__currentLoopData = $translation->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
            <div class="header">
                <i class="field-icon icofont-support-faq"></i>
                <h5><?php echo e($item['title'] ?? ''); ?></h5>
                <span class="arrow"><i class="fa fa-angle-down"></i></span>
            </div>
            <div class="body">
                <?php echo e($item['content']); ?>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<div class="bc-hr"></div>
<?php if ($__env->exists("Hotel::frontend.layouts.details.hotel-surrounding")) echo $__env->make("Hotel::frontend.layouts.details.hotel-surrounding", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="bc-hr"></div>

<?php if($row->map_lat && $row->map_lng): ?>
<div class="g-location">
    <h3><?php echo e(__("Location")); ?></h3>
    <div class="location-map">
        <div id="map_content"></div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/BC/Event/Views/frontend/layouts/details/detail.blade.php ENDPATH**/ ?>