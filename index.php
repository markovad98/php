<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
    <?php
        if($_COOKIE["user"] == ''):
    ?>
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1> 
                <form action="check.php" method="post">
                    <input class="form-control" id="login" name="login" placeholder="enter login" type="text"> <br>
                    <input class="form-control" id="name" name="name" placeholder="enter name" type="text"> <br>
                    <input class="form-control" id="password" name="password" placeholder="enter password" type="password"> <br>
                    <button type="submit" class="btn btn-success">Enter</button>
                </form>
            </div> 

            <div class="col">
                <h1>Форма авторизации</h1> 
                <form action="auth.php" method="post">
                    <input class="form-control" id="login" name="login" placeholder="enter login" type="text"> <br>
                    <input class="form-control" id="password" name="password" placeholder="enter password" type="password"> <br>
                    <button type="submit" class="btn btn-success">Auth</button>
                </form>
            </div> 
        <?php else:?>
        <p> Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a> </p>
        <?php endif;?>
        </div>
    </div>
    
</body>
</html>