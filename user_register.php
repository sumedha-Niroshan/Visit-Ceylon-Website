<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: user-login.php');
   exit(); 
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "css.php";
    ?>
    <title>
        Dashbord
    </title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>


<body class="sidebar-expand">

    <?php
    include "header.php";
    ?>
    <!-- MAIN CONTENT -->
    <div class="main">

        <div class="main-content project">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                <h4 class="box-title fs-22">New User Register</h4>
                                </div>
                               
                            </div>
                            <form action="users/register.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">First Name</label> <input
                                            class="form-control" placeholder="First Name" id="fname" name="fname" required> </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Last Name</label> <input
                                            class="form-control" placeholder="Last Name" id="lname" name="lname" required> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Username</label> <input
                                            class="form-control" placeholder="Username" id="username" ame="username" required> </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Password</label> <input type="password"
                                            class="form-control" placeholder="Password" id="pass" name="pass" required> </div>
                                            <div id="password-warning" class="invalid-feedback">
                                                    Password must be at least 8 characters long.
                                                    </div>        
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Gender:</label>
                                        <select name="gender" id="gender"
                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-22-9i9m" required>

                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Confirm Password</label> <input type="password"
                                            class="form-control" placeholder="Password" id="conpass" name="conpass" required> </div>
                                            <div id="confirm-password-warning" class="invalid-feedback">
                                                            Password and confirm password must be the same.
                                                            </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Mobile</label> <input
                                            class="form-control" placeholder="Mobile" id="mobile" name="mobile" pattern="[0-9]+" required> </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">User type:</label>
                                        <select name="ulevel" id="ulevel"
                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-22-9i9m" required>

                                            <option value="">Select User Type</option>

                                            <option value="Admin">Admin</option>
                                            <option value="Agent">Agent</option>
                                            <option value="Warehouse Manager">Warehouse Manager</option>
                                            <option value="Driver">Driver</option>

                                        </select>

                                    </div>
                                </div>

                            </div>



                            <div class="form-group mb-24"> <label class="form-label">Address:</label>
                                <textarea class="form-control" cols="10" rows="2" id="address" name="address" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 mb-24">
                                 <div class="alert alert-success" role="alert" id="success-message" style="display: none;"></div>
                                 <div class="alert alert-danger" role="alert" id="error-message" style="display: none;"></div>

                            </div>

                            </div>
                        <div class="gr-btn mt-15  text-center">

                        <button class="btn btn-primary" id="submit" type="submit" disabled>Register</button>
                        <button class="btn btn-danger" id="reset" type="reset">Clear</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>





        </div>
    </div>
    <!-- END MAIN CONTENT -->



    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->
    <?php
    include "js.php";
    ?>
    <!--this java script is used to validate the password and confirm password (whether they are equal)-->
    <!--and also check whether password is atleast 8 characters long-->
    <script>
        const password = document.getElementById('pass');
        const confirmPassword = document.getElementById('conpass');
        const submitButton = document.getElementById('submit');

        password.addEventListener('blur', validatePassword);
        confirmPassword.addEventListener('blur', validateConfirmPassword);
        
        function validatePassword() {
        const passwordWarning = document.getElementById('password-warning');
        const submitButton = document.getElementById('submit');

        if (password.value.length < 8) {
            passwordWarning.classList.add('d-block');
            submitButton.disabled = true;
        } else {
            passwordWarning.classList.remove('d-block');
            submitButton.disabled = false;
        }
        }

        function validateConfirmPassword() {
        const confirmPasswordWarning = document.getElementById('confirm-password-warning');
        const submitButton = document.getElementById('submit');

        if (password.value !== confirmPassword.value) {
            confirmPasswordWarning.classList.add('d-block');
           
        } else {
            confirmPasswordWarning.classList.remove('d-block');
            
        }
        }
    </script>

    <!--Sending form data to backend-->
    <script>
        $(document).ready(function() {
            // Initially hide the alerts
            $("#success-message, #error-message").hide();

            // Reset button click event
            $("#reset").click(function() {

                // Hide the alerts when the reset button is clicked
                $("#success-message, #error-message").hide();
            });

            // form submission and input validation
            $("#submit").click(function(event) {
                event.preventDefault();

                var formData = {
                    fname: $("#fname").val(),
                    lname: $("#lname").val(),
                    username: $("#username").val(),
                    gender: $("#gender").val(),
                    conpass: $("#conpass").val(),
                    mobile: $("#mobile").val(),
                    ulevel: $("#ulevel").val(),
                    address: $("#address").val()
                };

                $.ajax({
                    type: "POST",
                    url: "users/register.php",
                    data: formData,
                    dataType: "json",
                    encode: true,
                    success: function(response) {
                        if (response.status === "error") {
                            // Display error message to the user
                            $("#error-message").text(response.message).show();
                            $("#success-message").hide();
                            $("#fname").val('');
                            $("#lname").val('');
                            $("#username").val('');
                            $("#gender").val('');
                            $("#conpass").val('');
                            $("#mobile").val('');
                            $("#ulevel").val('');
                            $("#address").val('');
                        } else {
                            // Display success message to the user
                            $("#success-message").text(response.message).show();
                            $("#error-message").hide();
                            $("#fname").val('');
                            $("#lname").val('');
                            $("#username").val('');
                            $("#gender").val('');
                            $("#conpass").val('');
                            $("#mobile").val('');
                            $("#ulevel").val('');
                            $("#address").val('');
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            $("form").on("input", function() {
                if (password.value.length >= 8 && password.value == confirmPassword.value) {
                    $("#submit").prop("disabled", false);
                } else {
                    $("#submit").prop("disabled", true);
                }
            });
        });

</script>



</body>


<!-- Mirrored from themesflat.co/html/protend/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 16:20:40 GMT -->

</html>