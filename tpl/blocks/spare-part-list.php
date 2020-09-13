<ul class="bz-spare-part-list">
<?php
    foreach($sparePartsItems as $section) {

        echo "<li class='bz-spare-parts-section'>";
        echo "<h2 class='bz-spare-parts-section__title'>" . $section['title'] . "</h2>";
        echo "<dl class='bz-spare-parts'>";

            foreach($section['items'] as $key => $item) {
                echo "<dt class='bz-spare-parts__label'>". ($key + 1) . "</dt>";
                echo "<dd class='bz-spare-parts__value'>". $item['title'] . "</dd>";
            }

        echo "</dl>";
        echo "</li>";
    }
?>
</ul>
