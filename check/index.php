<?php require_once('../head.php'); ?>
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
		<?php require_once('../nav.php'); ?>
	
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
<form action='' target='_top'>
<input placeholder="Tìm SĐT, STK Ngân Hàng,..." type="number" name="m" class="form-control"/>
</form>
</center>
<br>
<?php
$time = date('d-m-Y');
$don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'scam' ")) ['COUNT(*)'];
 ?>
                            <center><a href="/to-cao/" class="btn btn-sm" style="color:white;background:red">Gửi Tố Cáo Scam</a></center>
                            
                        </div>
						
					</div>
<div class="row">
<?php
if (isset($_GET["m"]) != '') {
$search = $_GET['m'];
$query = "SELECT * FROM `ticket` WHERE (`sdt` like '".$search."') OR (stk like '".$search."')";
            $sql = mysqli_query($ketnoi, $query);
            $num = mysqli_num_rows($sql);
            if ($num > 0) { ?>
<div id="cat" style="margin-top: 0;position: relative;">
<div class="pst">
<p style="color:blue"><b>Tìm thấy <?=$num;?> thông tin lừa đảo liên quan đến: "<?=$search;?>"</b></p>
<?php $i = 1; foreach( $sql as $row ) { ?>
<div class="ct">
<a href="/profile.php?id=<?=$row['id'];?>" style="color:black"><i class="fa fa-edit" style="color:blue"></i> <?=$i++;?>. <?=$row['username'];?></a>
<div class="ct2">
<span><i class="fa fa-clock" style="color:blue"></i> <?=$row['ngay'];?> - <i class="fa fa-phone" style="color:#eaa10e"></i> <?=$row['sdt'];?></span>
</div>
</div>
<?php
                }
                echo '</table>';
            }  else { echo '<br><p style="color:#007fff">Dữ Liệu "'.$search.'" Sạch Chưa Bị Tố Cáo </p>'; }
        }
?>
</div>



</div>
</div>


</div>
<?php require_once('../foot.php'); ?>