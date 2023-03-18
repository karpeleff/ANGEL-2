@extends('layout.app')
@section('content')
    <div class="contact-wrap">

        <div class="container-fluid pl-0 pr-0">

            <div class="block-title-wrap">
                <h2 class="block-title"></h2>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-4 order-lg-12">
                    <div class="infobanner img4 no-link">
                        <div class="infobanner-content">
                            <div class="infobanner-icon">
                                <img src="https://похороны-красноярск.рф/wp-content/themes/fwbs/img/map-location.svg" alt="Контакты">
                            </div>
                            <h3 class="infobanner-title">Контакты</h3>
                            <div class="info-block">
                                <span class="info-block-title">Наш адрес:</span>
                                <span class="info-block-adres">г. Волгоград, дзержинский раййон  45 строение 7</span>
                            </div>
                            <div class="info-block">
                                <span class="info-block-title">Телефон:</span>
                                <span class="info-block-adres">+7(391) 286-34-96 (круглосуточно)</span>
                            </div>
                            <div class="info-block"><span class="info-block-title">Email:</span> <span class="info-block-adres">angelal24ru@mail.ru</span>
                            </div>
                        </div>
                        <span class="infobanner-overlay"></span>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1 map-area">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1ef4769d6e853071a77a63c9e39a2bddd772f66cfd925bd36b482b4cfd4b9ead&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div style="text-align:center">
            <h2>Контакты</h2>
            <p>Контакты позволяют связаться с нами </p>
        </div>
        <div class="row">
            <div class="column">
                <img src="https://avatars.mds.yandex.net/i?id=e603f41b9f7042a2328d0f1100970a3e76ea54e0-6484760-images-thumbs&n=13" style="width:100%">
            </div>
            <div class="column">
                <form action="/action_page.php">
                    <label for="fname">Имя</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Фамилия</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    <label for="country">Страна</label>
                    <select id="country" name="country">
                        <option value="australia">Россия</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                    <label for="subject">Сщщбщение</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:120px"></textarea>
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>
@endsection
