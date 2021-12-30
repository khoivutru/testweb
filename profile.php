<?php require_once('head.php');

if (isset($_GET['id'])) {
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
		<?php require_once('nav.php'); ?>
		
		<div class="main-content">
			<div class="page-content">
				<div class="container-fluid">
					<!-- end page title -->
					<div class="row">
<?php
$k = mysqli_query($ketnoi,"SELECT * FROM `ticket` WHERE id = '$id' ");
while($row = mysqli_fetch_assoc($k)) {
if($row['status'] == "scam") {
?>
<div class="ctpage tts sgtts">
<h2 class="hh2" style="background: #F5F9F8;margin-bottom: -1px; z-index: 2;border-bottom: none;">Thông tin kẻ lừa đảo</h2>
<div class="tt1 tttms" style="border-top: 1px solid #DEE2E6 !important;border-radius: 0 5px 5px 5px;-moz-border-radius: 0 5px 5px 5px;-webkit-border-radius: 0 5px 5px 5px;">
<div class="table tb1" style="padding: 20px">
<div class="tr">
<div class="td">Họ Tên:</div>
<div class="td"><span id="cpr1"><?=$row['username'];?></span>
</div>
</div>
<div class="tr">
<div class="td">SĐT:</div>
<div class="td"><span id="cpr1"><?=$row['sdt'];?></span>
</div>
</div>
<div class="tr">
<div class="td">STK:</div>
<div class="td"><span id="cpr2"><?=$row['stk'];?></span>
</div>
</div>

<div class="tr">
<div class="td">Ngân hàng:</div>
<div class="td"><span id="cpr1"><?=$row['ngan_hang'];?></span>
</div>
</div>
<div class="tr">
<div class="td tm1">Ảnh chụp bằng chứng:</div>
<div class="td btw tm2">
<span class="hvi hv0 btf" data-filter="lk0" data-number="0" style="display:inline-block;margin-bottom:5px;"><img src="<?=$row['anh'];?>" alt="Bằng Chứng"></span>


</div>
</div>
<div class="tr">
<div class="td ttmm" style="width: 100%;">Mô tả hình Thức Lừa Đảo:</div>
<div class="td" style="width: 100%; margin-top: 10px;padding-left:45px"><p><?=$row['ly_do'];?></p>
</div>
</div>
</div>
</div>
<h2 class="hh2" style="margin-top: 30px !important;background: #F5F9F8;margin-bottom: -1px; z-index: 2;border-bottom: none;">Người tố cáo</h2>
<div class="tt1" style="border-top: 1px solid #DEE2E6 !important;border-radius: 0 5px 5px 5px;-moz-border-radius: 0 5px 5px 5px;-webkit-border-radius: 0 5px 5px 5px;">
<div class="table">
<div class="tr">
<div class="td">họ và tên</div>
<div class="td" style="text-transform: capitalize"><?=$row['hoten_np'];?></div>
</div>
<?php

$sdt_np = substr($row['sdt_np'], 0, 5).'*****';
?>
<div class="tr">
 <div class="td">Liên hệ:</div>
<div class="td"><?=$sdt_np;?></div>
</div>
</div>
</div>
</div>
<?php } else { ?>
<p>Đơn Này Vẫn Đang Chờ Admin Duyệt, Đợi Nhé</p>
<?php
}
}?>		
<style>
        #uytin{
            width: 950px;
            max-width: 100%;
            margin: 30px auto 0;
            display: block;
            position: relative;
        }
        #uytin > .a{
             border: 1px solid #d2d27c;
            -webkit-border-radius: 10px;
        }
        #uytin > .a > span{
            font-size: 22px;
            font-weight: normal;
            display: block;
            font-weight: bold;
            padding: 30px 20px 20px;
            text-align: center;
            position: relative;
            cursor: pointer;
            color: yellow;
            text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px white;
        }
        #uytin > .a > span:after{
             content: '';
            position: absolute;
            left: 50%;
            top: 5px;
            transform: translatex(-50%);
            -moz-transform: translatex(-50%);
            -webkit-transform: translatex(-50%);
            width: 20px;
            height: 20px;
            background:  url(https://checkscam.info/wp-content/themes/dkqh/a/i/crown.png) no-repeat center center;
        }
         #uytin > .a > span:before{
             content: '';
            width: 24px;
            height: 24px;
            background: url(https://12h59.com/wp-content/themes/dkqh/a/i/arrow.png) no-repeat bottom center;
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translatex(-50%);
            -moz-transform: translatex(-50%);
            -webkit-transform: translatex(-50%);
         }
          #uytin .ut{
            background: #ffffff;
            padding: 20px;
            -webkit-border-radius: 10px;
            display: none
          }
        #uytin .ut > div{
            width: 100%;
            display: table;
        }
        #uytin .ut > div > span{
            display: inline-block;
            width: 290px;
            float: left;
            margin-bottom: 20px;
            font-weight: bold;
            position: relative;
            padding-left: 30px;
        }
        #uytin .ut > div > span:before{
             content: '';
            position: absolute;
            left: 0;
            bottom: 4px;

            width: 20px;
            height: 20px;
            background:  url(https://checkscam.info/wp-content/themes/dkqh/a/i/chutk.png) center center / contain no-repeat;
        }
        #uytin .b{
            width: calc(112% - 170px);
            float: right;
            display: inline-block;
        }
        #uytin .it{
            width: 72px;
            display: inline-block;
            float: left;
            margin-right: 20px;
            margin-bottom: 20px;
        }
         #uytin .it img{
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            width: 55px;
            display: block;
            margin: 0 auto;
        }
         #uytin .it:nth-child(9n+1){
			clear:both;
		}
         #uytin .it a:nth-child(2){
            display: block;
            color: #000;
            text-transform: capitalize;
            margin-top: 10px;
            text-align: center;
			 font-size: 11px;
        }
		@media screen and (max-width: 1023px){
			#uytin .it:nth-child(9n+1){
				clear:unset;
			}
			#uytin .it:nth-child(6n+1){
				clear:both;
			}
		}
        @media screen and (max-width: 767px){
			#uytin .it:nth-child(6n+1){
				clear:unset;
			}
            #uytin .it:nth-child(4n+1){
                clear: both;
            }

            #uytin .it{
                margin-right: 0;
                width: calc(100% / 4);
                padding: 0 5px;
            }
        }
        @media screen and (max-width: 639px){
            #uytin .ut > div > span{
                width: 100%;
            }
            #uytin .b{
                width: 100%;
            }
            #uytin .b{
                margin-left: 0px;
                float: unset;
            }


        }

    </style>						
					</div>
</div>
<?php require_once('foot.php'); ?>