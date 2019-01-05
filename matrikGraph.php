<?php
$jTitik = intval($_POST["jumlahTitik"]);
$nmTitik = $_POST["namaTitik"];
$txTitik = implode(",", $nmTitik);
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
	td{
		width:50px;
	}
	.spani{ 
		writing-mode: tb-rl; 
	}
	
	table{
		margin: 0 auto 0 auto;
	}
	
</style>
</head>
 
<body>
	<form id="formGraph" action="draw.php" method="POST">
		<h1>Matrik Graph</h1>
		<table border="1px">
			<?php 
			echo "<input type='hidden' name='nmTitik' value='".$txTitik."'>";
			$row  = "";
			for($i=0; $i<= $jTitik; $i++){
				$row .= "<tr>";
				for($j=0; $j<= $jTitik; $j++){
					if($i == 0){
						$row .= "<td align='right' valign='middle'>";
						$row .= isset($nmTitik[$j-1]) ? "<span class='spani'>".$nmTitik[$j-1]."</span>" : "";
						$row .= "</td>";
					}else{
						if($j == 0){
							$row .= "<td align='right'>";
							$row .= isset($nmTitik[$i-1]) ? $nmTitik[$i-1] : "";
							$row .= "</td>";
						}else{
							if($j>$i){
								$row .= "<td align='right'>";
								$row .= "<input style='width:50px' type='text' name='node[".$j."][".$i."]' value='0'>";
								$row .= "</td>";
							}else{
								$row .= "<td align='right'>";
								$row .= "<input type='hidden' name='node[".$j."][".$i."]' value='0'>&nbsp;";
								$row .= "</td>";
							}
						}
					}
				} 
				
				$row .= "</tr>";
			} 
			echo $row;
			?>
			<tr>
				<td align="right" colspan="<?php echo $i;?>"><input type="submit" value="Lihat Hasil"></td>
			</tr>
		</table>
	</form>
</body>
</html>