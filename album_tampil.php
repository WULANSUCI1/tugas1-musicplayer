<center><h2>ALBUM DATA</h2></center>

<?php 

$alb = new App\Album();
$rows = $alb->tampil();

?>

<table>
	<tr>
		<th>NO</th>
		<th>NAME</th>
		<th>ARTIST</th>
		<th>EDIT</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['ART']; ?></td>
			<td><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn">EDIT</a></td>
		</tr>
	<?php } ?>

</table>
<br>
<br>
<center><a href="dashboard.php?page=album_input" class="btn">ADD</a></center>