<!-- 
 looping :
 foreach
 for
 while
 do while:

-->

<?php 
    for ($i = 1; $i < 10; $i += 1) { 
        // 9
        echo "Nilai i adalah" . $i. "<br>";
    }

$a = 1;

do {
    echo "Nilai a adalah" . $a. "<br>";
    $a++;
} while ($a <= 10);

$j = 0;
while ($j <= 10) {
    echo "Nilai j adalah" . $j. "<br>";
    $j++;
}
?>