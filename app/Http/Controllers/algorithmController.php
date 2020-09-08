<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class algorithmController extends Controller
{
    //

    function sortReverseArray(){
        
        $array = array('35','2','47','3');

        $count = count($array);
        echo "<pre>";
        // Print array elements before sorting
        print_r($array);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($array[$i] > $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
        echo "Ascending Sorted Array:" . "<br/>";
        print_r($array);

        //Reverse the array
        $reversed_array = array();
        $r = 0;
        for ($i = $count - 1; $i >= 0; $i--) {
            $reversed_array[$r] = $array[$i];
            $r++;
        }
        echo "Reversed Array:" . "<br/>";
        print_r($reversed_array);
    }
}
