<?php

include('../config//constants.php');
include('Navbar.html');    

// $res2 = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="Home.css">
   <script src="functions.js"></script>
</head>
<body>

<section>
<div class="mainfood">
  <div class="img">
  </div>
<div class="text">
<h1 >CATEGORIES</h1>
</div>

        
     
</div>
</section>

 <section>
    <div class="container2">
    
    <?php     
  
    $sql = "select * from tbl_category";
    $res = mysqli_query($conn,$sql);
   
    $category = mysqli_num_rows($res) > 0;
    if($category)
    {
        while ($rows = mysqli_fetch_array($res))
            { $image_name = $rows['image_name'];
                ?>
                
                <div class="category"  onmouseover="bigImg(this)" onmouseout="normalImg(this)"  >
              <!-- <a href="Food.php"> -->
                <a href="categoryfood.php?id=<?php echo $rows['id'];?>">
                <?php 
                                        //check whether image name is avaiable or not
                                      //  if($image_name!="")
                                       // {
                                            //display image
                                         //   ?>
                                            <!-- <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="160" height="160">
                                       --><?php
                                       // }
                                      //  else
                                      //  {
                                            //display the message
                                       //     echo "<div class='error'>Image not Added.</div>";
                                     //   }
                                    ?>
                <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" onmouseover="bigImg(this)" onmouseout="normalImg(this)" width="160" height="160">
   
                <!-- <img src="<?php echo SITEURL; ?>../images/category/<?php echo $rows['image_name']; ?>" class="img"  width="160" height="160" onmouseover="bigImg(this)" onmouseout="normalImg(this)"  alt="" > -->
                <h5 class="Dish"><?php echo $rows["title"] ?></h5>
                
              </a>
               
                </div>


        <?php
            
           
            }


    }
    else{
        echo "no Categories found";
    }
    ?>

    </div>

    </section>
 <!-- </form> -->
 
   <!-- Footer -->
   <?php
        include('footer.html');
       ?> 
    <!-- Footer-->
</body>
</html>