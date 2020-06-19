<?php 
$id = $_GET['id'];
$alb = new App\Album();
$row = $alb->edit($id);
$lst = $alb->listArtist();

?>

<center><h2>ALBUM EDIT</h2></center>

<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>NAME</td>
			<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>" required=""></td>
		</tr>
		<tr>
			<td>ARTIST</td>
			<td>
				<select name="album_id_artist">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['artist_id']; ?>"<?php echo $row['album_id_artist']==$ls['artist_id'] ? " selected" : ""; ?>><?php echo $ls['artist_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-update" value="UPDATE" style="background: yellow;"></td>
		</tr>
	</table>
</form>