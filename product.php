<?php 
$title = '{PRODUCT NAME}';
include_once 'heading.php';
include_once 'header.php';
include_once 'sec_header.php';
?>


<div class="product_co">

<div class="left-sec">
    <div class="product_cont">
        <div class="product_img">
            <img class="product-img" src="images/bearings.jpg" alt="">
            <div class="product_pics">

            <img  src="images/product-load.jpg" alt="">
            <img  src="images/product-load.jpg" alt="">
            <img  src="images/product-load.jpg" alt="">
            <img  src="images/product-load.jpg" alt="">

            </div>
        </div>
        <div class="product_details">

            <figcaption class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus reprehenderit tempore, blanditiis tempora sequi hic mollitia delectus dignissimos, cum explicabo beatae quam non corporis numquam obcaecati velit ipsum sed excepturi?</figcaption>
           
            <p class="brand">Brand : KYB</p>
        
            <div class="rating">
                <p>Ratings :  </p>
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p class="reviews"> (  Reviews : 900 Customer  )</p>
                </div>

            </div>

            <div class="border"></div>
           <div class="product_prices">
            <div class="prices">
            <p class="price">1,440 EGP </p>
            <p class="sale">1,990 EGP </p>
            </div>
            <div class="sale_perc">
                90%
            </div>
           </div>

            <div class="more_details">

            </div>
      
        </div>
    </div>
        

    <div class="ppl_also_wat">
        <figcaption class="con_title " >People Also Like </figcaption>
        <div class="border" ></div>
    <div class="products">
                

                <?php 
                for($i = 0 ; $i < 8 ; $i++)
                {
                    echo '
                    <a href="product.php">
                    <div class="product ">
                    <div class="product-img-box">
                     <img src="images/product-load.jpg" alt="">
                    </div>
                    <div class="info" >
                    <figcaption class="title">Product name</figcaption>
                    <div class="rate"></div>
                    <figcaption class="price">61,00 EGP</figcaption>
                    </div>
                </div>
                </a>
                    ';
                }
                ?>
    
    
    

    
                
                </div>
    </div>
    <div class="ppl_also_wat">
        <figcaption class="con_title " >More Products For This Car </figcaption>
        <div class="border" ></div>
    <div class="products">
                

                <?php 
                for($i = 0 ; $i < 8 ; $i++)
                {
                    echo '
                    <a href="product.php">
                    <div class="product ">
                    <div class="product-img-box">
                     <img src="images/product-load.jpg" alt="">
                    </div>
                    <div class="info" >
                    <figcaption class="title">Product name</figcaption>
                    <div class="rate"></div>
                    <figcaption class="price">61,00 EGP</figcaption>
                    </div>
                </div>
                </a>
                    ';
                }
                ?>
    
    
    

    
                
                </div>
    </div>
</div>

<div class="right-sec">
    <div class="paying_options">
        <div class="deliv">
            <figcaption>Delivery & Returns</figcaption>
            <div class="border"></div>
            <figcaption >Select Your Location </figcaption>
            <div class="del_cos">
            <select name="" id="">
                <option value="">Alexandria</option>
            </select>
            <select name="" id="">
                <option value="">Miami</option>
            </select>
            <div class="del_info">

                <div class="del_fees">
                <div class="icon">
                <i class="fa-solid fa-truck"></i>
                </div>
                <p>Delivery Fees : 65 EGP</p>
                </div>
                <p class="desc">
                Delivery fees depending on your governorate

                <div class="del_fees">
                <div class="icon">
                <i class="fa-solid fa-arrow-rotate-left"></i>
                </div>
                <figcaption class="title"> Returning Policy </figcaption>
                </div>
                <p class="desc">
                Free return within the legal return period within 14  days, and if they meet the terms & conditions, For more details about return policy.
                <a href="">See more</a>
            </p>
                </div>

            </div>
        </div>
        </div>
</div>
    </div>
 






























<?php 
include_once 'ending.php';

?>