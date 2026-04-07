<?php
/**
 * @var $translation \Modules\Boat\Models\BoatTranslation
 * @var $row \Modules\Boat\Models\Boat
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

<div class="g-boat-feature">
    <div class="row">
        <?php if($row->max_guest): ?>
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-ui-user-group"></i>
                    </div>
                    <div class="info">
                        <h4 class="name"><?php echo e(__("Max Guests")); ?></h4>
                        <p class="value">
                            <?php echo e($row->max_guest); ?>

                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($row->cabin): ?>
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-sail-boat-alt-2"></i>
                    </div>
                    <div class="info">
                        <h4 class="name"><?php echo e(__("Cabin")); ?></h4>
                        <p class="value">
                            <?php echo e($row->cabin); ?>

                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($row->length): ?>
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-yacht"></i>
                    </div>
                    <div class="info">
                        <h4 class="name"><?php echo e(__("Length Boat")); ?></h4>
                        <p class="value">
                            <?php echo e($row->length); ?>

                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!empty($row->speed)): ?>
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-ship"></i>
                    </div>
                    <div class="info">
                        <h4 class="name"><?php echo e(__("Speed")); ?></h4>
                        <p class="value">
                            <?php echo e($row->speed); ?>

                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>


<?php echo $__env->make('Layout::global.details.gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php if($translation->content): ?>
    <div class="g-overview">
        <h3><?php echo e(__("Description")); ?></h3>
        <div class="description">
            <?php echo clean($translation->content); ?>

        </div>
    </div>
<?php endif; ?>


<?php echo $__env->make('Boat::frontend.layouts.details.specs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('Boat::frontend.layouts.details.attributes', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
<?php if(!empty($translation->cancel_policy)): ?>
    <div class="g-overview">
        <h3><?php echo e(__("Cancellation Policy")); ?></h3>
        <div class="description">
            <?php echo $translation->cancel_policy ?>
        </div>
    </div>
<?php endif; ?>
<?php if(!empty($translation->terms_information)): ?>
    <div class="g-overview">
        <h3><?php echo e(__("Additional Terms & Information")); ?></h3>
        <div class="description">
            <?php echo $translation->terms_information ?>
        </div>
    </div>
<?php endif; ?>
<?php echo $__env->make('Boat::frontend.layouts.details.include-exclude', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php if($row->map_lat && $row->map_lng): ?>
<div class="g-location">
    <h3><?php echo e(__("Location")); ?></h3>
    <div class="location-map">
        <div id="map_content"></div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/BC/Boat/Views/frontend/layouts/details/detail.blade.php ENDPATH**/ ?>