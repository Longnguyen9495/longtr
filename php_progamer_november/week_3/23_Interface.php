<?php
    echo "<h3>Interface trong PHP</h3>";
    // Được định nghĩa để cung cấp một tên hàm chúng cho các quá trình triển khai

    /**
     * Cấu trúc chung
            interface Myclass {
                public function getName();
            }

     * Lớp khác triển khai interface đó
            class getInfor implements Myclass {
                // lớp này cần định nghĩa hàm getName()
            }
     */

     # Example

    // khai báo một giao diện INTERFACE 'iTemplate'
    interface iTemplate
    {
        public function setVariable($name, $var);
        public function getHtml($template);
    }

    // Triển khai thực thiện qua giao diện trên IMPLEMENTS
    class Template implements iTemplate
    {
        private $vars = array();

        public function setVariable($name, $var)
        {
            $this->vars[$name] = $var;
        }

        public function getHtml($template)
        {
            foreach($this->vars as $name => $value) {
                $template = str_replace('{' . $name . '}', $value, $template);
            }

            return $template;
        }
    }
    $infor = new Template();
    echo $infor->setVariable();
    echo $infor->getHtml();
?>