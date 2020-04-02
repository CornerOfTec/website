
<?php

function DrawNav() {
  $array = array("Home","About","Impressum");
    $html = "<nav><ul>";

    foreach($array as $key => $value)
    {
      $html .= "<li>".$value."</li>";
    }

    $html .= "</ul></nav>";
    echo $html;
}
   
function DrawContent() {
 echo '<div id="maincontainer"><h1>Hallo im the content</h1></div>';
}
   
?>

