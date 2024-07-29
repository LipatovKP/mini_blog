<?
require_once 'templates/config.php';

$id = intval($_GET['id']);
$sql = "SELECT title, content, created_at FROM posts WHERE id = $id";
$result = $mysqli->query($sql);

if ($result->num_rows == 1) {
  $post = $result->fetch_assoc();
} else {
  die("Post not found");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars($post['title']) ?></title>
</head>

<body>
  <h1><?= htmlspecialchars($post['title']) ?></h1>
  <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
  <p><em>Опубликовано: <?= $post['created_at'] ?></em></p>
  <a href="index.php">Назад к списку постов</a>
</body>

</html>
<?
$mysqli->close();
?>
