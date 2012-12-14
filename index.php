<title>Balfour Leadership Training Workshop</title>

<?php
include("./header.php");

define("ROWS", 4);
define("COLUMNS", 5);
define("SQUARES", ROWS*COLUMNS);

$images = array(array("Badge", 0, 1, 1, 0), 
array("CB", 0, 0, 1, 0), 
array("ChapterHouse", 0, 1, 1, 0), 
array("CIA", 0, 0, 1, 0), 
array("Coin", 0, 1, 1, 0), 
array("IBA", 0, 1, 1, 0), 
array("Pens", 0, 1, 1, 0), 
array("PGCs", 0, 0, 1, 0), 
array("Walking", 0, 1, 1, 0), 
array("Facilitation", 0, 1, 1, 0), 
array("QCorner", 0, 0, 1, 0), 
array("Award", 0, 1, 1, 0), 
array("Basketball", 0, 1, 0, 0), 
array("Binder", 0, 1, 1, 0), 
array("Constantine", 0, 1, 1, 0), 
array("Cooper", 0, 1, 1, 0), 
array("DVs", 0, 0, 1, 0), 
array("Facilitation2", 0, 0, 1, 0), 
array("Facilitation3", 0, 1, 1, 0), 
array("Football", 0, 0, 0, 0), 
array("Kid", 0, 0, 0, 0), 
array("Peterson", 0, 1, 1, 0), 
array("Stairs", 0, 0, 1, 0), 
array("Studying", 0, 1, 1, 0),
array("About", 0, 0, 0, "./about"),
array("Register", 0, 0, 0, "./register")
);


function RandomImage($imagearray){
	$imagenumber = rand(0, count($imagearray)-1);
	if($imagearray[$imagenumber][1] > 0){
		return RandomImage($imagearray);
	}
	else{
		return $imagenumber;
	}
}

function CheckBlueprint($imagearray, $checkerboard){
	for($m = 0; $imagearray[$m]; $m++){
		$iteration = 0;
		while((is_string($imagearray[$m][4]) || $imagearray[$m][4] != 0) && $imagearray[$m][1] == 0){
			$x = rand(0, COLUMNS);
			$y = rand(0, ROWS);
			if($imagearray[$checkerboard[$y][$x]][4] == 0){
				if($imagearray[$checkerboard[$y][$x]][1] == 1 || $iteration > 18){
					$replaced = $checkerboard[$y][$x];
					$imagearray[$replaced][1] -= 1;
					$checkerboard[$y][$x] = $m;
					$imagearray[$m][1] = 1;
				}
			}
		}
	}
	echo("<div style=\"display: none\">");
	print_r($imagearray);
	echo("</div>");
	return $checkerboard;
}

function Blueprint($imagearray){
	for($r = 0; ROWS > $r; $r++){
		for($c = 0; COLUMNS > $c; $c++){
			$checkerboard[$r][$c] = -1;
		}
	}
	for($i = 0; $checkerboard[$i]; $i++){
		for($m = 0; $checkerboard[$i][$m] > -2; $m++){
			if($checkerboard[$i][$m] == -1){
				$imagenumber = RandomImage($imagearray);
				$checkerboard[$i][$m] = $imagenumber;
				$imagearray[$imagenumber][1] = 1;
				switch(rand(0,5)){
					case 2: 
						if($i < 2 && $imagearray[$imagenumber][2] == 1){
							$next = $i + 1;
							$checkerboard[$next][$m] = $imagenumber;
							$imagearray[$imagenumber][1] = 2;
						}
						break;
					case 3:
							echo("<div style=\"display: none;\">".$imagenumber.": ".$imagearray[$imagenumber][0]." ".$imagearray[$imagenumber][1]." ".$imagearray[$imagenumber][2]."</div>");
						if($m < 2 && $imagearray[$imagenumber][3] == 1){
							$next = $m + 1;
							$checkerboard[$i][$next] = $imagenumber;
							$imagearray[$imagenumber][1] = 2;
						}
						break;
				}
			}
		}
	}
	$checkerboard = CheckBlueprint($imagearray, $checkerboard);
	return $checkerboard;
}

function Construct($imagearray){
	$board = "<center><table style=\"border-spacing: 2px;\"><tr>";
	for($c = 0; COLUMNS > $c; $c++){
		$board .= "<td width=150px></td>";
	}
	$board .= "</tr>";
	$cboard = Blueprint($imagearray);
	echo("<div style=\"display: none\">");
	print_r($cboard);
	echo("<hr>");
	print_r($imagearray);
	echo("</div>");
	for($p = 0; $cboard[$p]; $p++){
		$board .= "<tr>";
		for($q = 0; $cboard[$p][$q] > -1; $q++){
			$horiz = $q + 1;
			$down = $p + 1;
			$up = $p - 1;
			if($imagearray[$cboard[$p][$horiz]][0] == $imagearray[$cboard[$p][$q]][0]){
				$board .="<td colspan=2><img src=\"http://labs.scottmacarthurritter.com/BalfourLTW/images/".$imagearray[$cboard[$p][$q]][0]."Horz.jpg\" width=304 height=150></td>";				$q++;
			}
			else{
				if($imagearray[$cboard[$down][$q]][0] == $imagearray[$cboard[$p][$q]][0]){
					$board .="<td rowspan=2><img src=\"http://labs.scottmacarthurritter.com/BalfourLTW/images/".$imagearray[$cboard[$p][$q]][0]."Vert.jpg\" height=304 width=150></td>";	
				}
				else{
					if(is_string($imagearray[$cboard[$p][$q]][4])){
							$board .="<td><a href=\"".$imagearray[$cboard[$p][$q]][4]."\"><img src=\"http://labs.scottmacarthurritter.com/BalfourLTW/images/".$imagearray[$cboard[$p][$q]][0].".jpg\" width=150></a></td>";
					}
					else{
						if($imagearray[$cboard[$up][$q]][0] != $imagearray[$cboard[$p][$q]][0]){
							$board .="<td><img src=\"http://labs.scottmacarthurritter.com/BalfourLTW/images/".$imagearray[$cboard[$p][$q]][0].".jpg\" width=150></td>";
						}
					}
				}
			}
		}
		$board .= "</tr>";
	}
	$board .= "</table></center>";
	echo($board);
}

Construct($images);

?>