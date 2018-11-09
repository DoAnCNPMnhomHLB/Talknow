<?php
    include('../Controller/controller_talknow_library.php');
    $xuly = new xuly();
    if(isset($_POST['btn_ok']))
    {
        $kind = $_POST['post_document'];
        $name = $_POST['nameDoc'];
        $file_part = $_FILES['file'];
        $getDoc = $xuly->xulyTailieu(null, $kind, $name, $file_part_sql, null);	
    }
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
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 leftbar">
                <div class="row userbar">
                    <div class="col-3 avatar">
                        <a href="#" data-toggle="modal" data-target="#modal-updateinfo"><img src="images/thaygiao.jpg"
                                alt="Ảnh đại diện"></a>
                    </div>
                    <div class="col-9">
                        <h6><a href="#" class="username" data-toggle="modal" data-target="#modal-updateinfo"><?php session_start(); echo $_SESSION['username']; ?></a></h6>
                        <div class="box">
                            <div class="container-1">
                                <a href="#" class="icon"><i class="fa fa-search"></i></a>
                                <input type="search" id="search" placeholder="Tìm kiếm bạn bè" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row belowuserbar">
                    <div class="col-3 menubar">
                        <div class="row menu-active">
                            <a href="index.html" data-tooltip="true" data-placement="right" title="Trang chủ"><i class="fas fa-home"></i></a>
                        </div>
                        <hr>
                        <div class="row menu-item">
                            <a href="#" data-toggle="modal" data-target="#modaltaonhom" data-tooltip="true"
                                data-placement="right" title="Tạo nhóm chat"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        <div class="row menu-item">
                            <a href="ketban.html" data-tooltip="true" data-placement="right" title="Thêm bạn"><i class="fas fa-user-plus"></i></a>
                        </div>
                        <div class="row menu-item">
                            <a href="#" data-toggle="modal" data-target="#modalUploadFile" data-whatever="@mdo"
                                data-tooltip="true" data-placement="right" title="Upload File"><i class="fas fa-file-upload"></i></a>
                        </div>
                        <div class="row menu-item">
                            <a href="timfile.php" data-tooltip="true" data-placement="right" title="Tra cứu tài liệu"><i
                                    class="fas fa-file"></i></a>
                        </div>
                        <div class="row menu-item">

                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-tooltip="true" data-placement="right" title="Cài đặt"><i
                                    class="fas fa-cog"></i></a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Cài đặt</a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-doimatkhau">Đổi
                                    mật khẩu</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalgioithieu">Giới
                                    thiệu</a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalfeedback"
                                    data-whatever="@mdo">Phản hồi/Báo lỗi</a>
                                <div class="dropdown-divider"></div>
                                <a href="signin.html" class="dropdown-item">Đăng xuất</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-9 listfriendbar">
                        <div class="row filtermess">
                            <a href="#">Tin nhắn <i class="fas fa-caret-down"></i></a>
                        </div>
                        <div class="row yourfriend">
                            <div class="col-3">
                                <img src="images/avatar-female.png" alt="This is avatar a fr">
                            </div>
                            <div class="col-9">
                                <p class="friendname">Friend's Name</p>
                                <p class="shownewestchat">Bạn: Đây là đoạn chat mới...</p>
                                <a href="#"><i class="fas fa-cog"></i></a>
                                <span class="statustime">24 phút</span>
                            </div>
                        </div>
                        <div class="row yourfriend">
                            <div class="col-3">
                                <img src="images/avatar-female.png" alt="This is avatar a fr">
                            </div>
                            <div class="col-9">
                                <p class="friendname">Friend's Name</p>
                                <p class="shownewestchat">Bạn: Đây là đoạn chat mới...</p>
                                <a href="#"><i class="fas fa-cog"></i></a>
                                <span class="statustime">24 phút</span>
                            </div>
                        </div>
                        <div class="row yourfriend">
                            <div class="col-3">
                                <img src="images/avatar-female.png" alt="This is avatar a fr">
                            </div>
                            <div class="col-9">
                                <p class="friendname">Friend's Name</p>
                                <p class="shownewestchat">Bạn: Đây là đoạn chat mới...</p>
                                <a href="#"><i class="fas fa-cog"></i></a>
                                <span class="statustime">24 phút</span>
                            </div>
                        </div>
                        <div class="row yourfriend">
                            <div class="col-3">
                                <img src="images/avatar-female.png" alt="This is avatar a fr">
                            </div>
                            <div class="col-9">
                                <p class="friendname">Friend's Name</p>
                                <p class="shownewestchat">Bạn: Đây là đoạn chat mới...</p>
                                <a href="#"><i class="fas fa-cog"></i></a>
                                <span class="statustime">24 phút</span>
                            </div>
                        </div>
                        <div class="row yourfriend">
                            <div class="col-3">
                                <img src="images/avatar-female.png" alt="This is avatar a fr">
                            </div>
                            <div class="col-9">
                                <p class="friendname">Friend's Name</p>
                                <p class="shownewestchat">Bạn: Đây là đoạn chat mới...</p>
                                <a href="#"><i class="fas fa-cog"></i></a>
                                <span class="statustime">24 phút</span>
                            </div>
                        </div>
                        <div class="row yourfriend">
                            <div class="col-3">
                                <img src="images/avatar-female.png" alt="This is avatar a fr">
                            </div>
                            <div class="col-9">
                                <p class="friendname">Friend's Name</p>
                                <p class="shownewestchat">Bạn: Đây là đoạn chat mới...</p>
                                <a href="#"><i class="fas fa-cog"></i></a>
                                <span class="statustime">24 phút</span>
                            </div>
                        </div>
                        <div class="row yourfriend">
                            <div class="col-3">
                                <img src="images/avatar-female.png" alt="This is avatar a fr">
                            </div>
                            <div class="col-9">
                                <p class="friendname">Friend's Name</p>
                                <p class="shownewestchat">Bạn: Đây là đoạn chat mới...</p>
                                <a href="#"><i class="fas fa-cog"></i></a>
                                <span class="statustime">24 phút</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 rightbar">
                <div class="row justify-content-center div-welcome">
                    <div class="col-8">
                        <img id="logohome" src="images/Logo.png" alt="logo">
                        <p>Chào mừng đến với <b>Talknow</b></p>
                        <p>Khám phá thế giới rộng lớn đầy tiện ích của Talknow cùng trò chuyện và làm việc với người
                            thân, đồng nghiệp và cộng đồng toàn thế giới.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/content1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/content2.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/content4.png" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal ở dưới đây-->
    <!--modal đổi mật khẩu-->
    <div class="modal fade" id="modal-doimatkhau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-5">
                                <label for="current-password">Mật khẩu hiện tại: </label>
                            </div>
                            <div class="col-7">
                                <input type="password" name="current-password" id="current-password" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label for="new-password">Mật khẩu mới: </label>
                            </div>
                            <div class="col-7">
                                <input type="password" name="new-password" id="new-password" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label for="comfirm-password">Nhập lại mật khẩu mới: </label>
                            </div>
                            <div class="col-7">
                                <input type="password" name="comfirm-password" id="comfirm-password" value="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary mybtn">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!--modal cập nhật thông tin-->
    <div class="modal fade" id="modal-updateinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-4">
                                <img src="images/thaygiao.jpg" alt="avatar">
                            </div>
                            <div class="col-8">
                                <input type="file" name="inputanh" id="inputanh" class="inputfile">
                                <label for="inputanh" id="lb-loadanh">Sửa ảnh đại diện</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="username">Tên hiển thị: </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="username" id="username" value="John Math">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="sex">Giới tính: </label>
                            </div>
                            <div class="col-8">
                                <select id="sex">
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="ngaysinh">Ngày sinh: </label>
                            </div>
                            <div class="col-8">
                                <input type="date" name="ngaysinh" id="ngaysinh" value="1997-01-18">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="email">Email: </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="email" id="email" value="diphotphopentaoxit@gmail.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="sdt">Số điện thoại: </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="username" id="sdt" value="0987647814">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary mybtn">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>

    <!--modal tạo nhóm-->
    <div class="modal fade" id="modaltaonhom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tạo nhóm trò chuyện</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="input-tennhom" class="col-form-label"><b>Đặt tên nhóm:</b></label>
                            <input type="text" class="form-control" id="input-tennhom">
                        </div>
                        <div class="form-group">
                            <label for="SoLuongNguoi" class="col-form-label">Số lượng thành viên:</label>
                            <select class="form-control" id="SoLuongNguoi">
                                <option>Không giới hạn</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="textarea-mota" class="col-form-label">Mô tả nhóm:</label>
                            <textarea class="form-control" id="textarea-mota"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="input-tenban" class="col-form-label">Mời thêm bạn vào trò chuyện:</label>
                            <input type="text" class="form-control" id="input-tenban">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" id="btnok">Tạo nhóm</button>
                </div>
            </div>
        </div>
    </div>

    <!--modal upload file-->
    <div class="modal fade" id="modalUploadFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đăng tài liệu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="col-form-label">Phân loại tài liệu:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name = "post_document">
                                <option value = "ielts">Tài liệu IELTS</option>
                                <option value = "toiec">Tài liệu TOEIC</option>
                                <option value = "av1">Anh Văn 1</option>
                                <option value = "av2">Anh Văn 2</option>
                                <option value = "av3">Anh Văn 3</option>
                                <option value = "others">Tài liệu khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Đặt tên cho tài liệu:</label>
                            <input type="text" class="form-control" id="message-text" name = "nameDoc">
                        </div>
                        <input type="file" class="form-control-file inputfile" id="inputfile" name = "file">
                        <label for="inputfile"><i class="fas fa-upload"></i> <span id="labelFileUpload">Tải tệp lên</span></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" id="btnok" name = "btn_ok">OK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--modal phản hồi-->

    <div class="modal fade" id="modalfeedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gửi phản hồi / Báo lỗi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tiêu đề:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Nội dung:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="btnok">Gửi</button>
                </div>
            </div>
        </div>
    </div>

    <!--modal giới thiệu-->
    <div class="modal fade" id="modalgioithieu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container-fluid">
                        <div class="row">
                            <h4 class="modal-title" id="exampleModalLongTitle">Talknow Web</h4>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <span class="span-version"><br>Phiên bản 1.0.0</span>
                            </div>
                            <div class="col-6">
                                <img src="images/Logo.png" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                Phát triển bởi <br>
                                __ <br>
                                <b>Linh Hòa Bình Team</b><br><br>
                                Lớp 04_DHCNTT_1<br>
                                Trường Đại học Tài nguyên và Môi trường TP. Hồ Chí Minh
                            </div>
                            <div class="col-6">
                                Liên hệ <br>
                                __ <br>
                                <b>Tổng đài:</b>123456789<br><br>
                                <b>Email:</b>chuaco@gmail.com<br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/index.js"></script>
</body>

</html>