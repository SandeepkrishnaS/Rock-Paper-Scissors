<html>
<?php
function check_death($p , &$res){
for($i=0; $i<4; $i++){
	for($j=0; $j<4; $j++){
		if($i != $j){
			if($p[$i] != $p[$j]){
				if($p[$i] == 1){
					if($p[$j] == 2){ $res[$i] = 0; } else{$res[$j] = 0;}
				}
				else{
					if($p[$j] == 1){ $res[$j] = 0; } else{$res[$i] = 0;}
				}
		}
		}
	}
}
}

function dispaly($p,$r){
	echo "Player choices in order :  ";
	foreach($p as $v){
		if($v == 1) echo "Rock ";
		else if($v == 2) echo "Paper ";
		else echo "Scissors ";
}
echo "<br>";
echo "Points for current round :  ";
	foreach($r as $c){
		echo $c . " ";
	}
}

function main(){
	$count = 1;
	$t1=0;$t2=0;$t3=0;$t4=0;
	$total = [$t1, $t2, $t3, $t4];

	while($count <= 10){
		echo "<br>~~~~~~~~~~~~~~~~~~~<br>";
		echo "Round : ".$count . "<br>";
		$p1=rand(1,3); $p2=rand(1,3); $p3=rand(1,3); $p4=rand(1,3);
		$r1=1;$r2=1;$r3=1;$r4=1; 

		$ps = [$p1,$p2,$p3,$p4];
		$rs = [$r1,$r2,$r3,$r4];
	
		check_death($ps,$rs);
	
		dispaly($ps,$rs);

		for($tt=0; $tt<4; $tt++){
			if($rs[$tt] == 1){ $total[$tt]++; }
		}
		$count++;
	}
	echo "<br>~~~~~~~~~~~~~~~~~~~<br><br>======================<br>";

	echo "Total scores of the players :  " ; foreach($total as $t) {echo $t. " ";};
	echo "<br>======================<br>";
}

main();
?>
</html>
