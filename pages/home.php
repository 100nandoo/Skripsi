<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="/device-mockups/device-mockups.min.css">

  <title>title</title>
</head>
<body>
  <div class="parallax"></div>
  <div class="caption">
    <p style="background-color:transparent;font-size:40px;color: #6d6d6d;"><strong>Smart Lab <br>web controller</strong></p>
  </div>

      <div style="background-color: #f3f3f3;text-align:center;padding:50px 80px;text-align: justify; font-size:18px; color:#6d6d6d;">
        <p>Halaman web untuk membantu anda mengendalikan perangkat laboratorium.
          halaman web menyediakan antarmuka pengolahan data, menampilkan data
          dari basis data, dan antarmuka untuk mengendalikan perangkat kelistrikan secara langsung.
          Halaman web ditujukan untuk penanggung jawab lab (Asisten Dosen) atau Dosen yang bersangkutan.
          Pembuatan tampilan halaman web dibuat dengan menggunakan framework Bootstrap.
            Semua tampilan dari menu drop-down, judul, teks, dan tombol menggunakan style default milik Bootstrap.
            Untuk memungkinkan halaman web dapat mengolah data dari basis data digunakan skrip PHP.
            Selain digunakan untuk mengolah data, PHP juga digunakan untuk menjaga keamaan halaman web.
            Salah satu fitur PHP yaitu sesssion yang berfungsi untuk mencatat sesi login pengguna halaman web.
            Sehingga, halaman web tidak dapat diakses oleh pengguna yang tidak melakukan login.</p>
          </div>

        <section style="background-color:white">
          <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-heading">
                            <h2>Banyak Fitur, Implementasi Mudah</h2>
                            <p class="text-muted">Beberapa Fitur bagi kenyamanan anda</p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row" style="">
                    <div class="col-md-4">
                        <div class="device-container">
                            <div class="device-mockup macbook white">
                                <div class="device">
                                    <div class="screen">
                                        <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                        <img src="../images/capture.png" class="img-responsive" alt=""> </div>
                                    <div class="button">
                                        <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <i class="icon-screen-smartphone text-primary"></i>
                                        <h3>Multiplatform</h3>
                                        <p class="text-muted">Dapat diimplementasi di berbagai OS, yaitu Windows, MacOS, dan Linux.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <i class="icon-camera text-primary"></i>
                                        <h3>Implementasi Mudah</h3>
                                        <p class="text-muted">Menggunakan teknologi Node.js. Proses implementasi dapat diselesaikan dalam hitungan menit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <i class="icon-present text-primary"></i>
                                        <h3>Gratis untuk Digunakan</h3>
                                        <p class="text-muted">Halaman web gratis digunakan dan dapat diakses pada link berikut.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <i class="icon-lock-open text-primary"></i>
                                        <h3>Open Source</h3>
                                        <p class="text-muted">Menggunakan lisensi MIT, sehingga dapat digunakan untuk kebutuhan komersil!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          <br><br>
        </section>
      </div>

      <section id="features" class="features" style="background-color:#f3f3f3">

          <div class="container" >
            <br><br>
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <div class="section-heading">
                          <h2>Tampilan Konsisten</h2>
                          <p class="text-muted">Halaman web tetap rapi ketika diakses dari berbagai jenis perangkat.</p>
                          <hr>
                      </div>
                  </div>
              </div>
                  <div class="col-md-6">
                    <div class="device-container">
                      <h2 class="text-center">Laptop</h2>
                        <div class="device-mockup macbook">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="../images/demo-screen-1.png" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <h2 class="text-center">Tablet</h2>
                    <br>
                    <div class="device-container">
                        <div class="device-mockup ipad_pro landscape silver">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="../images/demo-screen-2.png" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <h2 class="text-center">Smartphone</h2>
                      <div class="device-container">
                          <div class="device-mockup iphone6_plus portrait black">
                              <div class="device">
                                  <div class="screen">
                                      <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                      <img src="../images/demo-screen-3.jpg" class="img-responsive" alt=""> </div>
                                  <div class="button">
                                      <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">

                  </div><br><br>

      </section>
    </body>
    </html>
