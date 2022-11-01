<?php
$names = ["Adam","Alif","Ardiansyah","Giska","Gita","Ibrahim","Latif"]; // set array
$no = 1; // counter 

// create table
echo " 
<table border='1' width=250px align=\"center\" color=\"white\" style=\"border-color: white;\"> 
<th>No</th>
<th>Daftar Siswa</th>
";

foreach ($names as $name) {
    // Genap
    if ($no % 2 == 0) { 
    echo "
    <tr align=\"center\">
        <td> $no </td>
        <td style=\"background-color: red;\"> $name </td>
    </tr>";
    } 

    // Ganjil
    else {  
    echo "
    <tr align=\"center\">
        <td> $no </td>
        <td style=\"background-color: blue;\"> $name </td>
    </tr>";
    }
    
    $no++;
}
echo "</table>";
?>