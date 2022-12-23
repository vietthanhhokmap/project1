<?php ob_start(); ?>
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
    <title>Gaming Website</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <a href="index.html" class="logo">
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
            <a href="login.php"><button type="button"  id="btn"><i class=""></i>Logout</button></a> 
        </header>

        <div class="content-wrapper">
            <div class="content-desc">
                <h1>THE GAME ZONE</h1>
                <p>Compete with <span>Rakuto</span> in this immense challenge and be the 
                    winner of all Time.</p>
                <p>Our Top Players are waiting for your challenge, click the 
                    button below to get started.</p>

                <button id="btn2">Challenge Rakuto Now</button>
            </div>

            <div class="rakuto"></div>
        </div>
    </div>

    <div class="logo-section">
        <i class="fas fa-gamepad"></i>
        <h1>The Game Zone</h1>
    </div>
    
    <section class="section-1">
        <div class="section-1-wrapper">  
            <h1>ACTION GAMES</h1>
            <!-- <table> -->
            <br>
                <div class="section-1-img">
                    <div class="Buy-Game">                       
                        <?php 
                        while ($row = mysqli_fetch_assoc($query)) {?>
                            <div class="listgame">
                                <div>
                                    <div>
                                        <img class="img img-1" style="width:100px" src="php/images/<?php echo $row['Image']; ?> " alt="">
                                    </div>
                                    <div class="Buy-Game-sub">
                                        <a href="bill.php">
                                            <input type="submit" class="addcart" value="Buy">
                                        </a>
                                        <p class="price"><?php echo $row['price']?> <span>$</span> </p>
                                    </div> 
                                </div>                                                                         
                            </div>  
                        <?php } ?>                        
                    </div>  
                </div>
            <!-- </table> -->
                
                <!-- <div class="Buy-Game">
                    <div class="img img-2">
                        <img class="img img-2" style="width:100px" src="images/<?php echo $row['Image']; ?> " alt="">
                    </div>
                    <div class="Buy-Game-sub">
                        <a href="login.php">
                            <input type="submit" class="addcart" value="Buy">  
                        </a>
                        <p class="price"> $ <span>100</span></p>
                    </div>                   
                </div>

               
                <div class="Buy-Game">
                    <div class="img img-3"></div>
                    <div class="Buy-Game-sub">
                        <a href="login.php">
                            <input type="submit" class="addcart" value="Buy">
                        </a>
                        <p class="price"> $ <span>100</span></p>
                    </div>                 
                </div>

                
                <div class="Buy-Game">
                    <div class="img img-4"></div>
                    <div class="Buy-Game-sub">
                        <a href="login.php">
                            <input type="submit" class="addcart" value="Buy">                        
                        </a>   
                        <p class="price"> $ <span>100</span></p>
                    </div>                            
                </div>
                
                
                <div class="Buy-Game">
                    <div class="img img-5"></div>
                    <div class="Buy-Game-sub">
                        <a href="login.php">
                            <input type="submit" class="addcart" value="Buy">                       
                        </a>  
                        <p class="price"> $ <span>100</span></p>
                    </div>                                                   
                </div>
                
                
                <div class="Buy-Game">
                    <div class="img img-6"></div>
                    <div class="Buy-Game-sub">
                        <a href="login.php">
                            <input type="submit" class="addcart" value="Buy">                       
                        </a>
                        <p class="price"> $ <span>100</span></p>  
                    </div>     
                </div>
                
                
                <div class="Buy-Game">
                    <div class="img img-2"></div>
                    <div class="Buy-Game-sub">
                        <a href="login.php">
                            <input type="submit" class="addcart" value="Buy">                       
                        </a>
                        <p class="price" > $ <span>100</span></p>
                    </div>                    
                </div>
                
                
                <div class="Buy-Game">
                    <div class="img img-3"></div>
                    <div class="Buy-Game-sub">
                        <a href="login.php">
                            <input type="submit" class="addcart" value="Buy">                      
                        </a> 
                        <p class="price" > $ <span>100</span></p>
                    </div>                                                      
                </div>
                
            </div>  -->
        
        </div>
        
        <div class="game-categories">
            <h1>GAME CATEGORIES</h1>
            <div class="game-wrapper">
                <div href="#">
                    <div class="gw gw-1"></div>
                    <div class="Buy-Game-sub">
                        <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p> 
                    </div>                    
                </div>
                <!--  -->

                <div href="#">
                    <div class="gw gw-2"></div>
                    <div class="Buy-Game-sub">
                       <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p> 
                    </div>
                </div>
                <!--  -->

                <div href="#">
                    <div class="gw gw-3"></div>
                    <div class="Buy-Game-sub">
                        <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p>
                    </div>
                </div>
                <!--  -->


                <div href="#">
                    <div class="gw gw-4"></div>
                    <div class="Buy-Game-sub">
                        <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p> 
                    </div>
                </div>
                <!--  -->

                <div href="#">
                    <div class="gw gw-5"></div>
                    <div class="Buy-Game-sub">
                        <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p>
                    </div>   
                </div>

                <!--  -->
            </div>
    
            <div class="game-wrapper left">
                <div href="#">
                    <div class="gw gw-6"></div>
                    <div class="Buy-Game-sub">
                        <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p>
                    </div>
                    
                </div>
                <div href="#">
                    <div class="gw gw-7"></div>
                    <div class="Buy-Game-sub">
                        <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p>
                    </div>
                    
                    
                </div>
                <div href="#">
                    <div class="gw gw-8"></div>
                    <div class="Buy-Game-sub">
                        <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p>
                    </div>
                    
                    
                </div>
                <div href="#">
                    <div class="gw gw-9"></div>
                    <div class="Buy-Game-sub">
                        <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p> 
                    </div>
                    
                </div>
                <div href="#">
                    <div class="gw gw-10"></div>
                    <div class="Buy-Game-sub">
                        <a href=""><input type="submit" class="addcart" value="Buy"></a>
                        <p class="price" > $ <span>100</span></p> 
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- New section is down here below -->

    <section class="section-2">
        <h1>The Grande Match</h1>
        <div class="players">
            <div class="p-image p-image-1"></div>
            <span>Hiệu</span>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <!-- Player 2 -->
        <div class="players">
            <div class="p-image p-image-2"></div>
            <span>Sơn</span>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
             <!-- Player 3 -->
        <div class="players">
            <div class="p-image p-image-3"></div>
            <span>Sơn</span>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
             <!-- Player 4 -->
        <div class="players">
            <div class="p-image p-image-4"></div>
            <span>Chin</span>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </section>
    <div class="section-3">
        
        <div class="section-3-wrapper">
            <div class="feedback"></div>
            <div class="feedback-desc">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum delectus error, 
                tempora laborum, voluptas magnam animi quo repudiandae asperiores 
                totam dolore commodi perspiciatis sapiente accusamus alias non vitae incidunt nisi!</p>
                <br>
                <i class="far fa-grin-squint-tears"></i><br>
                <h4>OSCAR</h4>
            </div>
            <!-- =========================== -->
            <div class="feedback f-img-2"></div>
            <div class="feedback-desc">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum delectus error, 
                tempora laborum, voluptas magnam animi quo repudiandae asperiores 
                totam dolore commodi perspiciatis sapiente accusamus alias non vitae incidunt nisi!</p>
                <br>
                <i class="far fa-grin-beam-sweat"></i><br>
                <h4>MARIO</h4>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-body">
            <div class="logo footer-logo">
                <i class="fas fa-gamepad"></i>
                <h1>The Game Zone</h1>
            </div>
            <ul>
                <h3>Short Links</h3>
                <li><a href="#">Arcade</a></li>
                <li><a href="#">War Zone</a></li>
                <li><a href="#">Fifa Game</a></li>
                <li><a href="#">Pes 2020</a></li>
                <li><a href="#">Xbox Game</a></li>
            </ul>

            <ul>
                <h3>Action Games</h3>
                <li><a href="#">Anpar</a></li>
                <li><a href="#">BattleField</a></li>
                <li><a href="#">The Ghost</a></li>
                <li><a href="#">Fortnite</a></li>
                <li><a href="#">Cold War</a></li>
            </ul>
            <ul>
                <h3>Get In Touch</h3>
                <li><a href="https://www.facebook.com/rengar301/"><i class="fab fa-facebook"></i>Facebook</a></li>
                <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i>Linkedin</a></li>
            </ul>
        </div>
    </footer>
    <div class="footer-bottom">
        <p> Designed <span>By N6</span></p>
    </div>
</body>
</html>