<?php 
	require_once("function.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hashr</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<style type="text/css">
		html{
			font-family: Orbitron;
		}
		.hashes {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			grid-gap: 10px;
			grid-auto-columns: minmax(20%, 30%);
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Nunito|Orbitron" rel="stylesheet">
</head>
<body>
	<form method="post">
		<label>Input string: </label>
		<input type="text" name="input">
		<input type="submit" name="submit" value="Hash!">
	</form>
	<br>
	<div class="hashes">
		<?php 
			foreach (hash_algos() as $i => $algo) { ?>
				<div class="hash_algo">
					<p class="algo"><b><?= $algo; ?></b></p>
					<p>Hash: <span style="font-family: Nunito"><?= $hashes[$i]; ?></span></p>
				</div>
		<?php	}
		 ?>
	</div>
</body>
</html>


