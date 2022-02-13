<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['lastname']);
unset($_SESSION['patronymic']);
unset($_SESSION['phone']);

unset($_SESSION['error_name']);
unset($_SESSION['error_lastname']);
unset($_SESSION['error_patronymic']);
unset($_SESSION['error_phone']);
unset($_SESSION['error_email']);
unset($_SESSION['error_domain_email']);

function redirect(){
    header('Location:main.php');
    exit;
}

$name= htmlspecialchars(trim($_POST['name']));
$lastname= htmlspecialchars(trim($_POST['lastname']));
$patronymic= htmlspecialchars(trim($_POST['patronymic']));
$phone= htmlspecialchars(trim($_POST['phone']));
$email= htmlspecialchars(trim($_POST['email']));
$address= htmlspecialchars(trim($_POST['address']));
$comment= htmlspecialchars(trim($_POST['comment']));


$_SESSION['name'] = $name;
$_SESSION['lastname'] = $lastname;
$_SESSION['patronymic'] = $patronymic;
$_SESSION['phone'] = $phone;
$_SESSION['email'] = $email;
//$_SESSION['address'] = $address;


if (!empty($_POST['name'])) {

    $name = $_POST['name'];
    $_SESSION['name']=$name;

}else{
    $_SESSION['error_name']="Введите ваше имя";
    redirect();
}

if (!empty($_POST['lastname'])){
    $lastname=$_POST['lastname'];
    $_SESSION['lastname']=$lastname;
}else{
    $_SESSION['error_lastname'] = "Введите фамилию";
    redirect();
}

if (!empty($_POST['patronymic'])){
    $patronymic=$_POST['patronymic'];
     $_SESSION['patronymic']=$patronymic;

}else{
    $_SESSION['error_patronymic']='Введите ваше отчество';
    redirect();
}

if (!empty($_POST['phone'])){
    $phone=$_POST['phone'];
    $_SESSION['phone']=$phone;


}else{
    $_SESSION['error_phone']='Введите номер телефона';
    redirect();
}
if (!empty($_POST['address'])){
   $address= $_POST['address'];

}
if (!empty($_POST['comment'])){
    $comment = $_POST['comment'];
}

if (!empty($_FILES['file'])){
    $file = $_FILES['file'];
    $filename=$file['name'];
    $puthFile=__DIR__. '/img/'.$filename;
    move_uploaded_file($file['tmp_name'],$puthFile);

}

//Проверка email
if(strlen($email)<10 || strpos($email,"@")==false){
    $_SESSION['error_email']=$error_email="Вы ввели некоретный email";
        redirect();
}
// Проверка на домен
$domain_list = ["@gmail.com"];
$imp_list = join($domain_list);
//var_dump($imp_list);
 if(preg_match("/($imp_list)/iu", $email, $m)){
    $_SESSION['error_domain_email'] =$error_domain_email='Домен ' . str_replace('@', '', $m[0]) . ' использовать нельзя';
    redirect();
}else {
     "";
 }

?>

