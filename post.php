<?PHP
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$allPOST = urldecode(http_build_query($_POST, '', '<br>'));

$allPOST = str_replace("="," : ",$allPOST);

$body =  "<h1>TBY MDR</h1><br>" .
$_POST['type'] . "<br>" .
"<strong>Name:</strong> " . $_POST['Name'] . "<br>" .
"<strong>Phone:</strong> " . $_POST['phone'] . "<br>" .
"<strong>Email:</strong> " . $_POST['Email'] . "<br>" .
"<strong>Boat Name:</strong> " . $_POST['Boatname'] . "<br>" .
"<strong>Service:</strong> " . $_POST['type'] . "<br>" .
"<strong>Comments:</strong> " . $_POST['Comments'];

$type = $_POST['type'];
if($_POST['Name'] != ""){
	mail("greg@hregllc.com","<h1>TBY MDR</h1> " . $_POST['type'],"<html><body>" . $body . "</body></html>",$headers);
	mail("michaelfschem@gmail.com","TBY MDR " . $_POST['type'],"<html><body>" . "<h1>TBY MDR</h1><br>" . $allPOST . "</body></html>",$headers);

	switch ($_POST['type']) {
		case 'Request for Service':
		mail("victor@tbymdr.com","TBY MDR " . $_POST['type'],"<html><body>" . $allPOST . "</body></html>",$headers);
		break;
		case 'Request for Slip Info':
		mail("scott@tbymdr.com","TBY MDR " . $_POST['type'],"<html><body>" . $allPOST . "</body></html>",$headers);
		break;

		case 'Request for Employment Information':
		mail("victor@tbymdr.com","TBY MDR " . $_POST['type'],"<html><body>" . $allPOST . "</body></html>",$headers);
		mail("gary@hregllc.com","TBY MDR " . $_POST['type'],"<html><body>" . $allPOST . "</body></html>",$headers);
		break;

		default:
		# code...
		break;
	}
}
?>