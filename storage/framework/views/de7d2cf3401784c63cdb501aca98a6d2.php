<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="<?php echo e(asset('assets/img/KLOGO.png')); ?>" type="image/icon type" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <!-- fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,300,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script data-require="jquery" data-semver="2.1.3" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.min.js"></script>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.css" />
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
            font-weight: 100;
            font-size: 12px;
            line-height: 30px;
            color: #777;
            background: #4caf50;
        }

        .content {
            max-height: 85vh;
            overflow-y: auto;
        }

        .container {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }

        .ck-editor__editable_inline:not(.ck-comment__input *) {
            height: 130px;
            overflow-y: auto;
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

        #contact #btn {
            display: flex;
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

        #submit_btn {
            margin-top: 7px;
            margin-bottom: 10px;
            margin-left: 23.5rem;
            width: 20%;
        }

        #contact #btn button[type="button"]:hover {
            background-color: #e65100;
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table thead th {
            background-color: #f9f9f9;
            color: #333;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
    </style>

    <!-- CSS FontAwesome -->
    <script src="https://kit.fontawesome.com/52f3e32cf9.js" crossorigin="anonymous"></script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Add Questions | KGamify</title>

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
                            <form method="post" action="<?php echo e(route('question.store')); ?>" enctype="multipart/form-data"
                                id="manual_form">
                                <?php echo csrf_field(); ?>
                                <div class="card-header">
                                    <div class="container">
                                        <div id="contact">
                                            <fieldset>
                                                <p
                                                    style="text-align: center;color: #ff9d5c; font-size: 30px;font-weight: bold; ">
                                                    Add Question</p>

                                                <hr style="height:2px; border:none;  background-color:#ff9d5c;">
                                                <br>
                                            </fieldset>
                                            <!-- <fieldset id="btn"> -->
                                            <p
                                                style="color: #ff9d5c;font-size: 22px;font-weight: bold;margin-bottom:0px; ">
                                                Add Question Sets</p>
                                            <p style="color: #00c800;font-size: 18px">Questions in the Championship will
                                                appear from Questions under the question set selected from here</p>
                                            <select class="js-example-basic-multiple" id="label_name_2" name="labels[]"
                                                multiple="multiple">
                                                <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($label); ?>"><?php echo e($label); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <br>
                                            <br>
                                            <p
                                                style="color: #ff9d5c;font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem;">
                                                Question Text *
                                            </p>
                                            <textarea name="q_text" id="question_text" placeholder="Write Question here...."></textarea>
                                            <input type="hidden" name="q_text_value" id="question_text_value">
                                            <p
                                                style="color: #ff9d5c;font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem; ">
                                                Add Question
                                                image</p>
                                            <!-- File input container -->
                                            <div style="margin-bottom: 20px;">
                                                <input type="file" id="question-img" name="img0" accept="image/*">
                                            </div>

                                            <!-- Image preview container -->
                                            <div id="image-container" style="margin-top: 15px;">
                                                <div style="position: relative; display: inline-block;">
                                                    <img id="question-image"
                                                        style="display: none; max-width: 100%; height: auto;" />
                                                    <button type="button" id="remove-question-image-btn"
                                                        style="display: none; background-color: white; border: 2px solid white; color: black; font-size: 16px;font-weight:bold; position: absolute; top: -5px; right: -5px; z-index: 10; border-radius: 50%; width: 24px; height: 24px; text-align: center; justify-content: center; align-items: center; padding: 0;">&times;</button>
                                                </div>
                                            </div>
                                            <p id="error-message-question"
                                                style="color: red; font-size: 16px; display: none;"></p>

                                            <!-- ended 3rd one -->
                                            <br>
                                            <fieldset>
                                                <p
                                                    style="color: #ff9d5c; font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem;">
                                                    Option 1 *</p>
                                                <textarea name="option_1" id="option_one" placeholder="Write Text here...."></textarea>
                                            </fieldset>
                                            <p
                                                style="color: #ff9d5c;font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem;">
                                                option 1 image
                                            </p>

                                            <!-- File input container -->
                                            <div style="margin-bottom: 20px;">
                                                <input type="file" id="option1-img" name="img1" accept="image/*">
                                            </div>

                                            <!-- Image preview container -->
                                            <div id="image-container" style="margin-top: 15px;">
                                                <div style="position: relative; display: inline-block;">
                                                    <img id="option1-image"
                                                        style="display: none; max-width: 100%; height: auto;" />
                                                    <button type="button" id="remove-option1-image-btn"
                                                        style="display: none; background-color: white; border: 2px solid white; color: black; font-size: 16px;font-weight:bold; position: absolute; top: -5px; right: -5px; z-index: 10; border-radius: 50%; width: 24px; height: 24px; text-align: center; justify-content: center; align-items: center; padding: 0;">&times;</button>
                                                </div>
                                            </div>
                                            <p id="error-message-option1"
                                                style="color: red; font-size: 16px; display: none;"></p>
                                            <br>

                                            <fieldset>
                                                <p
                                                    style="color: #ff9d5c; font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem;">
                                                    Option 2
                                                    *</p>
                                                <textarea name="option_2" id="option_two" placeholder="Write Text here...."></textarea>

                                                <p
                                                    style="color: #ff9d5c;font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem; ">
                                                    option 2
                                                    image</p>

                                                <!-- File input container -->
                                                <div style="margin-bottom: 20px;">
                                                    <input type="file" id="option2-img" name="img2"
                                                        accept="image/*">
                                                </div>

                                                <!-- Image preview container -->
                                                <div id="image-container" style="margin-top: 15px;">
                                                    <div style="position: relative; display: inline-block;">
                                                        <img id="option2-image"
                                                            style="display: none; max-width: 100%; height: auto;" />
                                                        <button type="button" id="remove-option2-image-btn"
                                                            style="display: none; background-color: white; border: 2px solid white; color: black; font-size: 16px;font-weight:bold; position: absolute; top: -5px; right: -5px; z-index: 10; border-radius: 50%; width: 24px; height: 24px; text-align: center; justify-content: center; align-items: center; padding: 0;">&times;</button>
                                                    </div>
                                                </div>
                                                <p id="error-message-option2"
                                                    style="color: red; font-size: 16px; display: none;"></p>
                                            </fieldset>
                                            <br>

                                            <fieldset>
                                                <p
                                                    style="color: #ff9d5c; font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem; ">
                                                    Option 3 *</p>
                                                <textarea name="option_3" id="option_three" placeholder="Write Text here...."></textarea>
                                            </fieldset>

                                            <p
                                                style="color: #ff9d5c;font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem; ">
                                                option 3 image</p>

                                            <!-- File input container -->
                                            <div style="margin-bottom: 20px;">
                                                <input type="file" id="option3-img" name="img3"
                                                    accept="image/*">
                                            </div>

                                            <!-- Image preview container -->
                                            <div id="image-container" style="margin-top: 15px;">
                                                <div style="position: relative; display: inline-block;">
                                                    <img id="option3-image"
                                                        style="display: none; max-width: 100%; height: auto;" />
                                                    <button type="button" id="remove-option3-image-btn"
                                                        style="display: none; background-color: white; border: 2px solid white; color: black; font-size: 16px;font-weight:bold; position: absolute; top: -5px; right: -5px; z-index: 10; border-radius: 50%; width: 24px; height: 24px; text-align: center; justify-content: center; align-items: center; padding: 0;">&times;</button>
                                                </div>
                                            </div>
                                            <p id="error-message-option3"
                                                style="color: red; font-size: 16px; display: none;"></p>
                                            <br>


                                            <fieldset>
                                                <p
                                                    style="color: #ff9d5c; font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem; ">
                                                    Option 4
                                                    *</p>
                                                <textarea name="option_4" id="option_four" placeholder="Write Text here...."></textarea>

                                            </fieldset>
                                            <p
                                                style="color: #ff9d5c;font-size: 22px;font-weight: bold;margin-top:1rem;margin-bottom:0.3rem; ">
                                                option 4
                                                image</p>

                                            <!-- File input container -->
                                            <div style="margin-bottom: 20px;">
                                                <input type="file" id="option4-img" name="img4"
                                                    accept="image/*">
                                            </div>

                                            <!-- Image preview container -->
                                            <div id="image-container" style="margin-top: 15px;">
                                                <div style="position: relative; display: inline-block;">
                                                    <img id="option4-image"
                                                        style="display: none; max-width: 100%; height: auto;" />
                                                    <button type="button" id="remove-option4-image-btn"
                                                        style="display: none; background-color: white; border: 2px solid white; color: black; font-size: 16px;font-weight:bold; position: absolute; top: -5px; right: -5px; z-index: 10; border-radius: 50%; width: 24px; height: 24px; text-align: center; justify-content: center; align-items: center; padding: 0;">&times;</button>
                                                </div>
                                            </div>
                                            <p id="error-message-option4"
                                                style="color: red; font-size: 16px; display: none;"></p>
                                            <br>

                                            <!-- dsaddsadsasa -->
                                            <fieldset>
                                                <p style="color: #ff9d5c; font-size: 22px; font-weight: bold;">Correct
                                                    Option *</p>
                                                <div style="display: grid; grid-template-columns: repeat(2, 1fr); min-width: 89ch; font-size: 16px; grid-column-gap: 5px;"
                                                    class="select" multiple>
                                                    <div>
                                                        <input style="border-color: #ff9d5c;margin-left:7rem"
                                                            type="checkbox" id="correct_option_1"
                                                            name="correct_option[]" value="option_1">
                                                        <label for="correct_option_1" style="color:black;">Option
                                                            1</label><br>
                                                    </div>
                                                    <div>
                                                        <input style="border-color: #ff9d5c;margin-left:0rem"
                                                            type="checkbox" id="correct_option_2"
                                                            name="correct_option[]" value="option_2">
                                                        <label for="correct_option_2" style="color:black;">Option
                                                            2</label><br>
                                                    </div>
                                                    <div style="grid-column: 1;">
                                                        <input style="border-color: #ff9d5c;margin-left:7rem"
                                                            type="checkbox" id="correct_option_3"
                                                            name="correct_option[]" value="option_3">
                                                        <label for="correct_option_3" style="color:black;">Option
                                                            3</label><br>
                                                    </div>
                                                    <div style="grid-column: 2;">
                                                        <input style="border-color: #ff9d5c;margin-left:0rem"
                                                            type="checkbox" id="correct_option_4"
                                                            name="correct_option[]" value="option_4">
                                                        <label for="correct_option_4" style="color:black;">Option
                                                            4</label><br>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <br>

                                            <fieldset>
                                                <p
                                                    style="color: #ff9d5c; font-size: 22px; width: 100%;font-weight: bold; ">
                                                    Expected Time *</p>
                                                <input
                                                    placeholder="Enter the expected time to solve question. Format - HH:MM:SS"
                                                    id="expected_time" type="text" name="expected_time"
                                                    tabindex="1" required />
                                            </fieldset>
                                            <p style="color: #00c800;font-size: 15px">Enter the time strictly in
                                                HH:MM:SS format <br> For Example If you want to enter 20 seconds then
                                                the format for it will be 00:00:20</p>
                                            <br>
                                            <fieldset>
                                                <p
                                                    style="color: #ff9d5c; font-size: 22px; width: 100%;font-weight: bold; ">
                                                    Coins *</p>
                                                <input placeholder="Enter Number of Coins" id="total_coins"
                                                    type="text" name="total_coins" tabindex="1" required />
                                            </fieldset>

                                            <br>
                                            <br>
                                            <fieldset>
                                                <input type="submit" id="manual_form" value="Add Question"
                                                    style="font-size: 15px; padding: 10px 25px;background-color: #ff9d5c; color: white;border-radius: 8px;border: #ff9d5c;" />
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
            $('.js-example-basic-multiple').select2({
                placeholder: 'Select a Label',
                allowClear: true,
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
            .create(document.querySelector('#question_text'), {
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
            .then()
            .catch();

        ClassicEditor
            .create(document.querySelector('#option_one'), {
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
            .create(document.querySelector('#option_two'), {
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
            .create(document.querySelector('#option_three'), {
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
            .create(document.querySelector('#option_four'), {
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
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("manual_form");

            form.addEventListener("submit", function(event) {
                event.preventDefault();

                // Validate Coins
                const coins = document.getElementById("total_coins").value;
                const coinPattern = /[!@#$%^&*()+\=\[\]{};':"\\|,.<>\/?_a-zA-Z-]+/;

                if (coinPattern.test(coins)) {
                    toastr.error(
                        "Total Coins must be a number and should not contain alphabets or special characters."
                    );
                    return;
                }

                if (parseInt(coins) <= 0 || parseInt(coins) > 100) {
                    toastr.error("Total Coins must be between 1 and 100.");
                    return;
                }

                // Validate Time
                const input = document.getElementById("expected_time");
                const timeFormat = /^([01]\d|2[0-3]):([0-5]\d):([0-5]\d)$/;

                if (!timeFormat.test(input.value.trim())) {
                    toastr.error("Invalid time format! Please enter time in HH:MM:SS format.");
                    return;
                }

                // Validate Question Text
                const questionText = document.getElementById("question_text").value.trim();
                if (questionText === "") {
                    toastr.error("Question Text cannot be empty.");
                    return;
                }

                // Validate at least one correct option
                const correctOptions = document.querySelectorAll("input[name='correct_option[]']:checked");
                if (correctOptions.length === 0) {
                    toastr.error("Please select at least one correct option.");
                    return;
                }

                form.submit();
            });
        });
    </script>

    <script>
        document.getElementById('question-img').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const img = document.createElement('img');
            const errorMessageQuestion = document.getElementById('error-message-question');
            const questionImage = document.getElementById('question-image');
            const removeQuestionImageBtn = document.getElementById(
                'remove-question-image-btn'); // Reference to remove button

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

                        if (width >= 1200 || height >= 500) {
                            errorMessageQuestion.textContent =
                                "Error: Image dimensions must be 1200x500 pixels or less.";
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
        document.getElementById('remove-question-image-btn').addEventListener('click', function() {
            const questionImage = document.getElementById('question-image');
            const removeQuestionImageBtn = document.getElementById('remove-question-image-btn');
            const imageInput = document.getElementById('question-img');
            const errorMessageQuestion = document.getElementById('error-message-question');

            // Hide the image and remove the preview
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none';
            errorMessageQuestion.style.display = 'none';

            // Reset the file input to allow the user to select a new file
            imageInput.value = ''; // This clears the input file field
        });


        document.getElementById('option1-img').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const img = document.createElement('img');
            const errorMessageOption1 = document.getElementById('error-message-option1');
            const option1Image = document.getElementById('option1-image');
            const removeOption1ImageBtn = document.getElementById(
                'remove-option1-image-btn'); // Reference to remove button

            // Clear any previous error message
            errorMessageOption1.style.display = 'none';
            option1Image.style.display = 'none';
            removeOption1ImageBtn.style.display = 'none'; // Hide the remove button initially

            if (file) {
                // Check the file format
                const fileType = file.type;
                const validFormats = ['image/png', 'image/jpeg', 'image/jpg'];

                if (!validFormats.includes(fileType)) {
                    errorMessageOption1.textContent = "Error: Image must be in PNG, JPG, or JPEG format.";
                    errorMessageOption1.style.display = 'block';
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    img.src = e.target.result;

                    img.onload = function() {
                        // Check the dimensions of the image
                        const width = img.naturalWidth;
                        const height = img.naturalHeight;

                        if (width >= 1200 || height >= 500) {
                            errorMessageOption1.textContent =
                                "Error: Image dimensions must be 1200x500 pixels or less.";
                            errorMessageOption1.style.display = 'block';
                        } else {
                            // If valid, display the image
                            option1Image.src = img.src;
                            option1Image.style.display = 'block';

                            // Show the remove button
                            removeOption1ImageBtn.style.display = 'block';
                        }
                    }
                }

                reader.readAsDataURL(file);
            }
        });

        // Add event listener to the "remove" button to reset the image input
        document.getElementById('remove-option1-image-btn').addEventListener('click', function() {
            const option1Image = document.getElementById('option1-image');
            const removeOption1ImageBtn = document.getElementById('remove-option1-image-btn');
            const imageInputOption1 = document.getElementById('option1-img');
            const errorMessageOption1 = document.getElementById('error-message-option1');

            // Hide the image and remove the preview
            option1Image.style.display = 'none';
            removeOption1ImageBtn.style.display = 'none';
            errorMessageOption1.style.display = 'none';

            // Reset the file input to allow the user to select a new file
            imageInputOption1.value = ''; // This clears the input file field
        });

        document.getElementById('option2-img').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const img = document.createElement('img');
            const errorMessageQuestion = document.getElementById('error-message-option2');
            const questionImage = document.getElementById('option2-image');
            const removeQuestionImageBtn = document.getElementById(
                'remove-option2-image-btn'); // Reference to remove button

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

                        if (width >= 1200 || height >= 500) {
                            errorMessageQuestion.textContent =
                                "Error: Image dimensions must be 1200x500 pixels or less.";
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
        document.getElementById('remove-option2-image-btn').addEventListener('click', function() {
            const questionImage = document.getElementById('option2-image');
            const removeQuestionImageBtn = document.getElementById('remove-option2-image-btn');
            const imageInput = document.getElementById('option2-img');
            const errorMessageQuestion = document.getElementById('error-message-option2');

            // Hide the image and remove the preview
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none';
            errorMessageQuestion.style.display = 'none';

            // Reset the file input to allow the user to select a new file
            imageInput.value = ''; // This clears the input file field
        });

        document.getElementById('option3-img').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const img = document.createElement('img');
            const errorMessageQuestion = document.getElementById('error-message-option3');
            const questionImage = document.getElementById('option3-image');
            const removeQuestionImageBtn = document.getElementById(
                'remove-option3-image-btn'); // Reference to remove button

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

                        if (width >= 1200 || height >= 500) {
                            errorMessageQuestion.textContent =
                                "Error: Image dimensions must be 1200x500 pixels or less.";
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
        document.getElementById('remove-option3-image-btn').addEventListener('click', function() {
            const questionImage = document.getElementById('option3-image');
            const removeQuestionImageBtn = document.getElementById('remove-option3-image-btn');
            const imageInput = document.getElementById('option3-img');
            const errorMessageQuestion = document.getElementById('error-message-option3');

            // Hide the image and remove the preview
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none';
            errorMessageQuestion.style.display = 'none';

            // Reset the file input to allow the user to select a new file
            imageInput.value = ''; // This clears the input file field
        });

        document.getElementById('option4-img').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const img = document.createElement('img');
            const errorMessageQuestion = document.getElementById('error-message-option4');
            const questionImage = document.getElementById('option4-image');
            const removeQuestionImageBtn = document.getElementById(
                'remove-option4-image-btn'); // Reference to remove button

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

                        if (width >= 1200 || height >= 500) {
                            errorMessageQuestion.textContent =
                                "Error: Image dimensions must be 1200x500 pixels or less.";
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
        document.getElementById('remove-option4-image-btn').addEventListener('click', function() {
            const questionImage = document.getElementById('option4-image');
            const removeQuestionImageBtn = document.getElementById('remove-option4-image-btn');
            const imageInput = document.getElementById('option4-img');
            const errorMessageQuestion = document.getElementById('error-message-option4');

            // Hide the image and remove the preview
            questionImage.style.display = 'none';
            removeQuestionImageBtn.style.display = 'none';
            errorMessageQuestion.style.display = 'none';
            imageInput.value = '';
        });
    </script>

</body>

</html>
<?php /**PATH C:\Users\prafu\Desktop\laravel-kgamify\resources\views/question.blade.php ENDPATH**/ ?>