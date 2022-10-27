{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch ngôn ngữ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">
    @csrf
    <table class="table">
        <tr>
            <th> Nhập từ tiếng Anh bạn muốn dịch :<br>
                <input class="btn btn-warning" type="text" name="tienganh" placeholder=" Nhập từ bạn muốn dịch"></th>
            <th> Nhập từ tiếng Việt bạn muốn dịch :<br>
                <input class="btn btn-warning" type="text" name="tiengviet" placeholder=" Nhập từ bạn muốn dịch"></th>
        </tr>
            <th><input class="btn btn-danger" type="submit" value="Translate"></th>
</form>
</body>
</html> --}}





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch ngôn ngữ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">
    @csrf
    <table class="table">
        <tr>
            <th> Nhập từ bạn muốn dịch :<br>
                <input type="text" name="candich" placeholder=" Nhập từ bạn muốn dịch"></th>
               <select name="theloai">
                    <option class="btn btn-warning" type="text" value="tienganh">Dịch từ tiếng Anh sang Tiếng Việt</option>
                    <option class="btn btn-warning" type="text" value="tiengviet">Dịch từ Tiếng việt sang Tiếng Anh</option>
                </select>
        </tr>
        <th><input class="btn btn-danger" type="submit" value="Translate"></th>
    </table>
</form>
</body>
</html>
