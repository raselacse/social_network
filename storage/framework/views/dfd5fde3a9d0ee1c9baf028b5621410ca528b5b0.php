<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <?php
        $settings=\App\Models\Settings::find(1);
        ?>
        <!-- Page title -->
        <title><?php echo $settings->site_title; ?></title>
         <link rel="shortcut icon" href="<?php echo asset($settings->favicon); ?>">
        <!-- Vendor styles -->
        <!-- <script src="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css"></script>


        <script src="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap.min.css"></script>
        <script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script> -->
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/fontawesome/css/font-awesome.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/metisMenu/dist/metisMenu.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/animate.css/animate.css')); ?>">
        <link rel="stylesheet" href=" <?php echo e(url('public/vendor/bootstrap/dist/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/sweetalert/lib/sweet-alert.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/select2-3.5.2/select2.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/select2-bootstrap/select2-bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/summernote/dist/summernote.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/datatables_plugins/integration/bootstrap/3/dataTables.bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/styles/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/styles/calendar.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/styles/boot-calendar.css')); ?>">
        <link rel="stylesheet" href=" <?php echo e(url('public/dist/css/lightbox.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/vendor/toastr/build/toastr.min.css')); ?>">
        <link rel="stylesheet" href=" <?php echo e(url('public/css/custom.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/css/print.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/css/font/font.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/css/bootstrap-select.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/styles/MonthPicker.min.css')); ?>">

        <!-- <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://cdn.rawgit.com/digitalBush/jquery.maskedinput/1.4.1/dist/jquery.maskedinput.min.js"></script>
        <script rel="javascript" src="   <?php echo e(url('public/js/MonthPicker.min.js')); ?>"></script>
        <script rel="javascript" src="   <?php echo e(url('public/js/examples.js')); ?>"></script>
        <link rel="stylesheet" href="<?php echo e(url('public/styles/examples.css')); ?>">

        <style></style>
        <?php echo $__env->yieldContent('styles'); ?>


        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>




        <!---js-->
        <script rel="javascript" src=" <?php echo e(url('public/vendor/jquery/dist/jquery.min.js')); ?>"></script>

    </head>

    <body>

        <!-- Simple splash screen-->
        <?php
        $settings=\App\Models\Settings::find(1);

        ?>
        <!-- <div class="splash"> <div class="color-line"></div><div class="splash-title"><img src="<?php echo asset($settings->logo); ?>" class="rotating123" width="64" height="64" /><h1 class="mm-group-text"><b><?php echo $settings->site_title; ?></b></h1><p></p> </div> </div> -->

        <!-- Header -->
        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--- Main Menu Call -------------------->
        <?php echo $__env->make('includes.mainMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="wrapper">
            <!-- Container Call -------------------->
            <?php echo $__env->yieldContent('content'); ?>
            <footer class="footer">
                
               
            </footer>
        </div>


        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script> -->
        <!-- Vendor scripts -->
        <script rel="javascript" src=" <?php echo e(url('public/vendor/jquery-ui/jquery-ui.min.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/slimScroll/jquery.slimscroll.min.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/dist/js/lightbox-plus-jquery.min.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
        <script rel="javascript" src="   <?php echo e(url('public/js/bootstrap-select.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/jquery-flot/jquery.flot.js')); ?>"></script>
        <script rel="javascript" src="<?php echo e(url('public/vendor/jquery-flot/jquery.flot.resize.js')); ?>"></script>
        <script rel="javascript" src="<?php echo e(url('public/vendor/jquery-flot/jquery.flot.pie.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/flot.curvedlines/curvedLines.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/jquery.flot.spline/index.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/metisMenu/dist/metisMenu.min.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/iCheck/icheck.min.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/peity/jquery.peity.min.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/sparkline/index.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/sweetalert/lib/sweet-alert.min.js')); ?>"></script>
        <script rel="javascript" src="<?php echo e(url('public/vendor/select2-3.5.2/select2.min.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
        <script rel="javascript" src="<?php echo e(url('public/vendor/summernote/dist/summernote.min.js')); ?>"></script>
        <script rel="javascript" src=" <?php echo e(url('public/vendor/datatables/media/js/jquery.dataTables.min.js')); ?>"></script>
        <script rel="javascript" src="  <?php echo e(url('public/vendor/datatables_plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')); ?>"></script>
        <script rel="javascript" src="   <?php echo e(url('public/vendor/toastr/build/toastr.min.js')); ?>"></script>
        <script rel="javascript" src="  <?php echo e(url('public/scripts/homer.js')); ?>"></script>
        <script rel="javascript" src="    <?php echo e(url('public/scripts/charts.js')); ?>"></script>
        <script rel="javascript" src="   <?php echo e(url('public/js/custom.js')); ?>"></script>
        <script rel="javascript" src="   <?php echo e(url('public/js/boot-calendar.js')); ?>"></script>
        <script rel="javascript" src="   <?php echo e(url('public/js/calendar.min.js')); ?>"></script>
        <script rel="javascript" src="   <?php echo e(url('public/js/cp_custom.js')); ?>"></script>
        <script rel="javascript" src="   <?php echo e(url('public/js/jquery-ui-timepicker-addon.js')); ?>"></script>

        <!-- Include Moment.js CDN -->
        <script type="text/javascript" src="<?php echo e(url('public/js/momentJs.js')); ?>"></script>
        <!-- Include Bootstrap DateTimePicker CDN -->
        <link href="<?php echo e(url('public/css/timepicker.css')); ?>" rel="stylesheet">
        <script src="<?php echo e(url('public/js/timepicker.js')); ?>"></script>


        <?php echo $__env->yieldContent('js'); ?>
        <script type="text/javascript">
            $(window).on('load', function () {

                $('.selectpicker').selectpicker({
                    'selectedText': 'cat'
                });

                // $('.selectpicker').selectpicker('hide');
            });
        </script>


        <script>
            $(function () {
                /**
                 * Flot charts data and options
                 */
                var data1 = [[0, 509], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51]];
                var data2 = [[0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59]];

                var chartUsersOptions = {
                    series: {
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                    },
                    grid: {
                        tickColor: "#f0f0f0",
                        borderWidth: 1,
                        borderColor: 'f0f0f0',
                        color: '#6a6c6f'
                    },
                    colors: ["#62cb31", "#efefef"],
                };

                $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

                /**
                 * Flot charts 2 data and options
                 */
                var chartIncomeData = [
                    {
                        label: "line",
                        data: [[1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51]]
                    }
                ];

                var chartIncomeOptions = {
                    series: {
                        lines: {
                            show: true,
                            lineWidth: 0,
                            fill: true,
                            fillColor: "#64cc34"
                        }
                    },
                    colors: ["#62cb31"],
                    grid: {
                        show: false
                    },
                    legend: {
                        show: false
                    }
                };

                $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);

            });
            function remove_date(e) {
                var id = e;
                $("#" + id).val('');
            }
        </script>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\social-network\resources\views/layouts/default.blade.php ENDPATH**/ ?>