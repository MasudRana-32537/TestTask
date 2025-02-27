
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="<?php echo e(asset('themes/backend/plugins/fontawesome-free/css/all.min.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?php echo e(asset('themes/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
<!-- SweetAlert2 -->
<link rel="stylesheet"
      href="<?php echo e(asset('themes/backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
<!-- Toastr -->
<link rel="stylesheet" href="<?php echo e(asset('themes/backend/plugins/toastr/toastr.min.css')); ?>">
<!-- DataTables -->
<link rel="stylesheet"
      href="<?php echo e(asset('themes/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet"
      href="<?php echo e(asset('themes/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
<link rel="stylesheet"
      href="<?php echo e(asset('themes/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
<!-- ColReorder CSS -->
<link rel="stylesheet"  href="<?php echo e(asset('themes/backend/plugins/datatables-colreorder/css/colReorder.bootstrap4.min.css')); ?>">


<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?php echo e(asset('themes/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet"
      href="<?php echo e(asset('themes/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">

<!-- Select2 -->
<link rel="stylesheet" href="<?php echo e(asset('themes/backend/plugins/select2/css/select2.min.css')); ?>">
<link rel="stylesheet"
      href="<?php echo e(asset('themes/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">

<!-- bootstrap datepicker -->
<link rel="stylesheet"
      href="<?php echo e(asset('themes/backend/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
<link href="<?php echo e(asset('themes/backend/jquery-ui-1.13.2.custom/jquery-ui.css')); ?>" rel="stylesheet" type="text/css"/>

<link href="<?php echo e(asset('themes/backend/month-picker/MonthPicker.min.css')); ?>" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="<?php echo e(asset('themes/backend/plugins/pace-progress/themes/black/pace-theme-flat-top.css')); ?>">

<!-- Theme style -->
<link rel="stylesheet" href="<?php echo e(asset('themes/backend/dist/css/adminlte.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('themes/backend/dist/css/custom.css')); ?>">
<style>
    .create-task-btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 6px 16px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        outline: none;
        position: relative;
        overflow: hidden;
        animation: pulse 2s infinite ease-in-out;
        margin-left: 18px;
    }
    .create-task-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.2);
        z-index: 1;
        animation: glow 3s infinite ease-in-out; /* Continuous glow effect */
    }

    /* Pulse animation for the button */
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    /* Glow animation for the background effect */
    @keyframes glow {
        0%, 100% {
            opacity: 0.4;
            transform: scale(1);
        }
        50% {
            opacity: 0.8;
            transform: scale(1.2);
        }
    }
    @media print {
        @page {
            size: auto;
            margin: .3in .5in .5in .5in !important;
        }
        #header-common-info{
            display: flex !important;
        }
    }
</style>
<?php /**PATH D:\PHP-8.2.4\htdocs\test-project\resources\views/layouts/partial/__styles.blade.php ENDPATH**/ ?>