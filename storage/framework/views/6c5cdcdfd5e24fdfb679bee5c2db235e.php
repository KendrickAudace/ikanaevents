<?php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
   
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView({ behavior: 'smooth'})
    JS
    : '';
?>
<div>
    
    <!--[if BLOCK]><![endif]--><?php if($paginator->hasPages() && $paginator->total() > 1): ?>
    <nav class="mt-2">
        <ul class="pagination">
            
            <!--[if BLOCK]><![endif]--><?php if($paginator->onFirstPage()): ?>
                <li  class="disabled page-item" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span aria-hidden="true" class="page-link">&lsaquo;</span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a wire:click.prevent="previousPage('<?php echo e($paginator->getPageName()); ?>')" x-on:click="<?php echo e($scrollIntoViewJsSnippet); ?>" class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">&lsaquo;</a>
                </li>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <!--[if BLOCK]><![endif]--><?php if(is_string($element)): ?>
                    <li class="disabled page-item" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                
                <!--[if BLOCK]><![endif]--><?php if(is_array($element)): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--[if BLOCK]><![endif]--><?php if($page == $paginator->currentPage()): ?>
                            <li class="active page-item " aria-current="page" wire:key="paginator-<?php echo e($paginator->getPageName()); ?>-page-<?php echo e($page); ?>"><span class="page-link"><?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li class="page-item" wire:key="paginator-<?php echo e($paginator->getPageName()); ?>-page-<?php echo e($page); ?>"><a wire:click.prevent="gotoPage(<?php echo e($page); ?>, '<?php echo e($paginator->getPageName()); ?>')" x-on:click="<?php echo e($scrollIntoViewJsSnippet); ?>" class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            
            <!--[if BLOCK]><![endif]--><?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a  wire:click.prevent="nextPage('<?php echo e($paginator->getPageName()); ?>')" x-on:click="<?php echo e($scrollIntoViewJsSnippet); ?>" class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">&rsaquo;</a>
                </li>
            <?php else: ?>
                <li class="disabled page-item" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span aria-hidden="true" class="page-link">&rsaquo;</span>
                </li>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </ul>
    </nav>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div><?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\resources\views/livewire/pagination.blade.php ENDPATH**/ ?>