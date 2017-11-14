<?PHP
	REQUIRE_ONCE('config.php');

	// if(isset($_POST['orderid']) || isset($_POST['orderid']) || isset($_POST['userid']) || isset($_POST['productid']) || isset($_POST['review']) || isset($_POST['rating'])){
	$orderid		= !empty($_POST['orderid']) ? $_POST['orderid'] : '';
	$userid		= !empty($_POST['userid']) ? $_POST['userid'] : '';
	$productid	= !empty($_POST['productid']) ? $_POST['productid'] : '';
	$review	= !empty($_POST['review']) ? $_POST['review'] : '';
	$rating	= !empty($_POST['rating']) ? $_POST['rating'] : '';
	$create_at	= date("Y-m-d H:i:s");
// }
	
	// INSERT COMMENT
	$QUERY = MYSQLI_QUERY($CONN, "INSERT INTO user_review (id, userid, productid, review, rating, create_at) 
     VALUES ('', '$userid', '$productid', '$review', '$rating', '$create_at')");

	IF($QUERY) {
	    ECHO JSON_ENCODE(ARRAY( 'RESPONSE'=>'SUCCESS' ));
	} ELSE {
	    ECHO JSON_ENCODE(ARRAY( 'RESPONSE'=>'FAILED' , 'ERROR' => mysqli_error($QUERY)));
	}
?>