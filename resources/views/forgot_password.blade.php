<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('assets/img/KLOGO.png') }}" type="image/icon type" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Forgot Password | Kgamify</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" />
    <style>
        .signup {
            float: right;
        }

        .signin {
            /* Other styles remain the same */
            padding: 10px 30px;
            /* Adjust padding for button size */
            font-size: 18px;
            /* Adjust font size for button text */
            text-align: center;
            /* Center the text within the button */
            display: inline-block;
            /* Ensure button size adjusts to content */
            width: auto;
            /* Allow button to adjust width based on content */
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form input[type="submit"],
        .form input[type="button"] {
            margin-top: 10px;
        }

        .form .button-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        #email {
            width: 300px;
            /* Set the width of the email input */
            padding: 9px;
            /* Add padding to the email input */
            margin-bottom: 10px;
            /* Add space below the email input */
        }

        .forgot-password-text {
            width: 300px;
            margin-bottom: 10px;
            /* Add space below the "Forgot Password" text */
        }
    </style>
</head>

<body>



    <div class="form-container sign-in-container">
        <div class="form" id="signup-form">
            <form action="#" method="POST" name="forgot_password_form">
                <div class="form" id="forgot-password-form">
                    <h1>Forgot Password</h1>
                    <br />
                    <input id="email" type="email" placeholder="Enter Your Email" name="email" required>
                    <span id="email_error" style="color: red; float: right"></span>
                    <!-- Error message for email validation -->
                    <br />
                    <div class="button-container">
                        <input type="button" class="signin" value="Back"
                            onclick="window.location.href='{{ url('/') }}'">
                        <input type="submit" class="signin" value="Continue">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <img src="{{ asset('assets/img/KLOGO.png') }}" alt="" height="40%" />
            </div>
        </div>
    </div>

</body>

</html>


<?php
if (isset($_POST['email'])) {
    require_once '../../public/ajax/db_connection.php';

    $email = $_POST['email'];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare('SELECT * FROM teacher WHERE email = ?');
    if (!$stmt) {
        die('Prepare statement failed: ' . $conn->error);
    }
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows <= 0) {
        echo "<script>alert('Sorry, no emails exist');</script>";
    } else {
        $fetch = $result->fetch_assoc();

        // Generate a token
        $token = bin2hex(random_bytes(50));

        // Start session to store token and email
        session_start();
        $_SESSION['token'] = $token;
        $_SESSION['email'] = $email;

        $resetLink =
            'https://kgamify.in/championshipmaker/comfirmpassword.php?' .
            http_build_query([
                'email' => $email,
                'token' => $token,
            ]);

        try {
            $subject = 'Reset Your Password';
            $message = "
            <html>
            <head>
                <title>Reset Your Password</title>
            </head>
            <body style='font-family: Arial, sans-serif;'>
                <div style='max-width: 700px; margin: auto; padding: 20px; border: 1px solid #e0e0e0; border-radius: 10px; background-color: #ffffff;'>
                <div style='text-align: center;'>
                    <img src='https://kgamify.in/images/KLOGO.png' alt='kGamify Logo' style='max-width: 60%; height: 100px;'>
                </div>
                <h2 style='color: #2c3e50;'>Password Reset Request</h2>
                <p>Hello,</p>
                <p>We received a request to reset your password. Click the button below to proceed:</p>
                <br>
                <p style='text-align: center; margin: 30px 0;'>
                    <a href='$resetLink' style='background-color: #ff6600; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Reset Password</a>
                </p>
                <br>
                <p>If clicking the button doesn't seem to work then you can copy and paste the following link into your browser.<br>
                    <a href='$resetLink'>$resetLink</a></p>
                <br>
                <p>Thanks,</p>
                <p>Team kGamify</p>
                <br>
                <p style='font-size:12px;color:red;'>Warning: The above link will expire in 2 hours.</p>
                <p>Please do not reply to this email. <a href='https://kgamify.in/contact'>Contact Us here</a>.</p>
                <p>kGamify is an AI enabled gamified knowledge championship platform. Please visit <a href='https://kgamify.in'>www.kgamify.in</a> to know more.</p>
                <br>
                <div style='text-align: center;'>
                    <a href='https://kgamify.in/' style='margin: 0 10px;'><img src='https://kgamify.in/images/favicon.png' alt='Company Website' width='24' height='24'></a>
                    <a href='https://www.instagram.com/kgamify/' style='margin: 0 10px;'><img src='https://cdn-icons-png.flaticon.com/128/174/174855.png' alt='Instagram' width='24' height='24'></a>
                    <a href='https://www.linkedin.com/company/kgamify/' style='margin: 0 10px;'><img src='https://cdn-icons-png.flaticon.com/128/2504/2504923.png' alt='LinkedIn' width='24' height='24'></a>
                </div>
                <br>
                <p style='font-size: 12px; color: #888888;'>Disclaimer:<br>
                This automated email is sent by KGamify platform because you have requested to reset your password. In case you have not requested to reset your password then please ignore the mail and do not click on the button.</p>
                <p style='font-size: 12px; color: #888888;'>&copy; 2024 Yantriksoft Pvt. Ltd. All rights reserved</p>
            </div>
            </body>
            </html>
            ";
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
            $headers .= 'From: no-reply@kgamify.com';

            // Send the email
            mail($email, $subject, $message, $headers);

            header('Location: notification.html');
            exit();
        } catch (Exception $e) {
            error_log('Mailer Error: ' . $e->getMessage());
            echo "<script>alert('Failed to send reset email. Please try again later.'); window.history.back();</script>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

</body>

</html>
