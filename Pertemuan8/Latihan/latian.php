<html>
<head>
<title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Demo koneksi database MySQL</h1>
<?
$conn=mysql_connect
("localhost","root","");
if ($conn) {
echo "OK";
} else {
echo "Server not connected";
}
?>
</body>
</html>