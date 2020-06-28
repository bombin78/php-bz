<ul class="breadcrumbs">
<?php
    foreach($breadcrambItems as $key => $item) {

        echo "<li class='breadcrumbs__item'>";
        if($key < count($breadcrambItems) - 1) {
            echo "<a href='/" . $item[$linkParam] . "'>" . $item['name'] . "</a>";
            echo "<span class='breadcrumbs__separator'>/</span>";
        } else {
            echo "<span title=" . $item['name'] . "'>" . $item['name'] . "</span>";
        }
        echo "</li>";
    }
?>
</ul>
