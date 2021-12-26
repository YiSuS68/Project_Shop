<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/media.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Green Shop</title>
</head>
<body>
    
    <div id="main">

        <!--navbar-->
        <?php include "navbar.php" ?>
                

        <!-- single product -->
        <div id="single-product">
            <div class="containers p_b5">
                <div class="flex-wrap">
                    <div class="single-imgall w-max p_l-r m_t5 media-w100">
                        <div class="single-product_setup_img">
                            <img src="./assets/img/product_single_10.jpg" alt="Product" class="product-imgpro">
                        </div>
                        <div class="flex-wrap">
                            <div class="single-product_next">
                                <a><i class=" fas fa-chevron-left"></i></a>
                                <span></span>
                            </div>
                            <div class="single-product_carousel">
                                <div class="single-product_setup_carousel">
                                    <div class="single-product_cards">
                                        <div class="flex-wrap">
                                            <div class="single-product_idk">
                                                <a href="#">
                                                    <img src="./assets/img/product_single_01.jpg" class="product-imgpro">
                                                </a>
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#">
                                                    <img src="./assets/img/product_single_02.jpg" class="product-imgpro">
                                                </a>
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#">
                                                    <img src="./assets/img/product_single_03.jpg" class="product-imgpro">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product_cards">
                                        <div class="flex-wrap">
                                            <div class="single-product_idk">
                                                <a href="#">
                                                    <img src="./assets/img/product_single_04.jpg" class="product-imgpro">
                                                </a>
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#">
                                                    <img src="./assets/img/product_single_05.jpg" class="product-imgpro">
                                                </a>
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#">
                                                    <img src="./assets/img/product_single_06.jpg" class="product-imgpro">
                                                </a>
                                            </div>
                                        </div>
                                    </div><div class="single-product_cards">
                                        <div class="flex-wrap">
                                            <div class="single-product_idk">
                                                <a href="#">
                                                    <img src="./assets/img/product_single_07.jpg" class="product-imgpro">
                                                </a>
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#">
                                                    <img src="./assets/img/product_single_08.jpg" class="product-imgpro">
                                                </a>
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#">
                                                    <img src="./assets/img/product_single_09.jpg" class="product-imgpro">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-product_next">
                                <a><i class=" fas fa-chevron-right"></i></a>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-textall w-max p_l-r m_t5 media-w100">
                        <div class="single-product_container_textall">
                            <div class="single-product_setup_textall">
                                <h1 class="h2 m_b">Active Wear</h1>
                                <p class="h5 p_t-b m_b">$25.00</p>
                                <p class="p_t-b m_b2">
                                    <i class="yellow fas fa-star"></i>
                                    <i class="yellow fas fa-star"></i>
                                    <i class="yellow fas fa-star"></i>
                                    <i class="yellow fas fa-star"></i>
                                    <i class="grey fas fa-star"></i>
                                    <span class="d-inline dark">Rating 4.8 | 36 Comments</span>
                                </p>
                                <ul class="n-list_style m_b2">
                                    <li class="d-inline m-r"><h6 class="h6 m_b">Brand:</h6></li>
                                    <li class="d-inline m-r"><p class="grey m_b2"><strong>Easy Wear</strong></p></li>
                                </ul>
                                <h6 class="h6 m_b">Description:</h6>
                                <p class="h6 m_b2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                                <ul class="n-list_style m_b2">
                                    <li class="d-inline m-r"><h6 class="h6 m_b">Avaliable Color :</h6></li>
                                    <li class="d-inline m-r"><p class="grey m_b2"><strong>White / Black</strong></p></li>
                                </ul>
                                <h6 class="h6 m_b">Specification:</h6>
                                <ul class="n-list_style p_b2 m_b2">
                                    <li>Lorem ipsum dolor sit</li>
                                    <li>Amet, consectetur</li>
                                    <li>Adipiscing elit,set</li>
                                    <li>Duis aute irure</li>
                                    <li>Ut enim ad minim</li>
                                    <li>Dolore magna aliqua</li>
                                    <li>Excepteur sint</li>
                                </ul>
                                <form>
                                    <input type="hidden" name="product-title" value="Activewear">
                                    <div class="flex-wrap">
                                        <div class="flex-0-auto w-auto w-max p_l-r">
                                            <ul class="n-list_style p_b2 m_b2">
                                                <li class="d-inline m-r">
                                                    Size :
                                                    <input type="hidden" name="product-size" value="S">
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup_size">S</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup_size">M</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup_size">L</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup_size">XL</span>
                                                </li>   
                                            </ul>
                                        </div>
                                        <div class="text-size_single">
                                            <ul class="n-list_style p_b2 m_b2">
                                                <li class="d-inline m-r">
                                                    Quantity
                                                    <input type="hidden" name="product-quantity" value="1">
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup-two_size">-</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup-three_size">1</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup-two_size">+</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="flex-wrap p_b2">
                                        <div class="text-five_single">
                                            <button type="submit" class="settup-sotired" name="submit" value="buy">Buy</button>
                                        </div>
                                        <div class="text-five_single">
                                            <button type="submit" class="settup-sotired" name="submit" value="addtocard">Add To Card</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- footer -->
        <?php include "footer.php" ?>
        
    </div>

    <script src="./assets/js/index.js"></script>
</body>
</html>