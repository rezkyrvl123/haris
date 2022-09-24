<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Dashboard</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/x-icon" href="asset/images/logo/icon.png" />
      <?php $this->load->view('css')?>
   </head>
   <body style="font-family: 'Manrope', sans-serif; overflow-x: hidden">
      <!-- ================ Navbar ================ -->
      <nav class="custom-navbar navbar navbar-expand-lg pt-4 d-lg-flex justify-content-center overflow-hidden" style="font-family: 'Nunito', sans-serif">
         <div class="container mt-2 mx-3">
            <a class="navbar-brand ms-md-2" href="index.html"><img src="asset/images/svg/logo.svg" alt="logo-damatiza" style="height: 40px" /></a>
            <button
               class="navbar-toggler"
               type="button"
               data-bs-toggle="collapse"
               aria-expanded="false "
               aria-label="Toggle navigation"
               onclick="openNav()"
               style="border: none"
            >
               <span class="navbar-toggler-icon d-none"></span>

               <img src="asset/images/svg/toggle_navbar.svg" alt="toggle" />
            </button>

            <!-- Navbar Desktop -->
            <div class="custom-collapse collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
               <ul class="navbar-nav link-navbar" style="font-size: 18px">
                  <li class="nav-item">
                     <a class="nav-link fw-semibold me-md-4" href="frontend/pages/about_us.html" style="color: #232229">About us </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link fw-semibold me-md-4" href="#" style="color: #232229">Our Briquettes</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link fw-semibold me-md-4" href="#" style="color: #232229">Production Process</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link fw-semibold me-md-0" href="#" style="color: #232229">How to Order</a>
                  </li>
               </ul>
            </div>

            <!-- Navbar Mobile -->
            <div id="myNav" class="overlay overflow-hidden" style="background-color: white; z-index: 15">
               <!-- Button close -->
               <a
                  href="javascript:void(0)"
                  class="closebtn position-absolute mt-2 d-flex justify-content-center align-items-center"
                  onclick="closeNav()"
                  style="top: 35px; right: 25px; width: 30px; height: 30px; color: white; z-index: 15; font-size: 36px"
                  >&times;</a
               >

               <!-- content -->
               <div
                  class="overlay-content d-flex flex-column justify-content-start pt-2 ps-4 mt-0 text-start"
                  style="top: 0; height: 100vh; background-color: #232229"
               >
                  <br />
                  <!-- logo -->
                  <a href="#">
                     <img src="asset/images/svg/logo-bg-white.svg " alt="logo-damatiza" class="mb-5 mt-2 ms-2" style="width: 200px" />
                  </a>

                  <a href="" class="text-white" style="white-space: nowrap; font-size: 24px"
                     >Home
                     <div style="position: absolute; width: 10%; height: 3px; background-color: #fff; border-radius: 10px"></div>
                  </a>
                  <a href="frontend/pages/about_us.html" class="text-white" style="white-space: nowrap; font-size: 24px">About us</a>
                  <a href="#" class="text-white" style="white-space: nowrap; font-size: 24px">Our Briquettes</a>
                  <a href="#" class="text-white" style="white-space: nowrap; font-size: 24px">Production Process</a>
                  <a href="#" class="text-white" style="white-space: nowrap; font-size: 24px">How to Order</a>
               </div>
            </div>

            <!-- Use any element to open/show the overlay navigation menu -->
         </div>
      </nav>

      <!-- ================ Jumbotron ================ -->
      <section class="jumbotron d-flex justify-content-center align-items-center" style="margin-top: 50px">
         <div class="container row d-flex justify-content-center align-items-start mt-md-5">
            <div class="col-12 col-md-6 text-jumbotron">
               <h2 class="col-12 fz-sm-24px" style="letter-spacing: -1px; font-weight: 800; font-size: 36px">
                  100% High Quality <br />
                  Coconut Charcoal Briquettes <br />
                  and Wholesale Supplier
               </h2>
               <p class="col-12 fs-6 mt-3 fz-sm-14px" style="font-size: 20px">
                  Yet bed any for travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything.
               </p>
               <div class="col-12 col-md-4">
                  <button
                     class="btn btn-primary rounded-pill mt-2 w-100 d-flex justify-content-center align-items-center"
                     style="height: 40px; background-color: #015ea1; border: none"
                  >
                     Get Special Price
                  </button>
               </div>
            </div>
            <div class="col-12 col-md-6 hero-jumbotron mt-5 mt-md-0">
               <img src="asset/images/img/index/hero.png" alt="hero-damatiza" style="width: 100%" />
            </div>
         </div>
      </section>

      <!-- ================ Aside Our Briquettes ================ -->
      <section class="container mt-5 pt-5 ps-4 ps-md-0">
         <div class="row">
            <!-- title -->
            <div class="col-12">
               <h2 class="fz-sm-24px" style="font-weight: 800; font-size: 36px">Our Briquettes</h2>
            </div>
            <div class="col-11 col-md-8 mt-2">
               <p class="col-12 fz-sm-14px" style="font-size: 20px">
                  Yet bed any for travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything.
               </p>
            </div>

            <!-- ========== Button Navigation ========== -->
            <div class="col-12 mt-3" style="margin-left: -5px">
               <div class="py-2">
                  <div class="container network_wrapper col-sm p-2">
                     <div class="card" style="border: none">
                        <div class="card-header" style="background-color: white; border: none; margin-left: -15px">
                           <ul class="nav nav-tabs card-header-tabs mb-2 d-flex justify-content-start flex-nowrap" data-bs-tabs="tabs">
                              <li class="nav-item">
                                 <a
                                    class="nav-link briquettes-button-navigation active d-flex justify-content-center align-items-center me-2 me-md-3"
                                    data-bs-toggle="tab"
                                    href="#data1"
                                    >Briket</a
                                 >
                              </li>

                              <li class="nav-item">
                                 <a
                                    class="nav-link briquettes-button-navigation d-flex justify-content-center align-items-center me-2 me-md-3"
                                    data-bs-toggle="tab"
                                    href="#data2"
                                    >Cocopea</a
                                 >
                              </li>

                              <li class="nav-item">
                                 <a
                                    class="nav-link briquettes-button-navigation d-flex justify-content-center align-items-center me-2 me-md-3"
                                    data-bs-toggle="tab"
                                    href="#data3"
                                    >Pisang</a
                                 >
                              </li>
                           </ul>
                        </div>

                        <!-- ridho -->
                        <!-- ========== Card Our Briquettes ========== -->
                        <form class="card-body tab-content">
                           <!-- ========== Card Data 1 ========== -->
                           <div class="tab-pane active" id="data1">
                              <div class="row mt-4">
                                 <div class="col-12 col-md-12">
                                    <div id="carousel1" class="carousel slide" data-bs-ride="true">
                                       <div class="carousel-indicators d-none d-md-flex" style="top: 490px">
                                          <button
                                             type="button"
                                             data-bs-target="#carousel1"
                                             data-bs-slide-to="0"
                                             class="briquettes-navigator-carousel active"
                                             aria-current="true"
                                             aria-label="Slide 1"
                                          ></button>
                                          <button
                                             type="button"
                                             data-bs-target="#carousel1"
                                             data-bs-slide-to="1"
                                             aria-label="Slide 2"
                                             class="briquettes-navigator-carousel"
                                          ></button>
                                          <button
                                             type="button"
                                             data-bs-target="#carousel1"
                                             data-bs-slide-to="2"
                                             aria-label="Slide 3"
                                             class="briquettes-navigator-carousel"
                                          ></button>
                                       </div>
                                       <div class="carousel-inner mw-sm-99vw pe-5" style="min-width: 90vw; margin-left: -45px; margin-top: -30px">
                                          <!-- ====== Slide 1 ====== -->
                                          <div class="carousel-item active overflow-auto hide-scrollbars ms-4 ms-md-0 ps-1 pe-2">
                                             <div class="row d-flex flex-nowrap">
                                                <!-- Card 1 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               Produk Briket asli indonesia asli 100 %
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <!-- Card 2 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               Produk Briket asli indonesia asli 100 %
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <!-- ====== Slide 2 ====== -->
                                          <div class="carousel-item overflow-auto hide-scrollbars ms-4 ms-md-0 ps-1 pe-2">
                                             <div class="row d-flex flex-nowrap">
                                                <!-- Card 1 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               Produk Briket asli indonesia asli 100 %
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <!-- Card 2 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               Produk Briket asli indonesia asli 100 %
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <!-- ====== Slide 3 ====== -->
                                          <div class="carousel-item overflow-auto hide-scrollbars ms-4 ms-md-0 ps-1 pe-2">
                                             <div class="row d-flex flex-nowrap">
                                                <!-- Card 1 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               Produk Briket asli indonesia asli 100 %
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <!-- Card 2 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               Produk Briket asli indonesia asli 100 %
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- =========== Button Prev & Next =========== -->
                                       <div class="container-button-prev-next-carousel-card">
                                          <button
                                             class="carousel-control-prev d-none d-md-block button-prev-next-carousel-card"
                                             type="button"
                                             data-bs-target="#carousel1"
                                             data-bs-slide="prev"
                                          >
                                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                             <span class="visually-hidden">Previous</span>
                                          </button>
                                          <button
                                             class="carousel-control-next d-none d-md-block button-prev-next-carousel-card"
                                             type="button"
                                             data-bs-target="#carousel1"
                                             data-bs-slide="next"
                                          >
                                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                             <span class="visually-hidden">Next</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <!-- ===== Card Data 2 ===== -->
                           <div class="tab-pane" id="data2">
                              <div class="row mt-4">
                                 <div class="col-12 col-md-12">
                                    <div id="carousel2" class="carousel slide" data-bs-ride="true">
                                       <div class="carousel-indicators d-none d-md-flex" style="top: 490px">
                                          <button
                                             type="button"
                                             data-bs-target="#carousel2"
                                             data-bs-slide-to="0"
                                             class="briquettes-navigator-carousel active"
                                             aria-current="true"
                                             aria-label="Slide 1"
                                          ></button>
                                          <button
                                             type="button"
                                             data-bs-target="#carousel2"
                                             data-bs-slide-to="1"
                                             aria-label="Slide 2"
                                             class="briquettes-navigator-carousel"
                                          ></button>
                                          <button
                                             type="button"
                                             data-bs-target="#carousel2"
                                             data-bs-slide-to="2"
                                             aria-label="Slide 3"
                                             class="briquettes-navigator-carousel"
                                          ></button>
                                       </div>
                                       <div class="carousel-inner mw-sm-99vw" style="min-width: 85vw; margin-left: -45px; margin-top: -30px">
                                          <!-- ====== Slide 1 ====== -->
                                          <div class="carousel-item active overflow-auto hide-scrollbars ms-4 ms-md-0 ps-1 pe-2">
                                             <div class="row d-flex flex-nowrap">
                                                <!-- Card 1 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               <!-- Produk Briket asli indonesia asli 100 %  -->
                                                               ini data di filter Cocopea
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <!-- Card 2 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               <!-- Produk Briket asli indonesia asli 100 % -->
                                                               ini data di filter Cocopea
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- =========== Button Prev & Next =========== -->
                                       <div class="container-button-prev-next-carousel-card">
                                          <button
                                             class="carousel-control-prev d-none d-md-block button-prev-next-carousel-card"
                                             type="button"
                                             data-bs-target="#carousel2"
                                             data-bs-slide="prev"
                                          >
                                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                             <span class="visually-hidden">Previous</span>
                                          </button>
                                          <button
                                             class="carousel-control-next d-none d-md-block button-prev-next-carousel-card"
                                             type="button"
                                             data-bs-target="#carousel2"
                                             data-bs-slide="next"
                                          >
                                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                             <span class="visually-hidden">Next</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <!-- ===== Card Data 3 ===== -->
                           <div class="tab-pane" id="data3">
                              <div class="row mt-4">
                                 <div class="col-12 col-md-12">
                                    <div id="carousel3" class="carousel slide" data-bs-ride="true">
                                       <div class="carousel-indicators d-none d-md-flex" style="top: 490px">
                                          <button
                                             type="button"
                                             data-bs-target="#carousel3"
                                             data-bs-slide-to="0"
                                             class="briquettes-navigator-carousel active"
                                             aria-current="true"
                                             aria-label="Slide 1"
                                          ></button>
                                          <button
                                             type="button"
                                             data-bs-target="#carousel3"
                                             data-bs-slide-to="1"
                                             aria-label="Slide 2"
                                             class="briquettes-navigator-carousel"
                                          ></button>
                                          <button
                                             type="button"
                                             data-bs-target="#carousel3"
                                             data-bs-slide-to="2"
                                             aria-label="Slide 3"
                                             class="briquettes-navigator-carousel"
                                          ></button>
                                       </div>
                                       <div class="carousel-inner mw-sm-99vw" style="min-width: 85vw; margin-left: -45px; margin-top: -30px">
                                          <!-- ====== Slide 1 ====== -->
                                          <div class="carousel-item active overflow-auto hide-scrollbars ms-4 ms-md-0 ps-1 pe-2">
                                             <div class="row d-flex flex-nowrap">
                                                <!-- Card 1 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               <!-- Produk Briket asli indonesia asli 100 %  -->
                                                               ini data di filter Pisanh
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <!-- Card 2 -->
                                                <div class="col-10 col-md-3">
                                                   <div class="col-11 card m-3" style="min-width: 17rem; border-radius: 20px; border: none">
                                                      <div class="card shadow" style="border-radius: 20px; border: 1px solid #2322291a">
                                                         <!-- Image -->
                                                         <div class="container mt-2 pt-1">
                                                            <img
                                                               src="asset/images/img/index/image_Our_Briquettes.png"
                                                               class="card-img-top rounded-3"
                                                               alt="image_our_briquettes"
                                                            />
                                                         </div>

                                                         <div class="card-body">
                                                            <h6 class="card-title fw-bold col-10" style="font-size: 14px">
                                                               <!-- Produk Briket asli indonesia asli 100 % -->
                                                               ini data di filter Pisang
                                                            </h6>
                                                            <p class="card-text fs-10px fw-500">
                                                               Coconut shells use to be considered agricultural waste, but today,
                                                            </p>

                                                            <!-- Specification -->
                                                            <div class="row mt-3" style="font-size: 12px">
                                                               <div class="col-12 fw-bold">Specification</div>
                                                               <div class="row mt-2">
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">Mouisture Max</p>
                                                                     <p class="mb-2">Ash Content Max</p>
                                                                     <p class="mb-2">Minimum Burn Time</p>
                                                                     <p class="mb-2">Calorifix Value</p>
                                                                  </div>
                                                                  <div class="col-6 fs-10px">
                                                                     <p class="mb-2">:&nbsp; 6% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 3% or by request</p>
                                                                     <p class="mb-2">:&nbsp; 1 Hours</p>
                                                                     <p class="mb-2">:&nbsp; up to 7.500 kcal/kg or by request</p>
                                                                  </div>
                                                               </div>
                                                            </div>

                                                            <!-- Button Lihat -->
                                                            <div class="d-flex justify-content-end align-items-center mt-3">
                                                               <a
                                                                  href="frontend/pages/product_detail.html"
                                                                  class="btn btn-primary d-flex justify-content-center align-items-center"
                                                                  style="background-color: #015ea1; height: 25px; font-size: 12px; border: none"
                                                                  >Lihat</a
                                                               >
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- =========== Button Prev & Next =========== -->
                                       <div class="container-button-prev-next-carousel-card">
                                          <button
                                             class="carousel-control-prev d-none d-md-block button-prev-next-carousel-card"
                                             type="button"
                                             data-bs-target="#carousel3"
                                             data-bs-slide="prev"
                                          >
                                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                             <span class="visually-hidden">Previous</span>
                                          </button>
                                          <button
                                             class="carousel-control-next d-none d-md-block button-prev-next-carousel-card"
                                             type="button"
                                             data-bs-target="#carousel3"
                                             data-bs-slide="next"
                                          >
                                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                             <span class="visually-hidden">Next</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- ================ Aside Process Production ================ -->
      <section class="container mt-5 pt-5 ps-md-0">
         <div class="row ps-4">
            <!-- title -->
            <div class="col-12">
               <h2 class="fz-sm-24px" style="font-weight: 800">Process Production</h2>
            </div>
         </div>

         <div class="row mt-5 ms-2 ms-md-0">
            <div class="position-absolute d-none d-md-block ps-4" style="width: 100%; left: -15px; margin-top: 100px">
               <img src="asset/images/svg/line_gelombang.svg    " alt="line gelombang" style="margin-left: -15px" />
            </div>

            <div class="col-12 d-flex flex-nowrap overflow-scroll hide-scrollbars pb-5">
               <!-- ========= Card 1 ========= -->
               <div class="col-8 col-md-3 fw-bold">
                  <div class="title-card d-flex justify-content-start align-items-center">
                     <p class="mt-2 process-production-sub-title">1</p>
                     <p class="mt-2 ms-2">Tahap pertama</p>
                  </div>

                  <div class="card col-12 col-md-10 col-lg-11 shadow" style="border-radius: 16px">
                     <div class="p-3">
                        <div id="card1" class="carousel slide" data-bs-ride="true">
                           <div class="carousel-indicators" style="top: 100px">
                              <button
                                 type="button"
                                 data-bs-target="#card1"
                                 data-bs-slide-to="0"
                                 class="process-production active mt-4 mt-lg-5"
                                 aria-current="true"
                                 aria-label="Slide 1"
                              ></button>
                              <button
                                 type="button"
                                 data-bs-target="#card1"
                                 data-bs-slide-to="1"
                                 aria-label="Slide 2"
                                 class="process-production mt-4 mt-lg-5"
                              ></button>
                              <button
                                 type="button"
                                 data-bs-target="#card1"
                                 data-bs-slide-to="2"
                                 aria-label="Slide 3"
                                 class="process-production mt-4 mt-lg-5"
                              ></button>
                           </div>
                           <div class="carousel-inner process-production-img" style="border-radius: 16px">
                              <div class="carousel-item active overflow-hidden">
                                 <img
                                    src="asset/images/img/index/image_Process_Production.png"
                                    class="d-block w-100 process-production-img"
                                    alt="image_our_briquettes"
                                 />
                              </div>
                              <div class="carousel-item overflow-hidden">
                                 <img
                                    src="asset/images/img/index/image_Process_Production.png"
                                    class="d-block w-100 process-production-img"
                                    alt="image_our_briquettes"
                                 />
                              </div>
                              <div class="carousel-item overflow-hidden">
                                 <img
                                    src="asset/images/img/index/image_Process_Production.png"
                                    class="d-block w-100 process-production-img"
                                    alt="image_our_briquettes"
                                 />
                              </div>
                           </div>
                           <button class="carousel-control-prev d-none" type="button" data-bs-target="#card1" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                           </button>
                           <button class="carousel-control-next d-none" type="button" data-bs-target="#card1" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                           </button>
                        </div>
                     </div>

                     <div class="card-body ps-3 mt-2 mb-2">
                        <!-- Title -->
                        <h6 class="card-title fw-bold" style="font-size: 14px">Deskripsi</h6>

                        <p class="card-text mt-1 col-md-12 col-lg-11" style="font-size: 10px; font-weight: 500">
                           From they fine john he give of rich he. They age and draw mrs like. Improving end distrusts may instantly.
                        </p>
                     </div>
                  </div>
               </div>

               <!-- ========= Card 2 ========= -->
               <div class="col-8 col-md-3 fw-bold ms-3 ms-md-0">
                  <!-- <div class="mt-0 mt-md-5 pt-0 pt-md-3"></div> -->
                  <div class="title-card d-flex justify-content-start align-items-center">
                     <p class="mt-2 process-production-sub-title">2</p>
                     <p class="mt-2 ms-2">Manchine Production</p>
                  </div>

                  <div class="card col-12 col-md-10 col-lg-11 shadow" style="border-radius: 16px">
                     <div class="p-3">
                        <div id="card2" class="carousel slide" data-bs-ride="true">
                           <div class="carousel-indicators" style="top: 100px">
                              <button
                                 type="button"
                                 data-bs-target="#card2"
                                 data-bs-slide-to="0"
                                 class="process-production active mt-4 mt-lg-5"
                                 aria-current="true"
                                 aria-label="Slide 1"
                              ></button>
                              <button
                                 type="button"
                                 data-bs-target="#card2"
                                 data-bs-slide-to="1"
                                 aria-label="Slide 2"
                                 class="process-production mt-4 mt-lg-5"
                              ></button>
                              <button
                                 type="button"
                                 data-bs-target="#card2"
                                 data-bs-slide-to="2"
                                 aria-label="Slide 3"
                                 class="process-production mt-4 mt-lg-5"
                              ></button>
                           </div>
                           <div class="carousel-inner process-production-img" style="border-radius: 16px">
                              <div class="carousel-item active overflow-hidden">
                                 <img
                                    src="asset/images/img/index/image_Process_Production.png"
                                    class="d-block w-100 process-production-img"
                                    alt="image_our_briquettes"
                                 />
                              </div>
                              <div class="carousel-item overflow-hidden">
                                 <img
                                    src="asset/images/img/index/image_Process_Production.png"
                                    class="d-block w-100 process-production-img"
                                    alt="image_our_briquettes"
                                 />
                              </div>
                              <div class="carousel-item overflow-hidden">
                                 <img
                                    src="asset/images/img/index/image_Process_Production.png"
                                    class="d-block w-100 process-production-img"
                                    alt="image_our_briquettes"
                                 />
                              </div>
                           </div>
                           <button class="carousel-control-prev d-none" type="button" data-bs-target="#card2" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                           </button>
                           <button class="carousel-control-next d-none" type="button" data-bs-target="#card2" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                           </button>
                        </div>
                     </div>

                     <div class="card-body ps-3 mt-2 mb-2">
                        <!-- Title -->
                        <h6 class="card-title fw-bold" style="font-size: 14px">Deskripsi</h6>

                        <p class="card-text mt-1 col-md-12 col-lg-11" style="font-size: 10px; font-weight: 500">
                           From they fine john he give of rich he. They age and draw mrs like. Improving end distrusts may instantly.
                        </p>
                     </div>
                  </div>
               </div>

               <!-- ========= Card 3 ========= -->
               <div class="col-8 col-md-3 fw-bold ms-3 ms-md-0">
                  <!-- <div class="mt-0 mt-md-5 pt-0 pt-md-3"></div>
                  <div class="mt-0 mt-md-5 pt-0 pt-md-3"></div> -->
                  <div class="title-card d-flex justify-content-start align-items-center">
                     <p class="mt-2 process-production-sub-title">3</p>
                     <p class="mt-2 ms-2">Product Quality</p>
                  </div>

                  <div class="card col-12 col-md-10 col-lg-11 shadow" style="border-radius: 16px">
                     <div class="p-3">
                        <div id="card3" class="carousel slide" data-bs-ride="true">
                           <div class="carousel-indicators" style="top: 100px">
                              <button
                                 type="button"
                                 data-bs-target="#card3"
                                 data-bs-slide-to="0"
                                 class="process-production active mt-4 mt-lg-5"
                                 aria-current="true"
                                 aria-label="Slide 1"
                              ></button>
                              <button
                                 type="button"
                                 data-bs-target="#card3"
                                 data-bs-slide-to="1"
                                 aria-label="Slide 2"
                                 class="process-production mt-4 mt-lg-5"
                              ></button>
                              <button
                                 type="button"
                                 data-bs-target="#card3"
                                 data-bs-slide-to="2"
                                 aria-label="Slide 3"
                                 class="process-production mt-4 mt-lg-5"
                              ></button>
                           </div>
                           <div class="carousel-inner" style="border-radius: 16px; box-shadow: 0px 30px 80px -40px #cbb5b5">
                              <div class="carousel-item active overflow-hidden">
                                 <img
                                    src="asset/images/img/index/image_Process_Production.png"
                                    class="d-block w-100 process-production-img"
                                    alt="image_our_briquettes"
                                 />
                              </div>
                              <div class="carousel-item overflow-hidden">
                                 <img
                                    src="asset/images/img/index/image_Process_Production.png"
                                    class="d-block w-100 process-production-img"
                                    alt="image_our_briquettes"
                                 />
                              </div>
                              <div class="carousel-item overflow-hidden">
                                 <img
                                    src="asset/images/img/index/image_Process_Production.png"
                                    class="d-block w-100 process-production-img"
                                    alt="image_our_briquettes"
                                 />
                              </div>
                           </div>
                           <button class="carousel-control-prev d-none" type="button" data-bs-target="#card3" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                           </button>
                           <button class="carousel-control-next d-none" type="button" data-bs-target="#card3" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                           </button>
                        </div>
                     </div>

                     <div class="card-body ps-3 mt-2 mb-2">
                        <!-- Title -->
                        <h6 class="card-title fw-bold" style="font-size: 14px">Deskripsi</h6>

                        <p class="card-text mt-1 col-md-12 col-lg-11" style="font-size: 10px; font-weight: 500">
                           From they fine john he give of rich he. They age and draw mrs like. Improving end distrusts may instantly.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- ================ Aside How To Order ================ -->
      <section class="container px-4 px-md-0" style="margin-top: 150px">
         <!-- ========== title ========== -->
         <div class="row ps-2 ps-md-0">
            <div class="col-12">
               <h2 class="fz-sm-24px" style="font-weight: 800">How To Order</h2>
            </div>
         </div>

         <!-- ============= Content ========== -->
         <div class="row ps-2 ps-md-0" style="margin-top: 50px">
            <!-- ========== Card 1 ========== -->
            <div class="col-12 col-md-4">
               <img src="asset/images/svg/plate.svg" alt="plate" />

               <h5 class="mt-4 pt-2 fw-semibold" style="font-size: 22px">Order Step</h5>
               <p class="mt-4 col-11">Age and draw mrs like. Improving end distrusts may instantly was household applauded incommode.</p>
            </div>

            <!-- ========== Card 2 ========== -->
            <div class="col-12 col-md-4 mt-5 mt-md-0">
               <img src="asset/images/svg/square_arrow.svg" alt="plate" />

               <h5 class="mt-4 pt-2 fw-semibold">Payment Option</h5>
               <p class="mt-4 col-11">Draw mrs like. Improving end distrusts may instantly was household applauded incommode.</p>
            </div>

            <!-- ========== Card 3 ========== -->
            <div class="col-12 col-md-4 mt-5 mt-md-0">
               <img src="asset/images/svg/squarel_dollar.svg" alt="plate" />

               <h5 class="mt-4 pt-2 fw-semibold">Form Order</h5>
               <p class="mt-4 col-11">Improving end distrusts may instantly was from they fine john he give of rich he. They age and draw mrs like.</p>
            </div>
         </div>
      </section>

      <!-- ================ Aside FAQ ================ -->
      <section class="container mt-5 pb-5 pt-5">
         <div class="row mt-5 pt-5">
            <div class="col-12 col-md-6 d-flex justify-content-start align-items-center flex-wrap">
               <div class="ms-2">
                  <h2 class="col-10 fz-sm-24px" style="font-weight: 800; font-size: 36px">Frequently Asked Questions</h2>
                  <p class="col-10 fz-sm-14px" style="font-size: 18px">Jika ada yang ingin ditanyakan lebih lanjut bisa melalui Whatsapp kami</p>
               </div>
            </div>

            <div class="col-12 col-md-6 mt-4 d-flex align-items-center px-4 px-md-0" style="min-height: 450px">
               <div class="col-12 accordion" id="myAccordion" style="background-color: #fff !important">
                  <div class="accordion-item" style="background-color: #fff; border: none">
                     <h2 class="accordion-header" id="headingOne">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                           Why choose our charcoal briquettes?
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                           <p class="p-4" style="border-top: 2px solid #a3bbc640">
                              Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis.
                              Fermentum sulla craspor ttitore ismod nulla. Elit adipiscing proin quis est consectetur. Felis ultricies nisi, quis malesuada sem
                              odio. Potentiмnibh natoque amet amet, tincidunt ultricies et. Et nam rhoncus sit nullam diam tincidunt condimentum nullam.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div
                     class="accordion-item"
                     style="
                        background-color: #fff;
                        border: none;

                        border-top: 2px solid #a3bbc640;
                     "
                  >
                     <h2 class="accordion-header" id="headingTwo">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                           What is charcoal briquette made of?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                        <div class="card-body">
                           <p class="p-4" style="border-top: 2px solid #a3bbc640">
                              Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis.
                              Fermentum sulla craspor ttitore ismod nulla. Elit adipiscing proin quis est consectetur. Felis ultricies nisi, quis malesuada sem
                              odio. Potentiмnibh natoque amet amet, tincidunt ultricies et. Et nam rhoncus sit nullam diam tincidunt condimentum nullam.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item" style="background-color: #fff; border: none; border-top: 2px solid #a3bbc640">
                     <h2 class="accordion-header" id="headingThree">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                           Our shipping and coverage area?
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                           <p class="p-4" style="border-top: 2px solid #a3bbc640">
                              Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis.
                              Fermentum sulla craspor ttitore ismod nulla. Elit adipiscing proin quis est consectetur. Felis ultricies nisi, quis malesuada sem
                              odio. Potentiмnibh natoque amet amet, tincidunt ultricies et. Et nam rhoncus sit nullam diam tincidunt condimentum nullam.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- <br /><br /> -->

      <!-- ================ Aside Get Started ================ -->
      <section class="container mt-5 pt-5" style="margin-bottom: -10px">
         <div class="row pb-5">
            <div class="col-12 col-md-6 d-flex justify-content-start align-items-center flex-wrap">
               <div class="col-12 ms-2">
                  <h2 class="col-12 col-md-6 fz-sm-24px" style="font-weight: 800; font-size: 36px">Get Started With Damatiza</h2>
                  <p class="col-11 col-md-10 mt-3 fz-sm-14px" style="font-size: 18px">
                     Why kept very ever home mrs. Considered sympathize ten uncommonly occasional assistance sufficient not.
                  </p>
                  <div class="col-9 d-flex justify-content-center align-items-center">
                     <img src="asset/images/svg/arrow_melingkar.svg" alt="arrow melingkar" class="mt-4" />
                  </div>
               </div>
            </div>

            <!-- ========== Contact Form ========== -->
            <div class="col-12 col-md-6 p-3 d-flex justify-content-center justify-content-md-start align-items-center flex-wrap bg-white rounded-3">
               <div class="card col-10 col-md-8 p-4" style="border-radius: 16px; border: none; box-shadow: 14px 24px 72px rgba(102, 102, 102, 0.1)">
                  <form class="col-12">
                     <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="email" class="form-control input-contact-form" id="nama" aria-describedby="emailHelp" />
                     </div>
                     <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control input-contact-form" id="email" aria-describedby="emailHelp" />
                     </div>
                     <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control input-contact-form" id="alamat" style="height: 80px"></textarea>
                     </div>
                     <div class="mb-3">
                        <label for="noWA" class="form-label">No Wa</label>
                        <input type="email" class="form-control input-contact-form" id="noWA" aria-describedby="emailHelp" />
                     </div>
                     <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="col-7 btn btn-primary button-contact-form">Order Sekarang</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <!-- Line -->
         <div class="row mt-5 pt-5">
            <div class="col-12">
               <hr style="color: #ccc" />
            </div>
         </div>
      </section>

      <!-- ================ Footer ================ -->
      <footer class="pt-4 pb-5" style="min-width: 100vw; background-color: #e7e7e7">
         <div class="container px-4 px-md-2">
            <div class="row flex-md-nowrap overflow-hidden">
               <!-- =========== Section 1 =========== -->
               <div class="col-12 col-md-3">
                  <img src="asset/images/svg/logo-footer.svg" alt="logo-damatiza" />

                  <p class="mt-4 mt-md-3">Finance helps companies manage payments easily.</p>

                  <div class="icons mt-5 mt-md-0 d-flex gap-3" style="font-size: 20px">
                     <img src="asset/images/svg/linkend.svg" alt="linkend-damatiza" />
                     <img src="asset/images/svg/messenger.svg" alt="messenger-damatiza" />
                     <img src="asset/images/svg/twitter.svg" alt="twitter-damatiza" />
                     <img src="asset/images/svg/infinity.svg" alt="infinity-damatiza" />
                  </div>
               </div>

               <div class="col-12 col-md-6 mt-5 mt-md-0 d-flex">
                  <!-- =========== Section 2 =========== -->
                  <div class="col-6 col-md-6 ps-md-5">
                     <h6 class="fw-bold mt-2">Company</h6>
                     <p class="mt-4">About Us</p>
                  </div>
                  <!-- =========== Section 3 =========== -->
                  <div class="col-6 col-md-6 ps-md-5">
                     <h6 class="fw-bold mt-2">Product</h6>
                     <p class="mt-4 mb-1">Briket</p>
                     <p class="mb-1">Cocopeat</p>
                     <p class="mb-1">Pisang</p>
                  </div>
               </div>

               <!-- =========== Section 4 =========== -->
               <div class="col-12 col-md-3 ps-4 mt-5 mt-md-0 pt-3 pt-md-0">
                  <h6 class="fw-bold mt-2">Contact Us</h6>
                  <p class="mt-4 mb-1">
                     <img src="asset/images/svg/mail.svg" alt="mail-damatiza" />
                     &nbsp;&nbsp;&nbsp;&nbsp; Admin@damatiza.com
                  </p>
                  <p class=""><img src="asset/images/svg/seluler.svg" alt="selular-damatiza" />&nbsp;&nbsp;&nbsp;&nbsp; +62-300-848-8985</p>
               </div>
            </div>

            <div class="row mt-md-5 pt-md-5">
               <div class="px-4">
                  <hr class="d-block d-md-none mx-auto" />
               </div>
               <div class="col-12 d-flex justify-content-center align-items-center mt-4 mt-md-0">Copyright @ Damatiza 2022. All Rights Reserved.</div>
            </div>
         </div>

         <!-- CS Whatsapp -->
         <div class="col-12 position-fixed w-100 d-flex justify-content-end" style="width: 50px; height: 50px; right: 15px; bottom: 20px">
            <a href="#">
               <img src="asset/images/svg/whatsapp.svg" alt="whatsapp-damatiza" style="width: 50px" />
            </a>
         </div>
      </footer>

      <?php $this->load->view('js')?>
   </body>
</html>
