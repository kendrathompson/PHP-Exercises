<?php 
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = [
    "Cheese Platter",
    "Taco Salad",
    "Pizza",
    "Strawberry-Rhubarb Pie"
];

/*
Print every array element in a new line.
*/

echo "$food[0]
      <br>
      $food[1]
      <br>
      $food[2]
      <br>
      $food[3]";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
        <li>$food[0]</li>
        <li>$food[1]</li>
        <li>$food[2]</li>
        <li>$food[3]</li>
      </ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = ["Cheese Platter"=>"Appetizer",
  "Taco Salad"=>"Salad",
  "Pizza"=>"Main Course",
  "Strawberry-Rhubarb Pie"=>"Dessert"
];
 
/*
Print every food and type in the separate lines so it renders like this:
pizza | main course 
cheesesake | desert 
*/

foreach ($food_assoc as $key => $value) {
  echo "{$key} | {$value}<br>";
};

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_assoc = [
  "Cheese Platter" => ["type" => "Appetizer", "origin" => "Europe"],
  "Taco Salad" =>["type" =>"Salad", "origin" => "Mexico"],
  "Pizza" => ["type" =>"Main Course", "origin" =>"Italy"],
  "Strawberry-Rhubarb Pie" => ["type" => "Dessert", "origin" => "Germany"]
];

foreach($food_assoc as $keys => $item){
    echo "{$keys}";
        foreach ($item as $itemkey => $value) {
        echo " | {$value} ";};
    echo "<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/


?>

<style> 
table, th, td {
  border: 2px solid;
  padding: 0.3em;
  border-collapse: collapse;
}

</style>

<table>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>
  <tr>
    <td>Cheese Platter</td>
    <td>Appetizer</td>
    <td>Europe</td>
  </tr>
  <tr>
    <td>Taco Salad</td>
    <td>Salad</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Pizza</td>
    <td>Main Course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>Strawberry-Rhubarb Pie</td>
    <td>Dessert</td>
    <td>Germany</td>
  </tr>
</table>
