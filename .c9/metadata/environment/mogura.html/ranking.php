{"filter":false,"title":"ranking.php","tooltip":"/mogura.html/ranking.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":10,"column":3},"action":"insert","lines":["<?php"," $f = file(\"record.txt\");"," for($i = 0; $i < count($f); $i++){"," list($date, $name, $score) = explode(',', rtrim($f[$i]));"," $db[$date.','.$name] = $score;"," }"," asort($db); //タイムが短い順にソートする"," foreach($db as $key => $val) {"," echo \"$key,$val\\n\";"," }","?> "],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":10,"column":3},"end":{"row":10,"column":3},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528442651048,"hash":"7ec318b87fad87a2cd0789d8925d47aa1a64dc4c"}