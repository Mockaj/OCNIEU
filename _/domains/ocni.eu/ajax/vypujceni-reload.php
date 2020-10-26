<?php
require_once '../inc/Database.php';
$myPost = filter_input_array(INPUT_POST);

$dateFrom = date("Y-m-d", strtotime(str_replace("/", "-", $myPost['dateFrom'])));
$dateTo = date("Y-m-d", strtotime(str_replace("/", "-", $myPost['dateTo'])));


$kola = [];
foreach ($database->kola as $loop) {

    if ($database->vypujceni->where("kola_id", $loop['id'])
                    ->and("datumOd <= ? AND datumDo >= ?", $dateTo, $dateFrom)->count() == 0) {
        $loop['status'] = "1";
        $kola[] = $loop;
        continue;
    }
    if ($database->vypujceni->where("kola_id", $loop['id'])
                    ->and("datumOd < ? AND datumDo > ?", $dateTo, $dateFrom)->count() == 0) {
        $loop['status'] = "2";
        $kola[] = $loop;
    }
}

foreach ($kola as $kolo) {

    $status = ($kolo['status'] == 1 ? '<td class="center" style="color:green;"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>' : '<td class="center" style="color:red;"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span></td>');
    ?>

    <tr>
        <td><?= $kolo['nazev'] ?></td>
        <td><?= $kolo['ram'] ?></td>
        <td><a href="files/bikes/full/<?=$kolo['pic']?>"  data-lightbox="bike-<?= $kolo['id'] ?>"><img src="files/bikes/thumb/<?=$kolo['pic']?>"></a></td>
        <td><input type="checkbox" name="vehicle[]" value="<?= $kolo['id'] ?>"></td>
        <?= $status ?>
    </tr>

    <?php
}

