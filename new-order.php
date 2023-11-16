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
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" onchange="hideDiliveryDate1(this)"
                                            name="flexRadioDefault" id="pickuponly" value="Pick Up Only" checked>
                                        <label class="form-check-label" for="pickuponly">
                                            <h5>Pickup Only </h5>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" onchange="hideDiliveryDate2(this)"
                                            name="flexRadioDefault" id="pickupanddelivery" value="Pick Up and Delivery">
                                        <label class="form-check-label" for="pickupanddelivery">
                                            <h5>Both Delivery And Pickup </h5>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <form id="orderForm" method="POST">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-group"> <label class="form-label">Order ID</label> <input
                                                class="form-control" id="order_id" readonly name="order_id" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-group"> <label class="form-label">Customer Name</label>
                                            <input class="form-control" placeholder="Customer Name" id="cname"
                                                name="cname" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-24"> <label class="form-label"> Customer Address:</label>
                                        <textarea class="form-control" cols="6" rows="2" id="cus_address"
                                            name="cus_address" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-group"> <label class="form-label">Contact Number</label>
                                            <input class="form-control" placeholder="Contact Number" id="contacnum"
                                                ame="contacnum" required type="tel">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-group"> <label class="form-label">Box Type</label> <select
                                                class="form-control" aria-label="Default select example">
                                                <option selected>Choose..</option>
                                                <option value="1">XXL/Trunk</option>
                                                <option value="2">XL/Trunk</option>
                                                <option value="3">L/Trunk</option>
                                                <option value="4">M/Trunk</option>
                                                <option value="5">S/Trunk</option>
                                                <option value="6">Cortoon</option>
                                                <option value="6">Wooden Box</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-group"> <label class="form-label">Box Quantity</label>
                                            <input class="form-control" min="1" oninput="validity.valid||(value='');"
                                                placeholder="Box Quantity" id="boxqty" name="boxqty" required
                                                type="Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-group" id="delivery-date-group">
                                            <label class="form-label">Delivery Date</label>
                                            <input type="date" id="delivery-date" class="form-control" required
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-group"> <label class="form-label">Pickup Date</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="pickup_date"
                                                    name="pickup_date" required>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-group" id="delivery-driver-group">
                                            <label class="form-label">Delivery Driver</label>
                                            <input class="form-control" placeholder="Delivery Driver"
                                                id="delivery-driver" name="delivery-driver" type="text" required
                                                disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-group"> <label class="form-label">Pickup Driver</label>
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Pickup Driver"
                                                    id="pickup-driver" name="pickup-driver" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group"> <label class="form-label">Payment Method</label> </div>
                                        <div class="col-md-4 col-sm-12 mb-24">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                                    id="fullpayment" value="Full Payement" required checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <span> Full Payment </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mb-24">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                                    id="cashondelivery" value="Cash on Delivery" required>
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Cash on delivery
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mb-24">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                                    id="installments" value="Installments" required>
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Installments
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-24">
                                            <div class="form-group"> <label class="form-label">Reciver Name</label>
                                                <input class="form-control" placeholder="Reciver Name" id="Reciver-name"
                                                    name="Reciver-name" required type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12 mb-24">
                                            <div class="form-group"> <label class="form-label">Reciver Contact
                                                    Number</label> <input class="form-control"
                                                    placeholder="Reciver Contact Number" id="reciver-cnumber"
                                                    name="order_id" required type="tel"> </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-24"> <label class="form-label"> Reciver Address:</label>
                                        <textarea class="form-control" cols="6" rows="2" id="rec_address"
                                            name="rec_address" required></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="form-group"> <label class="form-label">Recieve Method</label> </div>
                                        <div class="col-md-6 col-sm-12 mb-24">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                                    id="doortodoor" value="Door To Door" checked>
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Door to Door
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-24">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                                    id="pickup" value="Pick Up">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Pickup
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-24">
                                            <div class="form-group"> <label class="form-label">Total Payment</label>
                                                <input class="form-control" placeholder="Total Payment" min="1"
                                                    oninput="validity.valid||(value='');" id="total-payment"
                                                    name="total-payment" required type="Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 mb-24">
                                        <div class="alert alert-success" role="alert" id="success-message"
                                            style="display: none;">Order created successfully</div>
                                        <div class="alert alert-danger" role="alert" id="error-message"
                                            style="display: none;">unable to create the order</div>

                                    </div>


                                    <div class="gr-btn mt-15  text-center">
                                        <button class="btn btn-primary" id="submit" type="submit">Place Order</button>
                                        <button class="btn btn-danger" id="reset" type="reset">Clear</button>
                                    </div>
                            </form>
                        </div>
                    </div>

                </div>









            </div>
            <!-- END MAIN CONTENT -->


        </div>
        <div class="overlay"></div>

        <!-- SCRIPT -->
        <!-- APEX CHART -->
        <?php
        include "js.php";
        ?>



        <script>
            function hideDiliveryDate1(x) {
                if (x.checked) {
                    //document.getElementById("delivery-date-group").style.visibility = "hidden";
                    //document.getElementById("delivery-driver-group").style.visibility = "hidden";
                    document.getElementById("delivery-date").disabled = true;
                    document.getElementById("delivery-driver").disabled = true;
                }
            }

            function hideDiliveryDate2(x) {
                if (x.checked) {
                    //document.getElementById("delivery-date-group").style.visibility = "visible";
                    //document.getElementById("delivery-driver-group").style.visibility = "visible";
                    document.getElementById("delivery-date").disabled = false;
                    document.getElementById("delivery-driver").disabled = false;
                }
            }
        </script>
        <script>
            $(document).ready(function () {
                let initialOrderId = null;

                function fetchOrderId() {
                    $.ajax({
                        url: 'order/orderId.php',
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            $('#order_id').val(data);
                            initialOrderId = data;
                        },
                        error: function (xhr, status, error) {
                            console.error("Error occurred: " + error);
                        }
                    });
                }

                // Call the function on page load to fetch order ID
                fetchOrderId();

                // Override the reset button
                $('#reset').on('click', function (e) {
                    e.preventDefault(); // Prevent the default reset behavior
                    $("#pickup_date").val('');
                    $("#delivery-driver").val('');
                    $("#pickup-driver").val('');
                    $("#Reciver-name").val('');
                    $("#reciver-cnumber").val('');
                    $("#rec_address").val('');
                    $("#total-payment").val('');
                    $("#cus_address").val('');
                    $('form input').not('#order_id').val('');
                    location.reload();
                    // Reassign the initial order ID to #order_id
                    $('#order_id').val(initialOrderId);
                });

                // Handle form submission
                $('#orderForm').on('submit', function (e) {
                    console.log("Form submit event triggered");
                    e.preventDefault(); // Prevent the default form submission

                    // Manually constructing the formData object
                    var formData = {
                        cname: $("#cname").val(),
                        diliverydate: $("#delivery-date").val(),
                        cus_address: $("#cus_address").val(),
                        contacnum: $("#contacnum").val(),
                        boxtype: $("#boxtype").val(),
                        boxqty: $("#boxqty").val(),
                        pickup_date: $("#pickup_date").val(),
                        delivery_driver: $("#delivery-driver").val(),
                        pickup_driver: $("#pickup-driver").val(),
                        payment_method: $('input[name="flexRadioDefault1"]:checked').val(),
                        receiver_name: $("#Reciver-name").val(),
                        receiver_contact_number: $("#reciver-cnumber").val(),
                        receiver_address: $("#rec_address").val(),
                        receiving_method: $('input[name="flexRadioDefault2"]:checked').val(),
                        total_payment: $("#total-payment").val()
                    };
                    console.log(formData);//

                    // AJAX request to submit the form data
                    $.ajax({
                        url: 'order/putorder.php',
                        type: 'POST',
                        data: formData,
                        success: function (response) {
                            if (response.status === "error") {
                                $("#error-message").text(response.message).show();
                                $("#pickup_date").val('');
                                $("#delivery-driver").val('');
                                $("#pickup-driver").val('');
                                $("#Reciver-name").val('');
                                $("#reciver-cnumber").val('');
                                $("#rec_address").val('');
                                $("#total-payment").val('');
                                $("#cus_address").val('');
                                $('form input').not('#order_id').val('');

                            }
                            else {
                                $("#success-message").text(response.message).show();
                                $("#pickup_date").val('');
                                $("#delivery-driver").val('');
                                $("#pickup-driver").val('');
                                $("#Reciver-name").val('');
                                $("#reciver-cnumber").val('');
                                $("#rec_address").val('');
                                $("#total-payment").val('');
                                $("#cus_address").val('');
                                $('form input').not('#order_id').val('');

                            }
                        },
                        error: function (xhr, status, error) {
                            console.error("Error occurred: " + error);
                        }
                    });
                });
            });
        </script>

</body>


</html>