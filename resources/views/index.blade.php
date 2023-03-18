@extends('layout.app')
@section('content')
    <main>
        <section class="home">
            <div class="container">
                <div class="home-content">
                    <h1 class="home-heading"><span style="color: #941ACE;">Салон</span> красоты ANGEL</h1>
                </div>
                <div class="home__text">
                    Круглосуточная работа с клиентами, уютные и современные комнаты
                    для работы, квалифицированный персонал, созданиие
                    потрясающих и насыщенных образов
                </div>
            </div>

            </div>
            <div class="home-bg-img">
                <img src="{{asset('asset/img/header.jpg')}}" alt="Background cover"/>
            </div>
        </section>
        </br>
        </br>
        <!-- Services Section Begin -->
        <section class="services-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span></span>
                            <h2></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <img src="{{asset('asset/img/service-3.png')}}" alt="">
                            <h4></h4>
                            <p><span style="color: #000000;"> Мы рождаемся красивыми.Задача наших визажистов создать тот самый образ для тебя</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <img src="{{asset('asset/img/service-2.png')}}" alt="">
                            <h4></h4>
                            <p><span style="color: #000000;"> Наши мастера делают самые потрясающие коррекции бровей. Ухоженные брови это залог красоты</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <img src="{{asset('asset/img/service-1.png')}}" alt="">
                            <h4></h4>
                            <p><span style="color: #000000;"> в наш сервис также  входит создание образа.Ведь успешно подобранный образ залог красоты</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->
        <!-- About Us Section Begin -->
        <section class="about-us-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="as-pic">
                            <img src="{{asset('asset/img/1646410719_54-kartinkin-net-p-byuti-kartinki-58 1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="as-text">
                            <div class="section-title">
                                <span> </span>
                                <h2>О нас </h2>
                            </div>
                            <p class="f-para">Салон красоты-это совершенно новая концепция
                                салона: идеальное,альтернативное пространство
                                с соблюдением этических норм,
                                когда используются продукты, которые уважают ваш
                                у природу и природу.
                                Салон красоты Angel, индивидуальный
                                подход, очень спокойная атмосфера
                                и отличное питание. </p>
                            <p class="s-para"> Представьте, что меня здесь
                                бесполезно лечат.
                                Чувство стыда является частью нашей самооценки, и образ каждого из нас
                                передает наши мысли.
                                В таком случае мы должны быть согласны с тем, кто
                                мы есть, мы должны представлять себя. </p>
                            <a href="#" class="primary-btn"><span style="color: #fefcff;">подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section End -->
        <!-- Info -->
        <section class="info container" id="info">
            <h3 class="second-title">УСЛУГИ</h3>

            <div class="info__grid">
                <!-- Item -->
                <a href="#" class="info__item">
                    <img class="info__item-img" src="{{asset('asset/img/empathystudio.ru_vibe1.jpg')}}" alt="Гироскутер">
                    <h4 class="info__item-name">парикмахеркая</h4>
                </a>
                <!-- End item -->

                <!-- Item -->
                <a href="#" class="info__item">
                    <img class="info__item-img"
                         src="https://shopikk.ru/wp-content/uploads/9/c/5/9c511bf0a20fdd0c0802dd4b83317b56.jpeg"
                         alt="Гироскутер">
                    <h4 class="info__item-name">ноогтевой сервис</h4>
                </a>
                <!-- End item -->

                <!-- Item -->
                <a href="#" class="info__item">
                    <img class="info__item-img"
                         src="https://avatars.mds.yandex.net/i?id=864b374b6b2b78550a357fe70f1547d164bbcd07-8173407-images-thumbs&n=13"
                         alt="Гироскутер">
                    <h4 class="info__item-name">мейкап</h4>
                </a>
                <!-- End item -->

                <!-- Item -->
                <a href="#" class="info__item">
                    <img class="info__item-img"
                         src="https://blog.skillsuccess.com/wp-content/uploads/2019/11/relaxation-massage-courses.jpg"
                         alt="Гироскутер">
                    <h4 class="info__item-name">Спа</h4>
                </a>
                <!-- End item -->
                <!-- Item -->
                <a href="#" class="info__item">
                    <img class="info__item-img"
                         src="https://medboli.ru/wp-content/uploads/4/6/3/4637a3233077ba2c590374d8bd1071de.jpeg"
                         alt="Гироскутер">
                    <h4 class="info__item-name">косметология</h4>
                </a>
                <!-- End item -->

                <!-- Item -->
                <a href="#" class="info__item">
                    <img class="info__item-img"
                         src="https://static.tildacdn.com/tild6330-6437-4135-b933-323332313261/photo.jpg" alt="Гироскутер">
                    <h4 class="info__item-name">эптляция и дипялия</h4>
                </a>
                <!-- End item -->

                <!-- Item -->
                <a href="#" class="info__item">
                    <img class="info__item-img"
                         src="https://p0.zoon.ru/preview/rwHJFoJ4_xhEmzzXId7jxg/1920x1080x75/1/a/2/original_61a7462059ecde66ae34083a_61a7593917821.jpg"
                         alt="Гироскутер">
                    <h4 class="info__item-name">коррекция бровей</h4>
                </a>
                <!-- End item -->

                <!-- Item -->
                <a href="#" class="info__item">
                    <img class="info__item-img"
                         src="https://static.tildacdn.com/tild3836-3038-4262-b063-313430366565/photo.jpeg" alt="Гироскутер">
                    <h4 class="info__item-name">тату и пирсинг</h4>
                </a>
                <!-- End item -->
            </div>

        </section>
        <section class="info container" id="info">
            <h3 class="second-title">галерея наших работ</h3>
            <div class="container">
                <div class="gallery">
                    <figure class="gallery__item gallery__item--1">
                        <img src="https://avatars.mds.yandex.net/i?id=a90fdb700158b444c62ba5e8c003af41ffa2fa0b-7662997-images-thumbs&n=13"
                             alt="Gallery image 1" class="gallery__img">
                    </figure>
                    <figure class="gallery__item gallery__item--2">
                        <img src="https://avatars.mds.yandex.net/i?id=5db238530f229da1f6af409d49af986e4a0c70e9-8544486-images-thumbs&n=13"
                             alt="Gallery image 2" class="gallery__img">
                    </figure>
                    <figure class="gallery__item gallery__item--3">
                        <img src="https://avatars.mds.yandex.net/i?id=d9bd35f3cdf34c0208ea079a0c542185653c1bcf-8285499-images-thumbs&n=13"
                             alt="Gallery image 3" class="gallery__img">
                    </figure>
                    <figure class="gallery__item gallery__item--4">
                        <img src="https://avatars.mds.yandex.net/i?id=5125f29f8f77eea6c570ea368e71365d-5333619-images-thumbs&n=13"
                             alt="Gallery image 4" class="gallery__img">
                    </figure>
                    <figure class="gallery__item gallery__item--5">
                        <img src="https://avatars.mds.yandex.net/i?id=41982324fff850047c5036a7c994eb2781144136-8207729-images-thumbs&n=13"
                             alt="Gallery image 5" class="gallery__img">
                    </figure>
                    <figure class="gallery__item gallery__item--6">
                        <img src="https://avatars.mds.yandex.net/i?id=d84e0b1d668669836ab5f14ea3d6c91b51cc2337-8497133-images-thumbs&n=13"
                             alt="Gallery image 6" class="gallery__img">
                    </figure>
                </div>
            </div>
        </section>
        <section class="info container" id="info">
            <h3 class="second-title">МАСТЕРА</h3>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Наталья Недорубова</h3>
                                <h4 class="title">мастер маникюра</h4>
                            </div>
                            <ul class="social">
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                       aria-hidden="true"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Екатерина Скулкина</h3>
                                <h4 class="title">парикмахер</h4>
                            </div>
                            <ul class="social">
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                       aria-hidden="true"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Роман Коваленко</h3>
                                <h4 class="title">визажист</h4>
                            </div>
                            <ul class="social">
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                       aria-hidden="true"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Мария Степаненко</h3>
                                <h4 class="title">бровист</h4>
                            </div>
                            <ul class="social">
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                       aria-hidden="true"></a></li>
                                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                       aria-hidden="true"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
