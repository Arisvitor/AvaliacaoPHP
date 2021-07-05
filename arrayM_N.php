 <?php
    $m = $_POST ["form_m"];
    $n = $_POST ["form_n"];

    $vetor = Array(); 

    if($m%$n == 0){
        $vetor=$m;   
    }
    for ($i=0; $i <count($vetor); $i++)
    {
        echo $vetor[$i];
        echo "<br/>";
    }
 ?>