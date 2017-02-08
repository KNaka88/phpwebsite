<?php


    $pageTitle = "Full Catalog";
    $section = null;

    if(isset($_GET["cat"])) {
        if ($_GET["cat"] == "books") {
            $pageTitle = "Books";
            $section = "books";
        } elseif ($_GET["cat"] == "movies") {
            $pageTitle = "Movies";
            $section = "movies";
        } elseif ($_GET["cat"] == "music") {
            $pageTitle = "Music";
            $section = "music";
        }
    }
    include("inc/header.php");
?>
<div class="section catalog page">
    <div class="wrapper">
      <h1><?php echo $pageTitle; ?></h1>

      <ul>
        <?php foreach($catalog as $item){
          echo "<li>" . $item . "</li>";
        }?>
      </ul>

    </div>
</div>

<div class='section page'>
    <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("inc/footer.php"); ?>
