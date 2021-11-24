<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $username = '';
        $password = '';
        $errors = array();

        if(isset($_POST["submit"])){
            // lay thong tin nguoi dung
            $userName = $_POST["username"];
            $password = $_POST["password"];
            // xoa tag html, k tu dac biet (sql injection)
            $userName = strip_tags($userName);
            $password = strip_tags($password);
            if($userName == ""||$password == ""){
                echo "tài khoản hoặc mật khẩu không được được để trống!";
            }else{
                if($userName != "dat00" || $password != "123"){
                    echo "Tên đăng nhập hoặc mật khẩu không đúng";
                }else{
                    // lay ra thong tin nguoi dung, luu vao session
                    $_SESSION["username"] = "dat00";
                    $_SESSION["password"] = "123";
                }
                header('Location: Home/index.html');
            }
        }
    ?>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">WebLogin</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li>
                        <a href="ExArray/test_question.php">Array</a>
                    </li>
                    <li>
                        <a href="ATM/atm.php">Number</a>
                    </li>
                    <li>
                        <a href="Time/ExtractTime.php">Time</a>
                    </li>
                    <li>
                        <a href="DeQuy/index.php">Recursive</a>
                    </li>
                    <li>
                        <a href="File/index.php">File</a>
                    </li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Nhập từ tìm kiếm">
                <a href="#">
                    <button class="btn">Search</button>
                </a>
            </div>
        </div>

        <div class="content">

            <h1>
                Web Login & <br><span>học làm web với php</span>
            </h1>
            <p class="par">Đinh Trọng Đạt</p>
            <button class="cn"><a href="#">MESSAGE</a></button>

            <div class="form">

                <form id="contact" action="#" method="post">
                    <h2>
                        Đăng nhập
                    </h2>
                    <input type="text" name="username" placeholder="Nhập Email">
                    <input type="password" name="password" placeholder="Nhập mật khẩu">
                    <input class="btn2" type="submit" name="submit" value="Đăng nhập">

                    <p class="link">Không có tài khoản?<br>
                        <a href="#">Đăng ký miễn phí</a>
                    </p>
                    <p class="liw">Đăng ký bằng</p>

                    <div class="icons">
                        <a href="#">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-google"></ion-icon>
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js">

    </script>
</body>

</html>