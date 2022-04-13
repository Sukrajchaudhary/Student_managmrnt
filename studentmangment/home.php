<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>

    <!DOCTYPE html>
    <!-- Created By CodingNepal -->
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Admin page</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    nav {
        display: flex;
        height: 80px;
        width: 100%;
        background: #162447;
        align-items: center;
        justify-content: space-between;
        padding: 0 50px 0 100px;
        flex-wrap: wrap;
    }

    nav .logo {
        color: #fff;
        font-size: 35px;
        font-weight: 600;
    }

    nav ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
    }

    nav ul li {
        margin: 0 5px;
    }

    nav ul li a {
        color: #f2f2f2;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        padding: 8px 15px;
        border-radius: 5px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    nav ul li a.active,
    nav ul li a:hover {
        color: #111;
        background: #fff;
    }

    nav .menu-btn i {
        color: #fff;
        font-size: 22px;
        cursor: pointer;
        display: none;
    }

    input[type="checkbox"] {
        display: none;
    }

    @media (max-width: 1000px) {
        nav {
            padding: 0 40px 0 50px;
        }
    }

    @media (max-width: 920px) {
        nav .menu-btn i {
            display: block;
        }

        #click:checked~.menu-btn i:before {
            content: "\f00d";
        }

        nav ul {
            position: fixed;
            top: 80px;
            left: -100%;
            background: #111;
            height: 100vh;
            width: 100%;
            text-align: center;
            display: block;
            transition: all 0.3s ease;
        }

        #click:checked~ul {
            left: 0;
        }

        nav ul li {
            width: 100%;
            margin: 40px 0;
        }

        nav ul li a {
            width: 100%;
            margin-left: -100%;
            display: block;
            font-size: 20px;
            transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        #click:checked~ul li a {
            margin-left: 0px;
        }

        nav ul li a.active,
        nav ul li a:hover {
            background: none;
            color: cyan;
        }
    }

    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: -1;
        width: 100%;
        padding: 0 30px;
        color: #1b1b1b;
    }

    .content div {
        font-size: 40px;
        font-weight: 700;
    }

    /* Admin pannel */
    /* body{
                display: flex;
                justify-content: center;
                font-family: Arial, Helvetica, sans-serif;
               background-color:#52575D;
            } */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        user-select: none;
    }

    .login {
        position: absolute;
        top: 50%;
        left: 50%;
        height: 400px;
        transform: translate(-50%, -50%);
        padding: 40px;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 5px;
        box-shadow: 1px 1px 20px cyan;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 9px;
        margin: 10px 0;
    }

    .field {
        border: 1px solid cyan;
        border-radius: 50px;
        background-color: transparent;
        width: 100%;
        margin-bottom: 15px;
        display: flex;
    }

    .field span {
        color: white;
        width: 35px;
        line-height: 40px;
        text-align: center;
    }

    .field input {
        width: 80%;
        height: 45px;
        font-size: 1.1rem;
        padding: 5px;
        color: cyan;
        background-color: transparent;
        border: none;
    }

    .forgot-password {
        width: 100%;
        margin-bottom: 15px;
    }

    .forgot-password a {
        color: white;
        text-decoration: none;
    }

    .forgot-password a:hover {
        text-decoration: underline;
    }

    .submit {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 45px;
        margin-bottom: 25px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.2rem;
        color: white;
        background-color: transparent;
        border: 1px solid cyan;
        border-radius: 125px;
    }

    .submit:hover {
        cursor: pointer;
        background-color: orangered;
    }

    .login-form-copy {
        margin-bottom: 15px;
    }

    .login-form_sign-up {
        text-decoration: none;
        color: rgb(18, 190, 190);
    }

    header i {
        color: #FFFF;
        font-size: 70px;
        margin-bottom: 35px;
    }

    /* .social-icons{
                display: flex;
                width: 100%;
                justify-content: space-between;
                padding-bottom: 5px;
            }
            .social-icon{
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.4rem;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                cursor: pointer;
                margin-bottom: 25px;
            }
            .facebook{
                background-color: #385998;
            }
            .instagram{
                background: linear-gradient(rgb(243,5,171),rgb(205,95,4),yellow);
            }
            .twitter
            {
                background-color: #00ACEE;
            }
            .google
            {
                background-color: #CA3224;
            }
            .linkedin{
                background-color: #0E76AB;
            }
             input:focus,input:hover,input:active
             {
                 outline: none;
             } */
    #show {
        display: none;
    }

    /* student css */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        user-select: none;
    }

    .login {
        position: absolute;
        top: 50%;
        left: 50%;
        height: 400px;
        transform: translate(-50%, -50%);
        padding: 40px;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 5px;
        box-shadow: 1px 1px 20px cyan;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 9px;
        margin: 10px 0;
    }

    .field {
        border: 1px solid cyan;
        border-radius: 50px;
        background-color: transparent;
        width: 100%;
        margin-bottom: 15px;
        display: flex;
    }

    .field span {
        color: white;
        width: 35px;
        line-height: 40px;
        text-align: center;
    }

    .field input {
        width: 80%;
        height: 45px;
        font-size: 1.1rem;
        padding: 5px;
        color: cyan;
        background-color: transparent;
        border: none;
    }

    .forgot-password {
        width: 100%;
        margin-bottom: 15px;
    }

    .forgot-password a {
        color: white;
        text-decoration: none;
    }

    .forgot-password a:hover {
        text-decoration: underline;
    }

    .submit {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 45px;
        margin-bottom: 25px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.2rem;
        color: white;
        background-color: transparent;
        border: 1px solid cyan;
        border-radius: 125px;
    }

    .submit:hover {
        cursor: pointer;
        background-color: orangered;
    }

    .login-form-copy {
        margin-bottom: 15px;
    }

    .login-form_sign-up {
        text-decoration: none;
        color: rgb(18, 190, 190);
    }

    header i {
        color: #FFFF;
        font-size: 70px;
        margin-bottom: 35px;
    }


    #student {
        display: none;
    }

    .images img {
        border-radius: 50%;
        height: 30px;
        width: 30px;
        position: relative;
        left: 173px;
        bottom: 53px;
    }

    .carousel {
        z-index: -1;
    }

    .carousel-item {
        height: 100vh;
        min-height: 300px;
        background: no-repeat scroll center scroll;
        -webkit-backgroung-size: cover;
        background-size: cover;

    }

    .carousel-caption {
        color: #E33E5A;
        bottom: 150px;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>

    <body>
        <nav class="fixed-top">
            <div class="logo">
                UNITY
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a  href="#" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
                        aria-controls="collapseWidthExample">
                       view Notice
                    </a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#" id=student_login>Student</a></li>
                <li><a href="#" id="Admin">Admin</a></li>
            </ul>
        </nav>


        <!-- Admin panel -->
        <?php
        include('loginform/Admin-login.php');

        ?>

        <!-- End of Admin Pannel -->

        <!-- Student login -->
        <?php
        include('loginform/student-login.php');
        ?>
        <!-- end of login pannel -->

        <!-- Caesolul part -->

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/1.avif" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Our Special Program</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/2.avif" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Our Special Program</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Our Special Program</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end of caresul part -->
        <!-- About Section -->
        <!-- Button trigger modal -->
       <section id="Notice">
           <div class="container">
           <div>
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                <div class="card card-body" style="width:100%">
                   <!--  -->
                   <?php
    include('include/connect.php');
    $query ="SELECT  `Notice_title`, `Message`, `Creat_Date` FROM `tblpublicnotice`";
    $result = mysqli_query($conn,$query);
    ?>
                        <table class="table" style="background-color:green">
                            <?php while($row=mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                <td><?php echo $row['Notice_title'];?></td>
                            </tr>
                             <hr>
                            <tr>
                                <td><?php echo $row['Message']; ?></td>
                            </tr>
                             <tr style="margin-right:100px;">
                             <td ><?php echo "Update Date: ".$row['Creat_Date']; ?></td>
                             </tr>

                            <?php } ?>
                        </table>
                   <!--  -->
                </div>
            </div>
           </div>
       </section>
            <!-- End Of About Section -->
            <!-- boot strap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
                crossorigin="anonymous">
            </script>

            <script src="https://kit.fontawesome.com/9ef1cb42dc.js" crossorigin="anonymous"></script>
    </body>
    <!-- for Admin pannel -->
    <script>
    document.getElementById('Admin').addEventListener('click', function() {
        document.querySelector('#show').style.display = "flex";
    });
    // 
    document.querySelector('#hidea').addEventListener('click', function() {
        document.querySelector('#show').style.display = "none";
    });




    // student
    document.getElementById('student_login').addEventListener('click', function() {
        document.querySelector('#student').style.display = "flex";
    });
    // 
    document.querySelector('#hides').addEventListener('click', function() {
        document.querySelector('#student').style.display = "none";
    });
    </script>

    </html>