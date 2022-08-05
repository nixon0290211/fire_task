<?php

$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $msg = $_POST['message'];

    // バリデーション
    if (empty($msg)) {
        $err_msg = '未入力です';
    }
}





?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>運転日誌フォーム</title>
</head>

<body>
    <h1>運転日誌</h1>
    <form action="" method="POST">
        <div>
            <label for="">日付</label><br>
            <input type="text" name="message"><br>
        
            <label for="">車両</label><br>
            <input type="text" name="message"><br>

            <label for="">用途</label><br>
            <input type="text" name="message"><br>
            <label for="">行き先</label><br>
            <input type="text" name="message"><br>
            <label for="">部署</label><br>
            <input type="text" name="message"><br>
            <label for="">使用者</label><br>
            <input type="text" name="message"><br>
            <!-- バリデーション -->
            <!-- <?php if ($err_msg): ?>
                <ul>
                    <li><?=$err_msg?></li>
                </ul>
            <?php endif; ?> -->
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
    <!-- バリデーション -->
        <!-- <?=htmlspecialchars($msg, ENT_QUOTES, 'UTF-8')?> -->
    </div>
</body>

</html>
