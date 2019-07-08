<?php
function isleap( $year ){
    if($year%4 == 0)
    	echo "Високосный год";
    else
    	echo "Не високосный год";
}
echo isleap(2019);

// Проверить високосный ли год.