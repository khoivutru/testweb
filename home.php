<?php require_once('head.php'); ?>
<title><?=$site_tenweb;?> - HOME</title>

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
		<?php require_once('nav.php'); ?>
	
		<style>
input[type="number"] {
      height:46px;
      width:330px;
    }
</style>
		
		<div class="main-content">
			<div class="page-content">
				<div class="container-fluid">
					<!-- end page title -->
					<div class="row">
					    <center><h5><b style="color:red">KIỂM TRA & TỐ CÁO LỪA ĐẢO</b></h5></center>
					    
					    <div class="card-body">
                            <center><a>Check <b>"SĐT, STK Ngân Hàng..."</b> trước khi giao dịch, bằng cách nhập vào <b>"ô Tìm Kiếm"</b>.
Chúng tôi sẽ cho bạn sẽ biết họ là ai!!!</a>
<form action='check' target='_top'>
<input placeholder="Tìm SĐT, STK Ngân Hàng,..." type="number" name="m" class="form-control"/>
</form>
</center>
<br>
<?php
$time = date('d-m-Y');
$don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'scam' ")) ['COUNT(*)'];
 ?>
                            <center><a href="/to-cao/" class="btn btn-sm" style="color:white;background:red">Gửi Tố Cáo Scam</a></center>
                            <br>
                            
                        </div>
						
					</div>
<div class="row">
<div id="cat" style="margin-top: 0;position: relative;">
    <h5 style="color:blue"><?=$don;?> SCAM BỊ TỐ CÁO: <?=date('d/m/Y');?></h5>
<div class="pst">
<?php
$i=1;
$result = mysqli_query($ketnoi,"SELECT * FROM `ticket` WHERE `status` = 'scam' ORDER BY id desc limit 0, 10");
while($row = mysqli_fetch_assoc($result)) { ?>
<div class="ct">
<a href="profile.php?id=<?=$row['id'];?>" style="color:black"><i class="fa fa-edit" style="color:blue"></i> <?=$i++;?>. <?=$row['username'];?></a>
<div class="ct2">
<span><i class="fa fa-clock" style="color:blue"></i> <?=$row['ngay'];?> - <i class="fa fa-phone" style="color:#eaa10e"></i> <?=$row['sdt'];?></span>
</div>
</div>

<?php } ?>
</div>




</div>
</div>
</div>
<?php require_once('foot.php'); ?>