<center><h2>ARTIST DATA</h2></center>

<?php 

$art = new App\Artist();
$rows = $art->tampil();

?>

<table>
	<tr>
		<th>NO</th>
		<th>NAME</th>
		<th>EDIT</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['artist_name']; ?></td>
			<td><a href="dashboard.php?page=artist_edit&id=<?php echo $row['artist_id']; ?>" class="btn">EDIT</a></td>
		</tr>
	<?php } ?>
</table>
<br>
<br>
<center><a href="dashboard.php?page=artist_input" class="btn">ADD</a></center>
