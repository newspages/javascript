<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单信息</title>
    <style type="text/css">
        table,tr,th,td{
            border:solid 1px;
            border-spacing: 0px;
            text-align: left;
        }
        th,td{
            width:150px;
            height: 100px;
        }
        img{
            width: 150px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>订单编号</th>
                <th>用户名称</th>
                <th>商品名称</th>
                <th>商品价格</th>
                <th>商品图片</th>
            </tr>
            <?php if(is_array($orders)) { foreach($orders as $key => $value) { ?>
            <tr>
                <td><?php echo $value['orderid'] ; ?></td>
                <td><?php echo $value['username'] ; ?></td>
                <td><?php echo $value['goodsname'] ; ?></td>
                <td><?php echo $value['price'] ; ?></td>
                <td><img src="<?php echo $value['img_url'] ; ?>"/></td>
            </tr>
            <?php } } ?>
        </table>
    </div>
</body>
</html>