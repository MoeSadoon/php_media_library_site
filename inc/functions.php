<?php

function get_item_html($id, $item) {
  $output =  "<li><a href='#'><img src='"
      . $item["img"] . "'alt='"
      . $item["title"] . "' />"
      . "<p>View Details</p>"
      ."</a></li>";
  return $output;
}

function array_category($catalogue, $category) {
  $output = array();

  foreach($catalogue as $id => $item) {
    if($category == null OR strtolower($category) == strtolower($item["category"])) {
      $sort = $item["title"];
      $sort = ltrim($sort, "The "); // space is important!
      $sort = ltrim($sort, "a ");
      $sort = ltrim($sort, "and ");
      $output[$id] = $sort;
    }

  }

  asort($output);
  return array_keys($output);

  return $output;
}

?>
