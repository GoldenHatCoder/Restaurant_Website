<?php
$menuItems = array(
  array('name' => 'Item 1', 'description' => 'Description for item 1', 'price' => '$10'),
  array('name' => 'Item 2', 'description' => 'Description for item 2', 'price' => '$15'),
  array('name' => 'Item 3', 'description' => 'Description for item 3', 'price' => '$12'),
  array('name' => 'Item 4', 'description' => 'Description for item 4', 'price' => '$8'),
);

foreach ($menuItems as $item) {
  echo '<div class="menu-item">';
  echo '<h3>' . $item['name'] . '</h3>';
  echo '<p>' . $item['description'] . '</p>';
  echo '<span class="price">' . $item['price'] . '</span>';
  echo '</div>';
}
?>
