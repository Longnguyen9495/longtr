<?php
    echo "<h3>__sleep & __wakeup</h3>";

    /**
     * -Phương thức __sleep() sẽ được gọi khi chúng ta thực hiện serialize() đối tượng.

     * - Thông thường khi chúng ta serialize() một đối tượng thì nó sẽ trả về tất cả các thuộc tính trong đối tượng đó. Nhưng nếu sử dụng __sleep() thì chúng ta có thể quy định được các thuộc tính có thể trả về.

     * - Chú ý: phương thức __sleep() luôn trả về giá trị là một mảng.

     */

    /** Cú pháp
        public function __sleep()
            {
                return ['property1', 'property2',..., 'propertyn'];
            }
     */

    echo "<h3>Example 1</h3>";


    # example 1

    class Sleep
    {
        private $name = 'Nguyễn Thành long';
        private $yeah = '09/04/1995';
        public function __sleep()
        {
            return array('name');
        }
    }

    echo serialize(new Sleep());

    echo "<h3>Example 2</h3>";

    # Example 2