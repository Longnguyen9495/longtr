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

    echo "<h3>Example 2</h3>";

    class Foo
    {
        public function __invoke()
        {
            return 'Called correctly';
        }
    }

    class Boo
    {
        public function __construct()
        {
            $this->Foo = new Foo();
        }
    }

    $Foo = new Foo();
    echo $Foo();

    echo "<br><br><hr><br><br>";

    $Boo = new Boo();
    echo $Boo->Foo();

    echo "<h3>Example 3</h3>";

    class User {

        protected $name;
        protected $timeline = array();

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function addTweet(Tweet $tweet)
        {
            $this->timeline[] = $tweet;
        }

    }

    class Tweet {

        protected $id;
        protected $text;
        protected $read;

        public function __construct($id, $text)
        {
            $this->id = $id;
            $this->text = $text;
            $this->read = false;
        }

        public function __invoke($user)
        {
            $user->addTweet($this);
            return $user;
        }

    }

    $users = array(new User('Ev'), new User('Jack'), new User('Biz'));
    $tweet = new Tweet(123, 'Hello world');
    $users = array_map($tweet, $users);

    var_dump($users);