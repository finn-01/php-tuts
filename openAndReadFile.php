<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File</title>
</head>
<body>
<?php 

// Hàm fread () đọc từ một tệp đang fopen().
//Tham số đầu tiên của fread () chứa tên của tệp để đọc và tham số thứ hai chỉ định số byte tối đa để đọc.
//file.txt to end
// $myfile = fopen("file.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("file.txt"));

// fclose($myfile);

//doc tung line voi fgets()
// $myfile1 = fopen("file.txt", "r") or die("Unable to open file!");

// echo fgets($myfile1);
// fclose($myfile1);

//Hàm feof () kiểm tra xem "cuối tệp" (EOF) đã đạt đến hay chưa.

//Hàm feof () hữu ích để lặp qua dữ liệu có độ dài không xác định.
$myfile1 = fopen("file.txt", "r") or die("Unable to open file!");
while (!feof($myfile1)) {
	// code...
	echo fgets($myfile1) . "<br>";
}

fclose($myfile1);


//doc tung ki tu voi fgetc()

?>
</body>
</html>