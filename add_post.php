<?
require_once 'templates/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $mysqli->real_escape_string($_POST['title']);
  $content = $mysqli->real_escape_string($_POST['content']);

  $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
  if ($mysqli->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Добавить новый пост</title>
</head>

<body>
  <h1>Добавить новый пост</h1>
  <form method="post" action="">
    <label for="title">Заголовок:</label><br>
    <input type="text" id="title" name="title" required><br><br>
    <label for="content">Содержание:</label><br>
    <textarea id="content" name="content" rows="10" required></textarea><br><br>
    <input type="submit" value="Добавить">
  </form>
  <a href="index.php">Назад к списку постов</a>
</body>

</html>
<?php
$mysqli->close();
?>
