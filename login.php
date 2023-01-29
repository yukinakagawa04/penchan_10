<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <form action="login_act.php" method="POST" class="content">
        <fieldset>
            <legend>ログイン画面</legend>
            <div>
                email: <input type="text" name="email">
            </div>
            <div>
                password: <input type="text" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <a href="register.php">or register</a>
        </fieldset>
    </form>

</body>

</html>