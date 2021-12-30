<?php session_start(); ?>
<?php
define("DATABASE", "tmanhitcom_manh");//tên database
define("USERNAME", "tmanhitcom_manh");//tên tài khoản quản lí database
define("PASSWORD", "manh_2004");//mật khẩu tài khoản

define("LOCALHOST", "localhost");//không sửa dòng này
$ketnoi = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);
$ketnoi->query("set names 'utf8'");
date_default_timezone_set('Asia/Ho_Chi_Minh');

$_SESSION['session_request'] = time();
$site = $ketnoi->query("SELECT * FROM setting")->fetch_array();
$user = $ketnoi->query("SELECT * FROM users")->fetch_array();

$site_favicon = $site['site_favicon'];
$site_tenweb = $site['site_tenweb'];
$site_mota = $site['site_mota'];
$site_image = $site['site_image'];
$site_logo = $site['site_logo'];
$site_sdt_momo = $site['sdt_admin'];
$facebook = $site['facebook'];


if (!empty($_SERVER['HTTP_CLIENT_IP']))     
{  
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];  
}  
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
{  
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
}  
else  
{  
    $ip_address = $_SERVER['REMOTE_ADDR'];  
}
function check_img($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = array("png","jpeg","jpg","PNG","JPEG","JPG","gif","GIF");
    if(in_array($ext, $valid_ext))
    {
        return true;
    }
}

function format_cash($price)
{
    return str_replace(",", ".", number_format($price));
}

function check_zip($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = array("zip","ZIP");
    if(in_array($ext, $valid_ext))
    {
        return true;
    }
}

function check_string($data)
{
    return str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($data))));
}

function XoaDauCach($text)
{
    return trim(preg_replace('/\s+/',' ', $text));
}

function random($string, $int)
{  
    return substr(str_shuffle($string), 0, $int);
}
function pheptru($int1, $int2)
{
    return $int1 - $int2;
}
function phepcong($int1, $int2)
{
    return $int1 + $int2;
}
function phepnhan($int1, $int2)
{
    return $int1 * $int2;
}
function phepchia($int1, $int2)
{
    return $int1 / $int2;
}

function curl_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    
    curl_close($ch);
    return $data;
}
function getHeader(){
    $headers = array();
    $copy_server = array(
        'CONTENT_TYPE'   => 'Content-Type',
        'CONTENT_LENGTH' => 'Content-Length',
        'CONTENT_MD5'    => 'Content-Md5',
    );
    foreach ($_SERVER as $key => $value) {
        if (substr($key, 0, 5) === 'HTTP_') {
            $key = substr($key, 5);
            if (!isset($copy_server[$key]) || !isset($_SERVER[$key])) {
                $key = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', $key))));
                $headers[$key] = $value;
            }
        } elseif (isset($copy_server[$key])) {
            $headers[$copy_server[$key]] = $value;
        }
    }
    if (!isset($headers['Authorization'])) {
        if (isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) {
            $headers['Authorization'] = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'];
        } elseif (isset($_SERVER['PHP_AUTH_USER'])) {
            $basic_pass = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';
            $headers['Authorization'] = 'Basic ' . base64_encode($_SERVER['PHP_AUTH_USER'] . ':' . $basic_pass);
        } elseif (isset($_SERVER['PHP_AUTH_DIGEST'])) {
            $headers['Authorization'] = $_SERVER['PHP_AUTH_DIGEST'];
        }
    }
    return $headers;
}
$MEMO_PREFIX = $site['MEMO_PREFIX'];
function parse_order_id($des){
    global $MEMO_PREFIX;
    $re = '/'.$MEMO_PREFIX.'\d+/im';
    preg_match_all($re, $des, $matches, PREG_SET_ORDER, 0);
    if (count($matches) == 0 )
        return null;
    // Print the entire match result
    $orderCode = $matches[0][0];
    $prefixLength = strlen($MEMO_PREFIX);
    $orderId = intval(substr($orderCode, $prefixLength ));
    return $orderId ;
}
function check_username($data)
{
    if (preg_match('/^[a-zA-Z0-9_-]{3,16}$/', $data, $matches))
    {
        return True;
    }
    else
    {
        return False;
    }
}


 if($user['level'] != 'admin'){
 foreach($_GET as $var => $value) {
   
    $_GET["$var"]= htmlspecialchars($value);
}


foreach($_POST as $var => $value) {

    $_POST["$var"] = htmlspecialchars($value);
  
} 

foreach($_SESSION as $var => $value) {
  
    $_SESSION["$var"]= htmlspecialchars($value);
}


foreach($_COOKIE as $var => $value) {

    $_COOKIE["$var"]= htmlspecialchars($value);
}


}
?>