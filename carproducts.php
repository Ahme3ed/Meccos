<?php 
$title = '{CAR NAME} Products';
include_once 'heading.php';
include_once 'header.php';
include_once 'sec_header.php';
?>

<div class="carproducts">
    <div class="container">
        
        <div class="category">
        <figcaption class="cate_title">Shock Absorbers</figcaption>

   
            <div class="products">
                

            <?php 
            for($i = 0 ; $i < 10 ; $i++)
            {
                echo '
                <a href="product.php">
                <div class="product ">
                <div class="product-img-box">
                 <img src="images/product-load.jpg" alt="">
                </div>
                <figcaption class="title">Car Product</figcaption>
                <div class="rate"></div>
                <figcaption class="price">61,00 EGP</figcaption>

            </div>
            </a>
                ';
            }
            ?>



        <div class="indicators">
            <div class="left_indicator"><i class="fa-solid fa-angles-left"></i></div>
            <div class="right_indicator"><i class="fa-solid fa-angles-right"></i></div>
        </div>

            
            </div>
        </div>



        <div class="category">
        <figcaption class="cate_title">Filters</figcaption>

   
            <div class="products">
                

            <?php 
            for($i = 0 ; $i < 15 ; $i++)
            {
                echo '
                <a href="product.php">
                <div class="product ">
                <div class="product-img-box">
                 <img src="images/product-load.jpg" alt="">
                </div>
                <figcaption class="title">Car Product</figcaption>
                <div class="rate"></div>
                <figcaption class="price">61,00 EGP</figcaption>

            </div>
            </a>
                ';
            }
            ?>



        <div class="indicators">
            <div class="left_indicator"><i class="fa-solid fa-angles-left"></i></div>
            <div class="right_indicator"><i class="fa-solid fa-angles-right"></i></div>
        </div>

            
            </div>
        </div>

        <div class="category">
        <figcaption class="cate_title">Bearings</figcaption>

   
            <div class="products">
                

            <?php 
            for($i = 0 ; $i < 15 ; $i++)
            {
                echo '
                <a href="product.php">
                <div class="product ">
                <div class="product-img-box">
                 <img src="images/product-load.jpg" alt="">
                </div>
                <figcaption class="title">Car Product</figcaption>
                <div class="rate"></div>
                <figcaption class="price">61,00 EGP</figcaption>

            </div>
            </a>
                
                ';
            }
            ?>



        <div class="indicators">
            <div class="left_indicator"><i class="fa-solid fa-angles-left"></i></div>
            <div class="right_indicator"><i class="fa-solid fa-angles-right"></i></div>
        </div>

            
            </div>
        </div>
            
    
        </div>
    </div>
</div>

<?php include_once 'ending.php'?>
