
<!-- https://codepen.io/brnysn/pen/KJXbMY -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
    <title>login</title>
</head>

<body >
<form class="box" action="/admin" method="POST" target="_self">
  <h1>giriş</h1>
  @csrf
  <input type="text" name="username" id="username" placeholder="kullanıcı adı" autocomplete="off">
  <input type="password" name="pass" id="pass" placeholder="şifre" autocomplete="off">
  <input type="submit" id="submit" value="giriş">
</form>





</body>
</html>