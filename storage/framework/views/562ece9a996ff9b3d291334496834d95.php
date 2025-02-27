<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo e(asset('themes/backend/date-range/daterangepicker.css')); ?>" />
    <style>
        a.canvasjs-chart-credit {
            display: none;
        }
        text.highcharts-credits {
            display: none;
        }
        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 100% !important;
            margin: 1em auto;
        }

        #sales-chart,#purchases-chart {
            height: 430px; /* Set a fixed height for the sales chart */
            width: 100%;
        }

        #datatable {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        #datatable caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        #datatable th {
            font-weight: 600;
            padding: 0.5em;
        }

        #datatable td,
        #datatable th,
        #datatable caption {
            padding: 0.5em;
        }

        #datatable thead tr,
        #datatable tr:nth-child(even) {
            background: #f8f8f8;
        }

        #datatable tr:hover {
            background: #f1f7ff;
        }
        .daterangepicker .ranges li.active {
            background-color: #17a2b8;
            color: #fff;
        }
        div#report-range {
            color: #17a2b8;
            text-align: center;
            width: max-content !important;
            float: right;
            font-size: 17px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-md-center">
        <div class="col-12 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-gradient-info elevation-1"><i class="text-white fa fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Test Project</span>
                    <span class="info-box-number"><?php echo e(number_format(0, 2)); ?></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-gradient-warning elevation-1"><i class="text-white fa fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Test Project</span>
                    <span class="info-box-number"><?php echo e(number_format(0, 2)); ?></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-gradient-danger elevation-1"><i class="text-white fa fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Test Project</span>
                    <span class="info-box-number"><?php echo e(number_format(0, 2)); ?></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-gradient-danger elevation-1"><i class="text-white fa fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Test Project</span>
                    <span class="info-box-number"><?php echo e(number_format(0, 2)); ?></span>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/backend/date-range/daterangepicker.js')); ?>"></script>
    <script>
        // Helper function to get query parameters from the URL
        function getQueryParam(param) {
            var urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Check if start_date and end_date are in the URL
        var urlStart = getQueryParam('start_date');
        var urlEnd = getQueryParam('end_date');

        // If dates exist in the URL, use them; otherwise, default to today's date
        var start = urlStart ? moment(urlStart, 'YYYY-MM-DD') : moment();  // Default start date is today
        var end = urlEnd ? moment(urlEnd, 'YYYY-MM-DD') : moment();        // Default end date is today

        // Function to update the date picker display
        function cb(start, end) {
            const startDate = moment(start); // Replace with your start date
            const endDate = moment(end);   // Replace with your end date

            const spanLabel = getDateRangeLabel(startDate, endDate);
            $('#report-range span').html(spanLabel);
            //$('#report-range span').html(start.format('D MMM, YYYY') + ' - ' + end.format('D MMM, YYYY'));

            // Update hidden inputs with the selected dates
            $('#start_date').val(start.format('YYYY-MM-DD'));
            $('#end_date').val(end.format('YYYY-MM-DD'));
        }

        // Initialize the date range picker with either URL dates or default today
        $('#report-range').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        // Update the date picker display on page load with correct range
        cb(start, end);

        // Submit the form when the user clicks "Apply"
        $('#report-range').on('apply.daterangepicker', function(ev, picker) {
            // Submit the form after selecting a date range
            $('#dashboard_year_form').submit();
        });
        function getDateRangeLabel(start, end) {
            const today = moment().startOf('day');
            const yesterday = moment().subtract(1, 'day').startOf('day');
            const last7Days = moment().subtract(6, 'days').startOf('day');
            const last30Days = moment().subtract(29, 'days').startOf('day'); // Last 30 days calculation
            const startOfMonth = moment().startOf('month');
            const startOfLastMonth = moment().subtract(1, 'month').startOf('month');
            const endOfLastMonth = moment().subtract(1, 'month').endOf('month');

            // Today
            if (start.isSame(today, 'day') && end.isSame(today, 'day')) {
                return 'Today';
            }

            // Yesterday
            if (start.isSame(yesterday, 'day') && end.isSame(yesterday, 'day')) {
                return 'Yesterday';
            }

            // Last 7 Days
            if (start.isSame(last7Days, 'day') && end.isSame(today, 'day')) {
                return 'Last 7 Days';
            }

            // Last 30 Days
            if (start.isSame(last30Days, 'day') && end.isSame(today, 'day')) {
                return 'Last 30 Days';
            }

            // This Month
            if (start.isSameOrAfter(startOfMonth, 'day') && end.isSameOrBefore(moment().endOf('month'), 'day')) {
                return 'This Month';
            }

            // Last Month
            if (start.isSame(startOfLastMonth, 'day') && end.isSame(endOfLastMonth, 'day')) {
                return 'Last Month';
            }

            // Custom Range
            return start.format('D MMM, YY') + ' - ' + end.format('D MMM, YY');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PHP-8.2.4\htdocs\test-project\resources\views/dashboard.blade.php ENDPATH**/ ?>