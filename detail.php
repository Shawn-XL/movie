<?php
  /* CONSTANTS */
  define("SITE_ROOT", __DIR__);

  /* Load the Twig Library */
  require_once SITE_ROOT.'/vendor/autoload.php';

  /* Configure Twig */
  $loader = new Twig_Loader_Filesystem(SITE_ROOT.'/templates');
  $twig = new Twig_Environment($loader, array(
    //'cache' => SITE_ROOT.'/cache',
  ));

  //step 1. Get all data rom json

  $json = file_get_contents("./movies/data/movies.json");
  $movies = json_decode($json, true);
  $name=str_replace('_', ' ', $_GET["name"]);






  $result = array();

  foreach($movies as $movie) {
  	if ($movie['Title']==$name){
  		$result=$movie;
  	}
  }
 
  $features = explode(',', $result['Genre']);

  // $template = $twig->load('index.html.twig');

  echo $twig->render('detail.html.twig',["title" => "Michael's Movie Catalog
", "movie" => $result, 'features'=>$features]);
?>
