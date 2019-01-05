<?php
$jTitik = intval($_POST["jumlahTitik"]);
?>
 
<!DOCTYPE HTML>
<html>
<head>
	<title>Graph</title>
<style>
	#formGraph{
		margin: 0 auto 0 auto;
		padding:20px;
		background-color: #c1c1c1;
		width:500px;
	}
	
	h1{
		text-align:center;
	}
</style>
</head>
 
<body>
	<form id="formGraph" action="matrikGraph.php" method="POST">
		<h1>Beri Nama Titik</h1>
		<table width="100%">
			<?php for($i=1; $i<= $jTitik; $i++){ ?>
			<tr>				
				<td align="right">Titik ke-<?php echo $i; ?></td>
				<td>:</td>
				<td><input type="text" name="namaTitik[]"></td>
			</tr>
			<?php } ?>
			<tr>				
				<td></td>
				<td></td>
				<td>
					<input type="hidden" name="jumlahTitik" value="<?php echo $jTitik; ?>">
					<input type="submit" value="Lanjut">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>