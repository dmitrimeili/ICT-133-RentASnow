<?php

require 'model/model.php';


print 'Fonction getAllItems';
$news = getAllNews();
if(count($news)==3){
    echo 'OK !!!';
} else {
    echo 'BUG !!!';
}
echo "\n";


?>