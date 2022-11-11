<?php
function println($content)
{
  echo "<p>$content</p>";
}
function printArray($content)
{
  echo "<pre>";
  print_r($content);
  echo "</pre><br/>";
}
