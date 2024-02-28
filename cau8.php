<?php

// Hàm để thực hiện thuật toán
function processNumber($n) {
  // Lặp lại cho đến khi N bằng 1
  while ($n != 1) {
    // Kiểm tra N là chẵn hay lẻ
    if ($n % 2 == 0) {
      // N là số chẵn, chia cho 2
      $n = $n / 2;
    } else {
      // N là số lẻ, nhân 3 và cộng 1
      $n = ($n * 3) + 1;
    }

    // In ra giá trị hiện tại của N
    echo $n . " ";
  }

  // In ra số 1
  echo "1";
}

// Nhập số N từ đầu vào
$n = 3;

// Gọi hàm để xử lý số N
processNumber($n);

?>
