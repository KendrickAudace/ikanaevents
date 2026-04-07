<div class="bc_search_tour">
    <div class="bc_banner"
        <?php if($bg = setting_item('tour_page_search_banner')): ?> style="background-image: url(<?php echo e(get_file_url($bg, 'full')); ?>)" <?php endif; ?>>
        <div class="container">
            <h1>
                <?php echo e(setting_item_with_lang('tour_page_search_title')); ?>

            </h1>
        </div>
    </div>
    <div class="bc_form_search">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('tour::search-form');

$__html = app('livewire')->mount($__name, $__params, 'lw-2557476296-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php echo $__env->make('Tour::frontend.layouts.search.list-item', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div>

    <?php
        $__assetKey = '2557476296-0';

        ob_start();
    ?>
    <link href="<?php echo e(asset('themes/bc/dist/frontend/module/tour/css/tour.css?_ver=' . config('app.asset_version'))); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css')); ?>" />
    <script defer type="text/javascript" src="<?php echo e(asset('libs/ion_rangeslider/js/ion.rangeSlider.min.js')); ?>"></script>
    <?php
        $__output = ob_get_clean();

        // If the asset has already been loaded anywhere during this request, skip it...
        if (in_array($__assetKey, \Livewire\Features\SupportScriptsAndAssets\SupportScriptsAndAssets::$alreadyRunAssetKeys)) {
            // Skip it...
        } else {
            \Livewire\Features\SupportScriptsAndAssets\SupportScriptsAndAssets::$alreadyRunAssetKeys[] = $__assetKey;

            // Check if we're in a Livewire component or not and store the asset accordingly...
            if (isset($this)) {
                \Livewire\store($this)->push('assets', $__output, $__assetKey);
            } else {
                \Livewire\Features\SupportScriptsAndAssets\SupportScriptsAndAssets::$nonLivewireAssets[$__assetKey] = $__output;
            }
        }
    ?>

    <?php
        $__scriptKey = '2557476296-1';
        ob_start();
    ?>
    <script>
        $('[name=orderby]', $wire.$el).on('change', function (e) {
            $wire.set('orderby', $(this).val());
        });
        $('.orderby .dropdown-item').on('click',function (e){
            e.preventDefault();
            $('[name=orderby]').val($(this).data('value')).trigger('change');
            $('.orderby .dropdown-toggle').html($(this).html());
        })
    </script>
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?><?php /**PATH D:\Booking Core v4.0.1\Booking Core v4.0.1\booking-core4.0.1\bc-cms\themes/BC/Tour/Views/frontend/search.blade.php ENDPATH**/ ?>