<ul class="breadcrumbs">
<?php
    foreach($breadcrambs as $item) {
        echo '<li class="first">';
        echo '<a href="'.$item['url'].'" title="'.$item['name'].'">'.$item['name'].'</a>';
        echo '</li>';
    }
?>
</ul>
