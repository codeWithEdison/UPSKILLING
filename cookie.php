<?php
setcookie('fvcolor', 'blue', time()+ 86400 * 30);
// delete cokkie
// setcookie('fvcolor', 'blue',  time() - 86400);
if(isset($_COOKIE['fvcolor'])){
    echo ' cookie is enabled'; 
} else{
    echo 'cokie is not set';
}
?>