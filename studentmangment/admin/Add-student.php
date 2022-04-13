<?php
include('include/header.php');
include('include/css.php');

?>

<!-- Sidebar -->
<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
            class="fas fa-user-secret me-2"></i>Codersbite</div>
    <div class="list-group list-group-flush my-3">
        <a href="home.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="Add-student.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-project-diagram me-2"></i>Add Students</a>
        <a href="Notice.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-chart-line me-2"></i>Add Notice</a>
        <a href="tables.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-paperclip me-2"></i>View All Students</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-shopping-cart me-2"></i>Store Mng</a>
        <a href="xx.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-gift me-2"></i>Products</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-comment-dots me-2"></i>Chat</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-map-marker-alt me-2"></i>Outlet</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                class="fas fa-power-off me-2"></i>Logout</a>
    </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Dashboard</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <!-- form starts -->
        <div class="container">
            <form class="row g-3" action="db/Add-student.php" method="post">
                <h4 style="color:#52575D">Enter Student Details:</h4>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Enter Student Name <span style="color:red">*
                            :</span></label>
                    <input type="text" class="form-control" id="inputEmail4" name="StudentName" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Enter Student Email<span
                            style="color:red">*:</span></label>
                    <input type="email" class="form-control" id="inputPassword4" name="StudentEmail">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label"> Enter permanent Address <span style="color:red">*
                            :</span></label>
                    <input type="text" class="form-control" id="inputAddress" name="StudentPermanentAddress">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Enter Temprory <span
                            style="color:red">*:</span></label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"
                        name="StudentTemporaryAddress">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Enter Class</label> <span
                        style="color:red">*:</span></label>
                    <select id="inputState" name="StudentClass" class="form-select">
                        <option selected>Choose...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Contact Number: <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter contact"
                        name="StudentContactNumber">

                </div>
                <div class="col-4">
                    <label for="inputState" class="form-label">Enter DOB: <span style="color:red">*</span></label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="Enter contact" name="DOB">


                </div>
                <div class="col-4">
                    <label for="inputState" class="form-label">Slect Gender: <span style="color:red">*</span></label>
                    <select id="inputState" class="form-select" name="Gender">
                        <option>Choose...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                </div>
                <h4>Parents/Guardian's Details</h4>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Enter's Father Name <span style="color:red">*
                            :</span></label>
                    <input type="text" class="form-control" id="inputEmail4" name="FatherName">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Enter Mother Name<span
                            style="color:red">*:</span></label>
                    <input type="text" class="form-control" id="inputPassword4" name="MotherName">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Enter Contact</label> <span
                        style="color:red">*:</span></label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter contact"
                        name="ContactNumber">

                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Enter Address: <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="parent Address"
                        name="PrentsAddress">

                </div>

                <h4>LOGIN DETAILS:</h4>
                <div class="col-12">
                    <label for="inputAddress" class="form-label"> Enter User Name <span style="color:red">*
                            :</span></label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"
                        name="UserName">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Enter password <span
                            style="color:red">*:</span></label>
                    <input type="password" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor" name="Password">
                </div>
                <div class="col-12">
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Add Student</button>
                </div>

            </form>


        </div>



    </div>









</div>
</div>
</div>
<!-- /#page-content-wrapper -->
</div>
<?php
include('include/script.php');
include('include/foter.php');?>