<?php

// Hàm để tìm số còn thiếu
function findMissingNumber($n, $arr) {
  // Tạo mảng để lưu trữ các số đã xuất hiện
  $appeared = array_fill(0, $n + 1, false);

  // Đánh dấu các số xuất hiện trong mảng
  foreach ($arr as $num) {
    $appeared[$num] = true;
  }

  // Tìm số chưa xuất hiện
  for ($i = 1; $i <= $n; $i++) {
    if (!$appeared[$i]) {
      return $i;
    }
  }

  // Không tìm thấy số còn thiếu
  return -1;
}

// Nhập số N
$n = readline("Nhập số N: ");

// Nhập mảng các số
$arr = explode(" ", readline("Nhập N-1 số: "));

// Tìm số còn thiếu
$missingNumber = findMissingNumber($n, $arr);

// In ra kết quả
if ($missingNumber == -1) {
  echo "Không tìm thấy số còn thiếu.";
} else {
  echo "Số còn thiếu là: $missingNumber";
}

?>
