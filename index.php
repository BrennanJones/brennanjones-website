<?php
  if (isset($_GET["section"]))
  {
    $section = $_GET["section"];
  }
  else
  {
    $section = 'home';
  }

  if (isset($_GET["page"]))
  {
    $page = $_GET["page"];
  }
  else
  {
    $page = $section;
  }

  if ($page == 'home')
  {
    $pageTitle = 'Home';
  }
  else if ($page == 'projects')
  {
    $pageTitle = 'Projects';
  }
  else if ($page == 'publications')
  {
    $pageTitle = 'Publications';
  }
  else if ($page == 'teaching')
  {
    $pageTitle = 'Teaching';
  }
  else if ($page == 'contact')
  {
    $pageTitle = 'Contact';
  }
  else if ($page == 'cv')
  {
    $pageTitle = 'CV';
  }

  else if ($page == 'drone-video-conferencing')
  {
    $pageTitle = 'Projects | Drone-Supported Video Conferencing';
  }
  else if ($page == 'mobile-video-collaboration')
  {
    $pageTitle = 'Projects | Mobile Video Collaboration';
  }
  else if ($page == 'sphero-sumo')
  {
    $pageTitle = 'Projects | Sphero Sumo';
  }
  else if ($page == 'remote-art-therapy')
  {
    $pageTitle = 'Projects | Remote Art Therapy';
  }
  else if ($page == 'vroom')
  {
    $pageTitle = 'Projects | VROOM';
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Brennan Jones | <?php echo $pageTitle; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/site-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?section=home">Brennan Jones</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if ($section == 'home') echo 'class="active"' ?>><a href="index.php?section=home">Home</a></li>
            <li <?php if ($section == 'projects') echo 'class="active"' ?>><a href="index.php?section=projects">Projects</a></li>
            <li <?php if ($section == 'publications') echo 'class="active"' ?>><a href="index.php?section=publications">Publications</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teaching<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://pages.cpsc.ucalgary.ca/~bdgjones/cpsc481" target="_blank">CPSC 481 - HCI (Fall 2015)</a></li>
              </ul>
            </li>
            <li <?php if ($section == 'contact') echo 'class="active"' ?>><a href="index.php?section=contact">Contact</a></li>
            <li><a href="media/documents/brennan-cv.pdf" target="_blank">CV (PDF)</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <?php
        if ($section === $page)
        {
          $page_content = file_get_contents('./page-content/' . $page . '.html');
        }
        else
        {
          $page_content = file_get_contents('./page-content/' . $section . '/' . $page . '.html');
        }
        echo($page_content);
      ?>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
