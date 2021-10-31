<?php

$page = $_SERVER['PHP_SELF'];
$sec = "1";
header("Refresh: $sec; url=$page");

$christmas_tree_height = rand(10, 30);
$tree = "";

for($i = 0; $i < $christmas_tree_height; $i++) {
	for ($x = 0; $x < 1 + $i ; $x++) {
		$decorations = rand(1, 30); 
		
		if($decorations === 1) {
			$tree = $tree . "<span style='color: #7957fb'>★</span>";
		} elseif ($decorations === 2) {
			$tree = $tree . "<span style='color: turquoise'>✴</span>";
		} elseif ($decorations === 3) {
			$tree = $tree . "<span style='color: #6ec2d7'>❆</span>";
		} else {
			$tree = $tree . "<span style='color: grey'>︿</span>";
		}	
	}
	$tree = $tree . "<br>";
}

$tree = $tree . "<span style='color: grey'>︿︿︿</span>" . "<br>" . "<span style='color: grey'>︿︿︿</span>" . "<br>" . "<span style='color: grey'>︿︿︿</span>";

?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="UTF-8" />
		<!-- be sio <meta/> neveikia @media query -->
		<meta name="viewport" content="width-device, initial-scale=1.0"/>
		<title>dekoruota eglute</title>
		<style>
			body{ 
				text-align: center;
				margin-top: 50px;
			}

			@media screen and (max-width: 1300px) {
				body {
					font-size: 0.5em;
				}
			}
		</style>
	</head>

	<body>	
		<?php print $tree; ?>
	</body>

</html>