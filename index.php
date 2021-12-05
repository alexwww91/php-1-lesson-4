<?php
$images = scandir("img");
//print_r($images);

for ($i = 2, $j = 1; $i < count($images); $i++, $j++) {
    ?>
        <a href="fullimages.php?img=<?= $images[$i] ?>"><img src="img/<?= $images[$i] ?>" alt="" width="100px"></a>
    <?php
        if ($j % 3 == 0) {
            ?>
                <br>
            <?php
        }
}
