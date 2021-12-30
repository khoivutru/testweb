<?php require_once('head.php'); ?>
<title>Trang Chủ</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <div id="app">
        <?php require_once('nav.php'); ?>
        <div id="main">
            <header class="mb-3">
                <a class="burger-btn d-block d-xl-none">
                    <i class="fa fa-align-justify" aria-hidden="true"></i><hr>
                </a>
            </header>
                       
                            <center><h5><b style="color:blue">KIỂM TRA & TỐ CÁO LỪA ĐẢO</b></h5></center>
                            <div class="card-body">
                            <center><a>Check <b>"SĐT, STK Ngân Hàng..."</b> trước khi giao dịch, bằng cách nhập vào <b>"ô Tìm Kiếm"</b>.
Chúng tôi sẽ cho bạn sẽ biết họ là ai!!!</a></center>
<form action='' target='_top'>
    <div class="input-group input-group-lg">
<input placeholder="Tìm SĐT, STK Ngân Hàng,..." type="number" name="m" class="form-control"/>
</div>
</form>
<br>
                            <center><a href="/to-cao/" class="btn" style="color:white;background:#bf5f00">Gửi Tố Cáo Scam</a></center>
                            <hr>
<div class="row">
<?php
if (isset($_GET["m"]) != '') {
$search = $_GET['m'];
$query = "SELECT * FROM `ticket` WHERE (`sdt` like '".$search."') OR (stk like '".$search."')";
            $sql = mysqli_query($ketnoi, $query);
            $num = mysqli_num_rows($sql);
            if ($num > 0) { ?>
<p style="color:#ff0000">Tìm thấy <?=$num;?> thông tin lừa đảo liên quan đến: "<?=$search;?>"</p>
<?php foreach( $sql as $row ) { ?>
<div id="cat" style="margin-top: 0;position: relative;">
<div class="pst">

<div class="ct">
<a href="profile.php?id=<?=$row['id'];?>" style="color:black"><i class="fa fa-edit" style="color:blue"></i> <?=$i++;?>. <?=$row['username'];?></a>
<div class="ct2">
<span><i class="fa fa-clock" style="color:blue"></i> <?=date('d');?> tháng <?=date('m');?>, <?=date('Y');?> - <i class="fa fa-eye" style="color:#eaa10e"></i> 156 Lượt Xem</span>
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
                        </div>
        


<?php require_once('foot.php'); ?>
