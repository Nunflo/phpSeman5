<?php
// !Problema de Ordenar Lista con Bubble Sort
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < $n-$i-1; $j++) {
            if ($arr[$j] < $arr[$j+1]) {
                
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

function printList($arr) {
    foreach ($arr as $num) {
        echo $num . " ";
    }
    echo "\n";
}

$numbers = array(5, 2, -1, 8, 0, 3, -5, 2, 8, 1);

echo "Lista antes de ordenar: ";
printList($numbers);

$sortedList = bubbleSort($numbers);

echo "Lista después de ordenar: ";
printList($sortedList);
print "<br>";

// !Problema de Ordenar Lista con Merge Sort
function mergeSort($array) {
    $length = count($array);
    if ($length <= 1) {
        return $array;
    }

    $mid = (int) ($length / 2);
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }
    while (count($right) > 0) {
        $result[] = array_shift($right);
    }
    return $result;
}

$words = ["banana", "apple", "orange", "grape", "cherry"];

echo "Lista antes de ordenar: \n";
print_r($words);
print "<br>";


$sortedWords = mergeSort($words);
echo "\nLista después de ordenar: \n";
print_r($sortedWords);
print "<br>";

// !Problema de Ordenar Lista con Insertion Sort

function insertionSort($array) {
    $length = count($array);
    
    for ($i = 1; $i < $length; $i++) {
        $key = $array[$i];
        $j = $i - 1;
        
        while ($j >= 0 && strcmp($array[$j], $key) > 0) {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }
        $array[$j + 1] = $key;
    }
    
    return $array;
}

$names = array("Juan", "Maria", "Pedro", "Ana", "Luis");

echo "Lista antes de ordenar: " . implode(", ", $names) . "\n";
echo "<br>";

$sortedNames = insertionSort($names);

echo "Lista después de ordenar: " . implode(", ", $sortedNames) . "\n";

?>
