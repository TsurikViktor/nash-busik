<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!-- Modal -->
<?php
$json = file_get_contents("../../images/cities/cities_". $lang .".json");
$cities = json_decode($json, true);
foreach ($cities as $city) {
    ?>
    <div class="modal fade" id="modal-<?= $city['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel<?= $city['id'] ?>"><?= $city['title'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?= $city['description'] ?></p>
                    <?php
                    if ($city['route']) {
                        echo "<p>" . $endmodals_1 . ": " . $city['route'] . "</p>";
                    }
                    if ($city['map1']) {
                        ?>
                        <p><?=$endmodals_2?> 1:</p>
                        <div class="map-responsive" id="map1">
                            <input type="hidden" value="<?= $city['map1'] ?>">
                            <iframe src="" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if ($city['map2']) {
                        ?>
                        <p><?=$endmodals_2?> 2:</p>
                        <div class="map-responsive" id="map2">
                            <input type="hidden" value="<?= $city['map2'] ?>">
                            <iframe src="" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if ($city['map3']) {
                        ?>
                        <p><?=$endmodals_2?> 3:</p>
                        <div class="map-responsive" id="map3">
                            <input type="hidden" value="<?= $city['map3'] ?>">
                            <iframe src="" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=$endmodals_3?></button>
                    <!--<a href="#" class="a-btn" id="<?= $city['id'] ?>" data-ix="open">Купить</a>-->
                    <button type="button" class="btn btn-danger buybutton" data-ix="open" data-whatever="<?= $city['title'] ?>" data-dismiss="modal"><?=$endmodals_4?></button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<!-- End Modal -->