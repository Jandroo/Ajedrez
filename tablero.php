<html>

<head>
	<title>Ajedrez</title>
	<link rel="stylesheet" type="text/css" href="CSS/tablero.css">
</head>

<body>

	<form action = "" method="post"> Escriure la posicio:
		<input type="text" name="posicio" value="">
		<input type="submit" name="submit" value="Executar">
	</form>

	<br>

	<table>
	<?php
		session_start();
		
		if(!isset($_SESSION["torre"])){
			$_SESSION["torre"] = 'A1';
			$ultima_pos = $_SESSION["torre"];

		}

		else{
			$ultima_pos = $_SESSION["torre"];
			$_SESSION["torre"] = strtoupper($_POST['posicio']);
		}
		
		$array = ["A","B","C","D","E","F","G","H"];	
		$lletras = "A";
		
		if(substr($ultima_pos,0,1) == substr($_SESSION["torre"],0,1) or substr($ultima_pos,1,1) == substr($_SESSION["torre"],1,1)){
	
		}else{
			$_SESSION["torre"] = $ultima_pos;
		}

		echo "<tr>";
			for($n=0;$n<=8;$n++){
				echo "<td class='lletras'>".$n."</td>";
			}

		echo "</tr>";

		for($f=1;$f<=8;$f++){
			echo "<tr>";
			echo "<td class='lletras'>".$lletras."</td>";
			
			for($c=1;$c<=8;$c++){

				if(($f%2==0 && $c%2==0) | ($f%2!=0 && $c%2!=0)){

					if($lletras.$c == $_SESSION["torre"]){
						echo "<td class='negres' value='".$lletras.$c."'><img src='torre.svg'></td>";

					}

					else{
						echo "<td class='negres' value='".$lletras.$c."'></td>";
					}

				}

				else{

					if($lletras.$c == $_SESSION["torre"]){
						echo "<td value='".$lletras.$c."'><img src='torre.svg'></td>";

					}

					else{
						echo "<td value='".$lletras.$c."'></td>";
					}
				}
			}
			echo "</tr>";
			$lletras++;
		}
	?>
	</table>

</body>

</html>