<?
require_once '/templates/config.php';

$sql = "SELECT id, title, created_at FROM posts ORDER BY created_at DESC";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mini Blog</title>
</head>

<body>
  <h1>Mini Blog</h1>
  <a href="add_post.php">Добавить новый пост</a>
  <h2>Все посты</h2>
  <ul>
    <?php while ($row = $result->fetch_assoc()) : ?>
      <li>
        <a href="view_post.php?id=<?= $row['id'] ?>">
          <?= htmlspecialchars($row['title']) ?>
        </a>
        (<?= $row['created_at'] ?>)
      </li>
    <?php endwhile; ?>
  </ul>
</body>

</html>
<?
$mysqli->close();
?>