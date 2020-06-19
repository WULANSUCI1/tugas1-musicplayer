<?php 
$id = $_GET['id'];
$user = new App\User();
$row = $user->edit($id);
?>
<center><h2>USER EDIT</h2></center>
<form method="POST" action="user_proses.php">
	<input type="hidden" name="user_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" required=""></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>
				<input type="password" name="user_password">
				<div><small style="color: red;">*may be left blank</small></div>
			</td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td><input type="text" name="user_email" value="<?php echo $row['user_email']; ?>" required=""></td>
		</tr>
		<tr>
			<td>FULL NAME</td>
			<td><input type="text" name="user_nama_lengkap" value="<?php echo $row['user_nama_lengkap']; ?>" required=""></td>
		</tr>
		<tr>
			<td>ROLE</td>
			<td>
				<select name="user_role">
					<option value="1"<?php echo $row['user_role']==1 ? " selected" : ""; ?>>Administrator</option>
					<option value="2"<?php echo $row['user_role']==2 ? " selected" : ""; ?>>Operator</option>
				</select>
			</td>
		</tr>
		<tr><td></td>
			<td><input type="submit" name="btn-update" value="UPDATE" style="background: yellow;"></td>
		</tr>
	</table>
</form>