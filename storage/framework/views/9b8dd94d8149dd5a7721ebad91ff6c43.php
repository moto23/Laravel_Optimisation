<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="<?php echo e(asset('assets/img/KLOGO.png')); ?>" type="image/icon type" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />

    <script data-require="jquery" data-semver="2.1.3" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
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
            height: 85vh;
            overflow-y: auto;
        }

        .container {
            max-width: 400px;
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

        table.dataTable td {
            font-size: 13px;
        }

        table.dataTable th {
            font-size: 12px;
        }

        .dataTables_scrollHeadInner,
        .table {
            width: 100% !important
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
            margin: 22px 39px 46px;
            padding: 7px 27px;
            font-size: 17px;
            border-radius: 8px;
        }

        /* Container for the select element with the arrow */
        .dropdown-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .custom-select {
            appearance: none;
            /* Removes the default arrow */
            -webkit-appearance: none;
            -moz-appearance: none;
            padding-right: 30px;
            /* Space for the custom arrow */
            background-color: #fff;
            /* Adjust background if needed */
            width: 100%;
        }

        /* Custom arrow */
        .dropdown-container::after {
            /* content: '\25BC'; Unicode for down arrow */
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
            /* Prevents arrow from blocking interaction with the select */
            font-size: 12px;
            color: #555;
            cursor: pointer;
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
    <title>ALL MODES | KGamify</title>


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
                <div style="height: 100vh;" class="row">
                    <div class="col-md-12">
                        <div class="card demo-icons">
                            <div class="card-header">
                                <div class="container">
                                    <!-- 1st one -->
                                    <div id="contact">
                                        <fieldset>
                                            <p
                                                style="text-align: center;color: #ff9d5c; font-size: 30px;font-weight: bold; ">
                                                Game Modes List</p>
                                            <hr style="height:2px; border:none;  background-color:#ff9d5c;">
                                            <br>
                                        </fieldset>
                                        <div class="container">
                                            <table id="myTable" class="table-striped cell-border">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No</th>
                                                        <th>Mode ID</th>
                                                        <th>Action</th>
                                                        <th>Game Mode</th>
                                                        <th>Label Name</th>
                                                        <th>Championship</th>
                                                        <th>Gift Type</th>
                                                        <th>Gift Name</th>
                                                        <th>No Of Questions</th>
                                                        <th>Total Time</th>
                                                        <th>User Qualification</th>
                                                        <th>Creation Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $modes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($mode['serial_no']); ?></td>
                                                            <td><?php echo e($mode['unique_id']); ?></td>
                                                            <td>
                                                                <a class="editbtn"
                                                                    data-mode-id="<?php echo e($mode['mode_id']); ?>">
                                                                    <i class="fas fa-solid fa-pen-to-square"
                                                                        style="color:#ff9d5c;margin-right:10px;cursor:pointer;"></i>
                                                                </a>
                                                            </td>
                                                            <td><?php echo e($mode['mode_name']); ?></td>
                                                            <td><?php echo e($mode['label_name']); ?></td>
                                                            <td><?php echo e($mode['champ_name']); ?></td>
                                                            <td><?php echo e($mode['gift_type']); ?></td>
                                                            <td><?php echo e($mode['gift_name']); ?></td>
                                                            <td><?php echo e($mode['no_of_question']); ?></td>
                                                            <td><?php echo e($mode['time_minutes']); ?></td>
                                                            <td><?php echo e($mode['user_qualification']); ?></td>
                                                            <td><?php echo e($mode['created_at_ist']); ?></td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
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
    <?php if(session('error')): ?>
        <script>
            toastr.error("<?php echo e(session('error')); ?>");
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
        $(document).ready(function() {
            $('#myTable').DataTable({
                lengthMenu: [
                    [500, 1000, 1500, -1],
                    [500, 1000, 1500, 'All']
                ],
                autoWidth: false,
                scrollX: true,
                columnDefs: [{
                        targets: [0, 10],
                        className: 'dt-right'
                    },
                    {
                        targets: [1, 2, 3, 4, 5, 6, 7, 8, 9],
                        className: 'dt-center'
                    },
                    {
                        width: '10%',
                        targets: [1, 2]
                    }
                ]
            }).columns.adjust();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {
                $tr = $(this).closest('tr');

                const mode_id = $(this).data('mode-id');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                const champ_name = data[5];
                $.ajax({
                    url: 'check_champ_status.php',
                    method: 'POST',
                    data: {
                        champ_name: champ_name
                    },
                    success: function(response) {
                        if (response === 'inactive') {
                            const editUrl =
                                `edit_game_mode.php?srno=${encodeURIComponent(data[0])}&mode_id=${encodeURIComponent(mode_id)}&mode_name=${encodeURIComponent(data[3])}&label_name=${encodeURIComponent(data[4])}&champ_name=${encodeURIComponent(data[5])}&gift_type=${encodeURIComponent(data[6])}&gift_name=${encodeURIComponent(data[7])}&no_of_question=${encodeURIComponent(data[8])}&time_minutes=${encodeURIComponent(data[9])}&user_qualification=${encodeURIComponent(data[10])}&created_at=${encodeURIComponent(data[11])}`;
                            window.location.href = editUrl;
                        } else {
                            toastr.error(
                                'The championship is active. You can only edit when the championship is deactivated'
                            );
                        }
                    },
                    error: function() {
                        toastr.error(
                            'An error occurred while checking the championship status.');
                    }
                });
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\prafu\Desktop\laravel-kgamify\resources\views/all_game_modes.blade.php ENDPATH**/ ?>