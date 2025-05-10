<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="<?php echo e(asset('assets/img/KLOGO.png')); ?>" type="image/icon type" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- fonts -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>HELP | KGamify</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/paper-dashboard.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/common.css')); ?>" rel="stylesheet" />

    <!-- CSS FontAwesome -->
    <script src="https://kit.fontawesome.com/52f3e32cf9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <style>
        .content {
            height: 85vh;
            overflow-y: auto;
        }

        button.btn-primary:hover {
            color: black;
        }
    </style>
</head>

<body class="">
    <div class="wrapper">
        <?php echo $__env->make('sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="main-panel">
            <?php echo $__env->make('navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
                                                Help for Championship Maker</p>

                                            <hr style="height:2px; border:none;  background-color:#ff9d5c;">
                                            <br>
                                            <h3><strong>1. Getting Started</strong></h3>

                                            <p><strong>Q: How do I sign up as a teacher?</strong><br />
                                                To sign up, visit the app&#39;s homepage or download it from your
                                                device&rsquo;s app store. Choose &quot;Teacher&quot; when
                                                registering, fill in your details, and verify your email. Once your
                                                account is verified, you&rsquo;ll have access to the Teacher Panel.
                                            </p>

                                            <p><strong>Q: How do I log in to my Teacher Panel?</strong><br />
                                                After registration, simply log in using your email and password. You
                                                will be directed to your personalized Teacher Panel dashboard.</p>

                                            <p><strong>Q: Can I access the Teacher Panel on mobile?</strong><br />
                                                Yes. The Teacher Panel is available on both mobile and desktop
                                                versions of the app, allowing you to manage your classes and content
                                                on the go.</p>

                                            <p>&nbsp;</p>

                                            <h3><strong>2. Managing Classes and Students</strong></h3>

                                            <p><strong>Q: How can I track student performance?</strong><br />
                                                In the &quot;Analytics&quot; section of the Teacher Panel, you can
                                                track individual and group performance, view quiz scores,
                                                participation, and progress over time.</p>

                                            <p>&nbsp;</p>

                                            <h3><strong>3. Creating and Managing Quizzes</strong></h3>

                                            <p><strong>Q: How do I create a quiz for my class?</strong><br />
                                                In the Teacher Panel, navigate to the &quot;Create label&quot;
                                                section, select &quot;Create Quiz,&quot; and enter the questions.
                                                You can choose from multiple formats like multiple-choice,
                                                true/false, or short answer questions.</p>

                                            <p><strong>Q: Can I schedule quizzes for future dates?</strong><br />
                                                Yes. Once you&rsquo;ve created a quiz, go to &quot;Schedule
                                                Quiz&quot; and choose the date and time you want the quiz to be
                                                available for your students.</p>

                                            <p><strong>Q: Can I view quiz results and statistics?</strong><br />
                                                Yes. After the quiz is completed, you can view detailed results,
                                                including individual scores, time spent on each question, and
                                                overall performance analysis in the &quot;Quiz Results&quot;
                                                section.</p>

                                            <p>&nbsp;</p>

                                            <h3><strong>4. Gamification Features</strong></h3>

                                            <p><strong>Q: How does the leaderboard work?</strong><br />
                                                The leaderboard ranks students based on their quiz performance,
                                                participation, and achievements. You can view it at both the class
                                                level and the global level, encouraging healthy competition among
                                                students.</p>

                                            <p><strong>Q: Can I reward students for their
                                                    performance?</strong><br />
                                                Yes. You can assign rewards like badges or certificates for
                                                completing quizzes, achieving high scores, or reaching milestones.
                                                You can manage rewards in the &quot;Rewards&quot; section of the
                                                Teacher Panel.</p>

                                            <p><strong>Q: Can I create my own custom rewards?</strong><br />
                                                Absolutely. In the &quot;Rewards&quot; section, you can create
                                                custom badges or certificates to recognize student achievements
                                                based on criteria you set.</p>

                                            <p>&nbsp;</p>

                                            <h3><strong>5. Managing Content and Resources</strong></h3>

                                            <p><strong>Q: Can I edit or delete quizzes or materials after
                                                    publishing?</strong><br />
                                                Yes. You can go to &quot;Manage Content,&quot; find the quiz or
                                                material you want to edit, and make changes. Deleting or archiving a
                                                quiz is also possible.</p>

                                            <p><strong>Q: Can I share quizzes with other teachers?</strong><br />
                                                Yes. In the &quot;Share Content&quot; section, you can share your
                                                quizzes with other teachers or collaborate on quizzes with your
                                                colleagues.</p>

                                            <p>&nbsp;</p>

                                            <h3><strong>6.Help &amp; Technical Support</strong></h3>

                                            <p><strong>Q: How do I report a problem or bug?</strong><br />
                                                Go to the &quot;Help&quot; section of the app, click on &quot;Report
                                                Issue,&quot; and fill out the details. Our support team will work on
                                                resolving your issue as soon as possible.</p>

                                            <p><strong>Q: What should I do if the app is running
                                                    slowly?</strong><br />
                                                Try clearing your cache or restarting the app. If the issue
                                                persists, contact our support team through the &quot;Help&quot;
                                                section.</p>

                                            <p><strong>Q: How do I contact customer support?</strong><br />
                                                You can reach our support team via email at [support@kgamify.com] or
                                                through live chat available in the &quot;Help&quot; section of the
                                                app.</p>

                                            <p>&nbsp;</p>

                                            <h3><strong>8. Account Management</strong></h3>

                                            <p><strong>Q: How do I change my account details?</strong><br />
                                                To update your personal details, go to &quot;Account Settings&quot;
                                                in the Teacher Panel, where you can change your email, password, or
                                                other personal information.</p>

                                            <p><strong>Q: Can I switch between teacher and student
                                                    roles?</strong><br />
                                                Yes. If you need to switch roles (for example, from teacher to
                                                student), you can do so in the &quot;Settings&quot; menu under
                                                &quot;Change Role.&quot;</p>

                                            <p><strong>Q: How do I deactivate my account?</strong><br />
                                                To deactivate your account, go to &quot;Account Settings&quot; and
                                                select &quot;Deactivate Account.&quot; If you need further
                                                assistance, contact support.</p>

                                            <p>&nbsp;</p>

                                            <h3><strong>9. Frequently Asked Questions</strong></h3>

                                            <p><strong>Q. Can I access my Teacher Panel offline?</strong><br />
                                                Currently, the Teacher Panel requires an internet connection.
                                                However, we are working on offline capabilities for certain features
                                                like viewing previously created content.</p>

                                            <p><strong>Q: How do I reset a quiz for a student?</strong><br />
                                                If a student needs to retake a quiz, go to the &quot;Quiz
                                                Results&quot; section, select the student&rsquo;s name, and click
                                                &quot;Reset Quiz.&quot;</p>

                                            <p><strong>Q: How do I use analytics to improve student
                                                    outcomes?</strong><br />
                                                Use the data available in the &quot;Analytics&quot; section to track
                                                student progress, identify patterns of strengths and weaknesses, and
                                                adjust your teaching methods or content accordingly.</p>

                                            <p>&nbsp;</p>

                                            <p>For any additional questions or further assistance, feel free to
                                                contact our support team at <a
                                                    href="mailto:support@kgamify.com">support@kgamify.com</a> or
                                                visit the &quot;Help&quot; section in the app.</p>
                                        </fieldset>
                                    </div>
                                </div>
                                <!-- form end  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".navbar-toggler").on("click", function() {
                $("body").toggleClass("nav-open");
            });
        });
    </script>

</body>

</html>
<?php /**PATH C:\Users\prafu\Desktop\laravel-kgamify\resources\views/help.blade.php ENDPATH**/ ?>