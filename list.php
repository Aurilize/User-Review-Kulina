<?PHP 
	REQUIRE_ONCE('config.php');

	$QUERY = MYSQLI_QUERY($CONN, 
		"SELECT * FROM user_review ORDER BY id ASC"
		);
	
	$RESULT = ARRAY();
	WHILE($ROW = MYSQLI_FETCH_ARRAY($QUERY)){
		ARRAY_PUSH($RESULT,ARRAY(
			'id'			=> $ROW['id'],
			'orderid'	=> $ROW['orderid'],
			'userid'	=> $ROW['userid'],
			'productid'		=> $ROW['productid'],
			'rating'		=> $ROW['rating'],
			'review'	=> $ROW['review'],
			'create_at'		=> $ROW['create_at'],
			'update_at'		=> $ROW['update_at']
		));
	}

	/*WHILE($ROW = MYSQLI_FETCH_ASSOC($QUERY)){
		ARRAY_PUSH($RESULT,ARRAY(
			$ID			= $ROW['ID'],
			$ORDERID	= $ROW['ORDERID'],
			$userid	= $ROW['TRANSAKSI_ID'],
			$PRODUCTID	= $ROW['PRODUCTID'],
			$RATING		= $ROW['RATING'],
			$REVIEW	= $ROW['REVIEW'],
			$CREATE_AT		= DATE("D/M/Y", STRTOTIME($ROW['CREATE_AT'])),
			$created_at		= $ROW['CREATE_AT'],
			$UPDATE_AT 	= DATE("D/M/Y", STRTOTIME($ROW['UPDATE_AT'])),
			$UPDATED_AT		= $ROW['UPDATE_AT']
		));
	}*/

	/*$QUERY = MYSQLI_QUERY($CONN, 
		"SELECT * FROM user_review"
		);

	WHILE ($ROW = MYSQLI_FETCH_ASSOC($QUERY)) { 
			
			$MASUK 	= $ROW['MASUK'];
			$KELUAR	= $ROW['KELUAR'];

		}*/
	
	
	ECHO JSON_ENCODE(ARRAY(
		'RESULT'	=> $RESULT
		));

	MYSQLI_CLOSE($CONN);

 ?>