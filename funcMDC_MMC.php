 <?php
    $m = $_GET ["form_m"];
    $n = $_GET ["form_n"];

    echo "M é: ".$m."<br/> N é: ".$n." <br/>"; 

    function mdc($m,$n){
    $a = max($m,$n);
    $b = min($m,$n);
    if($a%$b == 0){
        return $b;
        }else{
        mdc($b,($a%$b));
        }
    }
    echo mdc($m,$n);


    function mmc($m,$n){
        return (($m*$n)/(mdc($m,$n)));
    }
    
    echo mmc($m,$n);


 ?>