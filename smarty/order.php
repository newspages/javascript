<?php
    $orders = array(
        array(
            'orderid' => '1001',
            'username' => '张飞',
            'goodsname' => '猪肉',
            'price' => '10',
            'img_url' => 'http://www.javascript.org/smarty/static/image/img1.png'
        ),
        array(
            'orderid' => '1002',
            'username' => '姜赢',
            'goodsname' => '牛肉',
            'price' => '40',
            'img_url' => 'http://www.javascript.org/smarty/static/image/img1.png'
        ),
        array(
            'orderid' => '1003',
            'username' => '老赵',
            'goodsname' => '鸡肉',
            'price' => '15',
            'img_url' => 'http://www.javascript.org/smarty/static/image/img1.png'
        ),
        array(
            'orderid' => '1004',
            'username' => '静姐',
            'goodsname' => '牛肉',
            'price' => '10',
            'img_url' => 'http://www.javascript.org/smarty/static/image/img1.png'
        ),
        array(
            'orderid' => '1005',
            'username' => '钟表',
            'goodsname' => '牛肉',
            'price' => '40',
            'img_url' => 'http://www.javascript.org/smarty/static/image/img1.png'
        ),
    );

    include './smarty.php';
    include smarty('order.html');