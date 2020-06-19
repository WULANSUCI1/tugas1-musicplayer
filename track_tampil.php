<center><h2>TRACK DATA</h2></center>
<?php 
$trc = new App\Track();
$rows = $trc->tampil();
?>
<table>
	<tr>
		<th>NO</th>
		<th>TITLE</th>
		<th>ALBUM</th>
		<th>TIME</th>
		<th>PLAY</th>
		<th>EDIT</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['track_id']; ?></td>
			<td><?php echo $row['track_name']; ?></td>
			<td><?php echo $row['ALB'] . " - " . $row['ART']; ?></td>
			<td><?php echo $row['track_time']; ?></td>
			<td>
				<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					
					<?php } ?>
				</td>
				<td><a href="dashboard.php?page=track_edit&id=<?php echo $row['track_id']; ?>" class="btn">EDIT</a></td>
			</tr>
		<?php } ?>
	</table><br><br>
	<center><a href="dashboard.php?page=track_input" class="btn">ADD</a></center>