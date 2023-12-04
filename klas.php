<?php
$klas = [
  ["lokaal:" => "lokaal 22", "aantal leerlingen:" => 22, "aantal jongens:" => 12, "aantal meiden:" => 10 ],
  ["lokaal:" => "lokaal 48", "aantal leerlingen:" => 30, "aantal jongens:" => 25, "aantal meiden:" => 5 ],
  ["lokaal:" => "lokaal 550", "aantal leerlingen:" => 42, "aantal jongens:" => 10, "aantal meiden:" => 32 ],
  ["lokaal:" => "lokaal 42", "aantal leerlingen:" => 18, "aantal jongens:" => 9, "aantal meiden:" => 9 ],
];
echo "<ul>";
foreach ($klas as $lokaal){
    echo "<li>" . $lokaal['lokaal:'] ." - aantal leerlingen: " . $lokaal['aantal leerlingen:'] ." - aantal jongens: "
    . $lokaal['aantal jongens:'] . " - aantal meiden: " . $lokaal['aantal meiden:'];
}
echo "</ul>";