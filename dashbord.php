<?php
//  session_start();

//  if (!isset($_SESSION['username'])) {

//      header('Location: user-login.php');
//      exit(); 
//  }

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
        <div class="main-content user">
            <div class="row">
                <div class="col-9 col-xl-12">
                    <div class="box card-box mb-20">
                        <div class="icon-box bg-color-1">
                            <div class="icon bg-icon-1">
                                <i class='bx bxs-briefcase'></i>
                            </div>
                            <div class="content">
                                <h5 class="title-box fs-15 mt-2">MT ISSUE</h5>
                                <div class="themesflat-counter fs-14 font-wb color-1">
                                    <span class="number" data-from="0" data-to="1225" data-speed="2500"
                                        data-inviewport="yes">1225</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box bg-color-2">
                            <div class="icon bg-icon-2">
                                <i class='bx bx-task'></i>
                            </div>
                            <div class="content click-c">
                                <h5 class="title-box fs-15 mt-2">MAIN</h5>
                                <div class="themesflat-counter fs-14 font-wb color-2">
                                    <span class="number" data-from="0" data-to="309" data-speed="2500"
                                        data-inviewport="yes">154 +</span>
                                </div>
                            </div>

                        </div>
                        <div class="icon-box bg-color-3">
                            <div class="icon bg-icon-3">
                                <i class='bx bx-block'></i>
                            </div>
                            <div class="content click-c">
                                <h5 class="title-box fs-15 mt-2">SHIPPING</h5>
                                <div class="themesflat-counter fs-14 font-wb color-3">
                                    <span class="number" data-from="0" data-to="309" data-speed="2500"
                                        data-inviewport="yes">75 +</span>
                                </div>
                            </div>

                        </div>
                        <div class="icon-box bg-color-5">
                            <div class="icon bg-icon-5">
                                <i class='bx bx-task color-white'></i>
                            </div>
                            <div class="content click-c">
                                <h5 class="title-box fs-15 mt-2">LOCAL</h5>
                                <div class="themesflat-counter fs-14 font-wb color-4">
                                    <span class="number" data-from="0" data-to="309" data-speed="2500"
                                        data-inviewport="yes">120 +</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body pb-30">
                            <div class="row">
                                <div class="col-md-12 col-xl-10 mb-0">
                                    <div class="row">
                                    <div class="form-group"> <label class="form-label">Select the option</label> </div>
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                                id="pickup" value="Pick Up" checked>
                                            <label class="form-check-label" for="flexRadioDefault5">
                                                Pick Up
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-24">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                                id="delipickup" value="Delivery" >
                                            <label class="form-check-label" for="flexRadioDefault5">
                                                Delivery
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 mb-24">
                                        <div class="form-group"> <label class="form-label">Date</label>
                                            <div class="input-group">    
                                            <input type="date" class="form-control" id="pickup_date" name="pickup_date" required>
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-md-4 col-xl-2 mb-0">
                                    <div class="form-group mt-32"> <a href="#"
                                            class="btn bg-primary btn-block color-white" id="search">Search</a> 
                                    </div>        
                                </div>
                                <div class="col-md-4 col-xl-2 mb-0">
                                    <div class="form-group mt-32">                                         
                                            <button class="btn btn-danger" id="reset" type="reset">Clear</button>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <div id="task-profile_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <!-- <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="task-profile_length"><label>Show <select name="task-profile_length" aria-controls="task-profile" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="task-profile_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="task-profile"></label></div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table
                                                class="table table-vcenter text-nowrap table-bordered dataTable no-footer"
                                                id="task-profile" role="grid">
                                                <thead>
                                                    <tr class="top">
                                                        <th class="border-bottom-0 text-center sorting fs-14 font-w500"
                                                            tabindex="0" aria-controls="task-profile" rowspan="1"
                                                            colspan="1" style="width: 26.6562px;">No</th>
                                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                            aria-controls="task-profile" rowspan="1" colspan="1"
                                                            style="width: 222.312px;">Order ID</th>
                                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                            aria-controls="task-profile" rowspan="1" colspan="1"
                                                            style="width: 84.8281px;">Customer Name</th>
                                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                            aria-controls="task-profile" rowspan="1" colspan="1"
                                                            style="width: 84.8281px;">Customer Conatct Number</th>
                                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                            aria-controls="task-profile" rowspan="1" colspan="1"
                                                            style="width: 87.9844px;">Driver</th>
                                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                            aria-controls="task-profile" rowspan="1" colspan="1"
                                                            style="width: 87.9844px;">Method</th>
                                                         <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                            aria-controls="task-profile" rowspan="1" colspan="1"
                                                            style="width: 87.9844px;">Status</th>    
                                                    </tr>
                                                </thead>
                                                <tbody id="ordersTableBody">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <!--Pagination comes here-->
                                            <div class="col-sm-12">
                                            <div class="pagination-container">
                                                <ul class="pagination">
                                                    <!-- Pagination links will be dynamically inserted here by your JavaScript -->
                                                </ul>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-xl-12">

                    <div class="box left-dot pt-39 mb-30">
                        <div class="box-header  border-0 ">
                            <div class="box-title fs-20 font-w600">Order Info</div>
                        </div>
                        <div class="box-body pt-16 user-profile">
                            <div class="table-responsive">
                                <table class="table mb-0 mw-100 color-span">
                                    <tbody id="orderDetailsBody">
                                        <!--Here fetch all order details of a specific user-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <!--script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script-->
    <script src="libs/jquery/jquery.min.js"></script>
    <script src="libs/jquery/jquery-ui.min.js"></script>
    <script src="libs/moment/min/moment.min.js"></script>
    <script src="libs/apexcharts/apexcharts.js"></script>
    <script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="libs/peity/jquery.peity.min.js"></script>
    <script src="libs/chart.js/Chart.bundle.min.js"></script>
    <script src="libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/countto.js"></script>
    <script src="libs/date-picker/datepicker.js"></script>
    <script src="libs/rating/js/custom-ratings.js"></script>
    <script src="libs/rating/js/jquery.barrating.js"></script>
    <script src="libs/circle-progress/circle-progress.min.js"></script>
    <script src="libs/simplebar/simplebar.min.js"></script>


    <!-- APP JS -->
    <script src="js/main.js"></script>
    <script src="js/shortcode.js"></script>
    <script src="js/pages/datepicker.js"></script>
    <script src="js/pages/chart-circle.js"></script>

    <script>
        var currentPage = 1; // Start with page 1
        var recordsPerPage = 5; // Set the number of records per page

        function loadOrders(page) {
            currentPage = page;

            var formData = {
                selectedDate: $('#pickup_date').val(),
                selectedOption: $('input[name="flexRadioDefault2"]:checked').val(),
                page: page
            };

            $.ajax({
                url: 'order/fetchorders.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    console.log("Response from server: ", response);

                    $("#ordersTableBody").empty(); // Target the tbody by its ID
                    if (response.orders && response.orders.length > 0) {
                        response.orders.forEach(function(order, index) {
                            var driver = order.pickup_driver ? order.pickup_driver : order.delivery_driver;
                            var row = `<tr>
                                <td class="text-center">${index + 1 + ((currentPage - 1) * recordsPerPage)}</td>
                                <td><a href="#" onclick="fetchOrderDetails(${order.order_id})">${order.order_id}</a></td>
                                <td>${order.customer_Name}</td>
                                <td>${order.customer_contactNo}</td>
                                <td>${driver}</td>
                                <td>${order.method}</td>
                                <td>${order.status}</td>
                            </tr>`;
                            $("#ordersTableBody").append(row);
                        });

                        updatePagination(response.totalRecords, recordsPerPage, currentPage);
                    } else {
                        $("#ordersTableBody").append('<tr><td colspan="7" class="text-center">No orders found</td></tr>');
                        $(".pagination").empty(); // Clear existing pagination links if no orders
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error: ", error);
                }
            });
        }

        function updatePagination(totalRecords, recordsPerPage, currentPage) {
            var totalPages = Math.ceil(totalRecords / recordsPerPage);
            var paginationHtml = '';

            for (var i = 1; i <= totalPages; i++) {
                paginationHtml += `<li class="paginate_button page-item ${i === currentPage ? 'active' : ''}">
                    <a href="#" class="page-link" data-page="${i}">${i}</a>
                </li>`;
            }

            $(".pagination").html(paginationHtml);
        }

        function fetchOrderDetails(orderId) {
            $.ajax({
                url: 'order/fetchalldetails.php', // Update with the correct path
                type: 'GET',
                data: { 'order_id': orderId },
                success: function(response) {
                    if (response.error) {
                        console.error("Error: ", response.error);
                    } else {
                        var detailsHtml = ""; 
                        // Construct the detailsHtml based on the response
                        detailsHtml += "<tr><td>Order ID</td><td>" + response.order_Id + "</td></tr>";
                        detailsHtml += "<tr><td>Type of the Order</td><td>" + response.method + "</td></tr>";
                        detailsHtml += "<tr><td>Customer Name</td><td>" + response.customer_Name + "</td></tr>";
                        detailsHtml += "<tr><td>Customer's Address</td><td>" + response.customer_address + "</td></tr>";
                        detailsHtml += "<tr><td>Customer's Contact Number</td><td>" + response.customer_contactNo + "</td></tr>";
                        detailsHtml += "<tr><td>Box Type</td><td>" + response.box_type + "</td></tr>";
                        detailsHtml += "<tr><td>Number of Boxes</td><td>" + response.box_qty + "</td></tr>";
                        detailsHtml += "<tr><td>Delivery Date</td><td>" + (response.delivery_date ? response.delivery_date : "NOT INCLUDED") + "</td></tr>";
                        detailsHtml += "<tr><td>Pick up Date</td><td>" + response.pickup_date + "</td></tr>";
                        detailsHtml += "<tr><td>Delivery Driver</td><td>" + (response.delivery_driver ? response.delivery_driver : "NOT INCLUDED") + "</td></tr>";
                        detailsHtml += "<tr><td>Pick up Driver</td><td>" + response.pickup_driver + "</td></tr>";
                        detailsHtml += "<tr><td>Payement Method</td><td>" + response.payment_method + "</td></tr>";
                        detailsHtml += "<tr><td>Reciever's Name</td><td>" + response.receiver_name + "</td></tr>";
                        detailsHtml += "<tr><td>Reciever's Address</td><td>" + response.receiver_address + "</td></tr>";
                        detailsHtml += "<tr><td>Reciever's Contact Number</td><td>" + response.receiver_contactNo + "</td></tr>";
                        detailsHtml += "<tr><td>Recieving Method</td><td>" + response.receiving_method + "</td></tr>";
                        detailsHtml += "<tr><td>Status of the Order</td><td>" + response.status + "</td></tr>";
                        detailsHtml += "<tr><td>total Payement for the Order</td><td>" + response.method + "</td></tr>";
                        // Add more fields as required

                        $("#orderDetailsBody").html(detailsHtml);
                    }
                    //scroll to id=orderDetailsBody
                    $('html, body').animate({
                        scrollTop: $("#orderDetailsBody").offset().top
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching order details: ", error);
                }
            });
        }

        $(document).ready(function() {
            $('#search').click(function(e) {
                e.preventDefault();
                loadOrders(1);
            });

            $('#reset').click(function() {
                location.reload(); // to reload the page when clear button
            });

            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).data('page');
                loadOrders(page);
            });

            loadOrders(1); // Load initial set of orders
        });
    </script>









</body>


<!-- Mirrored from themesflat.co/html/protend/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 16:20:40 GMT -->

</html>