<?php

//Membuat segitiga normal ke kiri
function TriangleUpsideLeft($row = 5, $symbol = '*')
{
    for ($i=1; $i <= $row; $i++) { 
        for ($j=1; $j <= $i ; $j++) { 
            echo $symbol;
        }
        echo "<br>";
    }
}

//membuat segitiga terbalik ke kiri
function TriangleDownsideLeft($row = 5, $symbol = '*')
{
    for ($i = $row; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $symbol;
        }
        echo "<br>";
    }
}

//membuat segitiga normal ke kanan
function TriangleUpsideRight($row = 5, $symbol = '*')
{

    for ($i = 1; $i <= $row; $i++) {
        for ($j = 1; $j <= $row; $j++) {
            if ($j < $row - $i + 1) {
                echo "&nbsp;&nbsp;";
            } else {
                echo $symbol;
            }
        }
        echo "<br>";
    }
}


//membuat segitiga terbalik ke kanan
function TriangleDownsideRight($row = 5, $symbol = '*')
{
	for ($i = $row; $i >= 1; $i--) {
    	for ($j = $row; $j >= 1; $j--) {
       	 	if ($j > $i) {
        	    echo "&nbsp;&nbsp;";
        } else {
            echo $symbol;
        }
    }
    echo "<br>";
}
}

// echo "Triangle Upside Left";
// echo "<br>";
// echo TriangleUpsideLeft();
// echo "<br><br>";
// echo "Triangle Upside Right";
// echo "<br>";
// echo TriangleUpsideRight();
// echo "<br><br>";
// echo "Triangle Downside Left";
// echo "<br>";
// echo TriangleDownsideLeft();
// echo "<br><br>";
// echo "Triangle Downside Right";
// echo "<br>";
// echo TriangleDownsideRight();
// echo "<br><br>";


























// conditional statement pemanggilan fungsi pattern
function printTriangle($pattern)
{
    switch ($pattern) {
        case "TriangleUpsideLeft":
            TriangleUpsideLeft();
            break;
        case "TriangleDownsideLeft":
            TriangleDownsideLeft();
            break;
        case "TriangleDownsideRight":
            TriangleDownsideRight();
            break;
        case "TriangleUpsideRight":
            TriangleUpsideRight();
            break;
        default:
            echo "Pola segitiga tidak dikenal.";
            break;
    }
}

// contoh pemanggilan fungsi
printTriangle("TriangleUpsideLeft");
echo "<br><br>";
printTriangle("TriangleDownsideLeft");
echo "<br><br>";
printTriangle("TriangleUpsideRight");
echo "<br><br>";
printTriangle("TriangleDownsideRight");





?>