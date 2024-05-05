<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--navigation-->
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#home">G.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
              <li class="nav-item" >
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#work">Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Let's talk</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>