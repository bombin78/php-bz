<ul class="bz-breadcrumbs">
<?php
    foreach($breadcrambItems as $key => $item) {

        echo "<li class='bz-breadcrumbs__item'>";
        if($key < count($breadcrambItems) - 1) {
            echo "<a class='bz-breadcrumbs__link' href='/" . $item[$linkParam] . "'>" . $item['name'] . "</a>";
            echo "<span class='bz-breadcrumbs__separator'>/</span>";
        } else {
            echo "<span class='bz-breadcrumbs__current' title=" . $item['name'] . "'>" . $item['name'] . "</span>";
        }
        echo "</li>";
    }
?>
</ul>
