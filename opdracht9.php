<?php
	//TODO:
	//lease en eigen auto toevoegen
	//tanken en rijden methods toevoegen
	require "opdracht4/auto.php";
	
	session_start();
	
	//is er al een sessie met autos?
	if (isset($_SESSION['autos']))
	{
		$autos = $_SESSION['autos'];
	} else 
	{
		//maak een array voor de auto's als er geen sessie is
		$autos = Array();
	}
	
	
	
	//formulier verstuurd?
	if (isset($_POST['submit']))
	{
		//zet de gegevens in een auto
		$merk = $_POST['merk'];
		$type = $_POST['type'];
		$kleur = $_POST['kleur'];
		$trekhaak = $_POST['trekhaak'];
		$kenteken = $_POST['kenteken'];
		$kilometers = $_POST['gereden'];
		$tankinhoud = $_POST['tankinhoud'];
		$benzine = $_POST['benzine'];
		$verbruik = $_POST['verbruik'];
		
		//auto die uit de form komt
		$form_auto = new Auto($merk, $type, $kleur, $tankinhoud, $verbruik, $kenteken, $benzine, $kilometers, $trekhaak);
		
		$form_auto->tanken($benzine);	
		
		$autos[] = $form_auto;
		
		$_SESSION['autos'] = $autos;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Opdracht 9 OOP</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	<?php
		
		//toon alle autos
		foreach($autos as $auto)
		{
			
			?>
			<h2>Informatie auto's</h2>
			<table>
				<tr><td>Merk:</td><td><?php echo $auto->merk; ?></td></tr>
				<tr><td>Type:</td><td><?php echo $auto->type; ?></td></tr>
				<tr><td>Kleur:</td><td><?php echo $auto->kleur; ?></td></tr>
				<tr><td>Trekhaak:</td><td><?php echo $auto->heeftTrekhaak; ?></td></tr>
				<tr><td>Kenteken:</td><td><?php echo $auto->getKenteken(); ?></td></tr>
				<tr><td>Kilometers:</td><td><?php echo $auto->kilometerstand(); ?></td></tr>
				<tr><td>Tankinhoud:</td><td><?php echo $auto->tankInhoud; ?></td></tr>
				<tr><td>Benzine:</td><td><?php echo $auto->benzinePeil(); ?></td></tr>
				<tr><td>Verbruik:</td><td><?php echo $auto->verbruik; ?></td></tr>
				
			</table>
			<h2>Rijden en/of tanken met de auto's</h2>
			<form method="post" action="">
				<tr><td>Merk: &nbsp;&nbsp; ||</td><td>Type: &nbsp;&nbsp; ||</td><td>Kenteken: &nbsp;&nbsp; ||</td><td>Kilometerstand: &nbsp;&nbsp; ||</td><td>Benzine: &nbsp;&nbsp; ||</td><td>Kilometers Rijden: &nbsp;&nbsp;</td></tr><br>
				<tr><td><input type="text" name="merk" value="<?php echo $auto->merk; ?>" disabled></td>
					<td><input type="text" name="type" value="<?php echo $auto->type; ?>" disabled></td>
					<td><input type="text" name="kenteken" value="<?php echo $auto->getKenteken(); ?>" disabled></td>
					<td><input type="text" name="km" value="<?php echo $auto->kilometerstand(); ?>" disabled></td>
					<td><input type="text" name="benzineTanken" value="<?php echo $auto->benzinePeil(); ?>" ></td>
					<td><input type="text" name="kilometerRijden" value="" ></td>
					<td><input type="submit" name="tanken" value="Tanken"></td>
					<td><input type="submit" name="rijden" value="Rijden"></td></tr>
			</form>
			<?php
		}
		
		//formulier
		?>
		<h2>Auto toevoegen:</h2>
		<form method="post" action="">
			<table>
				<tr><td>Merk:</td><td><input type="text" name="merk" placeholder="Nissan" required></td></tr>
				<tr><td>Type:</td><td><input type="text" name="type" placeholder="240sx" required></td></tr>
				<tr><td>Kleur:</td><td><input type="text" name="kleur" placeholder="Licht Groen" required></td></tr>
				<tr><td>Trekhaak:</td><td><input type="radio" name="trekhaak" value="true" placeholder="Nissan">Ja
										  <input type="radio" name="trekhaak" value="true" placeholder="Nissan" checked>Nee
									  </td></tr>
				<tr><td>Kenteken:</td><td><input type="text" name="kenteken" placeholder="G-255-LR" required></td></tr>
				<tr><td>Gereden:</td><td><input type="number" name="gereden" placeholder="2500" required>KM</td></tr>
				<tr><td>Tankinhoud:</td><td><input type="number" name="tankinhoud" placeholder="55" required>Liters</td></tr>
				<tr><td>Benzine:</td><td><input type="number" name="benzine" placeholder="20" required>Liters</td></tr>
				<tr><td>Verbruik:</td><td><input type="float" name="verbruik" placeholder="8.6" required>Liters/100KM</td></tr>
				<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Toevoegen"></td></tr>
			</table>
		</form>
		<?php
		
		
	?>
	
	
</body>

</html>
