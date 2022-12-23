<?php
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$HPassword = "";
$database = "customer2";
$conn = new mysqli($servername, $username, $HPassword,$database);

$sql_update = "SELECT * FROM game where ID = $id ";
$query_update  = mysqli_query($conn,$sql_update);
$row_update = mysqli_fetch_assoc($query_update);


if (isset($_POST['submit'])) {
    $Name = $_POST['Game_name'];


    if ($_FILES['Image']['name'] == ''){
        $img = $row_update['Game_name'];

    }else {
        $img = $row_update['Game_name'];
        // $img = $_FILES['Image']['name'];
        // $img_tmp =  $_FILES['Image']['tmp_name'];
        // move_uploaded_file($img_tmp, 'images/'.$img);
    }
    



    $price = $_POST['Price'];

    $sql = " UPDATE game SET Game_name = '$Name' , Image = '$img',  price = '$price' WHERE ID = $id";
    $query = mysqli_query($conn,$sql);
    
    header('location: danhsach.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/them.css">
</head>
<body>
    <table>
        <div class="input">
            <div class="content">
                <tr >
                    <td colspan = "2">
                        <div>
                            <h2>Sửa thông tin Game</h2>
                        </div>
                    </td>
                </tr>  
            <form action="" method="POST" enctype="multipart/form-data">
                <tr>
                    <div class="form_group">
                        <td><label for=""> Tên Game: </label></td>
                        <td><input type="text" name="Game_name" class="form_control"  required value="<?php echo $row_update['Game_name']?>"></td>
                    </div> 
                </tr>

                <tr>
                    <div class="form_group">
                        <td><label for=""> Ảnh Game: </label></td>
                        <td><input type="file" name="Image" class="form_control" required></td>
                    </div> 
                </tr>
                <tr>
                    <div class="form_group">
                        <td><label for=""> Giá Game: </label></td>
                        <td><input type="number" name="Price" class="form_control" required value="<?php echo $row_update['price']?>"></td>
                    </div> 
                </tr>
                <tr align="left" >
                    <td colspan="2" > 
                        <button name="submit" class="btn" type="submit"> Sửa </button>
                    </td>
                </tr>
            </div>
            </form>
        </div>
    </table>
    
    
</body>
</html>