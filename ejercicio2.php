<?php
$num=2;
$lim=1;

while($lim <= 10){
    if($num<=12){
        $res=$lim*$num;
        echo$res."<br>";
        $lim++;
    }else{
        echo"no esta en el rango";
        break;
    }


}






/* while($num2<=10){

    $num2++;

    $num=($num2)*2;
    echo $num."<br>";

} */
?>