<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Danh sách đơn hàng</title>
    <link rel="shortcut icon" href="../statics/icons/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../statics/css/bill-element.css">
    <link rel="stylesheet" href="../statics/css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="shop-top">

        <div class="container">
            <div class="row header-2" style="margin: 0px; padding: 0px">
                <div class="col-md-1" style="margin: 0px; padding: 0px; padding-top: 10px;">
                    <a class="row" href="/">
                        <img class="logo" src="../statics/images/logo-shop.png" alt="Logo">
                    </a>
                </div>
                <div class="col-md-10 search-bar center" style="margin: 0px; padding: 0px; padding-top: 30px;">
                    <div class="form-group" style="margin: 0px; padding: 0px">
                        <div class="row d-flex justify-content-between" style="margin: 0px; padding: 0px">
                            <nav>
                                <ul class="header-nav-list">
                                    <li class="header-nav-item"><a class="no-style-tag" href="">Balo</a></li>
                                    <li class="header-nav-item"><a class="no-style-tag" href="">Túi</a></li>
                                    <li class="header-nav-item"><a class="no-style-tag" href="">Vali</a></li>
                                    <li class="header-nav-item"><a class="no-style-tag" href="">Phụ kiện du lịch</a></li>
                                    <li class="header-nav-item"><a class="no-style-tag" href="">Túi sách</a></li>
                                </ul>
                            </nav>
                            <div class="d-flex ">
                                <div class="header-nav-item row">
                                    <p>TEL.</p>
                                    <p class="telephone-text">0387697588</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="padding-left: 50px;">
                        <form action="" id="search-form">
                            <div class="search">
                                <input type="text" name="search" class="round" placeholder="Tìm kiếm" />
                                <!-- <input type="submit" class="corner" value="" /> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-content" style="padding-top: 50px; min-height: 800px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex justify-content-center">
                        <img src="../statics/images/avatar.jpg" id="user-avatar" class="center" alt="avatar">
                    </div>
                    <div class="d-flex align-items-start flex-column container">
                        <div class="row">
                            <p>Họ và tên: <strong>Nguyễn Đức Hạnh</strong></p>
                            <p>Địa chỉ giao hàng: <strong>Số 03 khu 103 Hàng Dưa, Hà Cầu, Hà Đông Hà Nội</strong></p>
                            <p>Số điện thoại liên hệ: <strong>0387697599</strong></p>
                            <a href="/LT-Web/page/logout.php"><i class="fa fa-pencil" style="text-decoration: underline;">Đăng xuất</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div>
                        <p class="label-primary">Đơn hàng chi tiết</p>
                    </div>
                    <!-- main content -->
                    <div class="content-nav-bar">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item nav-primary-item"><a class="nav-link active no-style-tag" id="home-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Tất cả</a></li>
                            <li class="nav-item nav-primary-item"><a class="nav-link no-style-tag" id="waiting-tab" data-toggle="tab" href="#waiting" role="tab" aria-controls="waiting" aria-selected="false">Chờ xác
                                    nhận</a>
                            </li>
                            <li class="nav-item nav-primary-item"><a class="nav-link no-style-tag" id="transporting-tab" data-toggle="tab" href="#transporting" role="tab" aria-controls="transporting" aria-selected="false">Đang lấy hàng</a></li>
                            <li class="nav-item nav-primary-item"><a class="nav-link no-style-tag" id="taken-tab" data-toggle="tab" href="#taken" role="tab" aria-controls="takens" aria-selected="false">Đang giao</a>
                            </li>
                            <li class="nav-item nav-primary-item"><a class="nav-link no-style-tag" id="transported-tab" data-toggle="tab" href="#transported" role="tab" aria-controls="takens" aria-selected="false">Đã giao</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Start PHP -->

                    <div class="tab-content">
                        <div class="display-content tab-pane active bill" id="all" aria-labelledby="all-tab">
                            <?php
                            foreach ($orders as $order) {

                            ?>
                                <div class="container bill">
                                    <div class="bill-header d-flex align-items-center">
                                        <div class="bill-header__left">
                                            <div class="bill-header__item d-flex justify-content-between">
                                                <div>
                                                    <p>Mã đơn hàng: <?php echo $order["code"]; ?></p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="fa fa-truck" style="font-size: 20px; margin-left: 10px;"></i>
                                                    <p style="margin-left: 10px; margin-right: 10px;">Trạng thái: </p>
                                                    <p style="color: red;"><?php
                                                                            if ($order["status"] == "1") {
                                                                                echo "Chờ xác nhận";
                                                                            } elseif ($order["status"] == "2") {
                                                                                echo "Đang lấy hàng";
                                                                            } elseif ($order["status"] == "3") {
                                                                                echo "Đang giao hàng";
                                                                            } elseif ($order["status"] == "4") {
                                                                                echo "Đã giao hàng";
                                                                            }
                                                                            ?></p>
                                                </div>
                                            </div>
                                            <div class="bill-header__list-icon">
                                                <div class="bill-header__item">
                                                    <p><?php echo sizeof((array)$order["details"]); ?> sản phẩm: </p>
                                                </div>
                                                <?php 
                                                    foreach ((array)$order["details"] as $order_element){
                                                    ?>  
                                                        <img src="<?php
                                                        echo $order_element["image"];
                                                        ?>" alt="" class="bill-header__icon">
                                                    <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="bill-header__right">
                                            <i class="fa fa-angle-double-down fa-3x bill-header__dropdown-icon" style="float: right;"></i>
                                        </div>
                                    </div>
                                    <div class="bill-content bill-content-invisible container">
                                        <div class="item row">

                                            <?php
                                            $detail_element = (array)$order["details"];
                                            $total_money = 0;
                                            for ($j = 0; $j < sizeof($detail_element); $j++) {
                                            ?>
                                                <!-- Item in order -->
                                                <div class="item-image col-md-2">
                                                    <img src="<?php
                                                            echo $detail_element[$j]["image"];
                                                            ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;" alt="">
                                                </div>
                                                <div class="item-content col-md-9">
                                                    <span class="item-label">
                                                        <?php
                                                        echo $detail_element[$j]["category"];
                                                        ?>
                                                    </span>
                                                    <a href="" class="item-header"><?php echo $detail_element[$j]["name"] ?></a>
                                                    <div class="item-detail-quantity">
                                                        <span>Số lượng: <?php
                                                                        echo $detail_element[$j]["quantity"];
                                                                        ?> - Đơn giá: <?php
                                                                                        echo $detail_element[$j]["price"];
                                                                                        ?> - Thành tiền: <?php
                                                                                    $total_money += (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    echo (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    ?></span>
                                                        <button style="text-decoration: underline; float:right;">Mua
                                                            thêm</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- End of Item in order -->
                                            <div class="bill-content__summary container">
                                                <div class="row">
                                                    <div class="col-md-9 row">
                                                        <p class="bill-content__summary-label">Tổng tiền:</p>
                                                        <p class="bill-content__summary-price"><?php echo $total_money ?></p>
                                                        <p class="bill-content__summary-currency">₫</p>
                                                    </div>

                                                    <div class="bill-content__summary-detail col-md-3"><a href="<?php 
                                                        echo "/LT-Web/page/order_detail.php?orderId=".$order["code"]
                                                    ?>" class="btn btn-light">Xem
                                                            chi tiết đơn</a></div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <hr>
                                </div>
                            <?php  } ?>
                        </div>






                        <div class="display-content tab-pane" id="waiting" aria-labelledby="waiting-tab">
                        <?php
                            foreach ($orders as $order) {
                                if ($order["status"] != "1"){
                                    continue;
                                }
                            ?>
                                <div class="container bill">
                                    <div class="bill-header d-flex align-items-center">
                                        <div class="bill-header__left">
                                            <div class="bill-header__item d-flex justify-content-between">
                                                <div>
                                                    <p>Mã đơn hàng: <?php echo $order["code"]; ?></p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="fa fa-truck" style="font-size: 20px; margin-left: 10px;"></i>
                                                    <p style="margin-left: 10px; margin-right: 10px;">Trạng thái: </p>
                                                    <p style="color: red;"><?php
                                                                            if ($order["status"] == "1") {
                                                                                echo "Chờ xác nhận";
                                                                            } elseif ($order["status"] == "2") {
                                                                                echo "Đang lấy hàng";
                                                                            } elseif ($order["status"] == "3") {
                                                                                echo "Đang giao hàng";
                                                                            } elseif ($order["status"] == "4") {
                                                                                echo "Đã giao hàng";
                                                                            }
                                                                            ?></p>
                                                </div>
                                            </div>
                                            <div class="bill-header__list-icon">
                                                <div class="bill-header__item">
                                                    <p><?php echo sizeof((array)$order["details"]); ?> sản phẩm: </p>
                                                </div>
                                                <?php 
                                                    foreach ((array)$order["details"] as $order_element){
                                                    ?>  
                                                        <img src="<?php
                                                        echo $order_element["image"];
                                                        ?>" alt="" class="bill-header__icon">
                                                    <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="bill-header__right">
                                            <i class="fa fa-angle-double-down fa-3x bill-header__dropdown-icon" style="float: right;"></i>
                                        </div>
                                    </div>
                                    <div class="bill-content bill-content-invisible container">
                                        <div class="item row">

                                            <?php
                                            $detail_element = (array)$order["details"];
                                            $total_money = 0;
                                            for ($j = 0; $j < sizeof($detail_element); $j++) {
                                            ?>
                                                <!-- Item in order -->
                                                <div class="item-image col-md-2">
                                                    <img src="<?php
                                                            echo $detail_element[$j]["image"];
                                                            ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;" alt="">
                                                </div>
                                                <div class="item-content col-md-9">
                                                    <span class="item-label">
                                                        <?php
                                                        echo $detail_element[$j]["category"];
                                                        ?>
                                                    </span>
                                                    <a href="" class="item-header"><?php echo $detail_element[$j]["name"] ?></a>
                                                    <div class="item-detail-quantity">
                                                        <span>Số lượng: <?php
                                                                        echo $detail_element[$j]["quantity"];
                                                                        ?> - Đơn giá: <?php
                                                                                        echo $detail_element[$j]["price"];
                                                                                        ?> - Thành tiền: <?php
                                                                                    $total_money += (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    echo (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    ?></span>
                                                        <button style="text-decoration: underline; float:right;">Mua
                                                            thêm</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- End of Item in order -->
                                            <div class="bill-content__summary container">
                                                <div class="row">
                                                    <div class="col-md-9 row">
                                                        <p class="bill-content__summary-label">Tổng tiền:</p>
                                                        <p class="bill-content__summary-price"><?php echo $total_money ?></p>
                                                        <p class="bill-content__summary-currency">₫</p>
                                                    </div>

                                                    <div class="bill-content__summary-detail col-md-3"><a href="DH819479813.html" class="btn btn-light">Xem
                                                            chi tiết đơn</a></div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <hr>
                                </div>
                            <?php  } ?>
                        </div>







                        <div class="display-content tab-pane" id="transporting" aria-labelledby="transporting-tab">
                        <?php
                            foreach ($orders as $order) {
                                if ($order["status"] != "2"){
                                    continue;
                                }
                            ?>
                                <div class="container bill">
                                    <div class="bill-header d-flex align-items-center">
                                        <div class="bill-header__left">
                                            <div class="bill-header__item d-flex justify-content-between">
                                                <div>
                                                    <p>Mã đơn hàng: <?php echo $order["code"]; ?></p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="fa fa-truck" style="font-size: 20px; margin-left: 10px;"></i>
                                                    <p style="margin-left: 10px; margin-right: 10px;">Trạng thái: </p>
                                                    <p style="color: red;"><?php
                                                                            if ($order["status"] == "1") {
                                                                                echo "Chờ xác nhận";
                                                                            } elseif ($order["status"] == "2") {
                                                                                echo "Đang lấy hàng";
                                                                            } elseif ($order["status"] == "3") {
                                                                                echo "Đang giao hàng";
                                                                            } elseif ($order["status"] == "4") {
                                                                                echo "Đã giao hàng";
                                                                            }
                                                                            ?></p>
                                                </div>
                                            </div>
                                            <div class="bill-header__list-icon">
                                                <div class="bill-header__item">
                                                    <p><?php echo sizeof((array)$order["details"]); ?> sản phẩm: </p>
                                                </div>
                                                <?php 
                                                    foreach ((array)$order["details"] as $order_element){
                                                    ?>  
                                                        <img src="<?php
                                                        echo $order_element["image"];
                                                        ?>" alt="" class="bill-header__icon">
                                                    <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="bill-header__right">
                                            <i class="fa fa-angle-double-down fa-3x bill-header__dropdown-icon" style="float: right;"></i>
                                        </div>
                                    </div>
                                    <div class="bill-content bill-content-invisible container">
                                        <div class="item row">

                                            <?php
                                            $detail_element = (array)$order["details"];
                                            $total_money = 0;
                                            for ($j = 0; $j < sizeof($detail_element); $j++) {
                                            ?>
                                                <!-- Item in order -->
                                                <div class="item-image col-md-2">
                                                    <img src="<?php
                                                            echo $detail_element[$j]["image"];
                                                            ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;" alt="">
                                                </div>
                                                <div class="item-content col-md-9">
                                                    <span class="item-label">
                                                        <?php
                                                        echo $detail_element[$j]["category"];
                                                        ?>
                                                    </span>
                                                    <a href="" class="item-header"><?php echo $detail_element[$j]["name"] ?></a>
                                                    <div class="item-detail-quantity">
                                                        <span>Số lượng: <?php
                                                                        echo $detail_element[$j]["quantity"];
                                                                        ?> - Đơn giá: <?php
                                                                                        echo $detail_element[$j]["price"];
                                                                                        ?> - Thành tiền: <?php
                                                                                    $total_money += (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    echo (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    ?></span>
                                                        <button style="text-decoration: underline; float:right;">Mua
                                                            thêm</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- End of Item in order -->
                                            <div class="bill-content__summary container">
                                                <div class="row">
                                                    <div class="col-md-9 row">
                                                        <p class="bill-content__summary-label">Tổng tiền:</p>
                                                        <p class="bill-content__summary-price"><?php echo $total_money ?></p>
                                                        <p class="bill-content__summary-currency">₫</p>
                                                    </div>

                                                    <div class="bill-content__summary-detail col-md-3"><a href="DH819479813.html" class="btn btn-light">Xem
                                                            chi tiết đơn</a></div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <hr>
                                </div>
                            <?php  } ?>
                        </div>

                        <div class="display-content tab-pane" id="waiting" aria-labelledby="waiting-tab">
                        <?php
                            foreach ($orders as $order) {
                                if ($order["status"] != "1"){
                                    continue;
                                }
                            ?>
                                <div class="container bill">
                                    <div class="bill-header d-flex align-items-center">
                                        <div class="bill-header__left">
                                            <div class="bill-header__item d-flex justify-content-between">
                                                <div>
                                                    <p>Mã đơn hàng: <?php echo $order["code"]; ?></p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="fa fa-truck" style="font-size: 20px; margin-left: 10px;"></i>
                                                    <p style="margin-left: 10px; margin-right: 10px;">Trạng thái: </p>
                                                    <p style="color: red;"><?php
                                                                            if ($order["status"] == "1") {
                                                                                echo "Chờ xác nhận";
                                                                            } elseif ($order["status"] == "2") {
                                                                                echo "Đang lấy hàng";
                                                                            } elseif ($order["status"] == "3") {
                                                                                echo "Đang giao hàng";
                                                                            } elseif ($order["status"] == "4") {
                                                                                echo "Đã giao hàng";
                                                                            }
                                                                            ?></p>
                                                </div>
                                            </div>
                                            <div class="bill-header__list-icon">
                                                <div class="bill-header__item">
                                                    <p><?php echo sizeof((array)$order["details"]); ?> sản phẩm: </p>
                                                </div>
                                                <?php 
                                                    foreach ((array)$order["details"] as $order_element){
                                                    ?>  
                                                        <img src="<?php
                                                        echo $order_element["image"];
                                                        ?>" alt="" class="bill-header__icon">
                                                    <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="bill-header__right">
                                            <i class="fa fa-angle-double-down fa-3x bill-header__dropdown-icon" style="float: right;"></i>
                                        </div>
                                    </div>
                                    <div class="bill-content bill-content-invisible container">
                                        <div class="item row">

                                            <?php
                                            $detail_element = (array)$order["details"];
                                            $total_money = 0;
                                            for ($j = 0; $j < sizeof($detail_element); $j++) {
                                            ?>
                                                <!-- Item in order -->
                                                <div class="item-image col-md-2">
                                                    <img src="<?php
                                                            echo $detail_element[$j]["image"];
                                                            ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;" alt="">
                                                </div>
                                                <div class="item-content col-md-9">
                                                    <span class="item-label">
                                                        <?php
                                                        echo $detail_element[$j]["category"];
                                                        ?>
                                                    </span>
                                                    <a href="" class="item-header"><?php echo $detail_element[$j]["name"] ?></a>
                                                    <div class="item-detail-quantity">
                                                        <span>Số lượng: <?php
                                                                        echo $detail_element[$j]["quantity"];
                                                                        ?> - Đơn giá: <?php
                                                                                        echo $detail_element[$j]["price"];
                                                                                        ?> - Thành tiền: <?php
                                                                                    $total_money += (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    echo (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    ?></span>
                                                        <button style="text-decoration: underline; float:right;">Mua
                                                            thêm</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- End of Item in order -->
                                            <div class="bill-content__summary container">
                                                <div class="row">
                                                    <div class="col-md-9 row">
                                                        <p class="bill-content__summary-label">Tổng tiền:</p>
                                                        <p class="bill-content__summary-price"><?php echo $total_money ?></p>
                                                        <p class="bill-content__summary-currency">₫</p>
                                                    </div>

                                                    <div class="bill-content__summary-detail col-md-3"><a href="DH819479813.html" class="btn btn-light">Xem
                                                            chi tiết đơn</a></div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <hr>
                                </div>
                            <?php  } ?>
                        </div>








                        <div class="display-content tab-pane" id="taken">
                        <?php
                            foreach ($orders as $order) {
                                if ($order["status"] != "3"){
                                    continue;
                                }
                            ?>
                                <div class="container bill">
                                    <div class="bill-header d-flex align-items-center">
                                        <div class="bill-header__left">
                                            <div class="bill-header__item d-flex justify-content-between">
                                                <div>
                                                    <p>Mã đơn hàng: <?php echo $order["code"]; ?></p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="fa fa-truck" style="font-size: 20px; margin-left: 10px;"></i>
                                                    <p style="margin-left: 10px; margin-right: 10px;">Trạng thái: </p>
                                                    <p style="color: red;"><?php
                                                                            if ($order["status"] == "1") {
                                                                                echo "Chờ xác nhận";
                                                                            } elseif ($order["status"] == "2") {
                                                                                echo "Đang lấy hàng";
                                                                            } elseif ($order["status"] == "3") {
                                                                                echo "Đang giao hàng";
                                                                            } elseif ($order["status"] == "4") {
                                                                                echo "Đã giao hàng";
                                                                            }
                                                                            ?></p>
                                                </div>
                                            </div>
                                            <div class="bill-header__list-icon">
                                                <div class="bill-header__item">
                                                    <p><?php echo sizeof((array)$order["details"]); ?> sản phẩm: </p>
                                                </div>
                                                <?php 
                                                    foreach ((array)$order["details"] as $order_element){
                                                    ?>  
                                                        <img src="<?php
                                                        echo $order_element["image"];
                                                        ?>" alt="" class="bill-header__icon">
                                                    <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="bill-header__right">
                                            <i class="fa fa-angle-double-down fa-3x bill-header__dropdown-icon" style="float: right;"></i>
                                        </div>
                                    </div>
                                    <div class="bill-content bill-content-invisible container">
                                        <div class="item row">

                                            <?php
                                            $detail_element = (array)$order["details"];
                                            $total_money = 0;
                                            for ($j = 0; $j < sizeof($detail_element); $j++) {
                                            ?>
                                                <!-- Item in order -->
                                                <div class="item-image col-md-2">
                                                    <img src="<?php
                                                            echo $detail_element[$j]["image"];
                                                            ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;" alt="">
                                                </div>
                                                <div class="item-content col-md-9">
                                                    <span class="item-label">
                                                        <?php
                                                        echo $detail_element[$j]["category"];
                                                        ?>
                                                    </span>
                                                    <a href="" class="item-header"><?php echo $detail_element[$j]["name"] ?></a>
                                                    <div class="item-detail-quantity">
                                                        <span>Số lượng: <?php
                                                                        echo $detail_element[$j]["quantity"];
                                                                        ?> - Đơn giá: <?php
                                                                                        echo $detail_element[$j]["price"];
                                                                                        ?> - Thành tiền: <?php
                                                                                    $total_money += (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    echo (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    ?></span>
                                                        <button style="text-decoration: underline; float:right;">Mua
                                                            thêm</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- End of Item in order -->
                                            <div class="bill-content__summary container">
                                                <div class="row">
                                                    <div class="col-md-9 row">
                                                        <p class="bill-content__summary-label">Tổng tiền:</p>
                                                        <p class="bill-content__summary-price"><?php echo $total_money ?></p>
                                                        <p class="bill-content__summary-currency">₫</p>
                                                    </div>

                                                    <div class="bill-content__summary-detail col-md-3"><a href="DH819479813.html" class="btn btn-light">Xem
                                                            chi tiết đơn</a></div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <hr>
                                </div>
                            <?php  } ?>
                        </div>
                        <div class="display-content tab-pane" id="transported1" aria-labelledby="waiting-tab">
                        <?php
                            foreach ($orders as $order) {
                                if ($order["status"] != "4"){
                                    continue;
                                }
                            ?>
                                <div class="container bill">
                                    <div class="bill-header d-flex align-items-center">
                                        <div class="bill-header__left">
                                            <div class="bill-header__item d-flex justify-content-between">
                                                <div>
                                                    <p>Mã đơn hàng: <?php echo $order["code"]; ?></p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="fa fa-truck" style="font-size: 20px; margin-left: 10px;"></i>
                                                    <p style="margin-left: 10px; margin-right: 10px;">Trạng thái: </p>
                                                    <p style="color: red;"><?php
                                                                            if ($order["status"] == "1") {
                                                                                echo "Chờ xác nhận";
                                                                            } elseif ($order["status"] == "2") {
                                                                                echo "Đang lấy hàng";
                                                                            } elseif ($order["status"] == "3") {
                                                                                echo "Đang giao hàng";
                                                                            } elseif ($order["status"] == "4") {
                                                                                echo "Đã giao hàng";
                                                                            }
                                                                            ?></p>
                                                </div>
                                            </div>
                                            <div class="bill-header__list-icon">
                                                <div class="bill-header__item">
                                                    <p><?php echo sizeof((array)$order["details"]); ?> sản phẩm: </p>
                                                </div>
                                                <?php 
                                                    foreach ((array)$order["details"] as $order_element){
                                                    ?>  
                                                        <img src="<?php
                                                        echo $order_element["image"];
                                                        ?>" alt="" class="bill-header__icon">
                                                    <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="bill-header__right">
                                            <i class="fa fa-angle-double-down fa-3x bill-header__dropdown-icon" style="float: right;"></i>
                                        </div>
                                    </div>
                                    <div class="bill-content bill-content-invisible container">
                                        <div class="item row">

                                            <?php
                                            $detail_element = (array)$order["details"];
                                            $total_money = 0;
                                            for ($j = 0; $j < sizeof($detail_element); $j++) {
                                            ?>
                                                <!-- Item in order -->
                                                <div class="item-image col-md-2">
                                                    <img src="<?php
                                                            echo $detail_element[$j]["image"];
                                                            ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;" alt="">
                                                </div>
                                                <div class="item-content col-md-9">
                                                    <span class="item-label">
                                                        <?php
                                                        echo $detail_element[$j]["category"];
                                                        ?>
                                                    </span>
                                                    <a href="" class="item-header"><?php echo $detail_element[$j]["name"] ?></a>
                                                    <div class="item-detail-quantity">
                                                        <span>Số lượng: <?php
                                                                        echo $detail_element[$j]["quantity"];
                                                                        ?> - Đơn giá: <?php
                                                                                        echo $detail_element[$j]["price"];
                                                                                        ?> - Thành tiền: <?php
                                                                                    $total_money += (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    echo (int)$detail_element[$j]["price"] * (int)$detail_element[$j]["quantity"];
                                                                                    ?></span>
                                                        <button style="text-decoration: underline; float:right;">Mua
                                                            thêm</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- End of Item in order -->
                                            <div class="bill-content__summary container">
                                                <div class="row">
                                                    <div class="col-md-9 row">
                                                        <p class="bill-content__summary-label">Tổng tiền:</p>
                                                        <p class="bill-content__summary-price"><?php echo $total_money ?></p>
                                                        <p class="bill-content__summary-currency">₫</p>
                                                    </div>

                                                    <div class="bill-content__summary-detail col-md-3"><a href="DH819479813.html" class="btn btn-light">Xem
                                                            chi tiết đơn</a></div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <hr>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget subscribe no-box">
                            <h5 class="widget-title">Hạnh COMPANY<span></span></h5>
                            <p>Chuyên cung cấp các loại sản phẩm túi sách, balo</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-box">
                            <h5 class="widget-title">Các sản phẩm<span></span></h5>
                            <ul class="thumbnail-widget">
                                <li>
                                    <div class="thumb-content"><a href="#.">Balo du lịch</a></div>
                                    <div class="thumb-content"><a href="#.">Túi sách hàng hiệu</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">

                        <div class="widget no-box">
                            <h5 class="widget-title">Liên hệ chúng tôi<span></span></h5>

                            <p><a href="mailto:info@domain.com" title="glorythemes">nguyenduchanh99tnvn@gmail.com</a></p>
                            <ul class="social-footer2">
                                <li class=""><a title="youtube" target="_blank" href="https://www.youtube.com/"><img alt="youtube" width="30" height="30" src="data:image/png;base64,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"></a>
                                </li>
                                <li class=""><a href="https://www.facebook.com/" target="_blank" title="Facebook"><img alt="Facebook" width="30" height="30" src="data:image/png;base64,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"></a>
                                </li>
                                <li class=""><a href="https://twitter.com" target="_blank" title="Twitter"><img alt="Twitter" width="30" height="30" src="data:image/png;base64,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"></a>
                                </li>
                                <li class=""><a title="instagram" target="_blank" href="https://www.instagram.com/"><img alt="instagram" width="30" height="30" src="data:image/png;base64,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"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Copyright Company Name © 2016. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../statics/js/index.js"></script>
    <script src="../statics/js/bill-element.js"></script>
</body>

</html>