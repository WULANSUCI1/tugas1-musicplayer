<?php 

$ind = new App\Index();
$rows = $ind->track();

?>

<center><h2>Listen To Your Favorite Music For Free</h2>
<h4>You Can Download Here!!!</h2>
<h1 style="color: #55c6bf;">HAVE A NICE DAY</h1></center>

<div class="grid-music">
	<?php foreach ($rows as $row) { ?>
		<?php if (!empty($row['track_file'])) { ?>

			<div>
				<p><b><?php echo $row['track_name']; ?></b></p>
				<p><?php echo $row['ALB'] . " - " . $row['ART']; ?></p>
				<p>

					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					

					</p>

				</div>

			<?php } ?>
		<?php } ?>
	</div>