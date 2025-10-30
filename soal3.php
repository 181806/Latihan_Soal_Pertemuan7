<!-- Fatin Khairunnisa (2407525) -->

<?php 

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
?>