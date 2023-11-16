<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "css.php";
    ?>
    <title>
        User Login
    </title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body class="">

    <!-- MAIN CONTENT -->
    <div class="">

        <div class="main-content ">
            <section class="login col-lg-6 offset-lg-3">
                <div class="row">
                    <div class="col-12 ">
                        <div class="box">
                            <div class="box-header d-flex justify-content-between">
                                <a href="index.html">
                                    <img src="images/logo.png" alt="">
                                </a>

                                <div class="action-reg">
                                    <h4 class="fs-30">Login</h4>
                                    <a href="new-account.html">Sign in to your account</a>
                                </div>

                            </div>
                            <div class="line"></div>
                            <div class="box-body">
                                <div class="auth-content my-auto">

                                    <form class="mt-5 pt-2" id="login-form" method="POST">
                                        <div class="mb-24">
                                            <label class="form-label mb-14">User Name</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="Enter the username" required>
                                        </div>
                                        <div class="mb-16">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <label class="form-label mb-14">Password</label>
                                            </div>
                                            </div>

                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" placeholder="Enter the password" name="pass" id="pass"
                                                    aria-label="Password" aria-describedby="password-addon" required>
                                                <button class="btn shadow-none ms-0" type="button"
                                                    id="password-addon"><i class="far fa-eye-slash"></i></button>
                                            </div>
                                        </div>
                                        <div class="row mb-29">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                    <label class="form-check-label fs-14" for="remember-check">
                                                        Remember me
                                                    </label>
                                                </div>
                                                <div class="alert alert-danger" role="alert" id="error-message" style="display: none;"></div>
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <button
                                                class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500"
                                                type="submit">Sign in</button>
                                        </div>
                                        <div class="mb-3">
                                           <button
                                                class="btn btn-danger color-white w-100 waves-effect waves-light fs-18 font-w500"
                                                type="reset" id="reset">Reset</button>
                                        </div>
                                    </form>

            
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <?php
    include "js.php";

    ?>

<script>
    $(document).ready(function() {
        // Initially hide the alerts
        $("#error-message").hide();

        // Reset button click event
        $("#reset").click(function() {
            // Hide the alerts when the reset button is clicked
            $("#error-message").hide();
        });

        // form submission and input validation
        $("#login-form").submit(function(event) {
            event.preventDefault();

            var formData = {
                username: $("#username").val(),
                pass: $("#pass").val()
            };

            $.ajax({
                type: "POST",
                url: "users/login.php",
                data: formData,
                dataType: "json",
                encode: true,
                success: function(response) {
                    if (response.status === "error") {
                        $("#error-message").text(response.message).show();
                    }
                    else{
                        window.location.href = "./dashbord.php";
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>


</body>

</html>

                