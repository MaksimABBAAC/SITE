<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="/img/Pepeland-icon.svg.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>PEPE</title>
</head>
<body>
<?php include ("header.php")?>
<div class="head_background"></div>
<h2>MEME DATABASE</h2>
<div class="slider">
  <button class="prev"><</button>
  <div class="slides">
    <img src="/img/pepe1.jpg" alt="Slide 1">
    <img src="/img/pepe2.jpg" alt="Slide 2">
    <img src="/img/pepe3.jpg" alt="Slide 3">
  </div>
  <button class="next">></button>
</div>
<footer>
  
  <div class="contact">
    <h3>Contact Us</h3>
    <div class="phone">123-456-789</div>
    <div class="email">info@example.com</div>
  </div>
  <div class="form">
    <form>
      <h3>Add your meme</h3>
      <input type="email" placeholder="Your email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{5}">
      <label for="image">Upload an meme:</label>
      <input type="file" id="image" name="image">
      <img src="">
      <button type="submit">Send MEME</button>
    </form>
  </div>
</footer>
<script src="/js/slaider.js"></script>
</body>
</html>