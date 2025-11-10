let rotation = 0;
const video = document.getElementById('videoPlayer');

function playPause() {
  if (video.paused) video.play();
  else video.pause();
}

function stopVideo() {
  video.pause();
  video.currentTime = 0;
}

function rotateVideo() {
  rotation = (rotation + 90) % 360;
  video.style.transform = `rotate(${rotation}deg)`;
}

function applyFilter() {
  const filters = [
    'none',
    'grayscale(1)',
    'sepia(1)',
    'contrast(1.5)',
    'brightness(1.3)',
    'blur(3px)'
  ];
  const random = Math.floor(Math.random() * filters.length);
  video.style.filter = filters[random];
}
