<?php
    echo "<h3>Traits Class</h3>";
    echo '<pre>';
    // là một nhóm methods mà bạn muốn include nó vào trong một lớp khác. giống như abstract ( nó chỉ được kế thừa, không được kế thừa )
    /** cấu trúc chung của một Traits
        trait MyTrait {
        ...
        }
     */
    echo "<h3>Example 1: ví dụ cho Traits class</h3>";

    # Example 1

    /** Ví dụ cụ thể của traits class.
     * @param Trait ezcReflectionReturnInfo
     */

    trait ezcReflectionReturnInfo {
        function getReturnType() { /*1*/ }
        function getReturnDescription() { /*2*/ }
    }

    class ezcReflectionMethod extends ReflectionMethod {
        use ezcReflectionReturnInfo;
        /* ... */
    }

    class ezcReflectionFunction extends ReflectionFunction {
        use ezcReflectionReturnInfo;
        /* ... */
    }

    echo "<h3>Example 2: Traits class với extends</h3>";

    # Example 2
    class Base {
        public function sayHello() {
            echo 'Hello ';
        }
    }

    trait SayWorld {
        public function sayHello() {
            parent::sayHello();
            echo 'World!';
        }
    }

    class MyHelloWorld extends Base {
        use SayWorld;
    }

    $o = new MyHelloWorld();
    $o->sayHello();

    echo '<br>';

    echo "<h3>Example 3: ví dụ cho Traits class</h3>";

    # Example 3

    /**
     * @param Trait Sharable
     */
    trait Sharable {

        public function share($item)
        {
            return 'share this item';
        }
    }

    echo '<br>';

    // bạn có thể include trait trên cho các class khác bằng việc sử dụng từ khóa "use"

    echo "<h3>Example 3: Include trait cho các class khác</h3>";

    class Post {
        use Sharable;
    }

    class Comment {
        use Sharable;
    }

    echo '<br>';

    // Bây giờ, nếu bạn tạo một đối tượng từ một trong hai class ở trên, bạn sẽ thấy được chúng đều có một method share() có sẵn.

    echo "<h3>Example 3: Tạo một đối tượng trong hai class ở trên</h3>";

    $post = new Post;
    echo $post->share(''); // 'share this item'

    $comment = new Comment;
    echo $comment->share(''); // 'share this item'\

    echo '<br>';

?>