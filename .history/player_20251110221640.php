<?php
$file = isset($_GET['file']) ? 'uploads/' . basename($_GET['file']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Video Player</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Video Player</h1>

  <?php if ($file && file_exists($file)): ?>
    <video id="videoPlayer" width="600" controls>
      <source src="<?= htmlspecialchars($file) ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <div class="controls">
      <button onclick="playPause()">Play/Pause</button>
      <button onclick="stopVideo()">Stop</button>
      <button onclick="rotateVideo()">Rotate</button>
      <button onclick="applyFilter()">Apply Filter</button>
    </div>
  <?php else: ?>
    <p>No video selected. Go to <a href="list.php">video list</a> to choose one.</p>
  <?php endif; ?>

  <script src="script.js"></script>
  <a href="index.php">⬅ Back to Home</a>
</body>
</html>
