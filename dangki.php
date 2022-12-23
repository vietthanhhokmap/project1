<?php   
    $servername = "localhost";
    $username = "root";
    $HPassword = "";
    $database = "customer2";
    $conn = new mysqli($servername, $username, $HPassword,$database);
    // if ($conn->connect_error) {
    //     echo "Connection failed: " . $conn->connect_error;
    //     exit();
    //   }
    //   echo "Connected successfully";
    // Create connection
    



    $err = [];
    session_start(); 
    if (isset($_POST['submit'])) {
        $name = $_POST['Name'];
        // $email = $_POST['Email'];
        $password = $_POST['Password'];
        $RPassword = $_POST['RPassword'];

        
        if (empty($name)) {
            $err['Name'] = "Bạn chưa nhập tên";
        }
        if (empty($password)) {
            $err['Password'] = "Bạn chưa nhập mật khẩu";
        }
        if (($password != $RPassword)) {
            $err['RPassword'] = "mật khẩu lần 2 chưa đúng";
        }
        // var_dump($err);

        // die();
        if (empty($err)) {

            
            $pass = md5($password);
            $sql = "INSERT INTO information(Name,Password) VALUES('$name','$pass')";
            $query = mysqli_query($conn, $sql);

            if ($query) {
                header('location: login.php');
            }
        }

        

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dangki.css">
    <style>
        .has-error {
            color: red;
        }
    </style>
    
</head>
<body>


<div class="container">
        <header>
            <a href="index.php" class="logo">
                <div class="logo">
                <i class="fas fa-gamepad"></i>
                <p>The Game Zone</p>
            </div>
            </a>
            
            <ul class="navbar">
                <li><a href="#" class="active">XBOX</a></li>
                <li><a href="#">PC</a></li>
                <li><a href="#">ARCADE</a></li>
                <li><a href="#">PES 4</a></li>
                <li><a href="#">NINTEDO</a></li>
                <li><a href="#">NBA MATCH</a></li>
            </ul>
            <a href=""></a>
        </header>

       <div class="container">
            <div class="row">
                
                    <div class="col-md-6">
                        <form action="dangki.php" method="post" role="form">
                            <table>
                                <tr>
                                    <td><h2 class="text h2-text" >Đăng Kí Tài Khoản</h2></td> 
                                </tr>
                                
                                <tr>
                                    <div class="form-group">
                                        <td><label class="text" for="">Tài Khoản</label></td>
                                        <td><input type="text" class="form-control" name="Name"></td>
                                        <td>
                                            <div class="has-error">
                                                <span><?php echo (isset($err['Name']))?$err['Name']:'' ?></span>
                                            </div>
                                        </td>
                                    </div>

                                    
                                </tr>

                                
                                <!-- <tr>
                                    <div class="form-group">
                                        <td><label class="text" for="">Email</label></td>
                                        <td><input type="email" class="form-control" name="Email"></td> 
                                    </div>
                                </tr> -->
                               
                                <tr>
                                   <div class="form-group">
                                        <td><label class="text" for="">Mật Khẩu</label></td>
                                        <td><input type="password" class="form-control" name="Password"></td>   
                                        <td>
                                            <div class="has-error">
                                                <span><?php echo (isset($err['password']))?$err['password']:'' ?></span>
                                            </div>
                                        </td>
                                    </div> 
                                </tr>
                                
                                <tr>
                                    <div class="form-group">
                                        <td><label class="text" for="">Nhập lại mật khẩu</label></td>
                                        <td><input type="password" class="form-control" name="RPassword"></td>
                                        <td>
                                            <div class="has-error">
                                                <span><?php echo (isset($err['RPassword']))?$err['RPassword']:'' ?></span>
                                            </div>
                                        </td>
                                    </div>
                                        
                                </tr>
                                
                                <tr >
                                    <td><button type="submit" class="btn btn-primary" name="submit">Đăng Kí</button></td>
                                </tr>
                                
                            </table>
                        </form>
                    </div>
                
            </div>
       </div>
              
</div>
    
</body>
</html>