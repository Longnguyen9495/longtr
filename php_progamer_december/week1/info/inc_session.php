<?php
session_start();

class Session
{
    /**
     * kiểm tra 1 key trong Session có tồn tại hay không
     * @param string $key
     * @return boolean
     */
    public static function exits($key)
    {
        return isset($_SESSION[$key]) ? true : false;
    }

    /**
     * Gán session có thuộc tính là $key chứa giá trị là $value
     * @param string $key
     * @param string|array $value
     * @return string|array
     */
    public static function put($key, $value)
    {
        return $_SESSION[$key] = $value;
    }

    /**
     * Lấy giá trị trong session ứng với $key truyền vào
     * @param string $key
     * @return string|array|null
     */

    public static function get($key)
    {
        return self::exits($key) ? $_SESSION[$key] : null;
    }

    /**
     * Xóa một giá trị ứng với $key truyền vào
     * @param string $key
     * @return void
     */
    public static function delete($key)
    {
        return self::exits($key) ? session_unset($_SESSION[$key]) : null;
    }

    /**
     * Thiết lập một session ứng với tên là $key và có value = $value (Nêu refesh là mất)
     * @param string $key
     * @param string|array $value
     * @return void
     */
    public static function flash($key, $value)
    {
        if (self::exits($key)) {
            self::delete($key);
        } else {
            self::put($key, $value);
        }
    }

    /** Sửa đôỉ giá trị trong mảng
     * @param string|array
     * @return string|array
     */
    public function editArray()
    {

    }

    /** Tìm kiếm có trong danh sách hay không ?
     * @param string|array
     * @return boolean
     */
    public function searchkey()
    {
        if (isset($_GET['action']))
        {
            $keyword = $_GET['search'];
            foreach ($_SESSION['start'] as $key => $value)
            {
                if (strcmp($keyword,$value['email']))
                {
                    echo "Không tìm thấy tên tìm kiếm";
                    ?>
                    <?php
                }else {
                    ?>
                    <body>
                    <table class="table col-sm-12 table-bordered" style="margin: 0 auto;">
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['password'] ?></td>
                        </tr>
                        </tbody>
                    </table>
                    </body>
                    <?php
                }
            }
        }
    }
}