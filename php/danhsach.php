<?php
$servername = "localhost";
$username = "root";
$HPassword = "";
$database = "customer2";
$conn = new mysqli($servername, $username, $HPassword,$database);

$sql = " SELECT * FROM game ";
$query = mysqli_query($conn,$sql);  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/danhsach.css">
</head>
<body>
    <table width="1000px" border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr class="head">
                <td colspan = "6" ><h2>Danh Sách Game</h2></td>
 		    </tr>
            <tr class="nav">
                <th>ID</th>
                <th>Name</th>
                <th>img</th>
                <th>Price</th>
                <th>sửa</th>
                <th>xóa</th>
            </tr>
        </thead>
 		
        <tbody>
            
                <?php
                    $i = 1;
                while ($row = mysqli_fetch_assoc($query)) {?>
                    <tr class="content">
                        <td> <?php echo $i++; ?> </td>
                        <td> <?php echo $row['Game_name']; ?></td>

                        <td>
                            <img style="width:100px" src="images/<?php echo $row['Image']; ?> " alt="">
                        </td>

                        <td> <?php echo $row['price']?> $</td>
                        <td>
                            <a class="update" href="sua.php?id=<?php echo $row['ID'];?>">Sửa</a>
                        </td>
                        <td >
                            <a class="delete" onclick="return Del('<?php echo $row['Game_name']; ?>')" href="xoa.php?id=<?php echo $row['ID'];?>">Xóa</a>
                        </td>
                        
                    </tr>    
                <?php } ?>        
            
        </tbody>
        
	</table>
    <div class="button">
        <a class="btn" href="them.php ">Thêm Mới</a>
        <a class="btn" href="\PHP\my-gaming-website-master\my-gaming-website-master\index.php">Thoát</a>
    </div>
    


<script>
    function Del(name) {
        return confirm(" bạn có muốn xóa game " + name + " ?");
    }
</script>


</body>
</html>