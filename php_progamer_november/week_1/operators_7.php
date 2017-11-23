<?php
        /**
         * Thực hiện các phép toán tử trong php
         * @param integer $x & $y
         * @return integer
         */
        $x = 20;
        $y = 10;
        // Toán tử số học
            // Cộng, trừ, nhân, chia, chả về số dư
            $z = $x + $y;
            echo $z.'<br/>';

            $z = $x - $y;
            echo $z.'<br/>';

            $z = $x * $y;
            echo $z.'<br/>';

            $z = $x / $y;
            echo $z.'<br/>';

            $z = $x % 3;
            echo $z.'<br/>';
        // Toán tử so sánh
            $x == 5; // bằng nhau
            $x != 5; // không bằng nhau
            $x === 5; // bằng nhau và trả về cùng kiểu
            $x > 5; // vế trái lớn lơn vế phải
            $x >= 5; // vế trái lớn lơn hoặc bằng vế phải
            $x < 5; // vế trái nhỏ hơn vế phải
            $x <= 5; // vế trái nhỏ lơn hoặc bằng vế phải
        // Toán tử logic
            True || false; // vế trái hoặc vế phải là true
            True or false; // vế trái hoặc vế phải là true
            True xor true; // vế trái hoặc vế phải là true, nhưng không phải cả hai
            True && false; // vế trái và vế phải là true
            True and false; // vế trái và vế phải là true
            !true; // không phải là true
        // Toán tử logic
            $x ++; // bằng với $x = $x + 1
            $x --; // bằng với $x = $x - 1
            $x += $y; // bằng với $x = $x + $y
            $x -= $y; // bằng với $x = $x - $y
            $x *= $y; // bằng với $x = $x * $y
            $x /= $y; // bằng với $x = $x / $y
