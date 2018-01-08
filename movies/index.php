<?php
  /* CONSTANTS */
  define("SITE_ROOT", __DIR__);

  /* Load the Twig Library */
  require_once SITE_ROOT.'/vendor/autoload.php';

  /* Configure Twig */
  $loader = new Twig_Loader_Filesystem(SITE_ROOT.'/templates');
  $twig = new Twig_Environment($loader, array(
    'cache' => SITE_ROOT.'/cache',
    'auto_reload' => true
  ));

  // Load and Render Template
  $template = $twig->load("index.html.twig");
  echo $template->render([]);
