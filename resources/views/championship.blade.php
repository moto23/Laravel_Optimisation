<!DOCTYPE html>
<html lang="en">

<head>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.min.js"></script>
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

        .copyright {
            text-align: center;
        }

        #submit_btn {
            margin-top: 7px;
            margin-bottom: 10px;
            margin-left: 23.5rem;
            width: 20%;
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
    <script src="https://kit.fontawesome.com/52f3e32cf9.js" crossorigin="anonymous"></script>

    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('assets/img/KLOGO.png') }}" type="image/icon type" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>NEW CHAMPIONSHIP | KGamify</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/paper-dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" />
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
        @include('sidebar')
        <div class="main-panel">
            @include('navbar')
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card demo-icons">
                            <!-- form start  -->
                            <form action="{{ route('championship.store') }}" method="post">
                                @csrf
                                <div class="card-header">
                                    <div class="container">
                                        <!-- 1st one -->
                                        <div id="contact">
                                            <fieldset>
                                                <p
                                                    style="text-align: center;color: #ff9d5c; font-size: 30px;font-weight: bold; ">
                                                    Add Championship</p>
                                                <hr style="height:2px; border:none;  background-color:#ff9d5c;">
                                                <br>
                                            </fieldset>

                                            <fieldset>
                                                <p style="color: #ff9d5c; font-size: 22px;font-weight: bold; ">
                                                    Championship Name</p>
                                                <input placeholder="Enter Championship Name" id="championship_name"
                                                    name="champ_name" type="text" tabindex="1" required
                                                    autofocus />
                                            </fieldset>
                                            <br />
                                            <!-- ended 1st one -->

                                            <!-- 2nd one -->
                                            <p style="color: #ff9d5c;font-size: 22px;font-weight: bold; ">Championship
                                                Category</p>
                                            <select class="js-example-basic-multiple" id="category_name"
                                                name="categories[]" multiple="multiple">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category }}">{{ $category }}</option>
                                                @endforeach
                                            </select>
                                            <br><br>
                                            <!-- ended 2nd one -->
                                            <label style="color: #ff9d5c;font-size: 22px;font-weight: bold;"
                                                for="start_date">Start Date:</label>
                                            <input
                                                style="display: flex; min-width: 89ch; font-size: 16px; padding: 8px; border: 1px solid #ff9d5c; border-radius: 4px;"
                                                type="date" id="start_date" name="start_date" required
                                                value="{{ now()->timezone('Asia/Kolkata')->format('Y-m-d') }}"
                                                min="{{ date('Y-m-d') }}"><br>

                                            <label style="color: #ff9d5c;font-size: 22px;font-weight: bold;"
                                                for="start_time">Start Time:</label>
                                            <input
                                                style="display: flex; min-width: 89ch; font-size: 16px; padding: 8px; border: 1px solid #ff9d5c; border-radius: 4px;"
                                                type="time" id="start_time" name="start_time" placeholder="HH:MM:SS"
                                                step="1" required
                                                value="{{ now()->timezone('Asia/Kolkata')->format('H:i:s') }}"><br>

                                            <label style="color: #ff9d5c;font-size: 22px;font-weight: bold;"
                                                for="end_date">End Date:</label>
                                            <input
                                                style="display: flex; min-width: 89ch; font-size: 16px; padding: 8px; border: 1px solid #ff9d5c; border-radius: 4px;"
                                                type="date" id="end_date" name="end_date" required
                                                min="{{ date('Y-m-d') }}"><br>

                                            <label style="color: #ff9d5c;font-size: 22px;font-weight: bold;"
                                                for="end_time">End Time:</label>
                                            <input
                                                style="display: flex; min-width: 89ch; font-size: 16px; padding: 8px; border: 1px solid #ff9d5c; border-radius: 4px;"
                                                type="time" id="end_time" name="end_time" step="1" required
                                                placeholder="HH:MM:SS"><br>
                                            <!-- last one -->
                                            <fieldset>
                                                <input type="submit" id="submit" value="Create Championship"
                                                    style=" font-size: 15px; padding: 10px 25px;background-color: #ff9d5c; color: white;border-radius: 8px;border: #ff9d5c;" />
                                            </fieldset>
                                            <!-- ended last one -->
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
    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        </script>
    @endif
    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif
    {{-- @if (session('error'))
        <script>
            toastr.success("{{ session('error') }}");
        </script>
    @endif --}}
    <script>
        document.getElementById("submit").addEventListener("click", function(event) {
            var championship = document.getElementById("championship_name").value.trim();
            const categories = document.getElementById('category_name').selectedOptions.length;
            var champPattern = /[!@#$%^&*()+\=\[\]{};':"\\|,.<>\/?]+/;
            var champLength = championship.length;

            if (champPattern.test(championship)) {
                event.preventDefault();
                toastr.error("Championship Name should not contain any special characters or numbers");
            } else if (champLength < 1 || champLength > 50) {
                event.preventDefault();
                toastr.error("Championship Name must be between 1 and 50 characters long");
            }
            if (categories === 0) {
                event.preventDefault();
                toastr.error('At least one category must be selected');
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: 'Select a Category',
                allowClear: true,
                scrollAfterSelect: true,
                width: '100%',
                closeOnSelect: false
            });
        });
    </script>
</body>

</html>
