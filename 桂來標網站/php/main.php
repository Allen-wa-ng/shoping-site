<?php

function get_file(string $filePath)
{
  $string = file_get_contents($filePath);
  $json = json_decode($string, true);
  return $json;
}

function load_template(string $templateName, array $variables = [])
{
  extract($variables);
  ob_start();
  include("./element/{$templateName}.phtml");
  return ob_get_clean();
}

?>