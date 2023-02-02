<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>確認画面</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="penguin_act.php" method="POST" class="content" enctype="multipart/form-data">
        <legend>ペンギン登録フォーム</legend>
        <div>
            ペンギン登録後は誰でも編集できるようになります。入力できる項目のみお願いします。
        </div>
        <div>
            記入者ニックネーム
            <input type="text" name="username">
            ペンギンの名前
            <input type="text" name="penguinname">
            孵化日
            <input type="text" name="birth">
            ペンギンの種類
            <input type="text" name="penguinvalue">
            ペンギンの特徴
            <input type="text" name="feature">
            施設名
            <input type="text" name="place">
        </div>
        <div>画像を登録
            <td><input type="file" name="pic" accept="image/*"></td>
        </div>
        <button value="button">登録する</button>
        </div>
    </form>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('button').on("click", function () {
        alert('ペンギン登録が完了しました。');
    });
</script>

<script>
    $('.file').on('change', function (e) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.thumbnail').attr('style', 'background-image: url(' + e.target.result + ');');
        };
        reader.readAsDataURL(e.target.files[0]);

    });
</script>