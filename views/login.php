<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="<?echo SRCPATH;?>/css/login.css">
    <title>Design Studio</title>
</head>

<body>
<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <?php include(ROOT.'/components/alert_text.php');?>
                <div class="login-page">
                    <div class="form">
                        <form class="register-form" method="post">
                            <input type="text" name="name" placeholder="name" required/>
                            <input type="password" name="password" placeholder="password" required/>
                            <input type="email" name="email" placeholder="email address" required/>
                            <button type="submit" name="singup">create</button>
                            <p class="message">Already registered? <a href="#">Sign In</a></p>
                        </form>
                        <form class="login-form" method="post">
                            <input type="text" name="name" placeholder="username" required/>
                            <input type="password" name="password" placeholder="password" required/>
                            <button type="submit" name="login">login</button>
                            <p class="message">Not registered? <a href="#">Create an account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?echo SRCPATH;?>/js/main.js"></script>
</body>

</html>