<?php
// Nhập số giây từ người dùng
$so_giay = 50000;

// Tính toán số giờ, phút, giây
$so_gio = floor($so_giay / 3600);
$so_phut = floor(($so_giay - $so_gio * 3600) / 60);
$so_giay_con_lai = $so_giay - $so_gio * 3600 - $so_phut * 60;

// Hiển thị kết quả
echo "Thời gian tương đương: " . $so_gio . " giờ " . $so_phut . " phút " . $so_giay_con_lai . " giây";
?>
