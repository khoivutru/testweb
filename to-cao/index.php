<?php require_once('../head.php'); ?>
<title>Tố Cáo Scam</title>
<?php if (isset($_GET['id'])) {
$id = $_GET['id'];
}

$kiemtra = mysqli_query($ketnoi,"SELECT * FROM `ticket` WHERE id = '$id' ");
while($check = mysqli_fetch_assoc($kiemtra)) {
if($check['status'] == "scam") {
?>
<title>Chủ TK "<?=$check['username'];?>" Bị Tố Cáo Tại <?=$site_tenweb;?></title>
<?php } else if ($check['status'] == "xuly") { ?>
<title>Hồ Sơ Sạch</title>
<?php
}
} ?>

<body>
	<!-- Nguồn Code By Mạnh Giỏi, Liên Hệ Zalo: 0333293290 -->
	<div id="layout-wrapper">
		<header id="page-topbar">
			<div class="navbar-header">
				<div class="d-flex">
					<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"> <i class="fa fa-fw fa-bars"></i> </button>
					<img src="<?=$site_logo;?>" alt="logo scamer" border="0" height="50px">
				</div>
			</div>
		</header>
		<?php require_once('../nav.php'); ?>
		
		<div class="main-content">
			<div class="page-content">
				<div class="container-fluid">
					<div class="row">
<center><h5><b style="color:blue">TỐ CÁO 1 KẺ LỪA ĐẢO</b></h5></center>
                            <div class="card-body">
                            <form lass="form-horizontal" enctype="multipart/form-data" action="" method="post">
   <div class="form-group">
          <label class="form-control-label" for="input-email">Họ Và Tên (*)</label>
          <input type="text" class="form-control mb-3" name="hoten" placeholder="Họ Và Tên" required="">
          </div>
          
          <div class="form-group">
          <label class="form-control-label" for="input-email">Số Điện Thoại (*)</label>
          <input type="number" class="form-control mb-3" name="sdt" placeholder="Số Điện Thoại" required="">
          </div>
              
              <div class="form-group">
          <label class="form-control-label" for="input-email">Ngân Hàng (*)</label>
          <input type="text" class="form-control form-control-alternative" name="nganhang" placeholder="Ví Dụ: mb bank, momo" required="">
          </div>
          
          <div class="form-group">
          <label class="form-control-label" for="input-email">Số Tài Khoản (*)</label>
          <input type="number" class="form-control form-control-alternative" name="stk" placeholder="Ví Dụ: 0345678910" required="">
          </div>
          
          <div class="form-group">
          <label class="form-control-label" for="input-email">ID Facebook Kẻ Lừa Đảo</label>
          <input type="text" class="form-control form-control-alternative" name="linkfb" placeholder="Ví Dụ: 1000*****">
          </div>
          
          <div class="form-group">
          <label class="form-control-label" for="input-email">Hình Ảnh Bằng Chứng Lừa Đảo (*)</label>
          <input class="form-control form-control-alternative" type="file" name="site_image">
          </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nhập Lý Do Lừa Đảo (*)</label>
                  <textarea type="text" class="form-control" name="lydo" rows="6" placeholder="Nhập Lý Do Lừa Đảo" required=""></textarea>
                </div>
              
              
    <hr>
    <div class="col">
                  <center><h3 class="mb-0">THÔNG TIN NGƯỜI PHỐT</h3></center>
                </div>
                <br>
    <div class="form-group">
                  <label for="exampleInputEmail1">Họ và Tên (*)</label>
                  <input type="text" class="form-control form-control-alternative" name="hotennp" placeholder="Ví Dụ: Nguyễn Văn A" required="">
                </div>
    
    <div class="form-group">
                  <label for="exampleInputEmail1">Số Điện Thoại (*)</label>
                  <input type="number" class="form-control form-control-alternative" name="sdtnp" placeholder="Ví Dụ: 0345678910" required="">
                </div>
                
          <div class="row">
          
          <hr class="my-4" />
          <button type="submit" name="submit" class="btn btn-danger btn-block">GỬI DUYỆT</button> 


    </form>
    </div>


<?php
if (isset($_POST["submit"])) {
$number_random = random('1234567890', 4);

if (check_img('site_image') == true) {
$uploads_dir = '../anh/';
$tmp_name = $_FILES['site_image']['tmp_name'];
$create = move_uploaded_file($tmp_name, "$uploads_dir/bc_$number_random.png");
if($create) {
}
}



  $hoten = $_POST['hoten'];
  $sdt = $_POST['sdt'];
  $nganhang = $_POST['nganhang'];
  $stk = $_POST['stk'];
  $id_fb = $_POST['linkfb'];
  $lydo = $_POST['lydo'];
  $nguoi_phot = $_POST['hotennp'];
  $sdt_nguoip = $_POST['sdtnp'];
  $ngay = date('d-m-Y');

    $create = $ketnoi->query("INSERT INTO `ticket` SET 
    `username` = '".$hoten."',
    `ly_do` = '".$lydo."',
    `status` = 'xuly',
    `sdt` = '".$sdt."',
    `id_fb` = '".$id_fb."',
    `ngan_hang` = '".$nganhang."',
    `stk` = '".$stk."',
    `anh` = '/anh/bc_$number_random.png',
    `hoten_np` = '".$nguoi_phot."',
    `sdt_np` = '".$sdt_nguoip."',
    `ngay` = '".$ngay."' ");
    
if($create) {
$err = 'Đã Gửi Thông Tin Thành Công! Chờ Duyệt';
} else {
echo $err; 
}
die('<script type="text/javascript">swal("'.$err.'","success");setTimeout(function(){ location.href = "/" },2000);</script>');
}
?>

					</div>
</div>
<?php require_once('../foot.php'); ?>