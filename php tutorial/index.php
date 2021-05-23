<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="#">
                Главная
            </a>
            <a href="#">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">
    <?php
 $goods= [
            [
                'id' => 1,
                'name' => 'Iphone',
                'desc' => 'Здесь будет описание для телефона Iphone',
                'img'=> '/images/goods/iphone.jpg',
                'price' => '2000$'
            ],
            [
                'id' => 2,
                'name' => 'HTC',
                'desc' => 'Здесь будет описание для телефона HTC',
                'img'=> '/images/goods/htc.jpg',
                'price' => '1200$'
            ],
            [
                'id' => 3,
                'name' => 'Samsung',
                'desc' => 'Здесь будет описание для телефона Samsung',
                'img' => '/images/goods/samsung.jpg',
                'price' => '1400$'
            ],
        ];
        $page = $_GET['page'];
        if (!isset($page)) {
            echo 'Здесь, вместо этой записи, будет контент для главной страницы';
        } elseif ($page == 'shop') {
            echo 'Здесь будет страница с товарами';
        } elseif ($page == 'product') {
            echo 'А тут у нас будет страница с открытым товаром';
        }



// $goods= [
//         [
//             'id' => 1,
//             'name' => 'Iphone',
//             'desc' => 'Здесь будет описание для телефона Iphone',
//             'img'=> '/images/goods/iphone.jpg',
//             'price' => '2000$'
//         ],
//         [
//             'id' => 2,
//             'name' => 'HTC',
//             'desc' => 'Здесь будет описание для телефона HTC',
//             'img'=> '/images/goods/htc.jpg',
//             'price' => '1200$'
//         ],
//         [
//             'id' => 3,
//             'name' => 'Samsung',
//             'desc' => 'Здесь будет описание для телефона Samsung',
//             'img' => '/images/goods/samsung.jpg',
//             'price' => '1400$'
//         ],
//     ];
//     foreach ($goods as $key => $good) {
//         echo 'Ключ массива: '. $key . '<br>';
//         echo  $good['id'] . '<br>';
//         echo  $good['name'] . '<br>';
//         echo  $good['desc'] . '<br>';
//         echo  $good['img'] . '<br>';
//         echo  $good['price'] . '<br>';

//         echo '<hr>';
//     };




        // $goods = [
        //     [
        //         'id' => 1,
        //         'name' => 'Iphone',
        //         'desc' => 'Здесь будет описание для телефона Iphone',
        //         'img'=> '/images/goods/iphone.jpg',
        //         'price' => '2000$'
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'HTC',
        //         'desc' => 'Здесь будет описание для телефона HTC',
        //         'img'=> '/images/goods/htc.jpg',
        //         'price' => '1200$'
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Samsung',
        //         'desc' => 'Здесь будет описание для телефона Samsung',
        //         'img' => '/images/goods/samsung.jpg',
        //         'price' => '1400$'
        //     ],

        // ];
        // $goods[] = [
        //     'id' => 4,
        //     'name' => 'Explay',
        //     'desc' => 'Здесь будет описание для телефона Explay',
        //     'img' => '/images/goods/explay.jpg',
        //     'price' => '800$',
        //     'discount' => 20,
        //     'count' => 34
        // ];
        // $goods[2]['discount'] = 20;
        // echo '<pre>';
        // var_dump($goods)




        // $id = '1';
        // $name = 'Iphone';
        // $desc = 'Здесь будет описание для телефона Iphone';
        // $img = '/images/goods/iphone.jpg';
        // $price = '2000$';

        // echo  $id . '<br>';
        // echo  $name . '<br>';
        // echo  $desc . '<br>';
        // echo  $img . '<br>';
        // echo  $price . '<br>';

        // $product = [1, 'Iphone', 'Здесь будет описание для телефона Iphone', '/images/goods/iphone.jpg', '2000$'];
        // $product = [
        //     'id' => 1,
        //     'name' => 'Iphone',
        //     'desc' => 'Здесь будет описание для телефона Iphone',
        //     'img' => '/images/goods/iphone.jpg',
        //     'price' => '2000$',
        // ];
        // echo $product['name'] . 'br';
        // echo $product['desc'] . 'br';
        // $product['count'] = 162;
        // var_dump($product);
    ?>
    <!-- <div id="promo">
        <h1 id="promoText">
            Здесь будет рекламный заголовок
        </h1>
    </div>

    <div id="mainTextWrap">
        <div id="mainText">
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
        </div>
    </div>

    <div style="width: 1100px; margin: 0 auto">
        <hr>
        <h2>
            Это будет отдельная страница с открытым магзином
        </h2>

        <div style="width: 1100px; margin: 0 auto">
            <h1>
                Каталог товаров
            </h1>
            <div>
                <div class="shopUnit">
                    <img src="http://placehold.it/308x231" />

                    <div class="shopUnitName">
                        Название продукта
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: 0000 $
                    </div>
                    <a href="#" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>

                <div class="shopUnit">
                    <img src="http://placehold.it/308x231" />

                    <div class="shopUnitName">
                        Название продукта
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: 0000 $
                    </div>
                    <a href="#" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>

                <div class="shopUnit">
                    <img src="http://placehold.it/308x231" />

                    <div class="shopUnitName">
                        Название продукта
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: 0000 $
                    </div>
                    <a href="#" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 20px; float: left;">
            <hr>
            <h2>
                Это будет отдельная страница с открытым товаром
            </h2>

            <div id="openedProduct-img">
                <img src="http://placehold.it/342x260">
            </div>
            <div id="openedProduct-content">
                <h1 id="openedProduct-name">
                    Название продукта
                </h1>
                <div id="openedProduct-desc">
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                </div>
                <div id="openedProduct-price">
                    Цена: 0000 $
                </div>
            </div>
        </div>


    </div> -->
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="#">Главная</a>
            <a href="#">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
</footer>

</body>
</html>