<?PHP
	REQUIRE_ONCE('config.php');

	$id	= $_REQUEST['id'];
	
	// DELETE
	$QUERY = MYSQLI_QUERY($CONN, "DELETE FROM user_review WHERE id='$id' ");

	IF($QUERY) {
	    ECHO JSON_ENCODE(ARRAY( 'RESPONSE'=>'SUCCESS' ));
	} ELSE {
	    ECHO JSON_ENCODE(ARRAY( 'RESPONSE'=>'FAILED' ));
	}
?>