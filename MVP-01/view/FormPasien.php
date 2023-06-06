<?php
include_once("presenter/ProsesForm.php");
include_once("kontrak/KontrakForm.php");

class FormPasien implements KontrakViewForm
{
  private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
  private $tpl;

  function __construct()
  {
    //konstruktor
    $this->prosespasien = new ProsesForm();
  }

  function tampil()
  {
    // $this->prosespasien->prosesDataPasien();
    $data = null;
    $data .= '<form method="post" action="add.php">

        <br><br>
        <div class="card">
  
          <div class="card-header bg-primary">
            <h1 class="text-white text-center"> Add Pasien </h1>
          </div><br>

          <label for="nik"> NIK: </label>
          <input type="text" name="nik" class="form-control" required> <br>
  
          <label for="name"> NAMA: </label>
          <input type="text" name="nama" class="form-control" required> <br>
  
          <label for="tempat"> TEMPAT: </label>
          <input type="text" name="tempat" class="form-control" required> <br>
  
          <label for="lahir"> TANGGAL LAHIR: </label>
          <input type="text" name="lahir" class="form-control" required> <br>

          <label for="gender"> GENDER: </label>
          <input type="text" name="gender" class="form-control" required> <br>

          <label for="email"> EMAIL: </label>
          <input type="text" name="email" class="form-control" required> <br>

          <label for="telp"> TELP: </label>
          <input type="text" name="telp" class="form-control" required> <br>
  
          <button class="btn btn-success" type="submit" name="add"> Submit </button><br>
          <button class="btn btn-danger" type="reset" > Cancel </button><br>

  
        </div>
      </form>';

    $data = '<div class="container">
    <h2 style="text-align: center; margin-bottom: 30px;">Futuristic Formulir</h2>
    <form method="post" action="add.php">
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" name = "nik" id="nik" placeholder="Masukkan NIK">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name = "nama" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="tempat">Tempat</label>
            <input type="text" class="form-control" name = "tempat" id="tempat" placeholder="Masukkan Tempat">
        </div>
        <div class="form-group">
            <label for="lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name = "lahir" id="tgl_lahir">
        </div>
        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <select class="form-control" name = "gender" id="gender">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name = "email" id="email" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="tel" class="form-control" name = "telp" id="telp" placeholder="Masukkan Telepon">
        </div>
        <button type="submit" name = "add" class="btn btn-primary">Submit</button>
    </form>
</div>';

    // Membaca template skin.html
    $this->tpl = new Template("templates/form.html");

    // Mengganti kode Data_Tabel dengan data yang sudah diproses
    $this->tpl->replace("FORM", $data);

    // Menampilkan ke layar
    $this->tpl->write();
  }
  function tampil2($i)
  {
    $this->prosespasien->prosesDataPasien();
    // $this->prosespasien->prosesDataPasien();
    $data = null;

    $data .= '<form method="post" action="add.php?id=' . $this->prosespasien->getId($i) . '">


        <br><br>
        <div class="card">
  
          <div class="card-header bg-primary">
            <h1 class="text-white text-center"> Add Pasien </h1>
          </div><br>

          <label for="nik"> NIK: </label>
          <input type="text" name="nik" class="form-control" value = "' . $this->prosespasien->getNik($i) . '" required> <br>
  
          <label for="name"> NAMA: </label>
          <input type="text" name="nama" class="form-control"value = "' . $this->prosespasien->getNama($i) . '" required> <br>
  
          <label for="tempat"> TEMPAT: </label>
          <input type="text" name="tempat" class="form-control" value = "' . $this->prosespasien->getTempat($i) . '"required> <br>
  
          <label for="lahir"> TANGGAL LAHIR: </label>
          <input type="text" name="lahir" class="form-control" value = "' . $this->prosespasien->getTl($i) . '"required> <br>

          <label for="gender"> GENDER: </label>
          <input type="text" name="gender" class="form-control" value = "' . $this->prosespasien->getGender($i) . '"required> <br>

          <label for="email"> EMAIL: </label>
          <input type="text" name="email" class="form-control" value = "' . $this->prosespasien->getEmail($i) . '" required> <br>

          <label for="telp"> TELP: </label>
          <input type="text" name="telp" class="form-control" value = "' . $this->prosespasien->getTelp($i) . '" required> <br>
  
          <button class="btn btn-success" type="submit" name="edit"> Edit </button><br>
          <button class="btn btn-danger" type="reset" > Cancel </button><br>

  
        </div>
      </form>';

    $data = '<div class="container">
    <h2 style="text-align: center; margin-bottom: 30px;">Futuristic Formulir</h2>
    <form method="post" action="add.php?id=' . $this->prosespasien->getId($i) . '">
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" name = "nik" id="nik" placeholder="Masukkan NIK" value = "' . $this->prosespasien->getNik($i) . '" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name = "nama" id="nama" placeholder="Masukkan Nama" value = "' . $this->prosespasien->getNama($i) . '" required>
        </div>
        <div class="form-group">
            <label for="tempat">Tempat</label>
            <input type="text" class="form-control" name = "tempat" id="tempat" placeholder="Masukkan Tempat" value = "' . $this->prosespasien->getTempat($i) . '" required>
        </div>
        <div class="form-group">
            <label for="lahir">Tanggal Lahir</label>
            <input type="text" class="form-control" name = "lahir" id="lahir" placeholder="Masukkan lahir" value = "' . $this->prosespasien->getTl($i) . '" required>

        </div>
        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <input type="text" class="form-control" name = "gender" id="gender" placeholder="Masukkan Gender" value = "' . $this->prosespasien->getGender($i) . '" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name = "email" id="email" placeholder="Masukkan Email" value = "' . $this->prosespasien->getEmail($i) . '" required>
        </div>
        <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="tel" class="form-control" name = "telp" id="telp" placeholder="Masukkan Telepon" value = "' . $this->prosespasien->getTelp($i) . '" required>
        </div>
        <button type="submit" name = "edit" class="btn btn-primary">Edit</button>
    </form>
</div>';

    // Membaca template skin.html
    $this->tpl = new Template("templates/form.html");

    // Mengganti kode Data_Tabel dengan data yang sudah diproses
    $this->tpl->replace("FORM", $data);

    // Menampilkan ke layar
    $this->tpl->write();
  }

  function add($data)
  {
    $this->prosespasien->add($data);
  }
  function edit($data, $id)
  {
    $this->prosespasien->edit($data, $id);
  }
}
