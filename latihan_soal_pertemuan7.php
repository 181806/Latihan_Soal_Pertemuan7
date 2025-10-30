
<!-- Fatin Khairunnisa (2407525) -->

<?php 

    //soal 1 implementasi arry 1 dimensi
    $buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];

     echo "Daftar Nama Buah<br>";

     for($i=0; $i<count($buah); $i++){ 
        echo ($i+1). "." . $buah[$i]. "<br>";}


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


// Soal 3. implementasi array 2 dimensi dan associaive array
    $nilai = [
        ["nama" => "Jaka", "tugas" => 80, "uts" => 75, "uas" => 85],
        ["nama" => "Sinta", "tugas" => 90, "uts" => 88, "uas" => 92],
        ["nama" => "Budi", "tugas" => 70, "uts" => 65, "uas" => 78]
        
    ];

    foreach($nilai as $data){
        echo "<br>Nama:" .$data["nama"]. "<br>";
        echo "Nilai Tugas: " . $data["tugas"] . "<br>";
        echo "Nilai UTS: " . $data["uts"] . "<br>";
        echo "Nilai UAS: " . $data["uas"] . "<br>";
    }
        ;
