<?php
include_once("header_page.html");
?>
<main class="content">
				<div class="container p-0">

                    <div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Cập nhật trạng thái vận chuyển</strong></h3>
						</div>

					</div>

					<div class="row">
						<div class="col-12">
                        <form action="" id="" method="post">
							<div class="card">
								<div class="card-body">
                                    <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="row mt-2">
                                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                                        <label class="">TT vận chuyển</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                                        <input name="order_id"  value="<?php echo $order_detail['id'] ?>" type="text" autocomplete="off"
                                                                class="form-control" hidden>
                                                        <select class="form-control" id="delivery_status"
                                                            name="delivery_status">
                                                            <option value="">--Chọn TT vận chuyển--</option>
                                                            <option value="0" <?php if($order_detail['delivery_status'] == 0) echo "selected" ?>>Chờ xác nhận</option>
                                                            <option value="1" <?php if($order_detail['delivery_status'] == 1) echo "selected" ?>>Đã xác nhận</option>
                                                            <option value="2" <?php if($order_detail['delivery_status'] == 2) echo "selected" ?>>Đang giao</option>
                                                            <option value="3" <?php if($order_detail['delivery_status'] == 3) echo "selected" ?>>Đã giao</option>
                                                            <option value="4" <?php if($order_detail['delivery_status'] == 4) echo "selected" ?>>Đã hủy</option>
                                                        </select>
														<?php echo isset($error['delivery_status']) ? $error['delivery_status'] : ''; ?>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                                        <label class="">Ghi chú</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                                        <textarea name="note" rows="5" cols="80" class="form-control"></textarea>
                                                        <?php echo isset($error['note']) ? $error['note'] : ''; ?>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <input class="mt-2 btn btn-primary" type="submit" name="update_order" value="Lưu">
                                    <a href="index.php" class="mt-2 btn btn-danger text-white"><i class="fa fa-arrow-circle-o-left"></i>
                                        Trở về</a>
                                </div>
                            </div>
                        </form>
						</div>
					</div>

				</div>
			</main>
<?php
include_once("footer_page.html")
?>