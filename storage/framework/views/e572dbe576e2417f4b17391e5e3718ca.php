
<?php $__env->startSection('content'); ?>

    <div class="b-container">
        <div class="b-panel">
            <?php switch($to):
                case ('admin'): ?>
                    <h3 class="email-headline"><strong><?php echo e(__('Hello Administrator')); ?></strong></h3>
                    <p><?php echo e(__('New booking has been made')); ?></p>
                <?php break; ?>
                <?php case ('vendor'): ?>
                    <h3 class="email-headline"><strong><?php echo e(__('Hello :name',['name'=>$booking->vendor->nameOrEmail ?? ''])); ?></strong></h3>
                    <p><?php echo e(__('Your service has new booking')); ?></p>
                <?php break; ?>

                <?php case ('customer'): ?>
                    <h3 class="email-headline"><strong><?php echo e(__('Hello :name',['name'=>$booking->first_name ?? ''])); ?></strong></h3>
                    <p><?php echo e(__('Thank you for booking with us. Here are your booking information:')); ?></p>
                <?php break; ?>

            <?php endswitch; ?>

            <?php echo $__env->make($service->email_new_booking_file ?? '', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        <?php echo $__env->make('Booking::emails.parts.panel-customer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('Booking::emails.parts.panel-passengers', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Email::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/Base/Booking/Views/emails/new-booking.blade.php ENDPATH**/ ?>