<?php include('assets/header.php'); ?>
<div style='' class='gridItems'>
    
<?php

$directory = "assets/img/";
$images = glob($directory . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);

$totalImages = count($images);
$columns = 5;  // Number of columns
$itemsPerColumn = floor($totalImages / $columns);
$remainder = $totalImages % $columns;

$n = 0;
$currentColumn = 1;

echo '<div class="ItemRow">';  // Open the outer container

foreach ($images as $image) {
    $n++;

    echo "<div class='Item'>";
    echo "  <img src='$image' style='width:100%;margin:0px 11px;'>";
    echo "  <div class='col-12 m-0' style='padding:10px 10px;font-size:76%;'>";
    echo "    <b class='d-block'>Title of The Image here</b>";
    echo "    <n style='font-size:76%'>uploaded by<b>@abc" . rand(0, 99) . "</b></n>";
    echo "  </div>";
    echo "</div>";

    // Handle last column with remainder images
    if ($n % $itemsPerColumn === 0 && $n < $totalImages) {
        echo '</div>'; // Close the current column
        echo '<div class="ItemRow">';  // Open a new column for remaining images
        $currentColumn++;
    } else if ($n === $totalImages && $currentColumn < $columns && $remainder > 0) {
        // Handle the remaining images in the last column (if uneven)
        for ($i = 0; $i < $remainder; $i++) {
            echo "<div class='Item'>";  // Open an item for remaining image
            echo "  ";
            echo "</div>";  // Close the placeholder item
        }
    }
}

echo '</div>';  // Close the final outer container

?>

