<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalogue";
$section = null;

if(isset($_GET["cat"])){
  if($_GET["cat"] == "books"){
    $pageTitle = "Books";
    $section = "books";
  } elseif($_GET["cat"] == "movies"){
    $pageTitle = "Movies";
    $section = "movies";
  } elseif($_GET["cat"] == "music"){
    $pageTitle = "Music";
    $section = "music";
  } elseif($_GET["cat"] == "suggest"){
    $pageTitle = "Suggest a media item";
    $section = "suggest";
  } elseif($_GET["cat"] == "company"){
    $pageTitle = "Company";
    $section = "company";
  }
}

include("inc/header.php"); ?>

<div class="section catalogue page">

  <div class="wrapper">

    <h1><?php if($section != null) {
      echo "<a href='catalogue.php'>Full Catalogue</a> &gt; ";
    }

     echo $pageTitle; ?></h1>

    <ul class="items">
      <?php
      $categories = array_category($catalogue, $section);
			foreach($categories as $id){
				echo get_item_html($id, $catalogue[$id]);
			}
      ?>
    </ul>

  </div>

</div>


<?php include("inc/footer.php"); ?>
