<?php
if( isset($_GET['name']) && isset($_GET['time']) ){
 $fw = fopen("record.txt", "a"); // 追記する
 fwrite( $fw, date("y/m/d H:i:s").",".$_GET['name'].",".$_GET['time']."\n");
 fclose($fw);
}
?>