<?php session_start() ?>
<form action="" method="post">
    <div class="form-group">
        <label for="name">Angka 1</label>
        <input type="text" name="angka1" placeholder="Masukan Nama Anda">
    </div>
    <br>
    <div class="form-group">
        <label for="">Angka 2</label>
        <input type="text" name="angka2" placeholder="Masukan Umur Anda">
    </div>
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>
<br>
<br>
<br>

<?php
    if (isset($_POST['simpan'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $total = $angka1 + $angka2;
        echo "<p> Hasilnya : $total </p>";
    }
?>
<h1>Login Form</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Masukan Email Anda">
    </div>
    <br>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Masukan Password Anda">
    </div>
    <br>
    <input type="submit" name="login" value="login">
</form>

<?php
if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        if($email == "Admin@gmail.com" AND $password == "Admin") {
            //echo "Login Berhasil";
            //die;
            $_SESSION['EMAIL'] =$email;
            header("location:dashboard.php?login=berhasil");
        } else {
            echo "Maaf Anda Gagal Login";
        }


    }
?>