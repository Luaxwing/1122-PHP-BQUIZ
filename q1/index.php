<?php include_once "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>題組一</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- 3 -->
    <link rel="stylesheet" href="../css/css.css">
    <!-- 3 -->
</head>

<body>
    <!-- 1 -->
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <!-- <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a> -->
            <!-- &#39; = ' -->
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    <!-- 1 -->
    <header class="container">
        <?php
        $img = $Title->find(['sh' => 1]);
        // dd($img);
        ?>
        <img src="img/<?= $img['img'] ?>" alt="">

    </header>

    <main class="container">
        <h3 class="text-center">網站標題管理</h3>
        <hr>
        <form action="edit_title.php" method="post">
            <table class="table table-bordered text-center">
                <tr>
                    <td>網站標題</td>
                    <td>替代文字</td>
                    <td>顯示</td>
                    <td>刪除</td>
                    <td></td>
                </tr>
                <?php
                // 這裡是關鍵,$row['id'] 的"輸入"幾乎影響每個操作
                $rows = $Title->all();
                foreach ($rows as $row) {
                    // 
                    ?>
                    <tr>
                        <td><img src="./img/<?= $row['img']; ?>" style="width:300px;height:30px"></td>
                        <td><input type="text" name="text[]" id="" value="<?= $row['text']; ?>" style="width:90%"></td>
                        <td><input type="radio" name="sh" id="" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td><input type="checkbox" name="del[]" id="" value="<?= $row['id']; ?>"></td>
                        <td><input class='btn btn-primary' type="button" value="更新圖片"
                                onclick="op('#cover','#cvr','upload_title.php?id=<?= $row['id']; ?>')"></td>
                        <!-- 單獨發請求用get -->
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                        <?php
                }
                ?>
            </table>
            <div class="d-flex justify-content-between">
                <!-- 2 onclick -->
                <!-- 在執行這裡之前先建立 view.php 以檢查是否有用 -->
                <div><input type="button" value="新增網站標題圖片" onclick="op('#cover','#cvr','title.php')"></div>
                <!-- 2 -->
                <div>
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                </div>
                <!-- div>input:submit+input:reset -->
                <div>
                </div>
            </div>
        </form>
    </main>

    <!-- 2 -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js.js"></script>
    <!-- 2 -->
    <script src="../js/bootstrap.js"></script>
</body>

</html>