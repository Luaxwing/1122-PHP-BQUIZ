<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷調查</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/css.css">
    <!-- CSS -->
</head>

<body>
    <!-- HEADER -->
    <header class="p-5">
        <h1 class="text-center">問卷調查</h1>
    </header>
    <!-- HEADER END -->

    <!-- MAIN -->
    <main class="container">
        <fieldset>
            <legend>目前位置 : 首頁 > 問卷調查</legend>
            <table class="table">
                <tr>
                    <th>編號</th>
                    <th>問卷題目</th>
                    <th>投票總數</th>
                    <th>結果</th>
                    <th>狀態</th>
                </tr>
                <!-- 撈資料 -->
                <?php
                // $idx --- index
                $ques = $Que->all(['subject' => 0]);
                foreach ($ques as $idx => $que) {
                    ?>
                    <tr>
                        <td>
                            <?= $idx + 1; ?>
                        </td>
                        <td>
                            <?= $que['text']; ?>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <?php
                }
                ?>
            </table>
        </fieldset>
    </main>
    <!-- MAIN END -->






    <!-- FOOTER -->

    <!-- FOOTER END -->


    <!-- SCRIPT -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!-- SCRIPT -->
</body>

</html>