<div class="bc_filter" x-data x-init="$nextTick(() => {
            window.bcInitFilterJs();
    })">
    <?php
    $scrollIntoViewJsSnippet = <<<JS
       document.querySelector('body').scrollIntoView({
        behavior: 'smooth'
       })
    JS;
    ?>
    <div class="bc_form_filter" >
        <div class="filter-title">
            <?php echo e(__('FILTER BY')); ?>

        </div>
        <div class="g-filter-item">
            <div class="item-title">
                <h3><?php echo e(__('Filter Price')); ?></h3>
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>
            <div class="item-content">
                <div class="bc-filter-price" wire:ignore>
                    <?php
                    $price_min = $pri_from = floor(App\Currency::convertPrice($tour_min_max_price[0]));
                    $price_max = $pri_to = ceil(App\Currency::convertPrice($tour_min_max_price[1]));
                    if (!empty(($price_range))) {
                        [$pri_from, $pri_to] = explode(';', $price_range);
                    }
                    $currency = App\Currency::getCurrency(App\Currency::getCurrent());
                    ?>
                    <input type="hidden" class="filter-price irs-hidden-input" name="price_range"
                        data-symbol=" <?php echo e($currency['symbol'] ?? ''); ?>" data-min="<?php echo e($price_min); ?>"
                        data-max="<?php echo e($price_max); ?>" data-from="<?php echo e($pri_from); ?>" data-to="<?php echo e($pri_to); ?>"
                        readonly="" value="<?php echo e($price_range); ?>">
                </div>
            </div>
        </div>
        <div class="g-filter-item">
            <div class="item-title">
                <h3><?php echo e(__('Review Score')); ?></h3>
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>
            <div class="item-content">
                <ul>
                    <!--[if BLOCK]><![endif]--><?php for($number = 5; $number >= 1; $number--): ?>
                        <li>
                            <div class="bc-checkbox">
                                <label>
                                    <input wire:model.live="review_score" type="checkbox" value="<?php echo e($number); ?>"
                                           <?php if(in_array($number, $this->review_score)): ?> checked <?php endif; ?>>
                                    <span class="checkmark"></span>
                                    <!--[if BLOCK]><![endif]--><?php for($review_score = 1; $review_score <= $number; $review_score++): ?>
                                        <i class="fa fa-star"></i>
                                    <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                                </label>
                            </div>
                        </li>
                    <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                </ul>
            </div>
        </div>
        <div class="g-filter-item">
            <div class="item-title">
                <h3><?php echo e(__('Tour Type')); ?></h3>
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>
            <div class="item-content">
                <ul style="max-height: 180px" class="overflow-auto">
                    <?php
                    $current_category_ids = $this->cat_id;
                    $traverse = function ($categories, $prefix = '')

                    use (&$traverse, $current_category_ids, $scrollIntoViewJsSnippet)

                    {
                    $i = 0;
                    foreach ($categories as $category) {
                        $checked = '';
                        if (!empty($current_category_ids)) {
                            foreach ($current_category_ids as $key => $current) {
                                if ($current == $category->slug)
                                    $checked = 'checked';
                            }
                        }
                        $traslate = $category->translate()
                        ?>
                    <li>
                        <div class="bc-checkbox">
                            <label>
                                <input x-on:click="<?php echo e($scrollIntoViewJsSnippet); ?>" wire:model.live="cat_id"
                                       <?php echo e($checked); ?> type="checkbox"
                                    value="<?php echo e($category->slug); ?>"> <?php echo e($prefix); ?> <?php echo e($traslate->name); ?>

                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <?php
                        $i++;
                        $traverse($category->children, $prefix . '-');
                        }
                    };
                    $traverse($this->tour_category);
                    ?>
                </ul>
            </div>
        </div>
        <?php echo $__env->make('Layout::livewire.search.filters.attrs',['attributes' => $this->tour_attributes], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div>
    <?php
        $__scriptKey = '691188223-0';
        ob_start();
    ?>
<script>

    if (typeof window.bcInitFilterJs !== 'function') {
        window.bcInitFilterJs = function () {
                // Initialize ion range slider
                $(".bc-filter-price").each(function () {
                    $(this).find('.irs').remove();
                    var input_price = $(this).find(".filter-price");
                    if (input_price.data("ionRangeSlider")) {
                        input_price.data("ionRangeSlider").destroy();
                    }
                    var min = input_price.data("min");
                    var max = input_price.data("max");
                    var from = input_price.data("from");
                    var to = input_price.data("to");
                    var symbol = input_price.data("symbol");
                    input_price.ionRangeSlider({
                        type: "double",
                        grid: true,
                        min: min,
                        max: max,
                        from: from,
                        to: to,
                        prefix: symbol,
                        onFinish: function (data) {

                            Livewire.dispatch('onFilterPriceChanged', { params: {data_from: data.from , data_to: data.to}});
                        }
                    });
                });
            }
    }
    document.addEventListener('livewire:init', () => {
        if (typeof window.bcInitFilterJs === 'function') {
            window.bcInitFilterJs();
        }
    });
    document.addEventListener('livewire:navigated', () => {
        if (typeof window.bcInitFilterJs === 'function') {
            window.bcInitFilterJs();
        }
    });
</script>
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
<?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/BC/Tour/Views/frontend/components/filter/index.blade.php ENDPATH**/ ?>