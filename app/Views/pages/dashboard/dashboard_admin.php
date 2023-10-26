<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="<?php echo base_url('Admin/dashboard') ?>">Sispaldeba</a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="<?php echo base_url('http://www.w3.org/2000/svg') ?>" xmlns:xlink="<?php echo base_url('http://www.w3.org/1999/xlink') ?>" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="<?php echo base_url('http://www.w3.org/2000/svg') ?>" xmlns:xlink="<?php echo base_url('http://www.w3.org/1999/xlink') ?>" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item active ">
                            <a href="<?php echo base_url('Admin/dashboard') ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-title">Administrator</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-card-list"></i>
                                <span>Responses</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/response_layanan') ?>">Layanan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/aduan') ?>">Aduan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>User</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/all_user') ?>">All</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/register') ?>">Register</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Settings</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span>Account</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/profile') ?>">Profile</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/settings_profile') ?>">Settings</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/show_home') ?>">Home</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/change_password') ?>">Change Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"> <?= session('username'); ?></h6>
                                            <p class="mb-0 text-sm text-gray-600">
                                                <?php
                                                $role = session('role');

                                                if ($role === '0') {
                                                    echo 'Masayarakat';
                                                } elseif ($role === '1') {
                                                    echo 'Admin';
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <?php if ($avatarData) : ?>
                                                    <img width="150" class="rounded-circle " src="<?= base_url() . "/assets/images/profile/" . $avatarData['image']; ?>">
                                                <?php else : ?>
                                                    <img src="<?php echo base_url('assets/images/profile/default.jpg') ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Hello, <?= session('username'); ?></h6>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Admin/profile') ?>"><i class="icon-mid bi bi-person me-2"></i> Profile Saya</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Admin/settings_profile') ?>"><i class="icon-mid bi bi-gear me-2"></i>
                                            Pengaturan Akun</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Admin/change_password') ?>"><i class="icon-mid bi bi-wallet me-2"></i>
                                            Change Password</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Keluar</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

        </div>

        <div id="main">

            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?= session()->getFlashdata('success'); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <h4>Hello <?= session('username'); ?>, Anda login sebagai
                <?php
                $role = session('role');

                if ($role === '0') {
                    echo 'Masyarakat';
                } elseif ($role === '1') {
                    echo 'Admin';
                }
                ?>
            </h4>

            <script src="<?php echo base_url('https://code.highcharts.com/highcharts.js') ?>"></script>
            <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js') ?>"></script>


            <br><br>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Layanan</h6>
                                                <h6 class="font-extrabold mb-0"><?= $itemCount ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon blue mb-2">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Keluahan</h6>
                                                <h6 class="font-extrabold mb-0"><?= $aduanCount ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon green mb-2">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">All User</h6>
                                                <h6 class="font-extrabold mb-0"><?= $alluserCount ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon red mb-2">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Response</h6>
                                                <h6 class="font-extrabold mb-0"><?= $totalItemCount ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?= session()->getFlashdata('pesan'); ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>


                        <?php foreach ($chart as $key => $value) {
                            $bln[] = $value['bulan'];
                            $jml[] = $value['jumlah'];
                        }

                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Statistik Pengajuan Layanan</h3>
                                    </div>

                                    <div style="width: 80%; margin: auto;">
                                        <canvas id="myChart" id="chart-profile-visit"></canvas>
                                    </div>

                                    <script>
                                        var ctx = document.getElementById('myChart').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar', // Ganti dengan jenis chart yang diinginkan, seperti 'line', 'bar', 'pie', dll.
                                            data: {
                                                labels: <?php echo json_encode($bln) ?>,
                                                datasets: [{
                                                    label: 'Pengajuan Layanan',
                                                    data: <?php echo json_encode($jml) ?>, // Ganti dengan data Anda
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(255, 206, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgba(255, 99, 132, 1)',
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(255, 206, 86, 1)',
                                                        'rgba(75, 192, 192, 1)',
                                                        'rgba(153, 102, 255, 1)',
                                                        'rgba(255, 159, 64, 1)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>

                        <section class="section">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Daftar Layanan</h3>
                                </div>
                                <div class="card-header">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <form action="" method="">
                                                <div class="col-5">

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Masukan keyword pencarian" name="cari">
                                                        <button class="btn btn-outline-primary" type="submit" name="submit">Cari</button>
                                                    </div>
                                                </div>
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Jenis Pengajuan Layanan</th>
                                                        <th>Status</th>
                                                        <th widht="50%">Tindakan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;

                                                    ?>
                                                    <?php foreach ($pengajuan as $j) : ?>

                                                        <tr>
                                                            <td><?= $i; ?></td>
                                                            <td><?= $j['nama']; ?></td>
                                                            <td><?= $j['jenis_pengajuan']; ?></td>

                                                            <?php
                                                            echo "<td>";

                                                            if ($j['status'] == 0) {
                                                                echo "<span class='badge bg-danger'>";
                                                                echo 'Belum diproses';
                                                                echo "</span>";
                                                            } elseif ($j['status'] == 1) {
                                                                echo "<span class='badge bg-primary'>";
                                                                echo 'Sedang diproses';
                                                                echo "</span>";
                                                            } elseif ($j['status'] == 2) {
                                                                echo "<span class='badge bg-success'>";
                                                                echo 'Selesai, <br>';
                                                                echo 'Ambil Berkas Anda di Desa';
                                                                echo "</span>";
                                                            }

                                                            echo "</td>";
                                                            $i++;
                                                            ?>
                                                            <td>
                                                                <a href="<?php echo base_url('Admin/' . $j['id'] . '/lihat_layanan') ?>"> <span class="btn btn-info text-white"><i class="bi bi-eye-fill"></i></span></a>
                                                                <!-- <a href="<?php echo base_url('Admin/' . $j['id'] . '/edit_layanan') ?>"> <span class="btn btn-warning btn-s"><i class="bi bi-pencil-square"></i></span></a> -->



                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </form>
                                        </table>
                                        <?= $pager->links('pengajuan', 'daftar_pagination'); ?>
                                    </div>
                                </div>
                            </div>

                        </section>


                        <section class="section">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Daftar Aduan Masyarakat</h3>
                                </div>
                                <br>
                                <div class="card-body">
                                    <table class="table table-striped" id="table1">
                                        <form action="" method="">
                                            <div class="col-5">

                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Masukan keyword pencarian" name="keyword">
                                                    <button class="btn btn-outline-primary" type="submit" name="submit">Cari</button>
                                                </div>
                                            </div>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Aduan</th>
                                                    <th>Status</th>
                                                    <th widht="50%">Tindakan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $j = 1;

                                                ?>
                                                <?php foreach ($aduan as $k) : ?>
                                                    <tr>
                                                        <td><?= $j; ?></td>
                                                        <td><?= $k['nama']; ?></td>
                                                        <td><?= $k['judul']; ?></td>
                                                        <?php
                                                        echo "<td>";

                                                        if ($k['tanggapan']) {
                                                            echo "<span class='badge bg-primary'>";
                                                            echo $k['tanggapan'];
                                                            echo "</span>";
                                                        } else {
                                                            echo "<span class='badge bg-danger'>";
                                                            echo 'Belum ditanggapi';
                                                            echo "</span>";
                                                        }

                                                        echo "</td>";
                                                        $j++;
                                                        ?>
                                                        <td>
                                                            <a href="<?php echo base_url('Admin/' . $k['id'] . '/lihat_aduan') ?>"> <span class="btn btn-info text-white"><i class="bi bi-eye-fill"></i></span></a>
                                                            <!-- <a href="<?php echo base_url('Admin/' . $k['id'] . '/edit_aduan') ?>"> <span class="btn btn-warning btn-s"><i class="bi bi-pencil-square"></i></span></a> -->
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </form>
                                    </table>
                                    <?= $pager->links('aduan', 'daftar_pagination'); ?>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <?php if ($avatarData) : ?>
                                            <img width="150" class="rounded-circle " src="<?= base_url() . "/assets/images/profile/" . $avatarData['image']; ?>">
                                        <?php else : ?>
                                            <img src="<?php echo base_url('assets/images/profile/default.jpg') ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold"><?= session('username'); ?></h5>
                                        <h6 class="text-muted mb-0">@<?php
                                                                        $role = session('role');

                                                                        if ($role === '0') {
                                                                            echo 'Masyarakat';
                                                                        } elseif ($role === '1') {
                                                                            echo 'Admin';
                                                                        }
                                                                        ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Registrasi Akun Terbaru</h4>
                            </div>

                            <div class="card-content pb-4">

                                <?php foreach ($alluser as $k) : ?>

                                    <div class="recent-message d-flex px-4 py-3">
                                        <div class="avatar avatar-lg">
                                            <img src="<?php echo base_url('assets/images/faces/4.jpg') ?>">

                                        </div>
                                        <div class="name ms-4">
                                            <h5 class="mb-1"><?= $k['username']; ?></h5>
                                            <h6 class="text-muted mb-0"> <?php


                                                                            if ($k['role'] == '1') {
                                                                                echo "<span class='badge bg-success'>";
                                                                                echo 'Admin';
                                                                                echo "</span>";
                                                                            } elseif ($k['role'] == '0') {
                                                                                echo "<span class='badge bg-primary'>";
                                                                                echo 'Masyarakat';
                                                                                echo "</span>";
                                                                            }

                                                                            ?></h6>
                                        </div>
                                    </div>
                                <?php endforeach; ?>



                            </div>
                        </div>
                        <!-- <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div> -->
                    </div>
                </section>
            </div>
        </div>
    </div>