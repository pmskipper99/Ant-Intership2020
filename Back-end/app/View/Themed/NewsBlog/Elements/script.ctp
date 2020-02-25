    <?php echo $this->Html->script(array(
        '/vendors/jquery/dist/jquery.min',
        '/vendors/popper.js/dist/umd/popper.min',
        '/vendors/bootstrap/dist/js/bootstrap.min',
        'main',
        '/vendors/chart.js/dist/Chart.bundle.min',
        'dashboard',
        'widgets',
        '/vendors/jqvmap/dist/jquery.vmap.min',
        '/vendors/jqvmap/examples/js/jquery.vmap.sampledata',
        '/vendors/jqvmap/dist/maps/jquery.vmap.world'
    ));?>

    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>