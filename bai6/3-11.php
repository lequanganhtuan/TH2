<?php
	$mang_duy_nhat = array();
	$chuoi = "";

	if(isset($_POST['nhap_mang'])){
		$nhap_mang = $_POST['nhap_mang'];
		$mang_so = explode(",", $nhap_mang);
		$mang_duy_nhat = array_unique($mang_so);
		$count_arr = array_count_values($mang_so);
		foreach ($count_arr as $key => $value) {
			$chuoi .= $key . ": " . $value . " ";
		}	
	}
	function mang_duy_nhat($mang){
		$str = "";
		foreach ($mang as $key => $value) {
			$str .= $value . " ";
		}
		echo $str;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</title>
	<meta charset="utf-8">
	<style>
	*{
    font-family: Tahoma;
	}
	table{
	    width: 400px;
	    margin: 100px auto;
	}
	table th{
	    background: #66CCFF;
	    padding: 10px;
	    font-size: 18px;
	}
	input{
		width: 100%;
	}
	</style>
</head>
<body>
	<form action="3-11.php" method="POST">
		<table border="0">
			<thead>
				<tr>
					<th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Mảng:</td>
					<td><input type="text" name="nhap_mang" value="<?php echo $_POST['nhap_mang']; ?>" ></td>
				</tr>
				<tr>
					<td>Số lần xuất hiện:</td>
					<td><input type="text" name="so_lan_xuat_hien" value="<?php echo $chuoi; ?>" disabled="disabled" ></td>
				</tr>
				<tr>
					<td>Mảng duy nhất:</td>
					<td><input type="text" name="mang_duy_nhat" value="<?php mang_duy_nhat($mang_duy_nhat); ?>" disabled="disabled" ></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Thực hiện"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
