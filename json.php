<?php
  /*
  * When working with an external JSON file in PHP you must
  * first retrieve the file contents using the
  * file_get_contents() function.
  * This function will return a string of the file's content.
  */
  $json = file_get_contents("data/people.json");

  /*
  * $json contains JSON as a string, which not that useful.
  * To make it more useful you must first convert it to
  * an array. We do this using the json_decode() function.
  * This function takes two arguments, the json string a boolean
  * true: returns an array
  * false: returns an object
  */
  $people = json_decode($json, true);

  /*
  * Output the $people array. 
  */
  echo "<pre>";
  print_r($people);
  echo "</pre>";
