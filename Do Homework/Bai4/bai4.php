<!DOCTYPE html>
<html>
<head>
	<title>Bai4</title>
</head>
<body>
<form action="menu.php" method="get">
	<table>
		<tr>
			<td>Món khai vị</td>
			<td>Món chính</td>
			<td>Món tráng miệng</td>
		</tr>
		<tr>
			<td>
				<select name="khaivi[]" size="5" multiple>
					<option value="mon1">Gỏi ngó sen</option>
					<option value="mon2">Salat cá ngừ</option>
					<option value="mon3">Bò trộn rau thơm</option>
					<option value="mon4">Thịt nguội</option>
				</select>
			</td>
			<td>
				<select name="monchinh[]" size="5" multiple>
					<option value="mon1">Bò hầm</option>
					<option value="mon2">Cá chẽm sốt cà</option>
					<option value="mon3">Tôm rang muối</option>
					<option value="mon4">Cua sốt me</option>
				</select>
			</td>
			<td>
				<select name="trangmieng[]" size="5" multiple>
					<option value="mon1">Chè hạt sen</option>
					<option value="mon2">Bánh flan</option>
					<option value="mon3">Rau câu</option>
				</select>
			</td>
		</tr>
	</table>
	<input type="submit" name="submit">
</form>
</body>
</html>