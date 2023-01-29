<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザ登録画面</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <form action="register_act.php" method="POST" class="content">
        <fieldset>
            <legend>ユーザ登録画面</legend>
            <div>
                email: <input type="text" name="email">
            </div>
            <div>
                password: <input type="text" name="password">
            </div>
            <div>
                <button>登録する</button>
            </div>
            <a href="login.php">or login</a>
        </fieldset>
    </form>

</body>

</html>