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
}