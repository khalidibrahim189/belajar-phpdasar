<?php


echo "<fieldset><legend>Belajar Percabangan Perulangan </legend>";

for($i = 1; $i <= 12; $i++){
    echo $i;
}

echo "</fieldset>";


echo "<fieldset><legend>Belajar  Perulangan While</legend>";

$i = 1;
while($i <= 12){
    echo " <br> Bulan $i";
    $i++;
}

echo "</fieldset>";

echo "<fieldset><legend>Belajar  Perulangan Foreach</legend>";

$skill_developer = [
    "Framework Vue js",
    "PHP Laravel",
    "React JS",
    "Golang"
];

echo "<h6> Skill Developer :  </h6>";
echo "<ul>";

foreach ($skill_developer as $data_skill){
    echo "<li> $data_skill </li>";
}
echo "</ul>"; 

echo "</fieldset>";

?>