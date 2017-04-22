<?PHP

$ts = gmdate("D, d M Y H:i:s") . " GMT";
header("Expires: $ts");
header("Last-Modified: $ts");
header("Pragma: no-cache");
header("Cache-Control: no-cache, must-revalidate");

$data_filename = "secure/data/data.json";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$data_to_save = $_POST['data'];
	$result = file_put_contents($data_filename, $data_to_save);
	print "Saved";

} else {

	$data_to_send = file_get_contents($data_filename);
	print $data_to_send;

}
?>

