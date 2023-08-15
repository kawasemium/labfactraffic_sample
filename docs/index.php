<?php

    $fp = fopen("../testdata.csv", "r");
    $arr =array();

    $row=0;
    while($ret=fgetcsv($fp)){
        for($col=0;$col<count($ret);$col++){
            $arr[$col][$row]=$ret[$col];
        }
        $row++;
    }

    fclose($fp);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LabFacTraffic_Sample</title>
</head>
<body>
    <h1>これからラボファクトラフィックになるもの</h1>
    <br>
    <h4>PHPのテスト中</h4>

    <ul>
        <?php foreach ($arr as $data): ?>
            <?= "<li>" ?>
            <?= $data[0].", ".$data[1] ?>
            <?= "</li>" ?>
        <?php endforeach; ?>
    </ul>



    <script src="script.js"></script>
</body>
</html>