<ul class="breadcrumbs">
<?php
    foreach($breadcrambItems as $key => $item) {

        echo "<li class='breadcrumbs__item'>";
        if($key < count($breadcrambItems) - 1) {
            echo "<a class='breadcrumbs__link' href='/" . $item[$linkParam] . "'>" . $item['name'] . "</a>";
            echo "<span class='breadcrumbs__separator'>/</span>";
        } else {
            echo "<span class='breadcrumbs__current' title=" . $item['name'] . "'>" . $item['name'] . "</span>";
        }
        echo "</li>";
    }
?>
</ul>
