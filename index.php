<?php
// data
$data = array(
    array("1", "Hafzih", "a@gmail"),
    array("2", "Hafih", "b@gmail"),
    array("3", "Hafzih", "c@gmail"),
);

// Output the table
echo "<table border='1'>";
echo "<tr><th>No</th><th>Name</th><th>Email</th></tr>"; // Anda harus menambahkan </tr> untuk menutup baris header

foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

$myArray = array(1, 2, 3, 4, 5, 6, 7, 9, 11);

foreach ($myArray as $value) {
    if ($value == 4 || $value == 5) {
        continue; // Skip angka 4 dan 5
    }
    echo $value . "<br>";
}


echo "<a href=vars.php?nama=Merapi&alamat=Sleman>Gunung</a>";


?>
