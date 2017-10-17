<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">  
    <meta http-equiv="X-UA-Compatible" content="IE-edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Template</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php 
			include "menu.php";
			include "content.php";
			if (array_key_exists('page', $_GET)) $page = $_GET['page'];
			else $page = 1;
			echo Menu::renderMenu($page);
			echo Content::getPages($page - 1);
		?>
  </body>
</html>