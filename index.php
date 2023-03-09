<html>
  <head>
  	<link rel="stylesheet" href="../holywar/game/design/shire_0.css" type="text/css">
    <title>Lao's Start Page</title>
  </head>
  <!--
  <frameset rows="20,*" frameborder="NO" border="0" framespacing="0">
    <frame name="MnuFrame" scrolling="NO" marginwidth="0" marginheight="0" noresize src="menu.php">     
    <frame name="MnFrame" marginwidth="0" marginheight="0">
  </frameset>
  <noframes>
  </noframes>
  -->
  <body class="body">
  <?
  if (isset($_GET['page']))
  	include $_GET['page'];
  else
  	include "menu.php";
  ?>
  </body>
</html>