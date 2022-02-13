<?php   session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php require_once('Pattern/header.php') ?>

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>

        <div class="row g-5">

            <div class=" col-md-7 col-lg-8">
                <h4 class="mb-3">Заполните форму!</h4>
                <form action="valid_handler.php" method="post" enctype="multipart/form-data" >
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Имя</label>
                            <input type="text" name="name" class="form-control" value="<?= $_SESSION['name'];?>" id="firstName" placeholder="" required="required">
                            <div class="text-danger"><?=$_SESSION['error_name']?></div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Фамилия</label>
                            <input type="text" name="lastname"  class="form-control" id="lastName" value="<?= $_SESSION['lastname'];?>" placeholder=""  required="required">
                            <div class="text-danger"><?=$_SESSION['error_lastname']?></div>
                        </div>

                        <div class="col-sm-6">
                            <label for="patronymic" class="form-label">Отчество</label>
                            <input type="text" name="patronymic" class="form-control" id="lastName" value="<?=$_SESSION['patronymic'];?>" placeholder="" required="required" >
                            <span class="error"><?= $_SESSION['error_patronymic'];?></span>
                        </div>

                        <div class="col-12">
                            <label for="PhoneNumber" class="form-label">Номер телефона</label>
                            <div class="input-group has-validation">
                                <input name="phone" type="text" value="<?= $_SESSION['phone'];?>" class="form-control"  id="username" placeholder="Номер телефона" required="required">
                                <span class="error"><?= $_SESSION['error_phone'];?></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" name="email" class="form-control" id="email"  placeholder="you@example.com">
                            <div class="text-danger"><?=$_SESSION['error_email'],$_SESSION['error_domain_email']?></div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address"  class="form-control" id="address" placeholder="1234 Main St" >
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                            <div class="form-group">
                                Файл: <input type="file" name="file" placeholder="" value=""/>
                              <!--  <input type="submit" name="submit_image" value="Загрузить" />-->
                            </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Комментарий</label>
                            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <hr class="my-4">

                        <button type="submit" class="btn btn-success">Отправить форму</button>


                </form>
            </div>
        </div>
    </div>
    </main>
</div>
<?php require_once('Pattern/footer.php') ?>
</body>
</html>

