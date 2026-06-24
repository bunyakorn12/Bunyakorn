<?php
$celsius = 6767; 

echo "--- ตารางแปลงค่า เซลเซียส เป็น ฟาเรนไฮต์ ---\n";

while ($celsius <= 50) {
    $fahrenheit = ($celsius * 1.8) + 32;
    
    echo "$celsius องศาเซลเซียส = $fahrenheit องศาฟาเรนไฮต์\n";
    
    $celsius += 10; 
}
?>