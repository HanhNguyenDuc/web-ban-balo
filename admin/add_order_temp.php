<?php
include_once("header_page.html");
?>
<head>
	<meta charset="utf-8">
    <title>Thêm đơn hàng</title>
    <link rel="shortcut icon" href="../statics/icons/favicon.ico" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="forms-advanced-inputs.html" />

	<title>Advanced Inputs | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">

	<!-- BEGIN SETTINGS -->
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-10', { 'anonymize_ip': true });
</script></head>
<main>
<div class="container p-0">

<div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
        <h2 style="font-size: 2.5rem;"><strong>Thêm mới đơn hàng</strong></h2>
    </div>

    <div class="col-auto ml-auto text-right mt-n1">
    </div>
</div>

<div class="row">
    <div class="col-12">
    <form action="add_order.php" id="search_lucky" method="post">
        <div class="card">
            <!-- <div class="card-header">
                <h5 class="card-title">Choices.js</h5>
                <h6 class="card-subtitle text-muted">A vanilla, lightweight, configurable select box/text input plugin.</h6>
            </div> -->
            <div class="card-body">
                <div class="mb-3" style="display: none">
                    <select class="form-control choices-single">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                        </optgroup>
                    </select>
                </div>
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row mt-2">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="">Tên Khách hàng</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <input name="name" placeholder="Tên khách hàng" value="" type="text" autocomplete="off"
                                        class="form-control" required>
                                    <?php echo isset($error['name']) ? $error['name'] : ''; ?>
                                </div>
                            </div>
                            <div class="row mt-2">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="">Số điện thoại</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <input type="text"  placeholder="Nhập SĐT" value="" autocomplete="off"  title="Nhập SĐT" name="phone" class="form-control"  required>
                                        <?php echo isset($error['phone']) ? $error['phone'] : ''; ?>
                                    </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="">Địa chỉ</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <input type="text"  placeholder="Nhập địa chỉ" value="" autocomplete="off"  title="Nhập địa chỉ" name="address" class="form-control">
                                    <?php echo isset($error['address']) ? $error['address'] : ''; ?>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="">email</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <input type="text"  placeholder="Nhập email" value="" autocomplete="off"  title="Nhập email" name="email" class="form-control" >
                                    <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="">Sản phẩm</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <select class="form-control choices-multiple" multiple id="product_id"
                                        name="product_id[]">
                                    <option value="">--Chọn sản phẩm--</option>
                                        <?php 
                                        foreach($list_product as $p){ 
                                            ?>
                                                
                                                <option value="<?php echo $p['id'] ?>"
                                                ><?php echo $p['name'].'- Mã:'.$p['code'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo isset($error['product_id']) ? $error['product_id'] : ''; ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <input class="mt-2 btn btn-primary" type="submit" name="create_order" value="Lưu">
                <a href="index.php" class="mt-2 btn btn-danger text-white"><i class="fa fa-arrow-circle-o-left"></i>
                    Trở về</a>
            </div>
        </div>
    </form>
    </div>

</div>

</div>
</main>
<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Choices.js
			new Choices(document.querySelector(".choices-single"));
			new Choices(document.querySelector(".choices-multiple"));
			// Flatpickr
			flatpickr(".flatpickr-minimum");
			flatpickr(".flatpickr-datetime", {
				enableTime: true,
				dateFormat: "Y-m-d H:i",
			});
			flatpickr(".flatpickr-human", {
				altInput: true,
				altFormat: "F j, Y",
				dateFormat: "Y-m-d",
			});
			flatpickr(".flatpickr-multiple", {
				mode: "multiple",
				dateFormat: "Y-m-d"
			});
			flatpickr(".flatpickr-range", {
				mode: "range",
				dateFormat: "Y-m-d"
			});
			flatpickr(".flatpickr-time", {
				enableTime: true,
				noCalendar: true,
				dateFormat: "H:i",
			});
		});
	</script>
<script>
  document.addEventListener("DOMContentLoaded", function(event) { 
    setTimeout(function(){
      if(localStorage.getItem('popState') !== 'shown'){
        window.notyf.open({
          type: "success",
          message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
          duration: 10000,
          ripple: true,
          dismissible: false,
          position: {
            x: "left",
            y: "bottom"
          }
        });

        localStorage.setItem('popState','shown');
      }
    }, 15000);
  });
</script>
<?php
include_once("footer_page.html")
?>