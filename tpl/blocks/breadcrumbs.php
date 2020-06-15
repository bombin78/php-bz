<ul class="breadcrumbs">
<?php
    foreach($breadcrambItems as $key => $item) {
        echo '<li class="breadcrumbs__item">';
        //if($key < $breadcrambItems.count()) {
            echo '<a href="'.$item['url'].'" title="'.$item['name'].'">'.$item['name'].'</a>';
        //}
        echo '</li>';
    }
?>
</ul>
