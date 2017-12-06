<?php
    echo "<h3> Session Configuration</h3>";

    // Cấu hình chỉ thị seesion của php

    # session.save_handler

    /**
     * Đặt các bộ xử lý có thể để lưu trữ và truy xuất dữ liệu phiên. Đó là,
        session.save_handler = tệp | mm | sqlite | người dùng

     * Các tệp tùy chọn mặc định để xử lý dữ liệu phiên. mm làm cho bộ nhớ RAM xử lý dữ liệu phiên. Với tùy chọn SQLite , cơ sở dữ liệu SQLite được sử dụng. Sau đó với tùy chọn người dùng , chúng ta có thể có các chức năng tùy chỉnh để quản lý phiên.
     */

    # session.save_path

    /**
     * Nếu session.save_handler được đặt ở trên là tập tin , sau đó chúng ta cần phải thiết lập đường dẫn của thư mục nơi chúng ta muốn có các tập tin dữ liệu phiên. session.save_path Chỉ thị được sử dụng để thiết lập đường dẫn.
     * Chúng tôi cũng có thể tạo các thư mục con để cho mô-đun lưu trữ tệp lưu các tệp phiên. Và sau đó, chúng ta nên tham khảo đường dẫn thư mục này bằng cách xác định độ sâu của nó. Ví dụ,
        session.save_path = "N; / path"
        trong đó N là một Integer đại diện cho chiều sâu của thư mục con.
     * PHP tạo tập tin phiên ở vị trí trên với tên như session_id hiện tại với tiền tố sess_ .
     * Chúng ta có thể thiết lập chế độ file phiên làm việc bằng cách sử dụng,
    session.save_path = "N; MODE; / path"
    nơi MODE là một giá trị Octal. Chế độ mặc định là 600 (cho phép chủ sở hữu đọc và viết).
     */

    # session.use_cookies

    /**
        Chỉ thị này có 1 hoặc 0 làm giá trị của nó để xác định liệu cookie có được sử dụng để lưu trữ phiên id hay không.

        session.use_cookies = 0 | 1

        Nếu 1 thì cookie sẽ được sử dụng để lưu trữ id phiên. Nếu không, id phiên được bảo toàn bằng cách sử dụng URL viết lại.
     */


    # session.cookie_secure

    /**
     * Nó kiểm soát xem cookie có được gửi qua kết nối an toàn hay không. Nó sẽ được thiết lập với ON | OFF giá trị. Mặc định là OFF.
     */

    # session.use_only_cookies

    /**
     * Bằng cách đặt các chỉ thị này các tập tin cookie được sử dụng làm bộ đệm bắt buộc để bảo vệ id phiên. Nó ngăn cản việc chiếm quyền kiểm soát phiên.
     */

    # session.name

    /**
     * Để chỉ định tên của phiên. PHPSESSID là tên mặc định.
        session.name = PHPSESSID
     */

    # session.auto_start

    /**
     * Chúng ta cần phải bắt đầu phiên làm việc trước khi sử dụng chức năng session PHP. Chỉ thị này được sử dụng để bắt đầu phiên tự động trên mỗi trang yêu cầu. Vì vậy, chúng ta cần thiết lập session.auto_start là 1.

        session.auto_start = 0 | 1
     * Nếu session.auto_start là 1, quản lý các đối tượng vào session cần cấu hình thêm. Đó là, chỉ thị auto_prepend_file được sử dụng để tham chiếu lớp tương ứng.
     */

    # session.cookie_lifetime

    /**
     * Điều này được sử dụng để thiết lập tuổi thọ cookie. Nếu nó được đặt là 0, thì cookie vẫn còn cho đến khi trình duyệt khởi động lại.
     */

    # session.cookie_path

    /**
     * Để xác định đường dẫn nơi cookie sẽ hợp lệ.
     */

    # session.cookie_domain

    /**
     * Tương tự, để chỉ định tên miền mà cookie sẽ hợp lệ.
     */


    # session.cookie_httponly

    /**
     * Chỉ thị này là trên sau đó nó sẽ ngừng các kịch bản phía khách hàng để truy cập vào phiên id bảo quản trong cookie.
     */

    # session.gc_probability, session.gc_divisor

    /**
     * Các giá trị của các chỉ thị này được sử dụng để tính toán xác suất chạy bộ sưu tập rác để xóa dữ liệu phiên.
     */

    # session.gc_maxlifetime

    /**
     * Nó có tuổi thọ tối đa của id phiên trong vài giây. Nếu id phiên đạt đến giới hạn này, PHP sẽ coi nó là rác thải và xóa nó.
     */

    # session.cache_limiter

    /**
     * Chỉ thị này kiểm soát tiêu đề bộ nhớ cache được gửi đến khách hàng và proxy. Các giá trị có thể là,

        + none - ngừng gửi tiêu đề bộ nhớ cache tới máy khách.
        + nocache - tùy chọn mặc định; dừng client hoặc proxy để cache nội dung trang.
        + riêng tư - cho phép khách hàng duy nhất lưu trữ nội dung trang cache.
        + private_no_expire - Không có thời gian hết hạn được đặt với tiêu đề bộ nhớ cache.
        + công cộng - cho phép cả bộ nhớ đệm khách và bộ nhớ đệm proxy.
     */

    # session.cache_expire

    /**
        Nó chỉ định thời gian hết hạn của bộ nhớ cache cho các trang được kích hoạt phiên trong vài giây.
        session.cache_expire = 120
        Chỉ thị này không cần thiết nếu session.cache_limiter = nocache.
     */

    # session.use_trans_sid

    /**
     * Chỉ thị này được sử dụng để bảo vệ id phiên bằng cách viết lại URL. Khi URL được chia sẻ giữa nhiều người dùng, việc duy trì id phiên trong URL là có rủi ro. Nó gây ra nhiều truy cập với cùng một session_id cùng một lúc.
     */

    # session.hash_function

    /**
     * Chỉ thị này được sử dụng để chọn hàm băm để tạo ra id phiên. 0 và 1 thể hiện các thuật toán MD5 và SHA tương ứng.
     */
