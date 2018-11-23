<?php

$a = (rand(10,100));
$b = (rand(10,100));
echo "Rand numbers are $a, $b.<br>";

$answer = new Math;
$sum = $answer -> Sum($a, $b);
$difference = $answer -> Minus($a, $b);
$product = $answer -> Product($a, $b);
$division = $answer -> Division($a, $b);

class Math{
    public function Sum($a, $b){
    return $a + $b;
    }
    public function Minus($a, $b){
    return $a - $b;
    }
    public function Product($a, $b){
    return $a * $b;
    }
    public function Division($a, $b){
    return number_format((float)($a / $b), 2, '.', '');
    }
}

echo "The Sum of this 2 numbers is $sum. <br>";
echo "The Difference of this 2 numbers is $difference. <br>";
echo "The Product of this 2 numbers is $product. <br>";
echo "The Division of this 2 numbers is $division. <br>";




//$comp = array (
//    'companies' =>
//        array (
//            array(
//                'name' => 'yovoads',
//                'emp' =>
//                    array(
//                        array(
//                            'tel' =>
//                                array( '123', '345'),
//                            'name' => 'Vitaly'
//                        ),
//                        array(
//                            'tel' =>
//                                array( '123', '345'),
//                            'name' => 'Liza'
//                        )
//                    )
//            ),
//            array(
//                'name' => 'yovoads',
//                'emp' =>
//                    array(
//                        array(
//                            'tel' =>
//                                array( '123', '345'),
//                            'name' => 'Vitaly'
//                        ),
//                        array(
//                            'tel' =>
//                                array( '123', '345'),
//                            'name' => 'Liza'
//                        )
//                    )
//            )
//        )
//);
////echo '<pre>'.json_encode($comp,  JSON_PRETTY_PRINT).'</pre>';
//
//foreach ($comp as $companies => $inner_array){
//    //echo $companies.'<br>';
//    foreach ($inner_array as $element => $item){
//       // echo $element.'<br>';
//        //echo $item.'<br>';
//        foreach ($item as $new_element => $new_item){
//            //echo $new_element.'<br>';
//            foreach ($new_item as $New_element => $New_item){
//                //echo $New_item.'<br>';
//                foreach ($New_item as $last_element => $last_item){
//                    //echo $last_element.'<br>';
//                    foreach ($last_item as $Last_element => $Last_item){
//                        echo $Last_item.'<br>';
//                    }
//                }
//            }
//        }
//    }
//};







//$try = [
//    'Healthy' =>
//                  ['honey', 'brad', 'milk'],
//    'Unhealthy' =>
//                  ['beer', 'sigar', 'rom'],
//
//];
//
//foreach ($try as $element => $inner_array){
//    echo '<strong>'.$element.'</strong>'.'<br>';
//    foreach ($inner_array as $item){
//        echo $item.'<br>';
//    }
//}


//echo $try[1]['name'];
//for ($row = 0; $row < 4; $row++){
//    echo "Row number $row<br>";
//
//}

//$streets=[
//    'streets'=>
//                [
//                    ['name'=>
//                        'Sovet',
//                        'shops'=>
//                            [
//                                ['sname'=>'Vilam',
//                                    'sell'=>'Flowers'],
//                                ['sname'=>'Green',
//                                    'sell'=>'Bags',
//                                    'Bags'=>[
//                                        [
//                                            'bname'=>1,
//                                            'inside'=>[
//                                                'pencil', 'lipstick', 'wallet'
//                                            ]
//                                        ]
//                                    ]
//                                ]
//                            ]
//                    ],
//                    ['name'=>
//                        'Karpenko',
//                        'shops'=>
//                            [
//                                ['sname'=>'Hey',
//                                    'sell'=>'toys'],
//                                ['sname'=>'Lucia',
//                                    'sell'=>'Bags',
//                                    'Bags'=>[
//                                        [
//                                            'bname'=>2,
//                                            'inside'=>[
//                                                'rice', 'roll', 'drug'
//                                            ]
//                                        ]
//                                    ]
//                                ]
//                            ]
//                    ]
//
//                ],
//
//
//];

//echo '<pre>'.json_encode($streets,  JSON_PRETTY_PRINT).'</pre>';

//for ($row = 0; $row < 2; $row++){
//    echo "<pre>The row number $row</pre>";
//}



