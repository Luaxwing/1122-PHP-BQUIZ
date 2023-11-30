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

        <img src="" alt="">

    </header>

    <main class="container">
        <h3 class="text-center">網站標題管理</h3>
        <hr>
        <form action="" method="post">
            <table class="table table-bordered text-center">
                <tr>
                    <td>網站標題</td>
                    <td>替代文字</td>
                    <td>顯示</td>
                    <td>刪除</td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="" style="width:300px;height:30px;" alt=""></td>
                    <td><input type="text" name="" id="" style="width:90%"></td>
                    <td><input type="radio" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input class="btn btn-primary" type="button" value="更新圖片"></td>
                </tr>
            </table>
            <div class="d-flex justify-content-between">
                <!-- 2 onclick -->
                <!-- 在執行這裡之前先建立 view.php 以檢查是否有用 -->
                <div><input type="button" value="新增網站標題圖片" onclick="op('#cover','#cvr','view.php?do=title')"></div>
                <!-- 2 -->
                <div>
                    <input type="button" value="修改確定">
                    <input type="reset" value="重置">
                </div>
                <div></div>
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