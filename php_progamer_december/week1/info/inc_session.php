<?php
    session_start();
    class Session
    {
        /** Kiểm tra mảng có tồn tại hay không ?
         * @param array
         * @return boolean
         */
        public function exits($key)
        {
            return (isset($_SESSION[$key])) ? true : false;
        }

        public function pull()
        {
            return
        }


        /** Xóa phần tử
         */
        public function delete()
        {

        }

        /** Thay đổi giá trị trong mảng
         * @param value
         * @return value
         */
        public function edit()
        {

        }


    }