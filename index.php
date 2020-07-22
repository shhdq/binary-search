<?php

// Search function
function binarySearch(Array $arr, $x) { 
    // Check if array is empty
    if (count($arr) === 0) return false; 

    // Set range
    $low = 0; 
    $high = count($arr) - 1; 

    // Position finder   
    while ($low <= $high) { 
          
        // compute middle index 
        $mid = floor(($low + $high) / 2); 
   
        // element found at mid 
        if($arr[$mid] == $x) { 
            return true; 
        } 
  
        if ($x < $arr[$mid]) { 
            // search the left side of the array 
            $high = $mid -1; 
        } 
        else { 
            // search the right side of the array 
            $low = $mid + 1; 
        } 
    } 

    // If we reach here element x doesnt exist 
    return false; 
}

// Set array numbers
$arr = array(1, 2, 3, 4, 5); 

// Test value
$value = 5; 

// Check if number is there, if argument $arr and test number match
if(binarySearch($arr, $value) == true) { 
    echo $value." Number is there"; 
} 
else { 
    echo $value." There are no matching values"; 
} 