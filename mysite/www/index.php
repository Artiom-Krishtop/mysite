<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Форма обратной связи</title>
  </head>
  <body>
    <form class="form-signin" action="form.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
        <label for="name" class="sr-only">Имя</label>
          <input type="text" name="name" class="form-control" placeholder="Имя" required="" autofocus="">
        <label for="email" class="sr-only">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Email" required="" autofocus="">
        <label for="password" class="sr-only">Пароль</label>
          <input type="password" name="password" class="form-control" placeholder="Пароль" required="">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
  </body>
</html>
