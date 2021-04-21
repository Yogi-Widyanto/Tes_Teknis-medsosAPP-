<?php  
    session_start();
    if (isset($_SESSION["username"])) {
        $user=$_SESSION["username"];
        $idUser=$_SESSION["id_user"];
    } else {
      header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>medsosAPP</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="vendor/jquery/jquery.js"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styling.css">

</head>

<body id="page-top">
    <!-- koneksi ke database -->
    <?php include "koneksi/dbConn.php" ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="sidebar-brand-text mx-3">medsosAPP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                akun
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="a_profile/profileUser.php">
                    <i class="fas fa-id-card"></i>
                    <span>Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Edit Akun</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Postingan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="a_post/posting.php" >
                    <i class="fas fa-pencil-ruler"></i>
                    <span>Tambah Postingan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" >
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Postingan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" >
                    <i class="fas fa-user-friends"></i>
                    <span>Teman</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
                    <i class="fas fa-power-off"></i>
                    <span>Logout</span>
                </a>
            </div>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $user; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <?php  
                                    $states = $db->prepare("SELECT user.USERNAME,postingan.IDPOSTINGAN ,postingan.CAPTION,postingan.TANGGALUPLOAD,postingangambar.NAMAFILE FROM user,postingangambar,postingan WHERE user.IDUSER=postingan.IDUSER AND postingan.IDPOSTINGAN=postingangambar.IDPOSTINGAN;");
                                    $states->execute();
                                    $result = $states->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <?php foreach ($result as $key ): ?>
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><?php echo $key['USERNAME'] ?></h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Laporkan</a>
                                            <a class="dropdown-item" href="#">Tidak Tertarik</a>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                    </div>
                                
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <h6><?php echo $key['CAPTION'] ?></h6>
                                    <h6><?php echo $key['TANGGALUPLOAD'] ?></h6>
                                    <div class='ukuran-gambar'>
                                        <img  src="../image/<?php echo $key['NAMAFILE']; ?>" alt="<?php echo $key['NAMAFILE'];?>">
                                    </div>
                                    <div class="kotak">
                                        <div class="card-header py-3 d-flex flex-row align-items-center ">
                                            <!-- <a href="" class="posisi-hati"> -->
                                            <i id='like' class="fas fa-heart fa-2x"></i>
                                            <!-- </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Komentar</h6>
                                </div>
                                <!-- Card Body -->
                                <?php
                                    $idPost=$key['IDPOSTINGAN'];
                                    $states3 = $db->prepare("SELECT user.USERNAME,komentarpostingan.ISIKOMENTAR,komentarpostingan.TANGGALKOMENTAR FROM user,komentarpostingan WHERE user.IDUSER=komentarpostingan.IDUSER AND komentarpostingan.IDPOSTINGAN=:id_post;");
                                    $states3->bindValue(':id_post',$idPost);
                                    $states3->execute();
                                    $result3 = $states3->fetchAll(PDO::FETCH_ASSOC);                                  
                                ?>
                                <div class="card-body">
                                        <!-- konten komen -->
                                    <?php foreach ($result3 as $key3 ): ?>
                                    <div class="card jarak">
                                        <h6>
                                            <?php echo $key3['USERNAME'] ?>
                                            <p><?php echo $key3['TANGGALKOMENTAR'] ?></p>
                                        </h6>
                                        <p><?php echo $key3['ISIKOMENTAR'] ?></p>
                                    </div>
                                    <?php endforeach ?>
                                    <div>
                                        <a href="#">komentar lainya</a>
                                    </div>
                                    <div>
                                        <form class="sebaris" method="POST" action="index.php?id=<?php echo $idPost; ?>">
                                            <input class="form-control" type="text" id='isiKomentar' name="komen" required>
                                            <button type="submit" name="kirimKomentar" id='kirimKomentar' class="btn btn-primary">Kirim</button>
                                        </form>
                                    </div>
                                    <?php  
                                        if (isset($_POST['kirimKomentar'])) {
                                            $id_post=$_GET['id'];                                            
                                            $states4 = $db->prepare("INSERT INTO `komentarpostingan`(`IDPOSTINGAN`, `IDUSER`, `ISIKOMENTAR`, `TANGGALKOMENTAR`) VALUES (:idPost,:iduser,:isi,:tgl);");
                                            $states4->bindValue(':idPost',$id_post);
                                            $states4->bindValue(':iduser',$idUser);
                                            $states4->bindValue(':isi',$_POST['komen']);
                                            $states4->bindValue(':tgl',date('Y-m-d'));
                                            $states4->execute();
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>

                    

                </div>

            </div>
            <!-- End of Main Content -->           
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; medsosAPP 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.fa-heart').click(function () {
                $('.fa-heart').css('color','red');
            })
        });
    </script>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>