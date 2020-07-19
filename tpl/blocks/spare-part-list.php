<ul class="spare-part-list">
<?php
    foreach($sparePartsItems as $section) {

        echo "<li class='spare-parts-section'>";
        echo "<h2 class='spare-parts-section__title'>" . $section['title'] . "</h2>";
        echo "<dl class='spare-parts'>";

            foreach($section['items'] as $key => $item) {
                echo "<dt class='spare-parts__label'>". ($key + 1) . "</dt>";
                echo "<dd class='spare-parts__value'>". $item['title'] . "</dd>";
            }

        echo "</dl>";
        echo "</li>";
    }
?>
</ul>
