date_default_timezone_set("Asia/Jakarta");

$name = $_GET['rpt'] . date("Ymd") . date("H");
 
$image = $_POST["image"];
 
$image = explode(";", $image)[1];

define('UPLOAD_DIR', 'images/');

$mypop = $name . ".jpg";

$file = UPLOAD_DIR . $mypop;
 
$image = explode(",", $image)[1];
 
$image = str_replace(" ", "+", $image);
 
$image = base64_decode($image);
 
file_put_contents($file, $image);
 
echo json_encode($pop_nm);
