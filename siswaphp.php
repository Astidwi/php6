<?php
 //memebuat koneksi dengan mysql ke databses
  $db = new mysqli ("localhost" , "root" , "" , "11rpl_db" );
  if (mysqli_connect_errno()){
      echo "Error :" . mysqli_connect_error();
  }else{
      echo "Succsess";
  }


?>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jk</th>
            <th>No hp</th>
        </tr>
    </thead>

    <tbody>
    <?php
         $sql = "SELECT * FROM siswa;"; //query sql
         $result = $db ->query($sql); // excute query sql
         $no = 1;
         //menampilkan bentuk array
        while ($row = $result->fetch_assoc()) {
           echo "
           <tr>
                <td>".$no."</td>
                <td>" . $row["nama_lengkap"] . "</td>
                <td>" . $row["jk"] . "</td>
                <td>" . $row["no_hp"] . "</td>
           </tr>
           ";

           $no++;
        }
    ?>
    </tbody>
</table>