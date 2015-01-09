<?php
$test= array();
$test[2015]["test"][1] = 15;

if (!array_key_exists("0",$test) || !array_key_exists("test",$test[0]) || !array_key_exists("0",$test[0]["test"])){
    echo "true";
}else{
    echo "false";
}
print "\r\n";

?>