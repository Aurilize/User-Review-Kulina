<?PHP

DEFINE('HOST','localhost');
DEFINE('USER','root');
DEFINE('PASS','');
DEFINE('DB','user_review');
$CONN = MYSQLI_CONNECT(HOST,USER,PASS,DB) OR DIE('UNABLE TO CONNECT');

DATE_DEFAULT_TIMEZONE_SET("ASIA/JAKARTA");
?>