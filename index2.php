<?php 
 session_start();
  if($_SESSION['status']!="login"){
    header("location: login?pesan=belum_login");
  }
  $user = $_SESSION['nama'];
  $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Meta examples</title>
    
    <meta name="author" content="Chris Mills">
    <meta name="description" content="This is an example page to demonstrate usage of metadata on web pages.">

    <meta property="og:image" content="https://developer.cdn.mozilla.net/static/img/opengraph-logo.dc4e08e2f6af.png">
    <meta property="og:description" content="This is an example page to demonstrate usage of metadata on web pages.">
    <meta property="og:title" content="Metadata; The HTML &lt;head&gt;, on MDN">

    <link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js" defer></script>
  </head>
  <body>
    <h1>Meta examples</h1>

    <p>Japanese example: ご飯が熱い。</p>
  </body>
</html>