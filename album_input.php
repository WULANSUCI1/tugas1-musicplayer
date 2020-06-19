<?php 

$alb = new App\Album();
$lst = $alb->listArtist();
?>

<center><h2>ADD ALBUM</h2></center>

<form method="POST" action="album_proses.php">
	<table>
		<tr>
			<td>NAME</td>
			<td><input type="text" name="album_name" required=""></td>
		</tr>
		<tr>
			<td>ARTIST</td>
			<td>
				<select name="album_id_artist">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['artist_id']; ?>"><?php echo $ls['artist_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SAVE" style="background: yellow;"></td>
		</tr>
	</table>
</form>