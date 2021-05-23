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
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
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
            require('templates/main.php');
        } elseif ($page == 'shop') {
            require('templates/shop.php');
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
            <a href="/">Главная</a>
            <a href="index.php?page=shop">
                Магазин
            </a>
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