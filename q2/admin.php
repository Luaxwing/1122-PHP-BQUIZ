<?php include_once('db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷管理後臺</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/css.css">
    <!-- CSS -->
    <style>
        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow: 0px 0px 0px 0px #000;
            box-shadow: 0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header class="p-5">
        <h1 class="text-center">問卷管理</h1>
    </header>
    <!-- HEADER END -->

    <main class="container">
        <fieldset class="scheduler-border">
            <legend>新增問卷</legend>
            <form action="api/add_que.php" method="post">
                <div class="d-flex">
                    <div class="col-3 bg-light p-2">問卷名稱</div>
                    <div class="col-6 p-2"><input type="text" name="subject" id=""></div>
                </div>
                <div class="d-flex bg-ilght">
                    <div>
                        <div class="p-2">
                            <label for="">選項</label>
                            <input type="text" name="opt[]" id="">
                        </div>
                        <div id="option"></div>
                    </div>
                    <div class="p-2">
                        <input type="button" value="更多" onclick="more()">
                    </div>

                </div>
                <div>
                    <input type="submit" value="新增">
                    <input type="reset" value="清空">
                </div>
            </form>
        </fieldset>

        <fieldset>
            <legend></legend>
            <table class="table">
                <?php
                $ques = $Que->all(['subject_id' => 0]);
                foreach ($ques as $idx => $que) {
                    ?>
                    <tr>
                        <td>
                            <?= $idx + 1; ?>
                        </td>
                        <td>
                            <?= $que['text']; ?>
                        </td>
                        <td>
                        
                            <a href="api/show.php?id=<?=$que['id'];?>" class="btn <?=($que['sh']==1)?'btn-info':'btn-success';?>">
                                <?=($que['sh']==1)?'顯示':'隱藏';?>
                        </a>
                                
                            <button class="btn btn-success">
                                編輯
                            </button>
                            <a href="./api/del.php?id=<?= $que['id']; ?>">
                                <button class="btn btn-danger">刪除</button>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </fieldset>
    </main>







    <!-- FOOTER -->

    <!-- FOOTER END -->


    <!-- SCRIPT -->

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/bootstrap.js"></script>

    <!--  -->

    <script>

        function more() {
            let opt = `<div class="p-2">
                        <label for="">選項</label>
                        <input type="text" name="opt[]" id="">
                       </div>`
            $("#option").before(opt)
        }

    </script>

    <!-- SCRIPT -->
</body>

</html>