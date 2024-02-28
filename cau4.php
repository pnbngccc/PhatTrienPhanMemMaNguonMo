<?php
function tim_gia_tri_lon_nhat($a, $b, $c) {
    $max = $a; // Giả sử a là giá trị lớn nhất ban đầu
    
    if ($b > $max) {
        $max = $b; // Nếu b lớn hơn giá trị lớn nhất hiện tại, gán b là giá trị lớn nhất
    }
    
    if ($c > $max) {
        $max = $c; // Nếu c lớn hơn giá trị lớn nhất hiện tại, gán c là giá trị lớn nhất
    }
    
    return $max;
}

// Nhập 3 số nguyên từ người dùng
$a = readline("Nhập số nguyên a: ");
$b = readline("Nhập số nguyên b: ");
$c = readline("Nhập số nguyên c: ");

// Gọi hàm tìm giá trị lớn nhất
$max_value = tim_gia_tri_lon_nhat($a, $b, $c);

// In ra giá trị lớn nhất
echo "Giá trị lớn nhất là: " . $max_value;
?>