<?php
    echo "<h3>__invoke</h3>";

    // phương thức này sẽ được gọi ra khi chúng ta sử dụng đối tượng như một hàm

    /** Cú pháp
        public function __invoke(arguments)
            {
            //code
            }
     */

    # Khi không có __invoke()

    class ConNguoi
    {
        private $name = 'Nguyễn Thành long';
        private $age = 20;
    }

    $congnuoi = new ConNguoi();
    $congnuoi();
    //Kết quả: Fatal error: Function name must be a string

    # Khi sử dụng __invoke()

    class ConNguoi
    {
        private $name = 'Nguyễn Thành long';
        private $age = 20;
        public function __invoke()
        {
            echo 'Phương thức __invoke() được gọi';
        }
    }

    $congnuoi = new ConNguoi();
    $congnuoi();
    //Kết quả: Phương thức __invoke() được gọi

    # Truyền tham chiếu __invoke()

    class ConNguoi
    {
        private $name = 'Nguyễn Thành LOng';
        private $year = '09/04/1995';
        public function __invoke()
        {
            if($name === 'name')
            {
                echo $this->name;
            }
        }
    }

    $congnuoi = new ConNguoi();
    $congnuoi('name');