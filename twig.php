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

  // $template = $twig->load('index.html.twig');

  echo $twig->render('index.html.twig',["title" => "My First Twig Page", "greeting" => "Hello, Twig!", "features" => ["Fast", "Flexible", "Secure"]]);
?>
