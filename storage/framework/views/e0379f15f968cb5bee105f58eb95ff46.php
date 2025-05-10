<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="./assets/img/KLOGO.png" type="image/icon type" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <!-- fonts -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,300,0,0" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css"
        integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <script data-require="jquery" data-semver="2.1.3" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script data-require="bootstrap" data-semver="3.3.2"
        src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script data-require="angular.js@1.3.x" src="https://code.angularjs.org/1.3.14/angular.js" data-semver="1.3.14">
    </script>
    <script data-require="ui-bootstrap"
        src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.13.0/ui-bootstrap-tpls.min.js"
        data-semver="0.13.0"></script>

    <script src="https://cdn.tiny.cloud/1/9au79qa9zvfug4om11srlv68xwit01e8deqplkrzxbecpbj1/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"
        integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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


    <!-- Choose multiple options -->


    <style>
        body {
            font-weight: 100;
            font-size: 12px;
            line-height: 30px;
            color: #777;
            background: #4caf50;
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

        /* .select2-container {
            z-index: 1000 !important;
        } */

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

        #popup_window {
            display: none;
            position: fixed;
            top: 50%;
            left: 350px;
            transform: translate(0, -50%);
            background: white;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 2000;
            width: 70%;
            max-height: 80%;
            overflow-y: auto;
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

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>

    <!-- CSS FontAwesome -->
    <script src="https://kit.fontawesome.com/52f3e32cf9.js" crossorigin="anonymous"></script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Bulk Importer | KGamify</title>

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
                            <!-- form start  -->
                            <form method="post" action="<?php echo e(route('bulk_question.store')); ?>"
                                enctype="multipart/form-data" id="importer_form">

                                <!-- Download Template Button -->
                                <div style="position: absolute; top: 10px; right: 10px;">
                                    <button type="button"
                                        style="background-color: #ff9d5c; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; display: flex; align-items: center; width: 100%;">
                                        <i id="downloadIcon" class="fas fa-download" style="margin-right: 5px;"></i>
                                        <span id="downloadText">Download Template</span>
                                    </button>
                                </div>

                                <div class="card-header">
                                    <div class="container">
                                        <!-- 1st one -->
                                        <div id="contact">
                                            <fieldset>
                                                <p
                                                    style="text-align: center;color: #ff9d5c; font-size: 30px;font-weight: bold; ">
                                                    Add Questions in Bulk</p>

                                                <hr style="height:1px; border:none;  background-color:#ff9d5c;">
                                                <br>
                                                <br>
                                            </fieldset>

                                            <!-- dsaddsadsasa -->
                                            <!-- <fieldset style="display: grid;height:fit-content;"> -->
                                            <p style="color: #ff9d5c;font-size: 22px;font-weight: bold; ">Add Labels</p>
                                            <p style="color: #00c800;font-size: 18px">Questions in the Championship will
                                                appear from Questions under the label selected from here</p>

                                            <select class="js-example-basic-multiple-label" id="label_name_1"
                                                name="labels[]" multiple="multiple">
                                                <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($label); ?>"><?php echo e($label); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                            <br>
                                            <br>
                                            <!-- Add file input for additional file above submit button -->
                                            <p
                                                style="color: #ff9d5c; font-size: 22px; font-weight: bold;margin-bottom:0px;">
                                                Import
                                                Questions</p>
                                            <p style="color: #00c800; font-size: 18px;">
                                                For uploading file, please select at least one label from above.
                                                Supported formats: CSV, Excel.
                                            </p>
                                            <div style="display: flex; align-items: center; gap: 10px;">
                                                <input type="file" id="file_input" name="file"
                                                    accept=".csv, .xlsx">
                                                <button type="button" id="view_file_btn"
                                                    style="font-size: 15px; padding: 10px 15px; background-color: #ff9d5c; color: white; border-radius: 8px; border: none; cursor: pointer; display: none;">
                                                    <i class="fas fa-eye"></i> View File
                                                </button>
                                                <button type="button" id="remove_file_btn"
                                                    style="font-size: 15px; padding: 10px; background-color: #ff0000; color: white; border-radius: 8px; border: none; cursor: pointer; display: none;">
                                                    <i class="fas fa-trash-alt"></i> Remove File
                                                </button>
                                            </div>
                                            <div id="popup_window">
                                                <div
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h3 style="color: #ff9d5c;">View File</h3>
                                                    <button type="button" id="close_popup"
                                                        style="font-size: 16px; background: none; border: none; color: #ff9d5c; cursor: pointer;">✖</button>
                                                </div>
                                                <hr>

                                                <!-- Table to display file content in read-only mode -->
                                                <div id="file_content" style="overflow-x: auto;">
                                                    <table id="editable_table"
                                                        style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; text-align: left;">
                                                        <thead>
                                                            <tr style="background-color: #f9f9f9; color: #333;">
                                                                <th style="padding: 10px; border: 1px solid #ddd;">
                                                                    Column 1</th>
                                                                <th style="padding: 10px; border: 1px solid #ddd;">
                                                                    Column 2</th>
                                                                <th style="padding: 10px; border: 1px solid #ddd;">
                                                                    Column 3</th>
                                                                <th style="padding: 10px; border: 1px solid #ddd;">
                                                                    Column 4</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding: 10px; border: 1px solid #ddd;">Data
                                                                    1</td>
                                                                <td style="padding: 10px; border: 1px solid #ddd;">Data
                                                                    2</td>
                                                                <td style="padding: 10px; border: 1px solid #ddd;">Data
                                                                    3</td>
                                                                <td style="padding: 10px; border: 1px solid #ddd;">Data
                                                                    4</td>
                                                            </tr>
                                                            <!-- Additional rows will be appended dynamically -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="overlay"></div>
                                            <br>
                                            <input type="submit" id="importer_submit" value="Add Questions"
                                                style="font-size: 15px; padding: 10px 25px; background-color: #ff9d5c; color: white; border-radius: 8px; border: #ff9d5c;">
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
        document.getElementById("downloadIcon").addEventListener("click", function(event) {
            event.stopPropagation(); // Prevent event bubbling
            window.location.href = "uploads/template_for_questions.csv"; // Trigger download
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple-label').select2({
                placeholder: 'Select a Label',
                allowClear: true,
                width: '100%',
                closeOnSelect: false,
                scrollAfterSelect: true
            });
        });
    </script>
    <script>
        document.getElementById("file_input").addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                document.getElementById("view_file_btn").style.display = "inline-block";
                document.getElementById("remove_file_btn").style.display = "inline-block";

                // Load the file content for display in the table
                const reader = new FileReader();
                reader.onload = function(e) {
                    const content = e.target.result;
                    const rows = content.split("\n"); // Split rows by newline
                    const tableBody = document.querySelector("#editable_table tbody");
                    tableBody.innerHTML = ""; // Clear existing rows

                    rows.forEach((row) => {
                        const cols = row.split(","); // Split columns by comma
                        const tr = document.createElement("tr");

                        cols.forEach((col) => {
                            const td = document.createElement("td");
                            td.textContent = col.trim();
                            td.style.padding = "10px";
                            td.style.border = "1px solid #ddd";
                            tr.appendChild(td);
                        });

                        tableBody.appendChild(tr);
                    });
                };
                reader.readAsText(file); // Adjust for CSV or plain text
            } else {
                document.getElementById("view_file_btn").style.display = "none";
                document.getElementById("remove_file_btn").style.display = "none";
            }
        });

        // Open the popup in view-only mode
        document.getElementById("view_file_btn").addEventListener("click", function() {
            document.getElementById("popup_window").style.display = "block";
            document.getElementById("overlay").style.display = "block";
        });

        // Close the popup
        document.getElementById("close_popup").addEventListener("click", function() {
            document.getElementById("popup_window").style.display = "none";
            document.getElementById("overlay").style.display = "none";
        });

        // Remove the selected file
        document.getElementById("remove_file_btn").addEventListener("click", function() {
            const fileInput = document.getElementById("file_input");
            fileInput.value = ""; // Clear the file input
            document.getElementById("view_file_btn").style.display = "none";
            document.getElementById("remove_file_btn").style.display = "none";
        });

        // Prevent "Add Questions" submission when popup buttons are clicked
        document.getElementById("importer_submit").addEventListener("click", function(event) {
            const fileInput = document.querySelector('#file_input');
            const labels = document.querySelectorAll('select[name="labels[]"] option:checked');

            // Validate that at least one label is selected
            if (labels.length === 0) {
                event.preventDefault();
                toastr.error("Please select at least one label before uploading the file.");
                return;
            }

            // Validate that a file is uploaded
            if (!fileInput || fileInput.files.length === 0) {
                event.preventDefault();
                toastr.error("Please upload a valid CSV or Excel file.");
            }
        });
    </script>

</body>

</html>
<?php /**PATH C:\Users\prafu\Desktop\laravel-kgamify\resources\views/bulk_importer.blade.php ENDPATH**/ ?>