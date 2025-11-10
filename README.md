🎬 Video Management System
Overview

This is a web-based video management system built using PHP, HTML, CSS, and JavaScript.
The system allows users to upload videos, view uploaded videos, and play/manipulate them through an interactive and stylish interface.

The system features a baby pink theme, smooth hover effects, and video controls like play, pause, rotate, speed change, and filter effects.

Features

Upload videos (MP4, MOV, AVI, MKV formats supported)

View a list of all uploaded videos

Play videos with controls for:

Play / Pause

Stop

Rotate

Apply filters (grayscale, sepia, contrast, blur)

Change playback speed (0.5x, 1x, 1.5x, 2x)

Interactive UI with hover effects and smooth transitions

Styled with a baby pink theme for a modern look
Folder Structure
video-system/
│
├── index.php        ← Homepage
├── upload.php       ← Video upload page
├── list.php         ← List of uploaded videos
├── player.php       ← Video player page
├── script.js        ← JavaScript for video controls
├── style.css        ← CSS styling and theme
└── uploads/         ← Folder to store uploaded videos
nstallation & Running the Project

Install XAMPP (or another PHP local server)

Download XAMPP: https://www.apachefriends.org

Move project folder

Copy the video-system folder to:

C:\xampp\htdocs\


Start Apache

Open XAMPP Control Panel → click Start next to Apache

Open the project in a browser

http://localhost/video-system/index.php


Use the system

Upload videos using the Upload Video page

View uploaded videos on the Video List page

Play and manipulate videos on the Player Page

Supported Video Formats

MP4

MOV

AVI

MKV

Notes

Keep the uploads folder intact — it stores all your videos.

The system works best on modern browsers like Chrome, Edge, or Firefox.

Ensure Apache is running; otherwise PHP pages will not load.
