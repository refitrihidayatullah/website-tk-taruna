<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/css.css">
    <title>Login</title>
</head>

<body>
    <div class="login-form">
        <h1>TK TARUNA BAHARI</h1>
        <div class="container-login">
            <div class="main">
                <div class="content-login">
                    <h2>Log In</h2>
                    <form action="" method="post">
                        <input type="text" name="username" placeholder="Username" autofocus>
                        <input type="password" name="password" placeholder="Password" autofocus>
                        <button class="btn-login" type="submit">Log In</button>
                    </form>
                </div>
                <div class="form-img">
                    <img src="<?= base_url(); ?>assets/images/6.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>