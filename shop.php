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
        

        <!-- card category -->
        <div class="containers" id="buynow">
            <div class="flex-wrap">
                <div class="buynow-collapse media-w100 p_l-r">
                    <h1 class="h1 p_b4 m_b">Categories</h1>
                    <ul class="n-list_style m_b2">
                        <li class="p_b2">
                            <a class="space-flex m_b n-decoration black" href="#">Gender<i class="w p_t0 fas fa-chevron-circle-down"></i></a>
                            <ul class="n-list_style d-none">
                                <li><a class="n-decoration" href="#">Men</a></li>
                                <li><a class="n-decoration" href="#">Women</a></li>
                            </ul>
                        </li>
                        <li class="p_b2">
                            <a class="space-flex m_b n-decoration black" href="#">Sale<i class="w p_t0 fas fa-chevron-circle-down"></i></a>
                            <ul class="n-list_style d-none">
                                <li><a class="n-decoration" href="#">Sport</a></li>
                                <li><a class="n-decoration" href="#">Luxury</a></li>
                            </ul>
                        </li>
                        <li class="p_b2">
                            <a class="space-flex m_b n-decoration black" href="#">Product<i class="w p_t0 fas fa-chevron-circle-down"></i></a>
                            <ul class="n-list_style d-none">
                                <li><a class="n-decoration" href="#">Bag</a></li>
                                <li><a class="n-decoration" href="#">Sweather</a></li>
                                <li><a class="n-decoration" href="#">Sunglass</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="buynow-resp_img media-w100">
                    <div class="flex-wrap">
                        <div class="p_l-r w-max flex-width768 media-w100">
                            <ul class="n-list_style p_t0 p_b2 m_b2">
                                <li class="d-inline m_r"><a class="hover black n-decoration m_b" href="#">All</a></li>
                                <li class="d-inline m_r"><a class="hover black n-decoration m_b" href="#">Men's</a></li>
                                <li class="d-inline m_r"><a class="hover black n-decoration m_b" href="#">Women's</a></li>
                            </ul>
                        </div>
                        <div class="p_l-r p_b4 w-max flex-width768 media-w100">
                            <div class="d-flex">
                                <select class="buynow-choose">
                                    <option>Featured</option>
                                    <option>A to Z</option>
                                    <option>Item</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex-wrap">
                        <div class="buynow-card_start media-w100">
                            <div class="buynow-setup_card_start">
                                <div class="buynow-img">
                                    <img src="./assets/img/shop_01.jpg">
                                    <div class="buynow-hovered">
                                        <ul class="n-list_style m_b2">
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="fas fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buynow-text">
                                    <a class="black n-decoration m_b" href="#">Oupidatat non</a>
                                    <ul class="space-flex n-list_style">
                                        <li>M/L/X/XL</li>
                                        <li></li>
                                    </ul>
                                    <ul class="center-flex n-list_style m_b">
                                        <li>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center">$250.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="buynow-card_start media-w100">
                            <div class="buynow-setup_card_start">
                                <div class="buynow-img">
                                    <img src="./assets/img/shop_02.jpg">
                                    <div class="buynow-hovered">
                                        <ul class="n-list_style m_b2">
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="fas fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buynow-text">
                                    <a class="black n-decoration m_b" href="#">Oupidatat non</a>
                                    <ul class="space-flex n-list_style">
                                        <li>M/L/X/XL</li>
                                        <li></li>
                                    </ul>
                                    <ul class="center-flex n-list_style m_b">
                                        <li>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center">$250.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="buynow-card_start media-w100">
                            <div class="buynow-setup_card_start">
                                <div class="buynow-img">
                                    <img src="./assets/img/shop_03.jpg">
                                    <div class="buynow-hovered">
                                        <ul class="n-list_style m_b2">
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="fas fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buynow-text">
                                    <a class="black n-decoration m_b" href="#">Oupidatat non</a>
                                    <ul class="space-flex n-list_style">
                                        <li>M/L/X/XL</li>
                                        <li></li>
                                    </ul>
                                    <ul class="center-flex n-list_style m_b">
                                        <li>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center">$250.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="buynow-card_start media-w100">
                            <div class="buynow-setup_card_start">
                                <div class="buynow-img">
                                    <img src="./assets/img/shop_04.jpg">
                                    <div class="buynow-hovered">
                                        <ul class="n-list_style m_b2">
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="fas fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buynow-text">
                                    <a class="black n-decoration m_b" href="#">Oupidatat non</a>
                                    <ul class="space-flex n-list_style">
                                        <li>M/L/X/XL</li>
                                        <li></li>
                                    </ul>
                                    <ul class="center-flex n-list_style m_b">
                                        <li>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center">$250.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="buynow-card_start media-w100">
                            <div class="buynow-setup_card_start">
                                <div class="buynow-img">
                                    <img src="./assets/img/shop_05.jpg">
                                    <div class="buynow-hovered">
                                        <ul class="n-list_style m_b2">
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="fas fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buynow-text">
                                    <a class="black n-decoration m_b" href="#">Oupidatat non</a>
                                    <ul class="space-flex n-list_style">
                                        <li>M/L/X/XL</li>
                                        <li></li>
                                    </ul>
                                    <ul class="center-flex n-list_style m_b">
                                        <li>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center">$250.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="buynow-card_start media-w100">
                            <div class="buynow-setup_card_start">
                                <div class="buynow-img">
                                    <img src="./assets/img/shop_06.jpg">
                                    <div class="buynow-hovered">
                                        <ul class="n-list_style m_b2">
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="fas fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buynow-text">
                                    <a class="black n-decoration m_b" href="#">Oupidatat non</a>
                                    <ul class="space-flex n-list_style">
                                        <li>M/L/X/XL</li>
                                        <li></li>
                                    </ul>
                                    <ul class="center-flex n-list_style m_b">
                                        <li>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center">$250.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="buynow-card_start media-w100">
                            <div class="buynow-setup_card_start">
                                <div class="buynow-img">
                                    <img src="./assets/img/shop_07.jpg">
                                    <div class="buynow-hovered">
                                        <ul class="n-list_style m_b2">
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="fas fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buynow-text">
                                    <a class="black n-decoration m_b" href="#">Oupidatat non</a>
                                    <ul class="space-flex n-list_style">
                                        <li>M/L/X/XL</li>
                                        <li></li>
                                    </ul>
                                    <ul class="center-flex n-list_style m_b">
                                        <li>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center">$250.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="buynow-card_start media-w100">
                            <div class="buynow-setup_card_start">
                                <div class="buynow-img">
                                    <img src="./assets/img/shop_08.jpg">
                                    <div class="buynow-hovered">
                                        <ul class="n-list_style m_b2">
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="fas fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buynow-text">
                                    <a class="black n-decoration m_b" href="#">Oupidatat non</a>
                                    <ul class="space-flex n-list_style">
                                        <li>M/L/X/XL</li>
                                        <li></li>
                                    </ul>
                                    <ul class="center-flex n-list_style m_b">
                                        <li>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center">$250.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="buynow-card_start media-w100">
                            <div class="buynow-setup_card_start">
                                <div class="buynow-img">
                                    <img src="./assets/img/shop_09.jpg">
                                    <div class="buynow-hovered">
                                        <ul class="n-list_style m_b2">
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="buynow-btn" href="#">
                                                    <i class="fas fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buynow-text">
                                    <a class="black n-decoration m_b" href="#">Oupidatat non</a>
                                    <ul class="space-flex n-list_style">
                                        <li>M/L/X/XL</li>
                                        <li></li>
                                    </ul>
                                    <ul class="center-flex n-list_style m_b">
                                        <li>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="yellow fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                            <i class="grey fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center">$250.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <ul class="end-flex n-list_style m_b2">
                            <li><a class="buynow-design_number_disabled">1</a></li>
                            <li><a class="buynow-design_number" href="#">2</a></li>
                            <li><a class="buynow-design_number" href="#">3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our brand -->
        <div id="brand">
            <div class="containers m_t4 m_b4">
                <div class="flex-wrap p_t-b2 text-center">
                    <div class="brand-about flex-width p_l-r media-w100">
                        <h1 class="h1 m_b">Our Brands</h1>
                        <p class="m_b2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="brand-slider p_l-r">
                        <div class="brand-btn flex-wrap">
                            <!-- prev button -->
                            <div class="brand-prev p_l-r self-center">
                                <a class="black m_b h1" role="button" onclick="minisize(-1)"><i class="light fas fa-chevron-left"></i></a>
                            </div>
                            
                            <!-- slider brand -->
                            <div class="brand-icon p_l-r">
                                <div class="position-rel">
                                    <div class="position-rel w-100">
                                        <div class="brand-picture position-rel">
                                            <div class="flex-wrap">
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_01.png" width="110px" height="74px"></a></div>
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_02.png" width="110px" height="74px"></a></div>
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_03.png" width="110px" height="74px"></a></div>
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_04.png" width="110px" height="74px"></a></div>
                                            </div>
                                        </div>
                                        <div class="brand-picture position-rel">
                                            <div class="flex-wrap">
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_01.png" width="110px" height="74px"></a></div>
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_02.png" width="110px" height="74px"></a></div>
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_03.png" width="110px" height="74px"></a></div>
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_04.png" width="110px" height="74px"></a></div>
                                            </div>
                                        </div>
                                        <div class="brand-picture position-rel">
                                            <div class="flex-wrap">
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_01.png" width="110px" height="74px"></a></div>
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_02.png" width="110px" height="74px"></a></div>
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_03.png" width="110px" height="74px"></a></div>
                                                <div class="brand-logo_brand"><a href="#"><img class="brand-img" src="./assets/img/brand_04.png" width="110px" height="74px"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- next button -->
                            <div class="brand-prev p_l-r self-center">
                                <a class="black m_b h1" role="button" onclick="minisize(1)"><i class="light fas fa-chevron-right"></i></a>
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