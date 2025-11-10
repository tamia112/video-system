<?php
$uploadDir = 'uploads/';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['video'])) {
    $file = $_FILES['video'];
    $targetFile = $uploadDir . basename($file['name']);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (in_array($fileType, ['mp4', 'webm', 'ogg'])) {
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            $message = "✅ Video uploaded successfully!";
        } else {
            $message = "❌ Error uploading video.";
        }
    } else {
        $message = "⚠️ Invalid file type. Only MP4, WEBM, and OGG allowed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload Video</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Upload Video</h1>
  <form method="post" enctype="multipart/form-data">
    <label>Select video file:</label>
    <input type="file" name="video" accept="video/*" required><br><br>
    <button type="submit">Upload</button>
  </form>
  <p><?= $message ?></p>
  <a href="index.php">⬅ Back to Home</a>
</body>
</html>
