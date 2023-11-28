<?php
function dislay_image_list($imageList)
{
    foreach ($imageList as $item) {
        echo "<img src='images/$item'
            width = 50px height = 50px alt='$item'>";
    }
}

$item = array('item1.png', 'item2.png ');
dislay_image_list($items);
?>
<h1>function</h1>
<?php
$items = array('item3.png', 'item4.png');
dislay_image_list($items);

?>