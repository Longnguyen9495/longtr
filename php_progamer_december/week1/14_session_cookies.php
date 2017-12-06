<?php
    echo "<h3>PHP Session Vs Cookies</h3>";

    # Session
    // Session được hiểu là khoảng thời gian người sử dụng giao tiếp với 1 ứng dụng. Một session được bắt đầu khi người sử dụng truy cập vào ứng dụng lần đầu tiên, và kết thúc khi người sử dụng thoát khỏi ứng dụng. Mỗi session sẽ có được cấp một định danh (ID) khác nhau và nội dung được lưu trong thư mục thiết lập trong file php.ini (tham số session.save_path).

    echo 'Thiết lập session';

    /** Thiết lập session:

     * Để thiết lập 1 session ta sử dụng cú pháp: session_start()
     * Đoạn code này phải được nằm trên các kịch bản HTML. Hoặc những lệnh echo, printf.
    Để thiết lập 1 giá trị session, ngoài việc cho phép bắt đầu thực thi session. Chúng ta còn phải đăng ký 1 giá trị session. Để tiện cho việc gán giá trị cho session đó.
     * Ta có cú pháp sau: session_register("Name")

     */


    echo 'Example1 1'.'<br>';

        /**
            <?php
                session_start();
                session_register("username");
            ?>
         */

    echo '<br>';

    echo 'Sử dụng giá trị của session:';

    /** Giống với cookie. Để sử dụng giá trị của session ta sử dụng mã lệnh sau:

        Cú pháp: $_SESSION["name"]
        $_SESSION["name"]
        Với Name là tên mà chúng ta sử dụng hàm session_register("name") để khai báo.

     */

    # Tạo trang session.php với nội dung sau:

    /**
        <?php
            session_start();
            session_register("name");
            $_SESSION["name"] = "Kenny Huy";
        ?>
     *
        <html>
        <head>
            <title>Test page 1</title></head>
        <body>
            <b><a href="session2.php">Click here</a></b>
        </body>
        </html>
     */

    # Tạo trang session.php với nội dung sau:

    /**
        <?php
            session_start();
        ?>
        <html>
        <head>
            <title>Result Page</title></head>
        <body>
        <?php
            echo "Ten cua ban la <b>".$_SESSION["name"]."</b>";
        ?>
        </body>
        </html>
     */

    echo '<br>';

    echo "hủy bỏ session";

    /**
        Để hủy bỏ giá trị của session ta có những cách sau:

        session_destroy() // Cho phép hủy bỏ toàn bộ giá trị của session
        session_unset()// Cho phép hủy bỏ session .
     */


    echo '<br>';

    echo "<h3>Cookie</h3>";

    // Cookie là 1 đoạn dữ liệu được ghi vào đĩa cứng hoặc bộ nhớ của máy người sử dụng. Nó được trình duyệt gởi ngược lên lại server mỗi khi browser tải 1 trang web từ server.

    //Những thông tin được lưu trữ trong cookie hoàn toàn phụ thuộc vào website trên server. Mỗi website có thể lưu trữ những thông tin khác nhau trong cookie, ví dụ thời điểm lần cuối ta ghé thăm website, đánh dấu ta đã login hay chưa, v.v...

    // Cookie được tạo ra bởi website và gởi tới browser, do vậy 2 website khác nhau (cho dù cùng host trên 1 server) sẽ có 2 cookie khác nhau gởi tới browser. Ngoài ra, mỗi browser quản lý và lưu trữ cookie theo cách riêng của mình, cho nên 2 browser cùng truy cập vào 1 website sẽ nhận được 2 cookie khác nhau.


    echo "Thiết lập cookie:";

    // Để thiết lập cookie ta sử dụng cú pháp:

    /**
        setcookie("tên cookie","giá trị", thời gian sống);
        Tên cookie là tên mà chúng ta đặt cho phiên làm việc.
        Giá trị là thông số của tên cookie.
        Ví dụ:

        setcookie("username","admin", time() +3600);

        Như ví dụ trên ta thấy với tên là username và giá trị là admin, có thời gian sống là 1 giờ tính từ thời điểm thiết lập.
        Chú ý: Kịch bản cookie phải đặt trên mọi giá trị trả về bao gồm thẻ HTML và lệnh echo.
        Kịch bản cookie phải đặt trên mọi giá trị trả về bao gồm thẻ HTML và lệnh echo.
     */

    echo "Sử dụng cookie";

    /**
        Để sử dụng lại cookie vừa thiết lập, chúng ta sử dụng cú pháp:
        Cú pháp: $_COOKIE["tên cookies"]
        Tên cookie là tên mà chúng ta thiết lập phía trên.
     */

    /** TẠO TRANG COOKIE :
        <?php
            setcookie("name","Kenny Huy",time() + 3600);
        ?>
        <html>
        <head>
            <title>Test page 1</title></head>
        <body>
            <b><a href="cookie2.php">Click here</a></b>
        </body>
        </html>
     */

    /** TẠO TRANG COOKIE2.PHP
        <html>
        <head>
            <title>Result Page</title>
        </head>
        <body>
            <?php
                echo "Ten cua ban la <b>".$_COOKIE['name']."</b>";
            ?>
        </body>
        </html>
     */

    echo "Hủy cookie";

    /**
        Để hủy 1 cookie đã được tạo ta có thể dùng 1 trong 2 cách sau:

        + Cú pháp: setcookie("Tên cookie")
        Gọi hàm setcookie với chỉ duy nhất tên cookie mà thôi
        + Dùng thời gian hết hạn cookie là thời điểm trong quá khứ.
        Ví dụ: setcookie("name","Kenny Huy",time()-3600);
     */


    /** Ví dụ về việc hủy cookie
        <?php
            setcookie("name","Kenny Huy",time()-360);
        ?>
        <html>
        <head>
            <title>Test page 1</title></head>
        <body>
            <b><a href="cookie2.php">Click here</a></b>
        </body>
        </html>
     *
     */