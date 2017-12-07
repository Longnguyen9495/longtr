<?php
    session_start();
    $_SESSION['infomation'] = array();
    $_SESSION['infomation'][] = [
        'id' => '1',
        'name' => 'phú',
        'year' => 22
    ];
    $_SESSION['infomation'][] = [
        'id' => '2',
        'name' => "long",
        'year'  => 22
    ];
    $_SESSION['infomation'][] = [
        'id' => '3',
        'name' => "vân anh",
        'year'  => 24
    ];
    $_SESSION['infomation'][] = [
        'id' => '4',
        'name' => "chiến",
        'year'  => 34
    ];
    echo '<br>';
    // Kiểm tra quy có trong infomation hay không ?
    if (in_array(array("id"=>"5","name"=>"quy","year"=>25),$_SESSION['infomation']))
    {
        echo "oke";
    }else
    {
        // thêm quy vào mảng nếu chưa có
        array_push($_SESSION['infomation'],array("id"=> 5, "name"=>"quy","year"=>25));
    }

    // Tính tổng số người trong infomation
    var_dump(count($_SESSION['infomation']));