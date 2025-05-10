<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="icon" href="<?php echo e(asset('assets/img/KLOGO.png')); ?>" type="image/icon type" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Signup | KGamify</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/index.css')); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script data-require="jquery" data-semver="2.1.3" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        .signup {
            float: right;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .form input[type="text"],
        .form input[type="email"],
        .form input[type="password"],
        .form input[type="tel"],
        .form input[type="button"] {
            margin-top: 5px;
        }

        .form input[type="button"].signup {
            margin-left: 5px;
            /* Reduced margin */
        }

        .form .button-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 2px;
        }

        .password-container {
            position: relative;
            margin-bottom: 5px;
            width: 100%;
        }

        .show-password {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #333;
        }

        .form .form-heading {
            margin-top: 30px;
            /* Add margin to the top of the heading */
            font-weight: bold;
        }

        #phone {
            width: calc(102% - 5px);
            /* Subtract the width of the flag icon */
            padding-right: 190px;
            /* Space for the flag icon */
        }

        select option {
            color: orange;
        }

        select.js-example-basic option {
            color: orange;
        }

        .required::after {
            content: "*";
            color: red;
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
        }


        .popup {
            position: fixed;
            top: 10px;
            right: 10px;
            padding: 20px;
            background-color: green;
            color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: none;
        }

        .popup .close-btn {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: white;
            font-weight: bold;
        }


        /* Privacy policy styling */
        .privacy-policy-container {
            display: flex;
            align-items: center;
            margin-top: 5px;
            justify-content: flex-start;
            /* Align to the left */
        }

        .privacy-policy-container label {
            font-size: 14px;
            margin-left: 5px;
            /* Bring the label closer to the checkbox */
            font-weight: normal;
            color: #333;
            white-space: nowrap;
            /* Ensure the text stays in one line */
            line-height: 1;
            /* Adjust line height if needed */
            cursor: pointer;
            /* Pointer cursor on the text as well */
        }

        #privacy-policy-checkbox {
            margin: 0;
            /* Remove extra margins to keep it close to the label */
            padding: 0;
            /* Remove padding to decrease the clickable area */
            cursor: pointer;
            /* Pointer cursor for the checkbox */
            width: auto;
            /* Remove any extra width */
        }

        .privacy-policy-container a {
            color: orange;
            text-decoration: none;
        }

        .privacy-policy-container a:hover {
            text-decoration: underline;
        }

        #privacy-policy-error {
            margin-top: 5px;
            font-size: 12px;
        }

        .overlay-container {
            position: fixed;
            top: 0;
            right: 0;
            width: 50%;
            /* Adjust as needed */
            height: 100vh;
            /* Full viewport height */
            overflow: hidden;
            /* Prevent scrolling */
        }
    </style>
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

    <div style="height: 200vh; background-color: #f0f0f0;">
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <div class="form" id="signup-form">
                    <h2 class="form-heading">Sign Up as kGamify Championship Maker</h2>
                    <input id="name" type="text" placeholder="* Championship Maker Name" required>
                    <input id="username" type="text" placeholder="* Username" required>

                    <input id="email" type="email" placeholder="* Enter Your Email" required>
                    <span id="email-error" style="color: red;"></span>

                    <div class="password-container">
                        <input id="password" type="password" placeholder="* Password" required>
                        <span class="show-password" onclick="togglePassword('password', this)">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                    </div>

                    <div class="password-container">
                        <input id="confirm-password" type="password" placeholder="* Confirm Password" required>
                        <span class="show-password" onclick="togglePassword('confirm-password', this)">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                    </div>
                    <div id="password-match-message"></div>
                    <input id="phone" type="tel" placeholder="* Mobile Number" required>
                    <span id="phone-error" style="color: red;"></span>

                    <div id="otp-container" style="display: none;">
                        <input id="otp" type="text" placeholder="* Enter OTP" required>
                        <span id="otp-error" style="color: red;"></span>
                        <button id="send-otp-button" onclick="sendOTP()">Send OTP</button>
                    </div>

                    </br>
                    <fieldset style="display: inline-block; width: 100%;">
                        <select class="js-example-basic" name="institute" id="institute" style="width: 100%;">
                            <option value="" selected disabled>Select Institute</option>
                            <?php $__currentLoopData = $institutes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($institute); ?>"><?php echo e($institute); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <span class="focus"></span>
                    </fieldset>

                    <br />

                    <fieldset style="display: inline-block; width: 100%;">
                        <select class="js-example-basic-single" name="department" id="department" style="width: 100%;">
                            <option value="" selected disabled>Select Department</option>
                            <!-- Options will be populated based on selected institute -->
                        </select>
                        <span class="focus"></span>
                    </fieldset>

                    <br />


                    <!-- Privacy Policy Checkbox -->
                    <div class="privacy-policy-container">
                        <input type="checkbox" id="privacy-policy-checkbox">
                        <label for="privacy-policy-checkbox">
                            By signing up you agree to our
                            <a href="<?php echo e(url('/privacy-page')); ?>" target="_blank">Terms and Conditions & Privacy
                                Policy</a>
                        </label>
                    </div>

                    <span id="privacy-policy-error" style="color: red;"></span>

                    <br />
                    <div class="button-container" style="display: flex; justify-content: space-between;">
                        <input type="button" onclick="window.location.href='<?php echo e(url('/')); ?>'"
                            class="signin signup" value="Login"
                            style="margin-top:0px;margin-right: 0px; margin-left: 7px;padding:10px;">
                        <input type="button" onclick="registerUser()" class="signin" value="Sign Up"
                            style="margin-top:0px;padding:10px;">
                    </div>
                    <div id="fill-form-message" style="color: red;"></div>
                </div>
                <br />

            </div>
        </div>
    </div>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <img src="<?php echo e(asset('assets/img/KLOGO.png')); ?>" alt="" height="40%" />
            </div>
        </div>
    </div>

    <div id="popup-message"
        style="display:none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: green; color: white; padding: 20px; border-radius: 5px; z-index: 1000;">
        <p id="popup-text"></p>
        <button onclick="closePopup()"
            style="background-color: red; color: white; border: none; padding: 5px 10px; margin-top: 10px;">Close</button>
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
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            separateDialCode: true,
            initialCountry: "in" // Default country code for India
        });

        function togglePassword(fieldId, iconElement) {
            var field = document.getElementById(fieldId);
            var icon = iconElement.querySelector("i");

            if (field.type === "password") {
                field.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                field.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        }

        document.getElementById("confirm-password").addEventListener("input", function() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;
            var messageElement = document.getElementById("password-match-message");

            if (password.trim() == "" && confirmPassword.trim() == "") {
                messageElement.textContent = "";
            } else if (password === confirmPassword) {
                messageElement.textContent = "Passwords match!";
                messageElement.style.color = "green";
            } else {
                messageElement.textContent = "Passwords do not match.";
                messageElement.style.color = "red";
            }

        });

        document.getElementById("password").addEventListener("input", function() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;
            var messageElement = document.getElementById("password-match-message");

            if (password.trim() == "" && confirmPassword.trim() == "") {
                messageElement.textContent = "";
            } else if (password === confirmPassword) {
                messageElement.textContent = "Passwords match!";
                messageElement.style.color = "green";
            } else {
                messageElement.textContent = "Passwords do not match.";
                messageElement.style.color = "red";
            }
        });

        // Phone number validation
        document.getElementById("phone").addEventListener("input", function() {
            var phone = document.getElementById("phone").value;
            var messageElement = document.getElementById("phone-error");

            if (phone.length < 10 || phone.length > 12) {
                messageElement.textContent = "Please enter a valid mobile number";
            } else {
                messageElement.textContent = "";
            }
        });



        document.getElementById("email").addEventListener("input", function() {
            var email = document.getElementById("email").value;
            var messageElement = document.getElementById("email-error");
            var emailPattern = /@/;

            if (!emailPattern.test(email)) {
                messageElement.textContent = "Please enter a valid email";
            } else {
                messageElement.textContent = "";
            }
        });
    </script>


    <script>
        function closePopup() {
            document.getElementById('popup-message').style.display = 'none';

            location.reload(); // Reload the page
        }

        function clearForm() {
            document.getElementById("name").value = "";
            document.getElementById("username").value = "";
            document.getElementById("email").value = "";
            document.getElementById("password").value = "";
            document.getElementById("confirm-password").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("institute").selectedIndex = 0; // Set to default option
            document.getElementById("department").selectedIndex = 0; // Set to default option
        }

        function showPopup(email) {
            var message =
                `Thanks for applying to be Knowledge Championship Creator in the kGamify platform. We have sent a confirmation email for you to confirm the application request. Please check your inbox or spam folder.`;
            document.getElementById('popup-text').innerHTML = message;
            document.getElementById('popup-message').style.display = 'block';
        }

        function registerUser() {
            var name = document.getElementById("name").value;
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;
            var phone = document.getElementById("phone").value;
            var institute = document.getElementById("institute").value;
            var department = document.getElementById("department").value;
            var status = 0;
            var privacyPolicyChecked = document.getElementById("privacy-policy-checkbox").checked;

            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

            if (name.trim() === "" || username.trim() === "" || email.trim() === "" || password.trim() === "" ||
                confirmPassword.trim() === "" || phone.trim() === "" || institute.trim() === "" || department.trim() === ""
            ) {
                toastr.error("Please fill all * fields");
                return;
            }

            if (!passwordRegex.test(confirmPassword)) {
                toastr.error(
                    "Password must be at least 8 characters long and include an uppercase letter, lowercase letter, number, and a special character."
                );
                return;
            }
            if (!passwordRegex.test(password)) {
                toastr.error(
                    "Password must be at least 8 characters long and include an uppercase letter, lowercase letter, number, and a special character."
                );
                return;
            }

            if (password !== confirmPassword) {
                toastr.error("Passwords do not match");
                return;
            }

            if (!/@/.test(email)) {
                toastr.error("Please enter a valid email");
                return;
            }

            if (phone.length < 10 || phone.length > 12) {
                toastr.error("Invalid Mobile Number");
                return;
            }

            var pattern = /[!@#$%^&*()+\=\[\]{};':"\\|,.<>\/?]+/;
            var alphapattern = /[!@#$%^&*()+\=\[\]{};':"\\|,.<>\/?a-zA-Z]+/;
            var numberpattern = /[!@#$%^&*()+\=\[\]{};':"\\|,.<>\/?0-9]+/;
            var emailpattern = /[!#$%^&*()+\=\[\]{};':"\\|,<>\/?]+/;

            if (numberpattern.test(name)) {
                toastr.error("Name should not contain any special characters or numbers");
                return;
            } else if (pattern.test(username)) {
                toastr.error("Username should not contain any special characters");
                return;
            } else if (emailpattern.test(email)) {
                toastr.error("Email should not contain any special characters");
                return;
            } else if (alphapattern.test(phone)) {
                toastr.error("Phone number should not contain any alphabets or special characters");
                return;
            }

            if (!privacyPolicyChecked) {
                document.getElementById("privacy-policy-error").textContent = "Please accept privacy policy";
                return;
            } else {
                document.getElementById("privacy-policy-error").textContent = "";
            }

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var response = JSON.parse(this.responseText);
                    if (response.status === "success") {
                        showPopup(response.message);
                        clearForm(); // Clear form fields after successful registration
                    } else {
                        alert(response.message);
                    }
                }
            };
            xhr.open("POST", "register.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("name=" + name + "&username=" + username + "&email=" + email + "&password=" + password + "&phone=" +
                phone + "&institute=" + institute + "&department=" + department + "&status=" + status);
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic').select2({
                placeholder: 'Select Institute',
                allowClear: true
            });

            $('.js-example-basic-single').select2({
                placeholder: 'Select Department',
                allowClear: true
            });

            $('#institute').change(function() {
                var institute_name = $(this).val(); // Get the selected institute name

                // If an institute is selected
                if (institute_name) {
                    $.ajax({
                        url: 'ajax/get_departments.php', // This script fetches the departments
                        type: 'POST',
                        data: {
                            institute_name: institute_name
                        }, // Send the institute name to the server
                        success: function(data) {
                            // Populate the department dropdown with the response
                            $('#department').html(
                                data); // The response should be <option> elements
                        },
                        error: function() {
                            // Handle errors if any
                            $('#department').html(
                                '<option value="" disabled>Failed to load departments</option>'
                            );
                        }
                    });
                } else {
                    // If no institute is selected, reset the department dropdown
                    $('#department').html('<option value="" selected disabled>Select Department</option>');
                }
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\prafu\Desktop\laravel-kgamify\resources\views/signup.blade.php ENDPATH**/ ?>