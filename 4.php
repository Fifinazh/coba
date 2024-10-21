<!-- 
Buatkan sebuah function dimana function tersebut mempunyai parameter nilai

jika nilai tersebut lebih besar sama dengan 85  dan dibawah sama dengan 100 maka mendapatkan grade A
jika nilai tersebut lebih besar sama dengan 75 dan lebih kecil dari 85 maka mendapatkan grade B
Jika nilai tersebut lebih besar sama dengan 65 dan lebih kecil dari 75 maka grade nya c
Selain itu D
-->

<form action="" method="post">
<div class="form-group">
    <label for="">Nilai</label>
    <input type="text" name="nilai" placeholder="masukan nilai anda">
</div>
<br>
<button type="submit" name="submit">Submit</button>
</form>



<?php 
if (isset($_POST['submit'])){
     $nilai = $_POST['nilai'];

if ($nilai >= 85 && $nilai <= 100) {
    $Grade = "A";
} elseif ($nilai >= 75 && $nilai < 85) {
    $Grade = "B";
} elseif ($nilai >= 65 && $nilai < 75) {
    $Grade = "C";
} else {
    $Grade = "D";
} 
echo "Nilai : $nilai";
echo "Grade : $Grade";
}


?>