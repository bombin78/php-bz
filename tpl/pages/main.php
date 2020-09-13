<section class="page">

	<h1 class="page__content-title content-title"><?php echo $title; ?></h2>

	<div class="description">

        <div class="description__row">

            <h2 class="description__title">
                ООО «Бушевецкий завод» выполняет различные виды ремонта (ТР-1,ТР-2, КР-1)
                автомотрисам АДМ, мотовозам МПТ-4, МПТ-6, МПТГ-2 и машинам АВФ и МС
            </h2>

            <ul class="advantages">
                <li class="advantages__item">
                    Имеем условный номер клеймения <b>1771</b> выданный ФАЖТ.
                </li>
                <li class="advantages__item">
                    Предоставляем гарантию на ремонт 6 месяцев.
                </li>
                <li class="advantages__item">
                    Предлагаем ремонт двигателей ЯМЗ и их модификаций, ремонт гидропередач.
                </li>
            </ul>

            <dl class="overhaul">
                <dt class="overhaul__label">Основные виды работ, выполняемые при проведении капитального ремонта:</dt>
                <dd class="overhaul__value">
                    <ul class="overhaul__list">
                        <li class="overhaul__item">
                            - полная разборка машины;
                        </li>
                        <li class="overhaul__item">
                            - дефектовка сборочных единиц и деталей;
                        </li>
                        <li class="overhaul__item">
                            - полное освидетельствование колесных пар;
                        </li>
                        <li class="overhaul__item">
                            - ремонт тормозных, контрольно-измерительных приборов, электрических
                            и гидравлических аппаратов со снятием их с машины;
                        </li>
                        <li class="overhaul__item">
                            - осмотр автосцепных устройств со снятием с машины съемных деталей и узлов;
                        </li>
                        <li class="overhaul__item">
                            - техническое обслуживание системы обеспечения безопасности движения и при
                            необходимости замена отдельных ее блоков.
                        </li>
                    </ul>
                </dd>
            </dl>

            <section id="gallery" class="slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper blueimp-links">

                        <div class="swiper-slide">
                            <a class="slider__link" href="/images/pages/main/gallery/big/photo-1.jpg" title="">
                                <img class="slider__img" src="/images/pages/main/gallery/photo-1.jpg" alt="">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a class="slider__link" href="/images/pages/main/gallery/big/photo-2.jpg" title="">
                                <img class="slider__img" src="/images/pages/main/gallery/photo-2.jpg" alt="">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a class="slider__link" href="/images/pages/main/gallery/big/photo-3.jpg" title="">
                                <img class="slider__img" src="/images/pages/main/gallery/photo-3.jpg" alt="">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a class="slider__link" href="/images/pages/main/gallery/big/photo-5.jpg" title="">
                                <img class="slider__img" src="/images/pages/main/gallery/photo-5.jpg" alt="">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a class="slider__link" href="/images/pages/main/gallery/big/photo-6.jpg" title="">
                                <img class="slider__img" src="/images/pages/main/gallery/photo-6.jpg" alt="">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a class="slider__link" href="/images/pages/main/gallery/big/photo-9.jpg" title="">
                                <img class="slider__img" src="/images/pages/main/gallery/photo-9.jpg" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>

            <!-- связаться с нами -->
            <?php include_once $path."tpl/blocks/call.php" ?>
            <!-- /связаться с нами -->

            <ul class="bz-progress">
                <li class="bz-progress__item">70 лет на рынке</li>
                <li class="bz-progress__item">Десятки отремонтированных машин</li>
                <li class="bz-progress__item">Станочный парк более 50-ти единиц</li>
                <li class="bz-progress__item">Собственные подъездные пути</li>
            </ul>

            <ul class="work-blocks">
                <li class="work-blocks__item">
                    <div class="work-block">
                        <img class="work-block__img" src="/images/pages/main/photo-1.jpg" alt="">
                        <div class="work-block__text">
                            <a class="work-block__link" href="/buying-used-eqipment/">
                                Покупаем б/у технику
                            </a>
                        </div>
                    </div>
                </li>
                <li class="work-blocks__item">
                    <div class="work-block">
                        <img class="work-block__img" src="/images/pages/main/photo-4.jpg" alt="">
                        <div class="work-block__text">
                            <a class="work-block__link" href="/capital-remont/">
                                Ремонтируем
                            </a>
                        </div>
                    </div>
                </li>
                <li class="work-blocks__item">
                    <div class="work-block">
                        <img class="work-block__img" src="/images/pages/main/photo-2.jpg" alt="">
                        <div class="work-block__text">
                            <a class="work-block__link" href="#">
                                Продаем б/у технику
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <div class="description__row">

    		<!-- карта основных разделов сайта -->
    		<?php include_once $path."tpl/blocks/basic-site-map.php" ?>
    		<!-- /карта основных разделов сайта -->

        </div>
        <div class="description__bottom">

            <p class="description__text">
                <b>Ремонт производится по адресу:</b> 171076, Тверская область, г. Бологое, ул. Народная, 9
            </p>
        </div>

    </div>

</section>
