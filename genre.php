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

  $type=$_GET['type'];

  $data = array();

  foreach($movies as $movie) {
    if(strpos($movie['Genre'],$type) !== false){
      $movie['link'] = str_replace(' ', '_', $movie['Title']);
      $data[] = $movie;
    }
  }
 


  // $template = $twig->load('index.html.twig');
  if(!empty($data)){
  echo $twig->render('index.html.twig',["title" => $type . " Movies", "movies" => $data,'base_url'=> SITE_ROOT]);
  } else {
    echo $twig->render('error.html.twig', ['message'=> "NO movie found!", 'smessage'=>'no movies for the genre,'.$type.',could not be found']);
  }
?>
