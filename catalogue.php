<?php
$catalogue = array(
              "Design Patterns",
              "Forrest Gump",
              "Beethoven"
              );


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

    <h1><?php echo $pageTitle; ?></h1>

    <ul>
      <?php
      foreach($catalogue as $item){
        echo "<li> $item </li>";
      }
      ?>
    </ul>

  </div>

</div>


<?php include("inc/footer.php"); ?>
