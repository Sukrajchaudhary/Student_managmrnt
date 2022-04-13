
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login/Admin-login.php" method="POST" class="login" id="show">
            <div class="images">
                <img src="image/2.jpg" alt="" id="hidea">
            </div>
            <header><i class="fas fa-user"></i></header>
            <div class="container">
                <div class="field"><span class="fa fa-user"></span><input type="email" placeholder="Email or Username"
                        name="Email" reqired="true"></div>
                <div class="field"><span class="fa fa-lock"></span><input type="PASSWORD" placeholder="Password"
                        name="Password" required="true"></div>
                <div class="forgot-password"><a href="">Forgot password?</a></div>
                <input type="submit" class="submit" name="LOGIN" value="LOGIN">
            </div>
        </form>
</body>
</html>