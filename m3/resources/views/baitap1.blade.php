<?php
// if ( $_SERVER['REQUEST_METHOD']== 'POST') {
//     $ProductDescription = $_REQUEST['ProductDescription'];
//     $ListPrice = $_REQUEST['ListPrice'];
//     $DiscountPercent = $_REQUEST['DiscountPercent'];
//     if($ListPrice != "" && $DiscountPercent != ""){
//        echo 'discount results :'.$DiscountAmount = $ListPrice * $DiscountPercent *0.1;
//        echo $ProductDescription;
// }
// else{
// echo 'nhập đầy đủ 2 số';
// }
// }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <form action="" method="post">
        @csrf
        <table class="table">
            <tr>
                <th><label for=""> Product Description :</label><br>
                    <input class="btn btn-info" type="text" name="ProductDescription" placeholder="nhập vào mô tả của sản phẩm."></th>
                <th><label for="">  List Price :</label><br>
                    <input class="btn btn-warning" type="text" name=" ListPrice" placeholder=" nhập vào giá."></th>
                <th><label for="">Discount Percent :</label><br>
                    <input class="btn btn-primary" type="text" name="DiscountPercent" placeholder=" nhập vào giá chiết khấu."></th>
            </tr>

    <input class="btn btn-danger" type="submit" value=" Calculate Discount">
</form>
    </body>
    </html>
