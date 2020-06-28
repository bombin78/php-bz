<section class="page">

	<h1 class="page__content-title content-title"><?php echo $title; ?></h2>

	<div class="description">

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

        <div class="description__imgs">
            <img class="description__img" src="/images/pages/main/gmov3.jpg" title="дрезина 1" alt="фото3.jpg">
            <img class="description__img" src="/images/pages/main/IMG_20181221_114302.jpg" title="дрезина 2" alt="IMG_20181221_114302.jpg">
            <img class="description__img" src="/images/pages/main/IMG_20181219_111451.jpg" title="дрезина 3" alt="IMG_20181219_111451.jpg">
        </div>

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

        <ul class="work-blocks">
            <li class="work-blocks__item">Покупаем б/у технику</li>
            <li class="work-blocks__item">Ремонтируем</li>
            <li class="work-blocks__item">Продаем б/у технику</li>
        </ul>

        <ul class="progress">
            <li class="progress__item">70 лет на рынке</li>
            <li class="progress__item">Десятки отремонтированных машин</li>
            <li class="progress__item">Станочный парк более 50-ти единиц</li>
            <li class="progress__item">Собственные подъездные пути</li>
        </ul>

        <div class="site-map">
            <h3 class="site-map__title">Разделы сайта</h2>
            <img class="site-map__img" src="/images/pages/main/site-map.png" title="карта сайта" usemap="#Map" border="0" alt="site-map.png" width="953" height="650">
            <map name="Map">
                <!-- главная -->
                <area href="<?= $routesParams[0][$linkParam]?>" coords="468,390,80" shape="CIRCLE">
                <!-- рекуператоры -->
                <area href="<?= $routesParams[1][$linkParam]?>" coords="322,535,70" shape="CIRCLE">
                <!-- капитальный ремонт -->
                <area href="<?= $routesParams[2][$linkParam]?>" coords="670,345,70" shape="CIRCLE">
                <!-- капитальный ремонт - вибропогружатели -->
                <area href="<?= $routesParams[2]['items'][0][$linkParam]?>" coords="750,195,900,240" shape="RECT">
                <!-- капитальный ремонт - Котлованокопатели на любой базе -->
                <area href="<?= $routesParams[2]['items'][2][$linkParam]?>" coords="765,260,918,303" shape="RECT">
                <!-- капитальный ремонт - дрезины -->
                <area href="<?= $routesParams[2]['items'][1][$linkParam]?>" coords="785,325,940,365" shape="RECT">
                <!-- запчачти к машинам АВФ -->
                <area href="<?= $routesParams[3][$linkParam]?>" coords="620,535,70" shape="CIRCLE">
                <!-- изготовление новых машин -->
                <area href="<?= $routesParams[5][$linkParam]?>" coords="468,185,70" shape="CIRCLE">
                <!-- изготовление новых машин - катлованокопатели -->
                <area href="<?= $routesParams[5]['items'][0][$linkParam]?>" coords="504,48,656,90" shape="RECT">
                <!-- изготовление новых машин - вибропогружатели -->
                <area href="<?= $routesParams[5]['items'][1][$linkParam]?>" coords="283,48,436,90" shape="RECT">
                <!-- приобретение и продажа б/у техникики -->
                <area href="<?= $routesParams[6][$linkParam]?>" coords="268,343,70" shape="CIRCLE">
                <!-- приобретение и продажа б/у техникики - Фитинговые платформы -->
                <area href="<?= $routesParams[6]['items'][0][$linkParam]?>" coords="40,415,189,458" shape="RECT">
                <!-- приобретение и продажа б/у техникики - дрезины -->
                <area href="<?= $routesParams[6]['items'][1][$linkParam]?>" coords="20,353,171,395" shape="RECT">
                <!-- приобретение и продажа б/у техникики - Котлованокопатели и вибропогружатели -->
                <area href="<?= $routesParams[6]['items'][2][$linkParam]?>" coords="39,228,190,266" shape="RECT">
                <!-- приобретение и продажа б/у техникики - Котлованокопатели и вибропогружатели -->
                <area href="<?= $routesParams[6]['items'][2][$linkParam]?>" coords="20,291,171,331" shape="RECT">
            </map>
        </div>

        <p class="description__address">
            <b>Ремонт производится по адресу:</b> 171076, Тверская область, г. Бологое, ул. Народная, 9
        </p>

    </div>

</section>
