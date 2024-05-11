<?php

try{

$number = 19;
if($number>10){
    throw new Exception("number greater than 10 is not allowed");
} else if($number < 0){
    throw new Exception('number less than zero is not allowed');
}
} catch(Exception $e){
    echo $e ->getMessage();
} finally{
    echo 'error dected';
}

?>