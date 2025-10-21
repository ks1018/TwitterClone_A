<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Views/img/logo-twitterblue.svg">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../Views/css/style.css">
    
    <title>ログイン画面 / Twitterクローン</title>
    <meta name="description" content="ログイン画面です">
</head>
<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-in.php" method="post">
            <img src="../Views/img/logo-white.svg" alt="" class="logo-white">
            <h1>Twitterクローンにログインする</h1>
            <input type="email" class="form-control" name="email" placeholder="メールアドレス" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="パスワード" required>
            <button class="w-100 btn btn-lg" type="submit">ログインする</button> 
            <p class="mt-3 mb-2"><a href="sign-up.php">会員登録する</a></p>
            <p class="mt-2 mb-3">&copy; 2025</p>
        </form>
    </main>
</body>
</html>