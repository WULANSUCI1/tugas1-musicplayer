<?php 
$alb = new App\Track();
$lst = $alb->listAlbum();
?>
<center><h2>ADD TRACK</h2></center>
<form method="POST" action="track_proses.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>TITLE</td>
			<td><input type="text" name="track_name" required=""></td>
		</tr>
		<tr>
			<td>ALBUM</td>
			<td>
				<select name="track_id_album">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['album_id']; ?>"><?php echo $ls['album_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr><td>DURATION</td>
			<td><input type="text" name="track_time" required=""></td>
		</tr>
		<tr>
			<td>FILE (MP3)</td>
			<td><input type="file" name="track_file"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SAVE" style="background: yellow;"></td>
		</tr>
	</table>
</form>