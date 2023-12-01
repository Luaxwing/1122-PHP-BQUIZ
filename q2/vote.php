<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷投票</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/css.css">
    <!-- CSS -->
</head>

<body>
    <!-- HEADER -->
    <header class="p-5">
        <h1 class="text-center">問卷投票</h1>
    </header>
    <!-- HEADER END -->
    <main class="container">
        <fieldset>
            <legend>目前位置 : 首頁 > 問卷調查 > 問卷投票</legend>
            <!-- question -->
            <?php
            $subject = $Que->find($_GET['id']);
            ?>
            <h2 class="text-center">
                <?=
                    $subject['text'];
                ?>
            </h2>


            <!-- question -->
            <!-- opt-1 -->
            <!-- opt-2 -->
            <!-- opt-3 -->
            <!-- ..... -->
            <form action="api/add_vote.php" method="post">
                <ul class="list-group col-6 mx-auto">
                    <?php
                    $opts = $Que->all(['subject_id' => $_GET['id']]);
                    foreach ($opts as $idx => $opt) {
                        ?>
                        <li class="list-group-item list-group-item-action">
                            <input type="radio" name="opt" value=" <?= $opt['id']; ?>">
                            <?= $opt['text']; ?>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4 text-center">
                        <input type="submit" value="我要投票" class="btn btn-primary">
                    </div>
                    <div class="col-4"></div>
                </div>
            </form>




            <!-- vote!! -->
        </fieldset>
    </main>


    <!-- SCRIPT -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!-- SCRIPT -->
</body>

</html>