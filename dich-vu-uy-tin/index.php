<?php require_once('../head.php'); ?>
<title>Dịch Vụ Uy Tín</title>

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

<div id="uytin">
<div class="a">
<center><h4 style="color:blue">DỊCH VỤ BẢO HIỂM UY TÍN</h4></center>
<div class="ut2" style="margin-bottom: 40px">
<div class="ut" style="border: 1px solid red;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius:10px;margin-top: 20px;">
<p style="text-align: center; font-size: 18px;display:block; margin:0 auto;margin-bottom: 20px;max-width: 99%;text-align:center">Những người dùng dưới đây sẽ được chúng tôi bảo vệ khi sử dụng những dịch vụ <strong>Bảo Hiểm Uy Tín</strong> của các dịch vụ dưới đây</p>
</div>
</div>
<div class="ut" style="border: 1px solid blue;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius:10px;margin-top: 20px;">
<div>
<?php
$neww = mysqli_query($ketnoi,"SELECT * FROM `category` ORDER BY id desc");
while($lmg = mysqli_fetch_assoc($neww))
{
?>
<span><b><i style="color:red" class="fa fa-star" aria-hidden="true"></i> <?=$lmg['code'];?></b></span>

<div class="b">
<?php
$result = mysqli_query($ketnoi,"SELECT * FROM `cards` ORDER BY id desc");
while($check = mysqli_fetch_assoc($result))
{
    if($check['dich_vu'] == $lmg['code']) {
?>
<div class="it">
<a href="/uy-tin/?id=<?=$check['id'];?>" target="_blank"><img src="https://graph.facebook.com/<?=$check['id_fb'];?>/picture?width=100&height=100&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662" alt="Avt"></a>
<a href="/uy-tin/?id=<?=$check['id'];?>" target="_blank"><?=$check['username']?></a>
</div>
<?php  } }?>

</div>
<?php  } ?>
</div>

</div>
<style>
        #uytin{
            width: 950px;
            max-width: 100%;
            margin: 30px auto;
            margin-top: 0px;
            display: block;
            position: relative;
        }
        #uytin > .a{


        }
        #uytin > .a > h1{
            display: block;
        text-align: center;
        font-size: 30px;
        font-family: auto;
        font-weight: 700;
        color: red;
        margin: 0  0 20px;
        padding-top: 0;
        }
       
          #uytin .ut{
            background: #ffffff;
            padding: 20px;
            -webkit-border-radius: 10px;

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
            #uytin > .a > h1{
                font-size: 30px;
            }


        }
        @media screen and (max-width: 413px){
            #uytin > .a > h1{
                font-size: 30px;
            }
        }

    </style>
</div>
</div>


					</div>
</div>
<?php require_once('../foot.php'); ?>