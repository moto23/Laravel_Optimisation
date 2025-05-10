<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="<?php echo e(asset('assets/img/KLOGO.png')); ?>" type="image/icon type" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- CSS FontAwesome -->
    <script src="https://kit.fontawesome.com/52f3e32cf9.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/paper-dashboard.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/common.css')); ?>" rel="stylesheet" />

    <style>
        .container {
            max-width: 100% !important;
            padding: 0 15px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }

        #contact {
            background: #f9f9f9;
            padding: 25px;
            margin: 35px 0;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2),
                0 5px 5px 0 rgba(0, 0, 0, 0.24);
            width: 100%;
            max-width: 100%;
        }

        #contact h3 {
            display: block;
            font-size: 30px;
            font-weight: 300;
            margin-bottom: 10px;
        }

        #contact h4 {
            margin: 5px 0 15px;
            display: block;
            font-size: 13px;
            font-weight: 400;
        }

        fieldset {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }

        #contact input[type="text"] {
            width: 100%;
            border: 1px solid #ff9d5c;
            background: #fff;
            margin: 0 0 5px;
            padding: 10px;
        }

        #contact input[type="text"]:hover {
            border: 1px solid #ff9d5c;
        }

        #contact textarea {
            height: 100px;
            max-width: 100%;
            resize: none;
        }

        #contact button[type="submit"] {
            cursor: pointer;
            width: 50;
            border: none;
            background: #ff9d5c;
            color: #f8f9fa;
            margin: 22px 209px 46px;
            padding: 3px 30px;
            font-size: 17px;
            border-radius: 8px;
        }

        #contact button[type="submit"]:hover {
            background: #43a047;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        #contact button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .copyright {
            text-align: center;
        }

        #contact input:focus,
        #contact textarea:focus {
            outline: 0;
            border: 1px solid #aaa;
        }

        ::-webkit-input-placeholder {
            color: #888;
        }

        :-moz-placeholder {
            color: #888;
        }

        ::-moz-placeholder {
            color: #888;
        }

        :-ms-input-placeholder {
            color: #888;
        }
    </style>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>NEW QUESTION SET | KGamify</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "5000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <?php echo $__env->make('sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="main-panel">
            <?php echo $__env->make('navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card demo-icons">
                            <form action="<?php echo e(route('question_set.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="card-header">
                                    <div class="container">
                                        <!-- 1st one -->
                                        <div id="contact">
                                            <fieldset>
                                                <p
                                                    style="text-align: center;color: #ff9d5c; font-size: 30px;font-weight: bold; ">
                                                    Add Question Set</p>
                                                <hr style="height:2px; border:none;  background-color:#ff9d5c;">
                                                <br>
                                            </fieldset>

                                            <fieldset>
                                                <p style="color: #ff9d5c; font-size: 22px;font-weight: bold; ">Question
                                                    Set Name</p>
                                                <input placeholder="Enter Label Name" id="label_name" type="text"
                                                    name="label_name" tabindex="1" required autofocus />
                                            </fieldset>
                                            <br />

                                            <fieldset>
                                                <input type="submit" id="submit" value="Add Set"
                                                    style=" font-size: 15px; padding: 10px 25px;background-color: #ff9d5c; color: white;border-radius: 8px;border: #ff9d5c;" />
                                            </fieldset>
                                        </div>
                                    </div>
                            </form>
                            <!-- form end  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(session('success')): ?>
        <script>
            toastr.success("<?php echo e(session('success')); ?>");
        </script>
    <?php endif; ?>
    <?php if($errors->any()): ?>
        <script>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error("<?php echo e($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>
    <script>
        document.getElementById("submit").addEventListener("click", function(event) {
            var label = document.getElementById("label_name").value;
            var labelPattern = /[!@#$%^&*()+\=\[\]{};':"\\|,.<>\/?0-9]+/;

            if (labelPattern.test(label)) {
                event.preventDefault();
                toastr.error("Question Set should not contain any special characters or numbers");
            }
        });
    </script>

</body>

</html>
<?php /**PATH C:\Users\prafu\Desktop\laravel-kgamify\resources\views/question_set.blade.php ENDPATH**/ ?>