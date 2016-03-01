
<?php include('templates/header.php');?>


        <div class="main">
            <div class="under-header">
                <div class="container">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="wrap">
                                    <h1>Купить продукцию сейчас</h1>
                                    <a class="button" href="catalog.php">Узнать больше <i class="fa fa-caret-right"></i></a>
                                </div>
                                    <img src="img/man-top.png" class="pull-right">

                            </li>
                            <li>
                                <div class="wrap">
                                    <h1>Купить продукцию сейчас</h1>
                                    <a class="button" href="catalog.php">Узнать больше <i class="fa fa-caret-right"></i></a>
                                </div>
                                <img src="img/man-top.png">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="news">
                <div class="container">
                    <h2>Новости</h2>
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <img src="img/news-1.jpg">
                                <p>Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"</p>
                                <a href="text.php">Подробнее <i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <img src="img/news-2.jpg">
                                <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                                <a href="text.php">Подробнее <i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <img src="img/news-3.jpg">
                                <p>Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"</p>
                                <a href="text.php">Подробнее <i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <img src="img/news-4.jpg">
                                <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                                <a href="text.php">Подробнее <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                </div>
            </div>

            <div class="recommend">
                <div class="container">
                    <h2>Я рекомендую</h2>

                    <?php
                    include('templates/massives.php');
                    echo '<ul class="menu">';
                    foreach ($menu as $parent) {
                        echo "<li><a href=".$parent['url'].">".$parent['title']."</a>";
                        echo '</li>';
                    }
                    echo '</ul>';
                    ?>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <img src="img/big-shampoo.jpg" alt="">
                            <h3>Шампунь ежедневного пользования</h3>
                            <p>Доктор Нонна на телеканале домашний в программе
                                спросите повара Доктор Нонна на телеканале
                                домашний в программе спросите повара Доктор
                                Нонна на телеканале домашний в программе Доктор
                                Нонна на телеканале домашний в программе...</p>
                            <div class="wrap">
                                <span class="price">280 грн.</span>
                                <a class="button" href="#">Купить</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="col-xs-12 col-sm-4">
                                <img src="img/shampoo-1.jpg" alt="">
                                <h4>Шампунь ежедневного
                                    пользования</h4>
                                <span class="price">280 грн.</span>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <img src="img/shampoo-2.jpg" alt="">
                                <h4>Шампунь ежедневного
                                    пользования</h4>
                                <span class="price">280 грн.</span>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <img src="img/big-shamp.jpg" alt="">
                                <h4>Шампунь ежедневного
                                    пользования</h4>
                                <span class="price">280 грн.</span>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <img src="img/shampoo-1.jpg" alt="">
                                <h4>Шампунь ежедневного
                                    пользования</h4>
                                <span class="price">280 грн.</span>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <img src="img/shampoo-2.jpg" alt="">
                                <h4>Шампунь ежедневного
                                    пользования</h4>
                                <span class="price">280 грн.</span>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <img src="img/big-shamp.jpg" alt="">
                                <h4>Шампунь ежедневного
                                    пользования</h4>
                                <span class="price">280 грн.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="telehome">
                <div class="container">
                    <h2>Телеканал Теледом</h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="big-video">
                                <video width="auto" height="auto" controls="controls" poster="video/big.svg">
                                    <source src="video/Jingle.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                    <source src="video/Jingle.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                    <source src="video/Jingle.webm" type='video/webm; codecs="vp8, vorbis"'>
                                </video>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">

                                <div class="video-small col-xs-6">
                                    <video width="auto" height="auto" controls="controls" poster="video/1.svg">
                                        <source src="video/Jingle.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                        <source src="video/Jingle.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                        <source src="video/Jingle.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    </video>
                                </div>

                                <div class="video-small col-xs-6">
                                    <video width="auto" height="auto" controls="controls" poster="video/2.svg">
                                        <source src="video/Jingle.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                        <source src="video/Jingle.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                        <source src="video/Jingle.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    </video>
                                </div>


                                <div class="video-small col-xs-6">
                                    <video width="auto" height="auto" controls="controls" poster="video/3.svg">
                                        <source src="video/Jingle.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                        <source src="video/Jingle.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                        <source src="video/Jingle.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    </video>
                                </div>

                                <div class="video-small col-xs-6">
                                    <video width="auto" height="auto" controls="controls" poster="video/4.svg">
                                        <source src="video/Jingle.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                        <source src="video/Jingle.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                        <source src="video/Jingle.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    </video>
                                </div>

                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <h3>Новые видео</h3>


                            <?php
                            include('templates/massives.php');
                            echo '<ul>';
                            foreach ($links as $parent) {
                                echo "<li><a href=".$parent['url'].">".$parent['title']."</a>";
                                echo '</li>';
                            }
                            echo '</ul>';
                            ?>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <h3>Популярные</h3>
                            <?php
                            include('templates/massives.php');
                            echo '<ul>';
                            foreach ($links as $parent) {
                                echo "<li><a href=".$parent['url'].">".$parent['title']."</a>";
                                echo '</li>';
                            }
                            echo '</ul>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="biography">
                <div class="container">
                    <h2>Цель мойе жизни -
                        <span>делать людей счастливыми</span></h2>
                    <p class="text">В бизнес компании Dr. Nona пришел на успех своей жены Ольги, которая доказала мне что даже находясь в декретном
                        отпуске и гуляя с маленьким ребенком на улице за один месяц можно заработать в два раза больше чем моя зарплата
                        в милиции. Позже я на этот бизнес посмотрел серьезнее и увидел себя в нем. Это дело для серьезных и амбициозных
                        людей, которые хотят изменить свою жизнь. 27 декабря 2007 года уволился из МВД и теперь сотрудничаю ...</p>
                    <a href="text.php" class="more">Узнайте подробнее <i class="fa fa-caret-right"></i></a>
                    <div class="social text-center">
                        <a href="#" class="youtube"></a>
                        <a href="#" class="flickr"></a>
                        <a href="#" class="vk"></a>
                        <a href="#" class="ok"></a>
                        <a href="#" class="fb"></a>
                        <a href="#" class="tw"></a>
                    </div>
                </div>
            </div>

            <div class="partners">
                <div class="container">
                    <h2>Мои партнеры по бизнесу</h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 partner">
                            <img src="img/tania.jpg" alt="">
                            <div class="name">Диорнева Татьяна</div>
                            <div class="position">Директор</div>
                            <div class="address"><i class="fa fa-map-marker"></i>Мариуполь</div>
                            <div class="social text-center">
                                <a href="#" class="vk"></a>
                                <a href="#" class="ok"></a>
                                <a href="#" class="fb"></a>
                                <a href="#" class="tw"></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <img src="img/maria.jpg" alt="">
                            <div class="name">Проценко Мария</div>
                            <div class="position">Директор</div>
                            <div class="address"><i class="fa fa-map-marker"></i>Донецк</div>
                            <div class="social text-center">
                                <a href="#" class="vk"></a>
                                <a href="#" class="ok"></a>
                                <a href="#" class="fb"></a>
                                <a href="#" class="tw"></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <img src="img/maria.jpg" alt="">
                            <div class="name">Проценко Мария</div>
                            <div class="position">Директор</div>
                            <div class="address"><i class="fa fa-map-marker"></i>Донецк</div>
                            <div class="social text-center">
                                <a href="#" class="vk"></a>
                                <a href="#" class="ok"></a>
                                <a href="#" class="fb"></a>
                                <a href="#" class="tw"></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <img src="img/maria.jpg" alt="">
                            <div class="name">Проценко Мария</div>
                            <div class="position">Директор</div>
                            <div class="address"><i class="fa fa-map-marker"></i>Донецк</div>
                            <div class="social text-center">
                                <a href="#" class="vk"></a>
                                <a href="#" class="ok"></a>
                                <a href="#" class="fb"></a>
                                <a href="#" class="tw"></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <img src="img/maria.jpg" alt="">
                            <div class="name">Проценко Мария</div>
                            <div class="position">Директор</div>
                            <div class="address"><i class="fa fa-map-marker"></i>Донецк</div>
                            <div class="social text-center">
                                <a href="#" class="vk"></a>
                                <a href="#" class="ok"></a>
                                <a href="#" class="fb"></a>
                                <a href="#" class="tw"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="join-us">
                <div class="container">
                    <h2>Добро пожаловать в команду</h2>
                    <form class="clearfix row" action="#" method="get">
                        <input class="col-xs-12 col-sm-3" placeholder="Ваше имя" type="text" name="name">
                        <input class="col-xs-12 col-sm-3" placeholder="Телефон" type="tel" name="phone">
                        <input class="col-xs-12 col-sm-3" placeholder="E-mail адрес" type="email">
                        <button class="col-xs-12 col-sm-3">Присоединяйтесь <i class="fa fa-caret-right"></i></button>
                    </form>
                    <div class="text">Узнайте подробнее почему выгодно сотрудничать с нами и быть в нашей команде</div>
                </div>
            </div>

            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
                                possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
                                deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
                                nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                                corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
                                assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
                                commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Architecto corporis eum possimus quibusdam, quod recusandae tempore
                                voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
                                pariatur qui. Animi, commodi inventore.</p>
                        </div>
                        <div class="col-xs-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
                                possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
                                deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
                                nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                                corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
                                assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
                                commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Architecto corporis eum possimus quibusdam, quod recusandae tempore
                                voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
                                pariatur qui. Animi, commodi inventore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('templates/footer.php');?>

