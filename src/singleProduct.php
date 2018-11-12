<?php 
include "init.php";
include "header.php";
?>

    <!--    make sure all the files that we update have the same and CORRECT width/height -->
    <div class="bigboi">
        <div class="container">
            <img src="../src/images/pingpong.jpg" alt="Product Picture">

            <div class="sideContent">
                <!--            name of product-->
                <div class="pName">
                    <h1>Ping Pongs
                    </h1>
                    <!--                sub-title stuff -->
                    <p>3 Balls per pack</p>
                </div>
                <!--rating-->
                <div class="rating">
                    <p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>

                        <!--                <a href="#reviews">Reviews</a>-->
                    </p>
                </div>
                <!--description-->
                <div class=pDesc>
                    <h3> Description</h3>
                    <p>These ping pongs are directly from south Tunisia. They are the authentic hollowed out eyes of the western red and blue zebras. Buy now, while supplies last. 100% guaranteed to improve your beer-pong game! </p>
                </div>
                <!--quantity counter-->
                <div class="quant">
                    <p>Quantity</p>
                    <form id='myform' method='POST' action='#'>
                        <!--                    TODO: need to send this somwehere-->
                        <input type='button' value='-' class='qtyminus' field='quantity' />
                        <input type='text' name='quantity' value='0' class='qty' />
                        <input type='button' value='+' class='qtyplus' field='quantity' />

                        <button class="addCart">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                    </form>

                </div>

                <!--            price-->
                <div class="price">
                    <p>Listed Price: <label class="oldPrice">CDN$299.99</label></p>

                    <p>Price: <label class="sale">CDN$199.99</label>


                    </p>
                </div>
            </div>

        </div>
        <section id="reviews">
            <h3>Reviews <a href="login.html" class="fa fa-pencil"> Write a Review </a>
            </h3>
            <div class="review1">
                <p class=userProfile>
                    <img src="../src/images/profile.png" alt="User's profile picture" align="middle"><a href="#">Parsa R</a> <time datetime="2018-10-24">- October 24, 2018</time></p>
                <p class="userRating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                </p>

                <p class="reviewTitle">
                    Great product!
                </p>
                <p class="reviewDescription">Those are some dank ping pongs!</p>
            </div>

            <div class="review2">
                <p class=userProfile>
                    <img src="../src/images/profile.png" alt="User's profile picture" align="middle"><a href="#">User Name</a> <time datetime="2018-10-24">- Month Day, Year</time></p>
                <p class="userRating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                </p>

                <p class="reviewTitle">
                    Review Title Here
                </p>
                <p class="reviewDescription">Review Description Here</p>
            </div>
            <!--
        <div class="review2">
            <p class="byline">By Parsa on <time datetime="2016-10-01">October 30, 2018</time></p>
            <p class="userReview">10/10 would buy again.</p>
        </div>
-->
        </section>
    </div>


<?php
include "footer.php";
?>