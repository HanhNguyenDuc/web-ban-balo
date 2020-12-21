<?php
include_once("header_page.html");
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh sách đơn hàng</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tìm kiếm đơn hàng</li>
        </ol>
        <form action="index.php" method="post">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center">
                    <input type="text" name="name" id="name" value="" placeholder="Tên khách hàng" class="form-control">
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <input type="text" name="phone" id="phone" value="" placeholder="Số điện thoại" class="form-control">
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <input type="date" placeholder="Đến ngày" class="form-control" name="to_date" id="to_date" value="" max="2020-12-15">
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 text-center mt-2" style="margin-bottom: 30px;">
                    <button type="submit" class="btn btn-primary mr-2 search"><i class="fa fa-search"></i> Tìm
                        kiếm</button>
                </div>
            </div>
        </form>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Danh sách đơn hàng
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Tổng tiền</th>
                                <th>TT Mua</th>
                                <th>TT Duyệt</th>
                                <th>TT Vận chuyển</th>
                                <th>Sản phẩm</th>
                                <th>Ngày mua</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tfoot>

                            <?php
                            if ($orders)
                            for ($i = 0; $i < sizeof($orders); $i++) {

                            ?>
                                <tbody>
                                    <td><?php echo $i + 1; ?></td>
                                    <td><?php echo $orders[$i]["code"]; ?></td>
                                    <td><?php echo $orders[$i]["name"]; ?></td>
                                    <td><?php echo $orders[$i]["total_money"]; ?></td>
                                    <td><?php
                                        if ($orders[$i]['type_buy'] == 1) {
                                            echo 'Online';
                                        } else {
                                            echo 'Offline';
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($orders[$i]['status'] == 1) {
                                            echo '<span class="badge bg-warning">Chưa duyệt</span>';
                                        } elseif ($orders[$i]['status'] == 2) {
                                            echo '<span class="badge bg-success">Đã duyệt</span>';
                                        } else {
                                            echo '<span class="badge bg-danger">Đã hủy</span>';
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($orders[$i]['delivery_status'] == 0)
                                            echo 'Chờ xác nhận';
                                        elseif ($orders[$i]['delivery_status'] == 1)
                                            echo 'Đã xác nhận';
                                        elseif ($orders[$i]['delivery_status'] == 2)
                                            echo 'Đang giao';
                                        elseif ($orders[$i]['delivery_status'] == 3)
                                            echo 'Đã giao';
                                        else
                                            echo 'Đã hủy';
                                        ?></td>
                                    <td><?php echo $orders[$i]['name'] ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($orders[$i]['created_at'])) ?></td>
                                    <td>
                                        <?php if ($orders[$i]['user_id'] != null) { ?>
                                            <a href="update_order.php?order_id=<?php echo $orders[$i]['id'] ?>" class="btn btn-warning mb-2">
                                                <i class="fa fa-edit pd-1"></i>
                                            </a>
                                        <?php } ?>
                                        <?php if ($orders[$i]['status'] == 1) { ?>
                                            <a href="confirm_order.php?order_id=<?php echo $orders[$i]['id'] ?>" class="confirm_order"> <button class="btn btn-info mb-2">Duyệt</button> </a>
                                        <?php } ?>
                                        <a href="delete_order.php?order_id=<?php echo $orders[$i]['id'] ?>" class="btn btn-danger delete_order"> <i class="fa fa-trash pd-1"></i> </a>
                                    </td>
                                </tbody>
                            <?php } ?>
                            ?>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include_once("footer_page.html")
?>