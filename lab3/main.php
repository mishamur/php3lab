<?php
/* Вычислить сумму положительных двухзначных чисел. */

function calculate($params) {
    if(key($params) == "notRND") {
        $arr = Array();
        $sum = 0;
        // foreach($params['notRnd'] as $value) {
        //     // if($value >= 10 && $value <= 99) {
        //     //     $sum += $value;   
        //     // }
        // }
        //echo $params["notRND"];
       // echo strlen($params["notRND"]);
        $str = $params["notRND"];
        
        
        $arr = explode(" ", $str);
        echo "Наш массив ";

        foreach($arr as $value) {
            echo $value;
            echo "   ";
            if($value >= 10 && $value <= 99) {
                $sum += $value;   
            }
        }

        echo '<br />';
        print_r("Ответ $sum");
        echo '<br />';

        //print_r($arr);
      
    }
    
// //случайный способ заполнения массива
    if(key($_GET ) == "rnd") {
        $arr = Array();
        $arr = array_pad($arr, 10,0);
        $sum = 0;
        echo "Наш массив ";
        foreach($arr as $value) {
            
            $value = rand(-100, 100);
            echo $value;
            echo "   ";
            if($value >= 10 && $value <= 99) {
                $sum += $value;   
            }
        }
        echo '<br />';
        print_r("Ответ $sum");
        echo '<br />';
    }

}
calculate($_GET);
echo '<br />';
//echo key($_GET);

//echo $_GET;

//var_dump($_GET);


