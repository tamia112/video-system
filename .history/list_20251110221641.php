<?php
$uploadDir = 'uploads/';
$videos = array_diff(scandir($uploadDir), ['.', '..']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Video List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Uploaded Videos</h1>
  <?php if (empty($videos)): ?>
    <p>No videos found.</p>
  <?php else: ?>
    <ul>
      <?php foreach ($videos as $video): ?>
        <li>
          <a href="player.php?file=<?= urlencode($video) ?>"><?= htmlspecialchars($video) ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <a href="index.php">⬅ Back to Home</a>
</body>
</html>
