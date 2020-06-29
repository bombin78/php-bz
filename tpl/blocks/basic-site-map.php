<div class="basic-site-map">
    <h3 class="basic-site-map__title">Разделы сайта</h2>
    <img class="basic-site-map__img" src="/images/pages/main/site-map.png" title="карта сайта" usemap="#Map" border="0" alt="site-map.png" width="953" height="650">
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
