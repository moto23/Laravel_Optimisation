<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard.css')); ?>" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo e(asset('assets/img/KLOGO.png')); ?>" type="image/icon type" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard | KGamify</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/paper-dashboard.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/common.css')); ?>" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/52f3e32cf9.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <style>
        .sidebar .nav li>a i {
            padding-bottom: 23px;
        }

        .icon-big {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding-right: 25px;
            margin-bottom: 15px;
        }

        .icon-big i {
            font-size: 2.5rem;
            margin-top: -5px;
        }

        .row {
            margin-right: 0;
            margin-left: 0;
        }

        .col-lg-3,
        .col-md-6,
        .col-sm-6 {
            padding-right: 15px;
            padding-left: 15px;
        }

        .card-body .row {
            display: flex;
            align-items: center;
            height: 100%;
        }

        .numbers {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .card-title {
            margin-bottom: 0;
            line-height: 1;
        }

        .card-category {
            margin-top: 5px;
            padding-left: 20px;
        }

        .card-stats {
            position: relative;
            z-index: 1;
        }

        .container {
            max-width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
    </style>
</head>

<body class="">
    <div class="wrapper">
        <?php echo $__env->make('sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="main-panel">
            <?php echo $__env->make('navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <div class="content">
                <div class="container">
                    <div style="height: 80vh" class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div style="margin: 20px; height: 20vh" class="card-body">
                                    <div style="padding: 40px" class="row p-3">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i style="color: rgb(255, 123, 0)" class="fas fa-trophy"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p id="total_championships" style="font-size: 40px" class="card-title">
                                                    <?php echo e($championshipCount); ?>

                                                </p>
                                                <p class="card-category">Total Championships</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <hr />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div style="margin: 20px; height: 20vh" class="card-body">
                                    <div style="padding: 40px" class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning"
                                                style="color: rgb(255, 123, 0)">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>

                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p id="total_registered_users" style="font-size: 40px"
                                                    class="card-title">
                                                    <?php echo e($userCount); ?>

                                                </p>
                                                <p class="card-category">Total Registered Users</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <hr />
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div style="margin: 20px; height: 20vh" class="card-body">
                                    <div style="padding: 40px" class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning"
                                                style="color: rgb(255, 123, 0)">
                                                <i class="fas fa-align-justify"></i>
                                            </div>
                                        </div>

                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p id="total_registered_users" style="font-size: 40px"
                                                    class="card-title">
                                                    <?php echo e($categoryCount); ?>

                                                </p>
                                                <p class="card-category">Total Categories</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <hr />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div style="margin: 20px; height: 20vh" class="card-body">
                                    <div style="padding: 40px" class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning"
                                                style="color: rgb(255, 123, 0)">
                                                <i class="fas fa-dice-d6"></i>
                                            </div>
                                        </div>

                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p id="total_gamemode" style="font-size: 40px" class="card-title">
                                                    <?php echo e($gameModeCount); ?>

                                                </p>
                                                <p class="card-category">Total Game Modes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\Users\prafu\Desktop\laravel-kgamify\resources\views/dashboard.blade.php ENDPATH**/ ?>