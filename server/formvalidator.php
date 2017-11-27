<?php
    $input = $_GET;
    $arr = array('admin','root','admin@163.com','root@163.com');

    if(in_array($input['username'],$arr)){
        echo '用户名已存在！';
    }else{
        echo "恭喜用户名可用";
    }

    /*
     * http://camelsky.oss-cn-shenzhen.aliyuncs.com/httprequest.js
     */
