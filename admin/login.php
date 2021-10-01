<?php
  include_once '../koneksi/index.php';
  include_once '../template/admin/header.php';

  if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

    $login = mysqli_num_rows($admin); 
    if ($login == 1) {
      foreach ($admin as $adm) {
        $_SESSION["username"] = $adm['username'];
        header("Location: index.php");
      }
    } else {
      echo "<script>alert('Maaf, Username Atau Password Anda Salah')</script>";
    }
  }
?>

<div class="container mt-5">
  <div class="row justify-content-center mb-3">
    <div class="col-md-5 text-center">
      <h4 class="title-login">Silahkan Login Admin</h4>
      <hr>
      <hr>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card card-login">
        <div class="card-body">
          <!-- image login -->
          <div class="text-center">
            <img src="<?= $base_url ?>/template/admin/login.svg" alt="login" class="img-login my-4">
          </div>
          <!-- form login -->
          <div class="conatiner mx-5">
            <form action="" method="post">
              <div class="mb-3">
                <label class="form-label">Username : </label>
                <input class="form-control" type="text" placeholder="Isikan username anda..." name="username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password : </label>
                <input class="form-control" type="password" placeholder="Isikan password anda..." name="password" required>
              </div>
              <div class="mb-3 float-end">
                <button class="btn-login" type="submit" name="login">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include_once '../template/admin/footer.php';


