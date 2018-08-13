<?php
 $f = file("record.txt");
 for($i = 0; $i < count($f); $i++){
 list($date, $name, $score) = explode(',', rtrim($f[$i]));
 $db[$date.','.$name] = $score;
 }
 asort($db); //タイムが短い順にソートする
 foreach($db as $key => $val) {
 echo "$key,$val\n";
 }
?> 