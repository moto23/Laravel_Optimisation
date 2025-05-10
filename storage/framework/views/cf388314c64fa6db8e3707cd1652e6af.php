<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="<?php echo e(asset('assets/img/KLOGO.png')); ?>" type="image/icon type" />
    <!-- fonts -->
    <script data-require="jquery" data-semver="2.1.3" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- CSS FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.min.js"></script>

    <script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.2.0/"
        }
    }
    </script>

    <style>
        body {
            /* font-family: "Roboto", Helvetica, Arial, sans-serif; */
            font-weight: 100;
            font-size: 12px;
            line-height: 30px;
            color: #777;
            background: #4caf50;
        }

        .ck-editor__editable_inline:not(.ck-comment__input *) {
            height: 130px;
            overflow-y: auto;
        }

        .content {
            height: 85vh;
            overflow-y: auto;
        }

        .container {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }

        .styled-title {
            color: #ff9d5c;
            font-size: 22px;
            font-weight: bold;
        }

        .styled-input,
        .styled-textarea {
            border-color: #ff9d5c;
            width: 100%;
        }

        .select2-container {
            z-index: 9999 !important;
        }

        .select2-results__options {
            max-height: 200px !important;
            overflow-y: auto !important;
        }

        .select2-results__option {
            padding: 4px 6px !important;
        }

        .select2-selection__choice {
            margin-top: 2px !important;
            margin-bottom: 2px !important;
            line-height: 20px !important;
        }

        .select2-selection__rendered {
            line-height: 23px !important;
            overflow-x: hidden !important;
        }

        .select2-search--inline .select2-search__field {
            margin-top: 0 !important;
            height: 23px !important;
        }

        .select2-container--default .select2-selection--multiple {
            min-height: 37px !important;
            height: auto !important;
            max-height: 100px !important;
            overflow-y: auto !important;
            overflow-x: hidden !important;
        }

        #contact {
            background: #f9f9f9;
            padding: 25px;
            margin: 35px 0;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2),
                0 5px 5px 0 rgba(0, 0, 0, 0.24);
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

    <!-- CSS FontAwesome -->
    <script src="https://kit.fontawesome.com/52f3e32cf9.js" crossorigin="anonymous"></script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>NEW GAME MODE | KGamify</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/paper-dashboard.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/common.css')); ?>" rel="stylesheet" />
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
                            <form method="post" action="<?php echo e(route('mode.store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="card-header">
                                    <div class="container">
                                        <!-- 1st one -->
                                        <div id="contact">
                                            <fieldset>
                                                <p
                                                    style="text-align: center;color: #ff9d5c; font-size: 30px;font-weight: bold; ">
                                                    Add Game Mode</p>
                                                <hr style="height:2px; border:none;  background-color:#ff9d5c;">
                                                <br>
                                                <br>
                                            </fieldset>


                                            <!-- dsaddsadsasa -->

                                            <p
                                                style="color: #ff9d5c;font-size: 22px;font-weight: bold;margin-bottom:0px; ">
                                                Select
                                                Question Set
                                            </p>
                                            <p style="color: #00c800;font-size: 18px">Questions in the Championship will
                                                appear from Questions under the question set selected from here</p>
                                            <div style=" display: grid; min-width: 89ch;max-height:200px; font-size: 16px"
                                                class="select">

                                                <select class="js-example-basic-single-label" style="width:100%;"
                                                    id="label" name="label">
                                                    <option value="" selected disabled>Select Label
                                                    </option>
                                                    <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($label); ?>"><?php echo e($label); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>

                                                <span class="focus"></span>

                                            </div>
                                            </br>
                                            </br>


                                            <!-- 2nd one -->
                                            <p style="color: #ff9d5c;font-size: 22px;font-weight: bold; ">Championship
                                                Name</p>
                                            <div style=" display: grid; min-width: 89ch;max-height:200px; font-size: 16px"
                                                class="select">

                                                <select class="js-example-basic-single-champ" id="champ_name"
                                                    name="champ_name" style="width:100%;">
                                                    <option value="" selected disabled>Select Championship
                                                    </option>
                                                    <?php $__currentLoopData = $championships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $championship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($championship); ?>"><?php echo e($championship); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>

                                                <span class="focus"></span>

                                            </div>
                                            <!-- ended 2nd one -->
                                            <br /><br />

                                            <p style="color: #ff9d5c;font-size: 22px;font-weight: bold; ">Game Mode name
                                            </p>
                                            <div style=" display: grid; min-width: 89ch; font-size: 16px"
                                                class="select">

                                                <fieldset>
                                                    <input type="radio" id="quick_hit" name="mode_name"
                                                        value="quick_hit">
                                                    <label style="color: black;font-size: 15px;font-weight: normal; "
                                                        for="quick_hit">Quick Hit</label><br>
                                                    <input type="radio" id="play_win_gift" name="mode_name"
                                                        value="play_win_gift">
                                                    <label style="color: black ;font-size: 15px;font-weight: normal; "
                                                        for="play_win_gift">Play & Win Gift</label><br>
                                                </fieldset>
                                                <span class="focus"></span>

                                            </div>


                                            <br />
                                            <!-- ended 1st one -->
                                            <p style="color: #ff9d5c;font-size: 22px;font-weight: bold;">
                                                Description/Rules</p>
                                            <textarea name="description" id="description" placeholder="Write Description/Rules here...." required>
                            </textarea>
                                            <!--<textarea name="description" id="editor" placeholder="Write Description/Rules here...."></textarea>-->
                                            <br>


                                            <br />

                                            <fieldset>


                                                <p style="color: #ff9d5c;font-size: 22px;font-weight: bold; ">Required
                                                    Qualification</p>
                                                <div style=" display: grid; min-width: 89ch; font-size: 16px"
                                                    class="select">
                                                    <select class="js-example-basic-multiple" id="qualification"
                                                        name="qualifications[]" multiple="multiple">
                                                        <?php $__currentLoopData = $qualifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qualification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($qualification); ?>"><?php echo e($qualification); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                            </fieldset>
                                            <br>
                                            <div id="gift-info" style="display: none;">
                                                <div id="select_gift_type">
                                                    <p
                                                        style="color: #ff9d5c; font-size: 22px; width: 100%; font-weight: bold;">
                                                        Select Gift Type</p>
                                                    <div style="display: grid; min-width: 89ch; font-size: 16px;"
                                                        class="select">
                                                        <select class="js-example-basic-single" name="gift_type"
                                                            id="gift-select" style="width: 100%;">
                                                            <option value="" selected disabled>Select Gift Type
                                                            </option>
                                                            <?php $__currentLoopData = $gifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($gift->gift_type); ?>">
                                                                    <?php echo e($gift->gift_type); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <span class="focus"></span>
                                                </div>
                                                <br>


                                                <div class="gift-card" id="gift-card">
                                                    <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">Gift
                                                        Card Name</p>
                                                    <input style="border-color: #ff9d5c; width: 100%;"
                                                        placeholder="Enter Gift Card Name" name="gift_card_name"
                                                        id="gift-card-name" type="text" tabindex="1" />
                                                    <br><br>

                                                    <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">Add
                                                        Description</p>
                                                    <textarea name="gift_card_text" id="gift-card-description" placeholder="Write Description here...."></textarea>

                                                    <br />

                                                    <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">Add
                                                        Gift Card Image</p>
                                                    <input type="file" id="gift-card-img" name="gcimg"
                                                        accept="image/*" />
                                                    <div id="image-container"
                                                        style="position: relative; display: inline-block;">
                                                        <img id="gift-card-image"
                                                            style="display: none; max-width: 100%; height: auto;margin-top:10px;" />
                                                        <button type="button" id="remove-gift-card-image-btn"
                                                            style="display: none; background-color: white; border: 2px solid white; color: black; font-size: 16px;font-weight:bold; position: absolute; top: -5px; right: -5px; z-index: 10; border-radius: 50%; width: 24px; height: 24px; text-align: center; justify-content: center; align-items: center; padding: 0;">&times;</button>
                                                    </div>
                                                    <p id="error-message-gift-card"
                                                        style="color: red; font-size: 16px; display: none;"></p>
                                                    <!--<img id="gift-card-image" style="display: none; max-width: 100%; height: auto;" />-->
                                                    <br><br>
                                                </div>


                                                <div class="coupon" id="coupon">
                                                    <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">
                                                        Coupon Name</p>
                                                    <input style="border-color: #ff9d5c; width: 100%;"
                                                        placeholder="Enter Coupon Name" name="coupon_name"
                                                        id="coupon_name" type="text" tabindex="1" />
                                                    <br><br>

                                                    <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">
                                                        Coupon Description</p>
                                                    <textarea name="coupon_text" id="coupon_description" placeholder="Write Description here...."></textarea>

                                                    <br />

                                                    <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">Add
                                                        Coupon Image</p>
                                                    <input type="file" id="coupon-img" name="cimg"
                                                        accept="image/*" />
                                                    <div id="image-container"
                                                        style="position: relative; display: inline-block;">
                                                        <img id="coupon-image"
                                                            style="display: none; max-width: 100%; height: auto;margin-top:10px;" />
                                                        <button type="button" id="remove-coupon-image-btn"
                                                            style="display: none; background-color: white; border: 2px solid white; color: black; font-size: 16px;font-weight:bold; position: absolute; top: -5px; right: -5px; z-index: 10; border-radius: 50%; width: 24px; height: 24px; text-align: center; justify-content: center; align-items: center; padding: 0;">&times;</button>
                                                    </div>
                                                    <p id="error-message-coupon"
                                                        style="color: red; font-size: 16px; display: none;"></p>
                                                    <!--<img id="coupon-image" style="display: none; max-width: 100%; height: auto;" />-->
                                                    <br><br>
                                                </div>


                                                <div class="product" id="product">
                                                    <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">
                                                        Product Name</p>
                                                    <input style="border-color: #ff9d5c; width: 100%;"
                                                        placeholder="Enter Product Name" name="product_name"
                                                        id="product_name" type="text" tabindex="1" />
                                                    <br><br>

                                                    <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">
                                                        Product Description</p>
                                                    <textarea name="product_text" id="product_description" placeholder="Write Description here...."></textarea>

                                                    <br />

                                                    <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">Add
                                                        Product Image</p>
                                                    <input type="file" id="product-img" name="pimg"
                                                        accept="image/*" />
                                                    <div id="image-container"
                                                        style="position: relative; display: inline-block;">
                                                        <img id="product-image"
                                                            style="display: none; max-width: 100%; height: auto;margin-top:10px;" />
                                                        <button type="button" id="remove-product-image-btn"
                                                            style="display: none; background-color: white; border: 2px solid white; color: black; font-size: 16px;font-weight:bold; position: absolute; top: -5px; right: -5px; z-index: 10; border-radius: 50%; width: 24px; height: 24px; text-align: center; justify-content: center; align-items: center; padding: 0;">&times;</button>
                                                    </div>
                                                    <p id="error-message-product"
                                                        style="color: red; font-size: 16px; display: none;"></p>
                                                    <!--<img id="coupon-image" style="display: none; max-width: 100%; height: auto;" />-->
                                                    <br><br>
                                                </div>
                                            </div>



                                            <fieldset>
                                                <p
                                                    style="color: #ff9d5c; font-size: 22px; width: 100%; font-weight: bold;">
                                                    Number of Questions</p>
                                                <input placeholder="Enter Number of Questions" id="n_questions"
                                                    type="number" name="no_of_questions" tabindex="1" required />
                                            </fieldset>
                                            <br />

                                            <fieldset>
                                                <p
                                                    style="color: #ff9d5c; font-size: 22px; width: 100%; font-weight: bold;">
                                                    Time Required</p>
                                                <input placeholder="Time Format - HH:MM:SS" id="t_required"
                                                    type="text" tabindex="1" name="time_required" required />
                                            </fieldset>
                                            <p style="color: #00c800;font-size: 15px">Enter the time strictly in
                                                HH:MM:SS format <br> For Example If you want to enter 20 seconds then
                                                the format for it will be 00:00:20</p>
                                            <br>
                                            <br>
                                            <fieldset>
                                                <input type="submit" id="submit" value="Create Game Mode"
                                                    style="font-size: 15px; padding: 10px 25px; background-color: #ff9d5c; color: white; border-radius: 8px; border: #ff9d5c;" />
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($errors->any()): ?>
        <script>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error("<?php echo e($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>
    <?php if(session('success')): ?>
        <script>
            toastr.success("<?php echo e(session('success')); ?>");
        </script>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <script>
            toastr.error("<?php echo e(session('error')); ?>");
        </script>
    <?php endif; ?>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single-champ').select2({
                placeholder: 'Select Championship',
                allowClear: true
            });

            $('.js-example-basic-single').select2({
                placeholder: 'Select Gift Type',
                allowClear: true
            });

            $('.js-example-basic-single-label').select2({
                placeholder: 'Select Label',
                allowClear: true
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quickHitRadio = document.getElementById('quick_hit');
            const playWinGiftRadio = document.getElementById('play_win_gift');
            const giftInfoSection = document.getElementById('gift-info');

            function toggleGiftInfo() {
                if (playWinGiftRadio.checked) {
                    giftInfoSection.style.display = 'block';
                } else {
                    giftInfoSection.style.display = 'none';
                }
            }

            // Initial check
            toggleGiftInfo();

            // Add event listeners to radio buttons
            quickHitRadio.addEventListener('change', toggleGiftInfo);
            playWinGiftRadio.addEventListener('change', toggleGiftInfo);
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#gift-card").hide();
            $("#coupon").hide();
            $("#product").hide();
            $("#gift-select").change(function() {
                var selectedValue = $("#gift-select").val();

                // Clear values of hidden sections
                if (selectedValue == "Gift Card") {
                    clearImagePreview('coupon');
                    clearImagePreview('product');
                    $("#coupon_name").val('');
                    $("#coupon_description").val('');
                    $("#product_name").val('');
                    $("#product_description").val('');

                    $("#gift-card").show();
                    $("#coupon").hide();
                    $("#product").hide();
                } else if (selectedValue == "Coupon") {
                    clearImagePreview('gift-card');
                    clearImagePreview('product');
                    $("#gift-card-name").val('');
                    $("#gift-card-description").val('');
                    $("#product_name").val('');
                    $("#product_description").val('');

                    $("#coupon").show();
                    $("#gift-card").hide();
                    $("#product").hide();
                } else {
                    clearImagePreview('gift-card');
                    clearImagePreview('coupon');
                    $("#gift-card-name").val('');
                    $("#gift-card-description").val('');
                    $("#coupon_name").val('');
                    $("#coupon_description").val('');

                    $("#product").show();
                    $("#gift-card").hide();
                    $("#coupon").hide();
                }
            }).change();

            function clearImagePreview(sectionId) {
                $(`#${sectionId}-img`).val(''); // Reset file input
                $(`#${sectionId}-image`).hide(); // Hide image preview
                $(`#remove-${sectionId}-image-btn`).hide(); // Hide remove button
                $(`#error-message-${sectionId}`).hide(); // Hide error message
            }
        });
    </script>


    <script>
        document.getElementById("submit").addEventListener("click", function(event) {
            var gift_card = document.getElementById("gift-card-name").value;
            var coupon = document.getElementById("coupon_name").value;
            var product = document.getElementById("product_name").value;
            var questions = document.getElementById("n_questions").value;
            var pattern = /[!@#$%^&*()+\=\[\]{};':"\\|,.<>\/?]+/;
            var alphapattern = /[!@#$%^&*()+\=\[\]{};':"\\|,.<>\/?_a-zA-Z-]+/;

            const input = document.getElementById("t_required");

            // Regular expression to validate HH:MM:SS format
            const timeFormat = /^([01]\d|2[0-3]):([0-5]\d):([0-5]\d)$/;

            if (!timeFormat.test(input.value)) {
                toastr.error("Invalid time format! Please enter time in HH:MM:SS format.");
                input.value = ""; // Clear the invalid input
            }

            if (pattern.test(gift_card)) {
                event.preventDefault(); // Prevent form submission
                toastr.error("Gift Card Name should not contain any special characters");
            } else if (pattern.test(coupon)) {
                event.preventDefault(); // Prevent form submission
                toastr.error("Coupon Name should not contain any special characters");
            } else if (pattern.test(product)) {
                event.preventDefault(); // Prevent form submission
                toastr.error("Product Name should not contain any special characters");
            } else if (alphapattern.test(questions)) {
                event.preventDefault(); // Prevent form submission
                toastr.error("Number of questions should not contain any alphabets or special characters");
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: 'Select Qualifications',
                allowClear: true,
                scrollAfterSelect: true,
                width: '100%',
                closeOnSelect: false,
                scrollAfterSelect: true
            });
        });
    </script>

    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph,
            Indent,
            IndentBlock,
            BlockQuote,
            Autoformat,
            TextTransformation,
            Code,
            Strikethrough,
            Subscript,
            Superscript,
            Underline,
            CodeBlock,
            FindAndReplace,
            Heading,
            Highlight,
            AutoLink,
            Link,
            List,
            MediaEmbed,
            Clipboard,
            Table,
            TableToolbar,
            Alignment
        } from 'ckeditor5';

        ClassicEditor
            .create(document.querySelector('#description'), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph, Indent, IndentBlock, BlockQuote, Autoformat,
                    TextTransformation, Code, Strikethrough, Subscript, Superscript, Underline, CodeBlock,
                    FindAndReplace, Heading, Highlight, AutoLink, Link, List, MediaEmbed, Clipboard, Table,
                    TableToolbar, Alignment
                ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikethrough', 'code', 'subscript',
                        'superscript', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'bulletedList', 'numberedList', 'insertTable',
                        'alignment', '|', 'outdent', 'indent', 'blockquote', 'mediaEmbed', 'codeBlock',
                        'findAndReplace', 'heading', 'highlight', 'link', 'fontBackgroundColor'
                    ],
                    shouldNotGroupWhenFull: true
                },
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                }
            })
            .then( /* ... */ )
            .catch( /* ... */ );

        ClassicEditor
            .create(document.querySelector('#gift-card-description'), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph, Indent, IndentBlock, BlockQuote, Autoformat,
                    TextTransformation, Code, Strikethrough, Subscript, Superscript, Underline, CodeBlock,
                    FindAndReplace, Heading, Highlight, AutoLink, Link, List, MediaEmbed, Clipboard, Table,
                    TableToolbar, Alignment
                ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikethrough', 'code', 'subscript',
                        'superscript', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'bulletedList', 'numberedList', 'insertTable',
                        'alignment', '|', 'outdent', 'indent', 'blockquote', 'mediaEmbed', 'codeBlock',
                        'findAndReplace', 'heading', 'highlight', 'link', 'fontBackgroundColor'
                    ],
                    shouldNotGroupWhenFull: true
                },
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                }
            })
            .then( /* ... */ )
            .catch( /* ... */ );

        ClassicEditor
            .create(document.querySelector('#coupon_description'), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph, Indent, IndentBlock, BlockQuote, Autoformat,
                    TextTransformation, Code, Strikethrough, Subscript, Superscript, Underline, CodeBlock,
                    FindAndReplace, Heading, Highlight, AutoLink, Link, List, MediaEmbed, Clipboard, Table,
                    TableToolbar, Alignment
                ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikethrough', 'code', 'subscript',
                        'superscript', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'bulletedList', 'numberedList', 'insertTable',
                        'alignment', '|', 'outdent', 'indent', 'blockquote', 'mediaEmbed', 'codeBlock',
                        'findAndReplace', 'heading', 'highlight', 'link', 'fontBackgroundColor'
                    ],
                    shouldNotGroupWhenFull: true
                },
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                }
            })
            .then( /* ... */ )
            .catch( /* ... */ );

        ClassicEditor
            .create(document.querySelector('#product_description'), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph, Indent, IndentBlock, BlockQuote, Autoformat,
                    TextTransformation, Code, Strikethrough, Subscript, Superscript, Underline, CodeBlock,
                    FindAndReplace, Heading, Highlight, AutoLink, Link, List, MediaEmbed, Clipboard, Table,
                    TableToolbar, Alignment
                ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikethrough', 'code', 'subscript',
                        'superscript', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'bulletedList', 'numberedList', 'insertTable',
                        'alignment', '|', 'outdent', 'indent', 'blockquote', 'mediaEmbed', 'codeBlock',
                        'findAndReplace', 'heading', 'highlight', 'link', 'fontBackgroundColor'
                    ],
                    shouldNotGroupWhenFull: true
                },
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                }
            })
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>

    <script>
        document.getElementById('gift-card-img').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const img = document.createElement('img');
            const errorMessageQuestion = document.getElementById('error-message-gift-card');
            const questionImage = document.getElementById('gift-card-image');
            const removeQuestionImageBtn = document.getElementById(
                'remove-gift-card-image-btn'); // Reference to remove button

            // Clear any previous error message
            errorMessageQuestion.style.display = 'none';
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none'; // Hide the remove button initially

            if (file) {
                // Check the file format
                const fileType = file.type;
                const validFormats = ['image/png', 'image/jpeg', 'image/jpg'];

                if (!validFormats.includes(fileType)) {
                    errorMessageQuestion.textContent = "Error: Image must be in PNG, JPG, or JPEG format.";
                    errorMessageQuestion.style.display = 'block';
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    img.src = e.target.result;

                    img.onload = function() {
                        // Check the dimensions of the image
                        const width = img.naturalWidth;
                        const height = img.naturalHeight;

                        if (width >= 1000 || height >= 400) {
                            errorMessageQuestion.textContent =
                                "Error: Image dimensions must be 1000x400 pixels or less.";
                            errorMessageQuestion.style.display = 'block';
                        } else {
                            // If valid, display the image
                            questionImage.src = img.src;
                            questionImage.style.display = 'block';

                            // Show the remove button
                            removeQuestionImageBtn.style.display = 'block';
                        }
                    }
                }

                reader.readAsDataURL(file);
            }
        });

        // Add event listener to the "remove" button to reset the image input
        document.getElementById('remove-gift-card-image-btn').addEventListener('click', function() {
            const questionImage = document.getElementById('gift-card-image');
            const removeQuestionImageBtn = document.getElementById('remove-gift-card-image-btn');
            const imageInput = document.getElementById('gift-card-img');
            const errorMessageQuestion = document.getElementById('error-message-gift-card');

            // Hide the image and remove the preview
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none';
            errorMessageQuestion.style.display = 'none';

            // Reset the file input to allow the user to select a new file
            imageInput.value = ''; // This clears the input file field
        });

        document.getElementById('coupon-img').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const img = document.createElement('img');
            const errorMessageQuestion = document.getElementById('error-message-coupon');
            const questionImage = document.getElementById('coupon-image');
            const removeQuestionImageBtn = document.getElementById(
                'remove-coupon-image-btn'); // Reference to remove button

            // Clear any previous error message
            errorMessageQuestion.style.display = 'none';
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none'; // Hide the remove button initially

            if (file) {
                // Check the file format
                const fileType = file.type;
                const validFormats = ['image/png', 'image/jpeg', 'image/jpg'];

                if (!validFormats.includes(fileType)) {
                    errorMessageQuestion.textContent = "Error: Image must be in PNG, JPG, or JPEG format.";
                    errorMessageQuestion.style.display = 'block';
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    img.src = e.target.result;

                    img.onload = function() {
                        // Check the dimensions of the image
                        const width = img.naturalWidth;
                        const height = img.naturalHeight;

                        if (width >= 1000 || height >= 400) {
                            errorMessageQuestion.textContent =
                                "Error: Image dimensions must be 1000x400 pixels or less.";
                            errorMessageQuestion.style.display = 'block';
                        } else {
                            // If valid, display the image
                            questionImage.src = img.src;
                            questionImage.style.display = 'block';

                            // Show the remove button
                            removeQuestionImageBtn.style.display = 'block';
                        }
                    }
                }

                reader.readAsDataURL(file);
            }
        });

        // Add event listener to the "remove" button to reset the image input
        document.getElementById('remove-coupon-image-btn').addEventListener('click', function() {
            const questionImage = document.getElementById('coupon-image');
            const removeQuestionImageBtn = document.getElementById('remove-coupon-image-btn');
            const imageInput = document.getElementById('coupon-img');
            const errorMessageQuestion = document.getElementById('error-message-coupon');

            // Hide the image and remove the preview
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none';
            errorMessageQuestion.style.display = 'none';

            // Reset the file input to allow the user to select a new file
            imageInput.value = ''; // This clears the input file field
        });

        document.getElementById('product-img').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const img = document.createElement('img');
            const errorMessageQuestion = document.getElementById('error-message-product');
            const questionImage = document.getElementById('product-image');
            const removeQuestionImageBtn = document.getElementById(
                'remove-product-image-btn'); // Reference to remove button

            // Clear any previous error message
            errorMessageQuestion.style.display = 'none';
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none'; // Hide the remove button initially

            if (file) {
                // Check the file format
                const fileType = file.type;
                const validFormats = ['image/png', 'image/jpeg', 'image/jpg'];

                if (!validFormats.includes(fileType)) {
                    errorMessageQuestion.textContent = "Error: Image must be in PNG, JPG, or JPEG format.";
                    errorMessageQuestion.style.display = 'block';
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    img.src = e.target.result;

                    img.onload = function() {
                        // Check the dimensions of the image
                        const width = img.naturalWidth;
                        const height = img.naturalHeight;

                        if (width >= 1000 || height >= 400) {
                            errorMessageQuestion.textContent =
                                "Error: Image dimensions must be 1000x400 pixels or less.";
                            errorMessageQuestion.style.display = 'block';
                        } else {
                            // If valid, display the image
                            questionImage.src = img.src;
                            questionImage.style.display = 'block';

                            // Show the remove button
                            removeQuestionImageBtn.style.display = 'block';
                        }
                    }
                }

                reader.readAsDataURL(file);
            }
        });

        // Add event listener to the "remove" button to reset the image input
        document.getElementById('remove-product-image-btn').addEventListener('click', function() {
            const questionImage = document.getElementById('product-image');
            const removeQuestionImageBtn = document.getElementById('remove-product-image-btn');
            const imageInput = document.getElementById('product-img');
            const errorMessageQuestion = document.getElementById('error-message-product');

            // Hide the image and remove the preview
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none';
            errorMessageQuestion.style.display = 'none';

            // Reset the file input to allow the user to select a new file
            imageInput.value = ''; // This clears the input file field
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".navbar-toggler").on("click", function() {
                $("body").toggleClass("nav-open");
            });
        });
    </script>

</body>

</html>
<?php /**PATH C:\Users\prafu\Desktop\laravel-kgamify\resources\views/game_mode.blade.php ENDPATH**/ ?>