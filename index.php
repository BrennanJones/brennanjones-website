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

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Brennan Jones | <?php echo $pageTitle; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/site-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand mb-0 h1" href="index.php?section=home">Brennan Jones</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li <?php if ($section == 'home') echo 'class="nav-item active"'; else echo 'class="nav-item"'; ?>>
            <a class="nav-link" href="index.php?section=home">Home</a>
          </li>
          <li <?php if ($section == 'projects') echo 'class="nav-item active"'; else echo 'class="nav-item"'; ?>>
            <a class="nav-link" href="index.php?section=projects">Projects</a>
          </li>
          <li <?php if ($section == 'publications') echo 'class="nav-item active"'; else echo 'class="nav-item"'; ?>>
            <a class="nav-link" href="index.php?section=publications">Publications</a>
          </li>
          <li <?php if ($section == 'teaching') echo 'class="nav-item dropdown active"'; else echo 'class="nav-item dropdown"'; ?>>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Teaching
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://pages.cpsc.ucalgary.ca/~bdgjones/cpsc481" target="_blank">CPSC 481 - HCI (Fall 2015)</a>
            </div>
          </li>
          <li <?php if ($section == 'contact') echo 'class="nav-item active"'; else echo 'class="nav-item"'; ?>>
            <a class="nav-link" href="index.php?section=contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="media/documents/brennan-cv.pdf" target="_blank">CV (PDF)</a>
          </li>
        </ul>
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
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
