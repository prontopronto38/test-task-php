<html>
  <!-- [START csslink] -->
  <head>
    <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
  </head>
  <!-- [END csslink] -->
  <body>
    <?php
    if (array_key_exists('content', $_POST)) {
      echo "You wrote:<pre>\n";
      echo htmlspecialchars($_POST['content']);
      echo "\n</pre>";
      echo "\n"+mysql_connect("");
      echo "\n".mysql_connect("");
      echo "\n".upload($_POST['image']);
    }
    ?>
    <form action="/sign" method="post">
      <div><textarea name="content" rows="3" cols="60"></textarea></div>
      <div><textarea name="image" rows="2" cols=60></textarea></div>
      <div><input type="submit" value="Sign Guestbook"></div>
    </form>
  </body>
</html>
