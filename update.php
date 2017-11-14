<?PHP
	REQUIRE_ONCE('config.php');

	$orderid		= !empty($_POST['orderid']) ? $_POST['orderid'] : '';
	$userid		= !empty($_POST['userid']) ? $_POST['userid'] : '';
	$productid	= !empty($_POST['productid']) ? $_POST['productid'] : '';
	$review	= !empty($_POST['review']) ? $_POST['review'] : '';
	$rating	= !empty($_POST['rating']) ? $_POST['rating'] : '';
	$update_at	= date("Y-m-d H:i:s");
	$id	= !empty($_POST['id']) ? $_POST['id'] : '';
	
	// UPDATE CONTENT
	$SQL	= "UPDATE user_review SET userid='$userid', orderid='$orderid', 
       productid='$productid', review='$review', rating='$rating', update_at='$update_at' WHERE id='$id'";
	$QUERY 	= MYSQLI_QUERY($CONN, $SQL );
	
	IF($QUERY) {
	    ECHO JSON_ENCODE(ARRAY( 'RESPONSE'=>'SUCCESS'));
	} ELSE {
	    ECHO JSON_ENCODE(ARRAY( 'RESPONSE'=>'FAILED' ));
	}
?>