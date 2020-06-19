<center><h2>USER DATA</h2></center>
<?php 
$usr = new App\User();
$rows = $usr->tampil();
?>
<table>
	<tr>
		<th>NO</th>
		<th>USERNAME</th>
		<th>EMAIL</th>
		<th>FULL NAME</th>
		<th>ROLE</th>
		<th>EDIT</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['user_email']; ?></td>
			<td><?php echo $row['user_nama_lengkap']; ?></td>
			<td>
				<?php 
				if($row['user_role'] == 1) {
					echo "Administrator";
				} else {
					echo "Operator";
				}
				?>				
			</td>
			<td><a href="dashboard.php?page=user_edit&id=<?php echo $row['user_id']; ?>" class="btn">EDIT</a></td>
		</tr>
	<?php } ?>
</table>
<br><br>
<center><a href="dashboard.php?page=user_input" class="btn">ADD</a></center>
