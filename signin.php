<html>
  <!-- [START csslink] -->
  <head>
    <!--<link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />-->
        <link type="text/css" rel="stylesheet" href="style.css" />
    <!--<STYLE type="text/css">-->
<!--
   H1 { color: red }
   P  { color: blue}
   -->
   <!--BODY { background-color: blue }
</STYLE>-->
  </head>
  <!-- [END csslink] -->
  <body>
    <?php
    if (array_key_exists('content', $_POST)) {
      echo "You wrote:<pre>\n";
      echo htmlspecialchars($_POST['content']);
      echo "\n</pre>";
    }
    ?>
    <form action="/sign" method="post">
      <div><textarea name="content" rows="3" cols="60"></textarea></div>
      <div><input type="submit" value="Sign Guestbook"></div>
    </form>
  </body>
</html>
