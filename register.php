<?php
print_r($_GET);
header("content-type: text/html; charset=utf-8");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Веди секретное слово)</title>
</head>
<body>
<h1 align="center">Секретное слово))</h1>
<div id="reg_form">
  <form action="/" method="get">
    <select name="city">
           <option value="1">рыбалка</option>
          <option value="2">дискус</option>
          <option value="3">риск</option>
          <option value="4">ранимый</option>
    </select>
      <input type="submit" value="отправть">
  </form>

</div>

</body>
</html>
