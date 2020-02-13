<?php
/**
 * Created by Falabella.
 *
 * Write a program that prints all the numbers from 1 to 100. However, for multiples of 3,
 * instead of the number, print "Linio". For multiples of 5 print
 * "IT". For numbers which are multiples of both 3 and 5, print "Linianos".
 */

class Falabella
{
    /**
     * Get final result
     *
     * @return string
     */
    function execute()
    {
        $resultArray = $this->getDividedArray();
        //array sort by key order
        ksort($resultArray);
        //converting array to string
        return implode(", ", $resultArray);
    }

    /**
     * Get Divided Array
     *
     * @return array
     */
    function getDividedArray()
    {
        $result  = array();
        $final = array();
        $divisionArray = array(3 => 'Linio', 5 => 'IT', 15 => 'Linianos');

        foreach ($divisionArray as $divKey => $divValue) {
            $result = $this->finddivisonValue($divKey, $divValue);
            //formatting result array as single array
            foreach ( $result as $key => $each ) {
                $final[$key] = $each;
            }
        }

        return $final;
    }

    /**
     * Finding divided key and value
     *
     * @param $divisionKey
     * @param $divisionValue
     * @return array
     */
    function finddivisonValue ($divisionKey, $divisionValue)
    {
        $result = array();

        for ($x = 1; $x <= 100; $x += 1) {
            if($x % $divisionKey == 0){
                $result[$x] = $divisionValue;
            }
        }
        return $result;
    }
}
//object create for class
$objFalabella = new Falabella;

//output data prepare
$output = '';
$output .= '<b>Task : </b>Write a program that prints all the numbers from 1 to 100. However, for multiples of 3,
    instead of the number, print "Linio". For multiples of 5 print
    "IT". For numbers which are multiples of both 3 and 5, print "Linianos". ';
$output .= "<br><br><br>";
$output .= "<b>Output:  </b>";
$output .= $objFalabella->execute();
echo $output;