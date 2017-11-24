<?php
    echo "<h3>Class - Object</h3>";
    /** Nói đơn giản class là một bản thiết kế chi tiết với các thuộc tính, phương thức tính toán, ... để tạo ra một bản thiết kế hoàn chỉnh có tên là Object
     * Cấu trúc của class
     * Class "tên class"
     {
        các phương thức tính toán , các giá trị thuộc tính...
     }
     $new = new "tên class"()
     */

    echo "<h3>Example 1</h3>";
    # Example 1
    class Myclass
    {
        // khai báo thuộc tính
        public $name = 'long';
        // khai báo phương thức tính toán
        public function setname($set_name)
        {
            $set_name = $this->name;
        }
        public function getname()
        {
            return $this->name;
        }
    }
    $info = new Myclass();
    echo $info->getname();

    echo "<h3>Visibility</h3>";
    /** khai báo các từ khóa vào class
     * @param public|protected|private
     * @return public|protected|private
     */
    class MyTeam {
        public $name1 = 'Long';
        protected $name2 = 'Chiến';
        private $name3 = 'Hưng';

        function printHello() {
            echo $this->name1 . '<br>';
            echo $this->name2 . '<br>';
            echo $this->name3 . '<br>';
        }
    }
    $info1 = new MyTeam();
    echo $info1->name1.'<br>'; // in ra public $name1
//    echo $info1->name2.'<br>'; // Erro
//    echo $info1->name3.'<br>'; // Erro
    echo $info1->printHello(); // in ra function 'PrintHello'

?>
