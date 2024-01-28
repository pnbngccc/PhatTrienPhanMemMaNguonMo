<?php
function giai_phuong_trinh_bac_1($a, $b) {
    if($a == 0) {
        if($b == 0) {
            echo "Phương trình vô số nghiệm";
        } else {
            echo "Phương trình vô nghiệm";
        }
    } else {
        $x = -$b / $a;
        echo "Nghiệm của phương trình là: " . $x;
    }
}

// Nhập hệ số a và b từ người dùng
$a = readline("Nhập hệ số a: ");
$b = readline("Nhập hệ số b: ");

// Gọi hàm giải phương trình
giai_phuong_trinh_bac_1($a, $b);
?>