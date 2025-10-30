<!-- Fatin Khairunnisa (2407525) -->

<?php 
//Soal 2. Implementasi array 2 dimensi
    $mahasiswa = [
        ["Jaka", "22001", "Informatika"],
        ["Sinta", "22002", "Sistem Informasi"],
        ["Budi", "22003", "Teknik Komputer"]
    ];

    echo "<table border = 1, cellpadding = 5, cellspacing = 0)>";
    echo "<th>No</th>";
    echo "<th>Nama</th>";
    echo "<th>NIM</th>";
    echo "<th>Jurusan</th>";
    echo "</tr>";

    
    echo "<br>";

        $no = 1;
        foreach($mahasiswa as $mhs){
            echo "<tr>";
            echo "<td> $no </td>";
            echo "<td> {$mhs[0]}</td>";
            echo "<td> {$mhs[1]}</td>";
            echo "<td> {$mhs[2]}</td>";
            echo "</tr>";
            $no++;   };
    echo "</table>";

    ?>