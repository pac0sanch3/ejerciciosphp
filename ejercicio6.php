<?php
for($i =1 ; $i <= 10 ; $i++){
    echo "<tr><br>\n";

    for($j = 1 ; $j <= 10 ; $j++){
        $mult =$i * $j ;
        echo "<tr>\n \n" , $mult, "</td>";
    }
    echo "</tr>";
}
?>


