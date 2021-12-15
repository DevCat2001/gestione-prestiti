<?php
  include_once('../template-parts/header.php');
  include_once('../template-parts/navbar.php');
  include_once('../template-parts/content.php');

  $content = isset($_GET["page"]) ? $_GET["page"] : 'homepage' ;

  //include_once('content');
  echo('<h1>Content</h1>');

  include_once('../template-parts/sidebar.php');
  include_once('../template-parts/footer.php');
?>