<?php 
    include('php_user.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talknow</title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    
    <style>
        .titlebar a {
            height: 50px;
            padding: 10px 70px;
            margin-top: 10px;
            margin-left: 30px;
            color: black;
            border: 1px solid black;
            border-radius: 5px;
        }

        .main-iframe {
            width: 100%;
            height: calc(100vh - 70px);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('left_bar.php');?>
            <div class="col-md-9 rightbar">
                <div class="row titlebar">
                    <a href="xylyphanhoi.php" target="main-iframe" class="btn btn-outline-warning">Xử lý phản
                        hồi</a>
                    <a href="qlnguoidung.php" target="main-iframe" class="btn btn-outline-warning">Quản lý người
                        dùng</a>
                    <a href="qlthuvien.php" target="main-iframe" class="btn btn-outline-warning">Quản lý thư
                        viện</a>
                </div>
                <div class="row">
                    <iframe src="" frameborder="0" class="main-iframe" name="main-iframe" scrolling="no">
                        <p>Trình duyệt của bạn không hỗ trợ iframe.</p>
                    </iframe>
                </div>
            </div>
        </div>
    </div>

<?php
    include ('modal.php');
?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/index.js"></script>
</body>

</html>