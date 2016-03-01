
<?php include('templates/header.php');?>


    <div class="catalog">
        <div class="container">
            <div class="wrap clearfix">
                <h2>Каталог</h2>
                <?php
                include('templates/massives.php');
                echo '<ul class="points">';
                foreach ($catalogs as $parent) {
                    echo "<li><a href=".$parent['url'].">".$parent['title']."</a>";
                    echo '</li>';
                }
                echo '</ul>';
                ?>
            </div>
            <div class="row">

                <div class="col-xs-12 col-sm-9 items">
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-4">
                        <img src="img/item.jpg" alt="#">
                        <div>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</div>
                        <div class="wrap">
                            <span class="price pull-left">280 грн.</span>
                            <a class="button pull-right" href="#">Купить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="watched">
        <div class="container">
            <h2>Вы смотрели</h2>
            <div class="row">
                <div class="item col-xs-12 col-sm-2">
                    <img src="img/item.jpg" alt="">
                    <div>Шампунь ежедневного пользования</div>
                    <span class="price pull-left">280 грн.</span>
                </div>
                <div class="item col-xs-12 col-sm-2">
                    <img src="img/item.jpg" alt="">
                    <div>Шампунь ежедневного пользования</div>
                    <span class="price pull-left">280 грн.</span>
                </div>
                <div class="item col-xs-12 col-sm-2">
                    <img src="img/item.jpg" alt="">
                    <div>Шампунь ежедневного пользования</div>
                    <span class="price pull-left">280 грн.</span>
                </div>
                <div class="item col-xs-12 col-sm-2">
                    <img src="img/item.jpg" alt="">
                    <div>Шампунь ежедневного пользования</div>
                    <span class="price pull-left">280 грн.</span>
                </div>
                <div class="item col-xs-12 col-sm-2">
                    <img src="img/item.jpg" alt="">
                    <div>Шампунь ежедневного пользования</div>
                    <span class="price pull-left">280 грн.</span>
                </div>
            </div>
        </div>
    </div>

<?php include('templates/footer.php');?>
