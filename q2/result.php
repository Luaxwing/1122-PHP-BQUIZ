<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票結果</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/css.css">
    <!-- CSS -->
    <style>
    .maxwidth {
        max-width: 33.33%;
    }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header class="p-5">
        <h1 class="text-center">投票結果</h1>
    </header>
    <!-- HEADER END -->
    <main class="container">
        <fieldset class="scheduler-border">
            <legend class=>目前位置 : 首頁 > 問卷調查 > 投票結果</legend>
            <!-- QUESTION -->
            <?php
            $subject = $Que->find($_GET['id']);
            ?>
            <h2 class="text-center">
                <?=
                    $subject['text'];
                ?>
            </h2>

            <!-- VOTE RESULT -->
            <ul class="list-group col-6 mx-auto">
                <?php
                $opts = $Que->all(['subject_id' => $_GET['id']]);
                foreach ($opts as $idx => $opt) {
                    $div = ($subject['count'] != 0) ? $subject['count'] : 1;
                    $rate = round($opt['count'] / ($subject['count']), 3)*100;
                    ?>
                <li class="list-group-item list-group-item-action">
                    <div class="d-flex">
                        <div class="col-4">
                            <?= $opt['text'] . "&nbsp&nbsp;:&nbsp&nbsp;"; ?>
                        </div>
                        <div class="col p-1">
                            <div class="progress" style>
                                <div class="progress-bar" role="progressbar" style="width:<?=$rate;?>%"
                                    aria-valuenow="<?=$rate;?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col">
                            <?=
                                    $opt['count'] . "票($rate%)";
                                ?>
                        </div>





                    </div>


                </li>
                <?php
                }
                ?>
            </ul>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4 text-center">
                    <button class="btn btn-primary" onclick="location.href='index.php'">返回</button>
                </div>
                <div class="col-4"></div>
            </div>
        </fieldset>
    </main>


    <!-- SCRIPT -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!-- SCRIPT -->
</body>

</html>