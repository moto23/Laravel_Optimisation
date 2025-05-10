<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- fonts -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!-- Page Title and Favicon -->
    <title>T&C Teachers | KGamify</title>
    <link rel="icon" href="{{ asset('assets/img/KLOGO.png') }}" type="image/icon type" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/paper-dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" />

    <style>
        .content {
            height: 85vh;
            overflow-y: auto;
        }

        button.btn-primary:hover {
            color: black;
        }

        .terms-list {
            list-style-type: disc;
            padding-left: 1.5rem;
        }

        .terms-list li {
            margin-bottom: 8px;
        }

        .navbar-toggler:hover {
            color: black;
        }
    </style>
</head>

<body class="">
    <div class="wrapper">
        @include('sidebar')
        <div class="main-panel">
            @include('navbar')
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card demo-icons">
                            <div class="card-header">
                                <div class="container">
                                    <!-- 1st one -->

                                    <div id="contact">
                                        <fieldset>
                                            <p
                                                style="text-align: center;color: #ff9d5c; font-size: 30px;font-weight: bold; ">
                                                Terms and Conditions</p>

                                            <hr style="height:2px; border:none;  background-color:#ff9d5c;">
                                            <br>
                                            <p>Welcome to the Teacher Panel of kgamify. These Terms and Conditions
                                                govern your use of the platform as a teacher. By accessing or using
                                                the Teacher Panel, you agree to comply with these terms. If you do
                                                not agree with any part of these terms, you should not use the
                                                Teacher Panel.</p>

                                            <p><strong>1. Acceptance of Terms</strong><br />
                                                By accessing or using the Teacher Panel, you accept these Terms and
                                                Conditions in full. If you disagree with any part of these terms,
                                                you must not use the platform.
                                            </p>

                                            <p><strong>2. Eligibility</strong><br />
                                                The Teacher Panel is only available to verified educators, including
                                                school teachers, professors, and freelance instructors. We reserve
                                                the right to verify your credentials and deny access if necessary.
                                            </p>

                                            <p><strong>3. Teacher Responsibilities</strong><br />
                                                As a teacher using the platform, you agree to:
                                            </p>

                                            <ul class="terms-list">
                                                <li>Provide accurate and up-to-date personal and professional
                                                    information.</li>
                                                <li>Use the platform responsibly and only for educational purposes.
                                                </li>
                                                <li>Create original content or use content that you have the right
                                                    to distribute.</li>
                                                <li>Respect student privacy and confidentiality.</li>
                                                <li>Comply with all applicable laws and educational regulations.
                                                </li>
                                            </ul>

                                            <p><strong>4. Content Ownership</strong><br />
                                                The content (quizzes, assignments, resources) you upload remains
                                                your intellectual property. However, by uploading content to the
                                                platform, you grant KGamify a non-exclusive, royalty-free license to
                                                use, display, and distribute your content within the platform for
                                                educational purposes.
                                            </p>

                                            <p><strong>5. Professional Conduct</strong><br />
                                                You are required to maintain professional conduct when using the
                                                Teacher Panel, especially when interacting with students. You agree
                                                not to:
                                            </p>

                                            <ul class="terms-list">
                                                <li>Share offensive, inappropriate, or harmful content.</li>
                                                <li>Engage in discriminatory, harassing, or bullying behavior.</li>
                                                <li>Misuse student data or violate privacy policies.</li>
                                            </ul>

                                            <p><strong>6. User Management</strong><br />
                                                You are responsible for managing the students in your classroom,
                                                including adding, removing, and organizing them into groups. You are
                                                also responsible for maintaining the security of student data and
                                                ensuring that it is used solely for educational purposes.
                                            </p>

                                            <p><strong>7. Data Privacy and Security</strong><br />
                                                We take data security seriously and are committed to protecting your
                                                personal and student data. You must comply with data protection
                                                regulations, including GDPR or other applicable laws, when using the
                                                platform.
                                            </p>

                                            <p><strong>8. Content Guidelines</strong><br />
                                                The content you upload must be educational, appropriate, and in
                                                compliance with copyright laws. Any content that violates these
                                                guidelines may be removed without notice, and your account may be
                                                suspended or terminated.
                                            </p>

                                            <p><strong>9. Termination of Access</strong><br />
                                                Kgamify reserves the right to terminate or suspend your account at
                                                any time if you violate these Terms and Conditions. Reasons for
                                                termination may include but are not limited to:
                                            </p>
                                            <ul class="terms-list">
                                                <li>Misuse of the platform.</li>
                                                <li>Violation of privacy or data protection laws.</li>
                                                <li>Inappropriate behavior or unprofessional conduct.</li>
                                            </ul>

                                            <p>In case of termination, you will be notified by email, and any
                                                content associated with your account may be deleted.</p>

                                            <p><strong>10. Modification of Terms</strong><br />
                                                We reserve the right to modify these Terms and Conditions at any
                                                time. Significant changes will be communicated to you via email or
                                                through a notification on the platform. Continued use of the
                                                platform after changes are made constitutes your acceptance of the
                                                new terms.
                                            </p>

                                            <p><strong>11. Limitation of Liability</strong><br />
                                                Kgamify is not responsible for any technical issues, interruptions,
                                                or loss of data resulting from the use of the platform. While we
                                                strive to provide a reliable service, you agree to use the platform
                                                at your own risk.
                                            </p>

                                            <p><strong>12. Contact Information</strong><br />
                                                For any questions, concerns, or support, please contact our team at
                                                <a href="mailto:support@kgamify.com">support@kgamify.com</a>.
                                            </p>
                                        </fieldset>

                                    </div>
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
