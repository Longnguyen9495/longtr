<?php
    echo '<pre>';
    echo "<h3>Array Extract</h3>";
    /** Nhập các biến vào bảng biểu tượng hiện tại từ một mảng
     *  extract(array,extract_rules,prefix)
     */
    echo "<h3>Example 1</h3>";
    # Example 1
    /** Nhập chuỗi cuả $a vào mảng $my_array
     * @param string
     * @return array
     */
    $a = "Original";
    $my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

    extract($my_array, EXTR_PREFIX_SAME, "dup");

    echo "\$a = $a; \$b = $b; \$c = $c; \$dup_a = $dup_a";
    /** extract_rules có một số kiểu :
     * EXTR_OVERWRITE : Nếu có va chạm, ghi đè lên biến hiện có.
     * EXTR_SKIP : Nếu có va chạm, không ghi đè lên biến hiện có.
     * EXTR_PREFIX_SAME : Nếu có sự va chạm, đặt tên tiền tố cho tên biến prefix.
     * EXTR_PREFIX_ALL : Đặt trước tất cả các tên biến với prefix.
     * EXTR_PREFIX_INVALID : Chỉ các tiền tố tên biến không hợp lệ / số với prefix.
     * EXTR_IF_EXISTS : Chỉ ghi đè lên biến nếu nó đã tồn tại trong bảng ký hiệu hiện tại, nếu không thì không làm gì.
     * EXTR_PREFIX_IF_EXISTS : Chỉ tạo ra tên biến tiền tố nếu phiên bản không có tiền tố của cùng một biến tồn tại trong bảng ký hiệu hiện tại.
     * EXTR_REFS : Chiết xuất các biến như các tham chiếu.
     * EXTR_REFS : Chiết xuất các biến như các tham chiếu.
     */
    echo '<br>';
    echo "<h3>Example 2</h3>";
    # Example 2
    class Foo {

        public function __construct ($array) {

            extract($array, EXTR_REFS);
            foreach ($array as $key => $value) {
                $this->$key = $$key;
            }

        }

    }

    $array = array(
        'valueOne'      => 'Test Value 1',
        'valueTwo'      => 'Test Value 2',
        'valueThree'    => 'Test Value 3'
    );

    $foo = new Foo($array);
    print_r($foo);
?>