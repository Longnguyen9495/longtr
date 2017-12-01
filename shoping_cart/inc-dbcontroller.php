<?php
if (!isset($_SESSION))
{
    session_start();
}
include('product.php');

echo '<pre>';



class Product
{
    public $product = [
        array[
            'id' => 1,
            'name' => 'Galaxy s8',
            'img' => 'http://images.samsung.com/is/image/samsung/p5/vn/smartphones/galaxy-s8/images/gallery/galaxy-s8-plus_gallery_left_side_black_s4.png?$ORIGIN_PNG$',
            'price' => 1000,
            'manufacturer' => 'Sam sung',
            'stock' => '20'
        ],
        array[
            'id' => 2,
            'name' => 'Iphone X',
            'img' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone/x/iphone-x-select-2017?wid=189&hei=376&fmt=png-alpha&qlt=95&.v=1504378258086',
            'price' => 2000,
            'manufacturer' => 'Apple',
            'stock' => '14'
        ],
            array[
            'id' => 3,
            'name' => 'Nokia 8',
            'img' => 'https://images.contentful.com/wcfotm6rrl7u/5TrLOIBnNeeUWU68kMuaoC/9e0a5bc67301c48fbb88b64208e3f0f4/Nokia_8-hero_still_smaller_Optimised-3.png?fm=png&q=80',
            'price' => 4000,
            'manufacturer' => 'Nokia',
            'stock' => '26'
        ],
                array[
            'id' => 4,
            'name' => 'Mi mix 2',
            'img' => 'https://bachlongmobile.com/media/clnews/1508131037170332201.jpg',
            'price' => 3000,
            'manufacturer' => 'Xiaomi',
            'stock' => '12'
        ],
    ];
    public function getProduct()
    {

        $products =
            [
                'id' => $this->id,
                'name' => $this->name,
                'img' => $this->img,
                'price'=> $this->price,
                'manufacturer' => $this->manufacturer,
                'stock' => $this->id
            ];
        return $products;
    }
}
$Pd = new Product();
$Pd->getProduct();
print_r($Pd->getProduct());

class DBController
{
    /** Kiểm tra xem session có tồn tại hay không
     * @param $key
     * @return bool
     */

    public static function exits($key)
    {
        return (isset($_SESSION[$key])) ? true : false;
    }

    /**  Kiểm tra xem session có trống hay không
     * @param $key
     * @return bool|null
     */
    public static function null($key)
    {
        return ($_SESSION[$key] != null) ? null : false;
    }

    /** Gán mảng có key với giá trị value
     * @param $key
     * @param $value
     * @return mixed
     */

    public static function put($key, $value)
    {
        return $_SESSION[$key] = $value;
    }

    /** lấy giá trị của mảng
     * @param $key
     * @return null
     */
    public static function get($key)
    {
        return self::exits($key) ? $_SESSION[$key] : null;
    }

    /** Xóa giá trị của mảng
     * @param $key
     * @return int|void
     */

//    public static function delete($key)
//    {
//        return self::exits($key) <= 0 ? session_unset($_SESSION[$key]) : $_SESSION[$key] -= 1;
//    }
}

class Cart extends Product
{

    public $newProduct = array();

    // Thêm giá trị vào mảng
    public function insertCart()
    {

        $idProduct = $_GET['id'];
        $newProduct = array();
        // them vao mang

//        foreach ($product as $key => $value) {
//            $newProduct[$value['id']] = $value;
//        }

        // Kiem tra xem trong mang do da co gio hang chua hoac gio hang do trong
        if (!isset($_SESSION['giohang']) || $_SESSION['giohang'] == null) {
            $newProduct[$idProduct]['qty'] = 1;
            $_SESSION['giohang'][$idProduct] = $newProduct[$idProduct];
        } else {
            // da ton tai gio hang va san pham do da co thi tang len 1
            if (array_key_exists($idProduct, $_SESSION['giohang'])) {
                $_SESSION['giohang'][$idProduct]['qty'] += 1;
            } else {
                $newProduct[$idProduct]['qty'] = 1;
                $_SESSION['giohang'][$idProduct] = $newProduct[$idProduct];
            }
        }
        header("location: index.php");
    }

    // Xóa Giá trị của mảng
    public function deleteCart()
    {
        $id = $_GET['id'];
        // kiem tra xem o so luong trong gio hang co gia tri am khong.
        if ($_SESSION['giohang'][$id]['qty'] <= 0) {
            unset($_SESSION['giohang'][$id]);
        } else {
            $_SESSION['giohang'][$id]['qty'] -= 1;

        }
        header("location:interface.php");
    }

    // Cập nhập giá trị của mảng
    public function updateCart()
    {
        /** cập nhập giá trị của mảng xem có tồn tại hay không
         *
         */
        if (isset($_POST['btnUpdate'])) {
            foreach ($_POST['qty'] as $key => $value) {
                if ($_POST['qty'] < 0) {
                    unset($_SESSION['giohang'][$key]);
                } else {
                    // cap nhat gia tri cua so luong trong gio hang
                    $_SESSION['giohang'][$key]['qty'] = $value;
                }
            }
            header("location:index.php");
        }
    }

    // Đếm số lượng giá trị của mảng
    public static function totalCart()
    {
        $total = 0;
        /** kiem tra xem ton tai gio hang khong va khac trong không
         *
         */
        if (isset($_SESSION['giohang']) && $_SESSION['giohang'] != null) {
            foreach ($_SESSION['giohang'] as $val) {
                $total += $val['qty'];
            }
        }
    }
}

?>