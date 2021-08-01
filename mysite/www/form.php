<?php
function db($name,$email,$password){
  try{
 // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli("localhost","root","","mybase");
  $mysqli->query("SET NAMES 'utf8'");
    $sql_res = $mysqli->query("INSERT INTO `users`(`login`, `password`, `email`)
    VALUES('$name', '".md5('$password')."','$email')");
    if ($sql_res) {
      require_once('header.php');
      echo
      "<div class=\"alert alert-info\" role=\"alert\">
        Вы успешно зарегистрировалилсь!!!<br/>
        <a href=\"index.php\">Добавить пользователя<a/>
      </div>";
      require_once('footer.php');
    }else {
      $exeption = 'Пользователь с такими данными существует!';
        throw new Exception($exeption);
    }
  }
     catch(Exception $e){
    require_once('header.php');
    echo "<div class=\"alert alert-danger\" role=\"alert\">".
      $e->getMessage()."<br/>
      <a href=\"index.php\">Повтор<a/>
    </div>";
  }
  $mysqli->close();
}


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (mb_strlen($name) > 5 && mb_strlen($email) > 5 && mb_strlen($password) > 5) {
    db($name, $email, $password);
  }else {
    require_once('header.php');
    echo
      "<div class=\"alert alert-danger\" role=\"alert\">
        Поля должны содержать более 5 символов!!!<a href=\"index.php\">Повтор<a/>
      </div>";
    require_once('footer.php');
  }
}

function printres($value)
{
 while (($row = $value->fetch_assoc()) != false) {
   print_r($row);
   echo $row["login"];
   echo "<br/>";
 }
 echo "количество записей равно ".$value->num_rows."<br/>
 -------------------------------------------------------";
}


 ?>
