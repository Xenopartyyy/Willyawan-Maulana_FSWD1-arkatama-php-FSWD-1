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


function printPattern($pattern = 'TriangleUpsideLeft', $row = 5, $symbol = '*')
{
    switch ($pattern) {
        case 'TriangleUpsideLeft':
            TriangleUpsideLeft($row, $symbol);
            break;
        case 'TriangleDownsideLeft':
            TriangleDownsideLeft($row, $symbol);
            break;
        case 'TriangleDownsideRight':
            TriangleDownsideRight($row, $symbol);
            break;
        case 'TriangleUpsideRight':
            TriangleUpsideRight($row, $symbol);
            break;
        default:
            echo "Invalid pattern name";
            break;
    }
}


echo "Triangle Upside Left";
echo "<br>";
printPattern('TriangleUpsideLeft', 6, '$');
echo "<br><br>";
echo "Triangle Downside Left";
echo "<br>";
printPattern('TriangleDownsideLeft', 10, '@');
echo "<br><br>";
echo "Triangle Upside Right";
echo "<br>";
printPattern('TriangleUpsideRight', 9, '#');
echo "<br><br>";
echo "Triangle Downside Right";
echo "<br>";
printPattern('TriangleDownsideRight', 6, '*');





?>
