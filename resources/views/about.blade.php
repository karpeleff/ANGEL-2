@extends('layout.app')
@section('content')
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
    <section class="info container" id="info">
        <h3 class="second-title">Сеть наших салонов</h3>
        <section class="grid">
            <article class="grid-item">
                <div class="image">
                    <img src="https://www.volgograd.bodysilk.info/upload/iblock/0f5/xxqflcq2nddyat110yqs4zwyxekshpfe.png" />
                </div>
                <div class="info">
                    <h2>Sugar room</h2>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="#link">Подробнее</a>
                    </div>
                </div>
            </article>

            <!-- Еще блоки -->

            <article class="grid-item">
                <div class="image">
                    <img src="https://www.volgograd.bodysilk.info/upload/iblock/9b4/6mrmk8ebhyvtlcbb3e1vciw1g6ztnphy.png" />
                </div>
                <div class="info">
                    <h2>MoreNails</h2>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="#link">Подробнее</a>
                    </div>
                </div>
            </article>
            <article class="grid-item">
                <div class="image">
                    <img src="https://www.volgograd.bodysilk.info/upload/iblock/b9a/1djv8ku2fom5n38857nwj1yi7mt56l65.png" />
                </div>
                <div class="info">
                    <h2>Tais</h2>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="#link">Подробнее</a>
                    </div>
                </div>
            </article>
            <article class="grid-item">
                <div class="image">
                    <img src="https://www.volgograd.bodysilk.info/upload/iblock/aec/a6rrkx0lcd2yq0wk5db2o8hzqo0303r1.jpg" />
                </div>
                <div class="info">
                    <h2>Milana Hair</h2>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="#link">Подробнее</a>
                    </div>
                </div>
            </article>
        </section>
    </section>
    <div class="video">
        <iframe width="1200" height="580" src="https://www.youtube.com/embed/gt6f9Y8Cf3s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    </br>
    </br>
    </br>
@endsection
