<?php
//   1 - write a function getNumMatches that searches for a word in an array of words and returns 
//   the number of matches (repetitions).
  
    function getNumMatches($txt)
    {
        $arr = ["amr", "fahd", "mostafa", "samir", "amr"];
        foreach ($arr as $arrItems){
            if ($txt == $arrItems){
                $repItem[] = $arrItems ;
            }
        }
        if (isset ($repItem)){
            $result = count($repItem);
        }
        else {
            $result = "Not Found";
        }
        return $result;
    }

    echo getNumMatches("amr");
    echo "<hr>";
    echo getNumMatches("omar");
    echo "<hr>";


    // 2- write a function getPriceWithDiscount that takes the price and returns the price after discount.

    function getPriceWithDiscount($price){
        if (is_numeric($price) and $price > 0){
            if ($price < 1000 ) {
                $result = $price * (10/100) ;
                $finalDiscount = $price - $result ;
                return $finalDiscount;
            }
            elseif ($price >= 1000) {
                $result = $price * (5/100) ;
                $finalDiscount = $price - $result ;
                return $finalDiscount ;
            } 
        } 
        elseif (is_numeric($price) and $price <= 0){
            return "Please enter correct number";
        }
        else {
            return "Please enter a number";
        }
    }
    echo getPriceWithDiscount(800);
    echo "<hr>";








?>