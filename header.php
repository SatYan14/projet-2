<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!-- META -->
	<meta charset="<?php bloginfo( 'charset' );  ?>">
  <meta name="description" content="Site de l'Office de tourisme de Strasbourg, vous y retrouverez toutes les dernières actualités !">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- FIN META -->

	<title><?php the_title(); ?></title>

	<!-- LINK STYLE + BOOTSTRAP + NORMALIZE-->
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
  
</head>



<body>



  <!-- NAV BOOTSTRAP -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
     
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <?php bootstrap_nav(); ?>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        
        <label for="recherche" style="display:none">Recherche</label>
        <input id="recherche" class="form-control mr-sm-2" type="search" placeholder="Rechercher" name="recherche"/>
        
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go !</button>
       
      </form>
    </div>
  </nav>


<!-- FIN NAVIGATION BOOTSTRAP -->