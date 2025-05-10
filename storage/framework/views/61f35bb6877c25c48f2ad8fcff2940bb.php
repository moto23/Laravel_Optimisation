<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo e(asset('assets/img/KLOGO.png')); ?>" type="image/icon type" />
    <meta charset="utf-8" />
    
    <title>Login | KGamify Championship Maker</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/index.css')); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .signup {
            float: right;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .password-container {
            position: relative;
            margin-bottom: 10px;
            width: 100%;
        }

        .show-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #333;
        }

        .button-container input {
            flex: 1;
            margin-right: 10px;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <div class="form" id="login-form">
                <h1>Login to kGamify Championship Maker</h1>
                <br />
                <input id="username" type="email" placeholder="Your Email" required />
                <span id="email_error" style="color: red; float: right"></span>

                <div class="password-container">
                    <input id="password" type="password" placeholder="Password" required />
                    <span class="show-password" onclick="togglePassword('password', this)">
                        <i class="fas fa-eye-slash"></i>
                    </span>
                </div>

                <span id="password_error" style="color: red; float: right"></span>
                <br />
                <div class="button-container">
                    <input type="submit" onclick="login()" class="signin" value="Login" />
                    <input type="button" onclick="window.location.href='<?php echo e(url('/signup')); ?>'" class="signin signup"
                        value="SignUp" />
                </div>
                <div class="forgot-password">
                    <a href="<?php echo e(url('/forgot-password')); ?>">Forgot Password?</a>
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
    </div>

    
    <script>
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

        function login() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username.trim() === "" || password.trim() === "") {
                alert("Please enter the Credentials");
                return;
            }

            fetch("<?php echo e(route('login')); ?>", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>"
                    },
                    body: "username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password)
                })
                .then(response => response.text())
                .then(data => {
                    if (data === "success") {
                        window.location.href = "<?php echo e(url('/dashboard')); ?>";
                    } else if (data === "status") {
                        alert("Your Account has not been activated yet.");
                    } else {
                        alert("Incorrect username or password");
                    }
                });
        }
    </script>

</body>

</html>
<?php /**PATH C:\Users\prafu\Desktop\laravel-kgamify\resources\views/login.blade.php ENDPATH**/ ?>