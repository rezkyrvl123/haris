<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Dashboard for Damatiza" />
  <meta name="author" content="Admin" />

  <title>Damatiza - Dashboard</title>
  <!-- Favicon Icon -->
  <link rel="icon" type="image/x-icon" src="<?php echo base_url()?>asset/images/logo/icon.png" />
  <!-- Bootstrap v.5.2 -->
<link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
         crossorigin="anonymous"
      />

      <!-- Google Fonts -->
      <link
         href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap"
         rel="stylesheet"
      />

      <!-- Bootstrap Icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

      <!-- Slider milik Our Briquettes -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css" />

      <!-- ====== External CSS Per-Komponen ===== -->
      <!-- Navbar Mobile -->
      <link rel="stylesheet" href="<?php echo base_url()?>asset/css/index/1.navbar.css" />
      <!-- Aside Our Briquettes -->
      <link rel="stylesheet" href="<?php echo base_url()?>asset/css/index/2.aside_briquettes.css" />
      <!-- Aside Faq -->
      <link rel="stylesheet" href="<?php echo base_url()?>asset/css/index/3.aside_faq.css" />
      <!-- Aside Process Production -->
      <link rel="stylesheet" href="<?php echo base_url()?>asset/css/index/4.aside_process_production.css" />
      <!-- Aside Get Started -->
      <link rel="stylesheet" href="<?php echo base_url()?>asset/css/index/5.aside_get_started.css" />
      <!-- Media Query -->
      <link rel="stylesheet" href="<?php echo base_url()?>asset/css/index/6.media_query_public.css" />
      <link rel="stylesheet" href="<?php echo base_url()?>asset/css/styles.css" />
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"/>
      <link rel="stylesheet" href="<?php echo base_url();?>asset/js/pnotify/dist/pnotify.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/js/pnotify/dist/pnotify.buttons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/js/pnotify/dist/pnotify.nonblock.css">
   <link rel="stylesheet" href="<?php echo base_url();?>asset/js/sweetalert2/sweetalert2.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
  <body>
    <aside class="sidebar offcanvas-lg offcanvas-start">
      <div class="d-flex justify-content-end m-4 d-block d-lg-none">
        <button
          data-bs-dismiss="offcanvas"
          data-bs-target=".sidebar"
          class="btn p-0 border-0 fs-4"
          aria-label="Button Close"
        >
          <i class="fas fa-close"></i>
        </button>
      </div>
      <div class="logo-brand mt-lg-5">
        <img
          src="./asset/images/logo.png"
          alt="Logo "
          width="52"
          height="50"
        />
        <div>
          <h6 class="title-store">Damatiza </h6>
          <p class="tagline-store">Comfortable on the Briquettes</p>
        </div>
      </div>
      <hr />
      <nav class="menu flex-fill">
       
        <div class="section-menu">
          <p class="fs-18 fw-500 mb-2">Dashboard</p>
          <a href="<?php echo base_url("Kategori")?>" class="item-menu" onclick="handleClickMenu(this)">
            <svg fill="none">
              <mask id="path-1-inside-1_1_75" fill="white">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.0606 6.62561L11.1213 7.68625L12.1819 6.62561C13.6828 5.12479 16.1161 5.1248 17.6169 6.62563C18.8347 7.84339 19.0644 9.67508 18.306 11.1244C17.8725 11.2566 17.4641 11.4942 17.1213 11.837C16.0052 10.721 14.1957 10.721 13.0796 11.837C11.9635 12.9531 11.9635 14.7626 13.0796 15.8787L13.0851 15.8842L13.4393 16.2383L11.1213 18.5563L4.63588 12.0709L4.6345 12.0695L4.62563 12.0606L4.62509 12.0601C3.12479 10.5592 3.12497 8.12628 4.62563 6.62563C6.12646 5.1248 8.55978 5.12479 10.0606 6.62561ZM14.4999 17.299L11.751 20.0479C11.4032 20.3957 10.8394 20.3957 10.4916 20.0479L3.57522 13.1315L3.56497 13.1213C1.47834 11.0347 1.47834 7.65159 3.56497 5.56497C5.65158 3.47835 9.03464 3.47835 11.1213 5.56494C13.2079 3.47834 16.591 3.47835 18.6776 5.56497C20.1781 7.06549 20.5996 9.23648 19.942 11.1136C20.389 11.2435 20.8105 11.4846 21.1629 11.837C22.279 12.9531 22.279 14.7626 21.163 15.8787L17.4581 19.5836C17.2721 19.7696 16.9705 19.7696 16.7845 19.5836L14.4999 17.299Z"
                />
              </mask>
              <path
                d="M11.1213 7.68625L10.0606 8.74692L11.1213 9.80756L12.1819 8.74692L11.1213 7.68625ZM10.0606 6.62561L8.99996 7.68628L8.99996 7.68628L10.0606 6.62561ZM12.1819 6.62561L11.1213 5.56494L12.1819 6.62561ZM17.6169 6.62563L18.6776 5.56497L18.6776 5.56497L17.6169 6.62563ZM18.306 11.1244L18.7435 12.5592L19.344 12.3761L19.6351 11.8198L18.306 11.1244ZM17.1213 11.837L16.0606 12.8977L17.1213 13.9583L18.1819 12.8977L17.1213 11.837ZM13.0796 11.837L14.1403 12.8977H14.1403L13.0796 11.837ZM13.0796 15.8787L12.019 16.9394L12.0203 16.9407L13.0796 15.8787ZM13.0851 15.8842L14.1458 14.8235L14.1444 14.8221L13.0851 15.8842ZM13.4393 16.2383L14.4999 17.299L15.5606 16.2383L14.4999 15.1777L13.4393 16.2383ZM11.1213 18.5563L10.0607 19.617L11.1213 20.6776L12.182 19.617L11.1213 18.5563ZM4.63588 12.0709L5.69654 11.0102L5.69499 11.0086L4.63588 12.0709ZM4.6345 12.0695L3.57534 13.1316L3.57539 13.1317L4.6345 12.0695ZM4.62563 12.0606L3.56496 13.1213L3.56647 13.1228L4.62563 12.0606ZM4.62509 12.0601L3.56422 13.1205L3.56443 13.1208L4.62509 12.0601ZM4.62563 6.62563L3.56497 5.56497L3.56497 5.56497L4.62563 6.62563ZM14.4999 17.299L15.5606 16.2383L14.4999 15.1777L13.4393 16.2383L14.4999 17.299ZM11.751 20.0479L12.8117 21.1086L12.8117 21.1086L11.751 20.0479ZM10.4916 20.0479L9.43097 21.1086L9.43097 21.1086L10.4916 20.0479ZM3.57522 13.1315L4.63588 12.0709L4.63448 12.0695L3.57522 13.1315ZM3.56497 13.1213L2.5043 14.182L2.50571 14.1834L3.56497 13.1213ZM3.56497 5.56497L4.62563 6.62563L3.56497 5.56497ZM11.1213 5.56494L10.0606 6.62561L11.1213 7.68625L12.1819 6.62561L11.1213 5.56494ZM18.6776 5.56497L19.7382 4.50431L19.7382 4.50431L18.6776 5.56497ZM19.942 11.1136L18.5264 10.6177L18.0028 12.1123L19.5235 12.5541L19.942 11.1136ZM21.1629 11.837L22.2236 10.7764V10.7764L21.1629 11.837ZM21.163 15.8787L22.2236 16.9394L22.2236 16.9394L21.163 15.8787ZM17.4581 19.5836L16.3974 18.5229L17.4581 19.5836ZM16.7845 19.5836L17.8452 18.5229L17.8452 18.5229L16.7845 19.5836ZM12.1819 6.62558L11.1213 5.56494L8.99996 7.68628L10.0606 8.74692L12.1819 6.62558ZM11.1213 5.56494L10.0606 6.62558L12.1819 8.74692L13.2426 7.68628L11.1213 5.56494ZM18.6776 5.56497C16.591 3.47835 13.2079 3.47834 11.1213 5.56494L13.2426 7.68628C14.1576 6.77124 15.6412 6.77124 16.5562 7.68629L18.6776 5.56497ZM19.6351 11.8198C20.6888 9.80605 20.3722 7.25962 18.6776 5.56497L16.5562 7.68629C17.2971 8.42716 17.44 9.5441 16.977 10.429L19.6351 11.8198ZM17.8685 9.68964C17.2055 9.89182 16.5816 10.2554 16.0606 10.7763L18.1819 12.8977C18.3467 12.7329 18.5395 12.6214 18.7435 12.5592L17.8685 9.68964ZM18.1819 10.7763C16.4801 9.0745 13.7208 9.07451 12.019 10.7764L14.1403 12.8977C14.6706 12.3674 15.5303 12.3674 16.0606 12.8977L18.1819 10.7763ZM12.019 10.7764C10.3171 12.4782 10.3171 15.2375 12.019 16.9394L14.1403 14.818C13.61 14.2877 13.61 13.428 14.1403 12.8977L12.019 10.7764ZM12.0203 16.9407L12.0258 16.9462L14.1444 14.8221L14.1389 14.8167L12.0203 16.9407ZM12.0244 16.9448L12.3786 17.299L14.4999 15.1777L14.1458 14.8235L12.0244 16.9448ZM12.182 19.617L14.4999 17.299L12.3786 15.1777L10.0607 17.4956L12.182 19.617ZM3.57522 13.1315L10.0607 19.617L12.182 17.4956L5.69654 11.0102L3.57522 13.1315ZM3.57539 13.1317L3.57678 13.1331L5.69499 11.0086L5.6936 11.0073L3.57539 13.1317ZM3.56647 13.1228L3.57534 13.1316L5.69366 11.0073L5.68479 10.9985L3.56647 13.1228ZM3.56443 13.1208L3.56497 13.1213L5.68629 11L5.68575 10.9994L3.56443 13.1208ZM3.56497 5.56497C1.47859 7.65134 1.47834 11.0339 3.56422 13.1205L5.68595 10.9996C4.77124 10.0846 4.77135 8.60122 5.68629 7.68629L3.56497 5.56497ZM11.1213 5.56494C9.03464 3.47834 5.65158 3.47835 3.56497 5.56497L5.68629 7.68629C6.60133 6.77124 8.08491 6.77124 8.99996 7.68628L11.1213 5.56494ZM13.4393 16.2383L10.6904 18.9873L12.8117 21.1086L15.5606 18.3597L13.4393 16.2383ZM10.6904 18.9873C10.9284 18.7492 11.3143 18.7492 11.5523 18.9873L9.43097 21.1086C10.3645 22.0421 11.8781 22.0421 12.8117 21.1086L10.6904 18.9873ZM11.5523 18.9873L4.63588 12.0709L2.51456 14.1922L9.43097 21.1086L11.5523 18.9873ZM4.63448 12.0695L4.62422 12.0592L2.50571 14.1834L2.51596 14.1936L4.63448 12.0695ZM4.62563 12.0606C3.12479 10.5598 3.12479 8.12646 4.62563 6.62563L2.50431 4.50431C-0.168102 7.17671 -0.168102 11.5095 2.50431 14.182L4.62563 12.0606ZM4.62563 6.62563C6.12646 5.1248 8.55978 5.12479 10.0606 6.62561L12.1819 4.50428C9.50951 1.8319 5.1767 1.83191 2.50431 4.50431L4.62563 6.62563ZM12.1819 6.62561C13.6828 5.12479 16.1161 5.1248 17.6169 6.62563L19.7382 4.50431C17.0658 1.83191 12.733 1.8319 10.0606 4.50428L12.1819 6.62561ZM17.6169 6.62563C18.6946 7.70332 19.0006 9.26386 18.5264 10.6177L21.3577 11.6096C22.1985 9.2091 21.6616 6.42766 19.7382 4.50431L17.6169 6.62563ZM22.2236 10.7764C21.6881 10.2408 21.044 9.87177 20.3605 9.6732L19.5235 12.5541C19.7341 12.6153 19.933 12.7284 20.1023 12.8977L22.2236 10.7764ZM22.2236 16.9394C23.9255 15.2375 23.9254 12.4782 22.2236 10.7764L20.1023 12.8977C20.6326 13.428 20.6326 14.2878 20.1023 14.8181L22.2236 16.9394ZM18.5188 20.6442L22.2236 16.9394L20.1023 14.818L16.3974 18.5229L18.5188 20.6442ZM15.7238 20.6442C16.4956 21.416 17.747 21.416 18.5188 20.6442L16.3974 18.5229C16.7972 18.1231 17.4454 18.1231 17.8452 18.5229L15.7238 20.6442ZM13.4393 18.3597L15.7238 20.6442L17.8452 18.5229L15.5606 16.2383L13.4393 18.3597Z"
                fill="currentColor"
                mask="url(#path-1-inside-1_1_75)"
              />
            </svg>
            <p>Category</p>
          </a>
          <a href="<?php echo base_url("Order")?>" class="item-menu" onclick="handleClickMenu(this)">
            <svg fill="none">
              <path
                d="M15.4559 6.58621V7.08621H15.9559H17.496C18.3534 7.08621 19.0124 7.67074 19.0966 8.36425L19.0966 8.36425L19.0973 8.36975L20.4776 18.7744C20.7115 20.7152 19.0442 22.5 16.7797 22.5H7.22014C4.95566 22.5 3.28838 20.7152 3.52228 18.7743L4.90258 8.36975L4.90261 8.36975L4.90328 8.36425C4.98747 7.67074 5.64646 7.08621 6.50387 7.08621H8.04397H8.54397V6.58621V5.62069C8.54397 3.93794 10.0487 2.5 11.9999 2.5C13.9512 2.5 15.4559 3.93794 15.4559 5.62069V6.58621ZM14.8735 8.03448V7.53448H14.3735H9.62636H9.12636V8.03448V10.4483C9.12636 10.5313 9.03859 10.6724 8.83516 10.6724C8.63174 10.6724 8.54397 10.5313 8.54397 10.4483V8.03448V7.53448H8.04397H6.50387C6.01844 7.53448 5.54941 7.87337 5.48368 8.40043L4.1033 18.8056L4.10327 18.8056L4.1026 18.8111C3.88702 20.5869 5.3988 22.0517 7.22014 22.0517H16.7797C18.6011 22.0517 20.1129 20.5869 19.8973 18.8111L19.8973 18.8111L19.8966 18.8056L18.5162 8.40048C18.4505 7.87339 17.9815 7.53448 17.496 7.53448H15.9559H15.4559V8.03448V10.4483C15.4559 10.5313 15.3681 10.6724 15.1647 10.6724C14.9613 10.6724 14.8735 10.5313 14.8735 10.4483V8.03448ZM14.3735 7.08621H14.8735V6.58621V5.62069C14.8735 4.104 13.5444 2.94828 11.9999 2.94828C10.4555 2.94828 9.12636 4.104 9.12636 5.62069V6.58621V7.08621H9.62636H14.3735ZM9.33516 16C9.33516 15.917 9.42294 15.7759 9.62636 15.7759H14.3735C14.5769 15.7759 14.6647 15.917 14.6647 16C14.6647 16.083 14.5769 16.2241 14.3735 16.2241H9.62636C9.42293 16.2241 9.33516 16.083 9.33516 16Z"
                stroke="currentColor"
              />
            </svg>
            <p class="flex-fill">Your Order</p>
            
          </a>
         
          <a href="<?php echo base_url("Barang")?>" class="item-menu" onclick="handleClickMenu(this)">
            <svg fill="none">
              <mask id="path-1-inside-1_1_75" fill="white">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.0606 6.62561L11.1213 7.68625L12.1819 6.62561C13.6828 5.12479 16.1161 5.1248 17.6169 6.62563C18.8347 7.84339 19.0644 9.67508 18.306 11.1244C17.8725 11.2566 17.4641 11.4942 17.1213 11.837C16.0052 10.721 14.1957 10.721 13.0796 11.837C11.9635 12.9531 11.9635 14.7626 13.0796 15.8787L13.0851 15.8842L13.4393 16.2383L11.1213 18.5563L4.63588 12.0709L4.6345 12.0695L4.62563 12.0606L4.62509 12.0601C3.12479 10.5592 3.12497 8.12628 4.62563 6.62563C6.12646 5.1248 8.55978 5.12479 10.0606 6.62561ZM14.4999 17.299L11.751 20.0479C11.4032 20.3957 10.8394 20.3957 10.4916 20.0479L3.57522 13.1315L3.56497 13.1213C1.47834 11.0347 1.47834 7.65159 3.56497 5.56497C5.65158 3.47835 9.03464 3.47835 11.1213 5.56494C13.2079 3.47834 16.591 3.47835 18.6776 5.56497C20.1781 7.06549 20.5996 9.23648 19.942 11.1136C20.389 11.2435 20.8105 11.4846 21.1629 11.837C22.279 12.9531 22.279 14.7626 21.163 15.8787L17.4581 19.5836C17.2721 19.7696 16.9705 19.7696 16.7845 19.5836L14.4999 17.299Z"
                />
              </mask>
              <path
                d="M11.1213 7.68625L10.0606 8.74692L11.1213 9.80756L12.1819 8.74692L11.1213 7.68625ZM10.0606 6.62561L8.99996 7.68628L8.99996 7.68628L10.0606 6.62561ZM12.1819 6.62561L11.1213 5.56494L12.1819 6.62561ZM17.6169 6.62563L18.6776 5.56497L18.6776 5.56497L17.6169 6.62563ZM18.306 11.1244L18.7435 12.5592L19.344 12.3761L19.6351 11.8198L18.306 11.1244ZM17.1213 11.837L16.0606 12.8977L17.1213 13.9583L18.1819 12.8977L17.1213 11.837ZM13.0796 11.837L14.1403 12.8977H14.1403L13.0796 11.837ZM13.0796 15.8787L12.019 16.9394L12.0203 16.9407L13.0796 15.8787ZM13.0851 15.8842L14.1458 14.8235L14.1444 14.8221L13.0851 15.8842ZM13.4393 16.2383L14.4999 17.299L15.5606 16.2383L14.4999 15.1777L13.4393 16.2383ZM11.1213 18.5563L10.0607 19.617L11.1213 20.6776L12.182 19.617L11.1213 18.5563ZM4.63588 12.0709L5.69654 11.0102L5.69499 11.0086L4.63588 12.0709ZM4.6345 12.0695L3.57534 13.1316L3.57539 13.1317L4.6345 12.0695ZM4.62563 12.0606L3.56496 13.1213L3.56647 13.1228L4.62563 12.0606ZM4.62509 12.0601L3.56422 13.1205L3.56443 13.1208L4.62509 12.0601ZM4.62563 6.62563L3.56497 5.56497L3.56497 5.56497L4.62563 6.62563ZM14.4999 17.299L15.5606 16.2383L14.4999 15.1777L13.4393 16.2383L14.4999 17.299ZM11.751 20.0479L12.8117 21.1086L12.8117 21.1086L11.751 20.0479ZM10.4916 20.0479L9.43097 21.1086L9.43097 21.1086L10.4916 20.0479ZM3.57522 13.1315L4.63588 12.0709L4.63448 12.0695L3.57522 13.1315ZM3.56497 13.1213L2.5043 14.182L2.50571 14.1834L3.56497 13.1213ZM3.56497 5.56497L4.62563 6.62563L3.56497 5.56497ZM11.1213 5.56494L10.0606 6.62561L11.1213 7.68625L12.1819 6.62561L11.1213 5.56494ZM18.6776 5.56497L19.7382 4.50431L19.7382 4.50431L18.6776 5.56497ZM19.942 11.1136L18.5264 10.6177L18.0028 12.1123L19.5235 12.5541L19.942 11.1136ZM21.1629 11.837L22.2236 10.7764V10.7764L21.1629 11.837ZM21.163 15.8787L22.2236 16.9394L22.2236 16.9394L21.163 15.8787ZM17.4581 19.5836L16.3974 18.5229L17.4581 19.5836ZM16.7845 19.5836L17.8452 18.5229L17.8452 18.5229L16.7845 19.5836ZM12.1819 6.62558L11.1213 5.56494L8.99996 7.68628L10.0606 8.74692L12.1819 6.62558ZM11.1213 5.56494L10.0606 6.62558L12.1819 8.74692L13.2426 7.68628L11.1213 5.56494ZM18.6776 5.56497C16.591 3.47835 13.2079 3.47834 11.1213 5.56494L13.2426 7.68628C14.1576 6.77124 15.6412 6.77124 16.5562 7.68629L18.6776 5.56497ZM19.6351 11.8198C20.6888 9.80605 20.3722 7.25962 18.6776 5.56497L16.5562 7.68629C17.2971 8.42716 17.44 9.5441 16.977 10.429L19.6351 11.8198ZM17.8685 9.68964C17.2055 9.89182 16.5816 10.2554 16.0606 10.7763L18.1819 12.8977C18.3467 12.7329 18.5395 12.6214 18.7435 12.5592L17.8685 9.68964ZM18.1819 10.7763C16.4801 9.0745 13.7208 9.07451 12.019 10.7764L14.1403 12.8977C14.6706 12.3674 15.5303 12.3674 16.0606 12.8977L18.1819 10.7763ZM12.019 10.7764C10.3171 12.4782 10.3171 15.2375 12.019 16.9394L14.1403 14.818C13.61 14.2877 13.61 13.428 14.1403 12.8977L12.019 10.7764ZM12.0203 16.9407L12.0258 16.9462L14.1444 14.8221L14.1389 14.8167L12.0203 16.9407ZM12.0244 16.9448L12.3786 17.299L14.4999 15.1777L14.1458 14.8235L12.0244 16.9448ZM12.182 19.617L14.4999 17.299L12.3786 15.1777L10.0607 17.4956L12.182 19.617ZM3.57522 13.1315L10.0607 19.617L12.182 17.4956L5.69654 11.0102L3.57522 13.1315ZM3.57539 13.1317L3.57678 13.1331L5.69499 11.0086L5.6936 11.0073L3.57539 13.1317ZM3.56647 13.1228L3.57534 13.1316L5.69366 11.0073L5.68479 10.9985L3.56647 13.1228ZM3.56443 13.1208L3.56497 13.1213L5.68629 11L5.68575 10.9994L3.56443 13.1208ZM3.56497 5.56497C1.47859 7.65134 1.47834 11.0339 3.56422 13.1205L5.68595 10.9996C4.77124 10.0846 4.77135 8.60122 5.68629 7.68629L3.56497 5.56497ZM11.1213 5.56494C9.03464 3.47834 5.65158 3.47835 3.56497 5.56497L5.68629 7.68629C6.60133 6.77124 8.08491 6.77124 8.99996 7.68628L11.1213 5.56494ZM13.4393 16.2383L10.6904 18.9873L12.8117 21.1086L15.5606 18.3597L13.4393 16.2383ZM10.6904 18.9873C10.9284 18.7492 11.3143 18.7492 11.5523 18.9873L9.43097 21.1086C10.3645 22.0421 11.8781 22.0421 12.8117 21.1086L10.6904 18.9873ZM11.5523 18.9873L4.63588 12.0709L2.51456 14.1922L9.43097 21.1086L11.5523 18.9873ZM4.63448 12.0695L4.62422 12.0592L2.50571 14.1834L2.51596 14.1936L4.63448 12.0695ZM4.62563 12.0606C3.12479 10.5598 3.12479 8.12646 4.62563 6.62563L2.50431 4.50431C-0.168102 7.17671 -0.168102 11.5095 2.50431 14.182L4.62563 12.0606ZM4.62563 6.62563C6.12646 5.1248 8.55978 5.12479 10.0606 6.62561L12.1819 4.50428C9.50951 1.8319 5.1767 1.83191 2.50431 4.50431L4.62563 6.62563ZM12.1819 6.62561C13.6828 5.12479 16.1161 5.1248 17.6169 6.62563L19.7382 4.50431C17.0658 1.83191 12.733 1.8319 10.0606 4.50428L12.1819 6.62561ZM17.6169 6.62563C18.6946 7.70332 19.0006 9.26386 18.5264 10.6177L21.3577 11.6096C22.1985 9.2091 21.6616 6.42766 19.7382 4.50431L17.6169 6.62563ZM22.2236 10.7764C21.6881 10.2408 21.044 9.87177 20.3605 9.6732L19.5235 12.5541C19.7341 12.6153 19.933 12.7284 20.1023 12.8977L22.2236 10.7764ZM22.2236 16.9394C23.9255 15.2375 23.9254 12.4782 22.2236 10.7764L20.1023 12.8977C20.6326 13.428 20.6326 14.2878 20.1023 14.8181L22.2236 16.9394ZM18.5188 20.6442L22.2236 16.9394L20.1023 14.818L16.3974 18.5229L18.5188 20.6442ZM15.7238 20.6442C16.4956 21.416 17.747 21.416 18.5188 20.6442L16.3974 18.5229C16.7972 18.1231 17.4454 18.1231 17.8452 18.5229L15.7238 20.6442ZM13.4393 18.3597L15.7238 20.6442L17.8452 18.5229L15.5606 16.2383L13.4393 18.3597Z"
                fill="currentColor"
                mask="url(#path-1-inside-1_1_75)"
              />
            </svg>
            <p>Our Product</p>
          </a>
         
        </div>
      </nav>
      <footer>
       <br><br><br><br><br><br><br><br><br><br><br>
        <p>©2022 Zhevaa . All rights reserved.</p>
      </footer>
    </aside>
    <main class="content flex-fill">
      <section>
        <button
          aria-controls="sidebar"
          data-bs-toggle="offcanvas"
          data-bs-target=".sidebar"
          aria-label="Button Hamburger"
          class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none"
        >
          <i class="fa-solid fa-bars"></i>
        </button>
        <nav class="nav-content gap-5">
          <div class="d-flex gap-3 align-items-left">
            <img
              src="asset/images/photo.webp"
              alt="Photo Profile"
              class="photo-profile"
            />
            <div>
              <p class="title-content ms-2">Hello, Admin</p>
              <p class="subtitle-content">
                Welcome to admin panel.
               
              </p>
            </div>
          </div>
        
        </nav>
      </section>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-lg btn-primary btn-tambah" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->  
<div class="modal fade modal-tampil" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Tambah Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-horizontal form-label-left" method="POST" autocomplete="off" enctype="multipart/form-data">
      <div class="modal-body">
        <input name="product_id" type="hidden" class="product_id">
        <div class="form-group row ">
							<label class="control-label col-md-3 col-sm-3 ">Nama Kategori</label>
							<div class="col-md-9 col-sm-9 ">
								<input name="nama_category" type="text" class="form-control nama_category" minlength="4" maxlength="50" placeholder="Masukkan Nama Barang" required>
							</div>
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary btn-simpan">Simpan</button>
      </div>
</form>
    </div>
  </div>
</div>

    <!-- End Modal Tambah -->
      <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
          <h4 class="title-section-content">All</h4>
          <a href="#" class="btn-link">View All Shoes</a>
        </div>
        <!-- <div class="d-flex gap-4 flex-wrap">
          <div class="product-card">
            <img
              src="asset/images/nike_red.png"
              alt="Nike Red"
              width="260"
              height="180"
            />
            <div class="product-detail pt-3">
              <div>
                <p class="label-detail mb-1">7 Colours</p>
                <p class="title-detail">Nike Red Shoe 77</p>
              </div>
              <button
                class="btn btn-fav active"
                aria-label="Button Favorite"
                onclick="handleFavorite(this)"
              >
                <svg fill="currentColor">
                  <path
                    d="M11.5909 6.09528L12.1213 6.6256L12.6516 6.09528C14.4453 4.30157 17.3535 4.30157 19.1472 6.0953C20.941 7.88902 20.941 10.7972 19.1473 12.591L12.2207 19.5176C12.1658 19.5725 12.0768 19.5725 12.022 19.5176L5.10555 12.6012L5.10485 12.6005L5.0953 12.591C5.09519 12.5909 5.09508 12.5907 5.09497 12.5906C3.30157 10.7969 3.30168 7.88891 5.0953 6.0953C6.88902 4.30158 9.79721 4.30157 11.5909 6.09528Z"
                    stroke="currentColor"
                    stroke-width="2"
                  />
                </svg>
              </button>
            </div>
            <div class="product-detail pt-4">
              <div>
                <p class="label-detail mb-1">Price:</p>
                <p class="price-detail">Rp 220.000</p>
              </div>
              <button
                class="buy-product button btn-rounded active"
                onclick="handleBuy(this)"
              >
                Buy Now
              </button>
            </div>
          </div>
          <div class="product-card">
            <img
              src="asset/images/nike_airforce.png"
              alt="Nike Airforce"
              width="260"
              height="180"
            />
            <div class="product-detail pt-3">
              <div>
                <p class="label-detail mb-1">4 Colours</p>
                <p class="title-detail">Nike Airforce uHigh</p>
              </div>
              <button
                class="btn btn-fav"
                aria-label="Button Favorite"
                onclick="handleFavorite(this)"
              >
                <svg fill="currentColor">
                  <path
                    d="M11.5909 6.09528L12.1213 6.6256L12.6516 6.09528C14.4453 4.30157 17.3535 4.30157 19.1472 6.0953C20.941 7.88902 20.941 10.7972 19.1473 12.591L12.2207 19.5176C12.1658 19.5725 12.0768 19.5725 12.022 19.5176L5.10555 12.6012L5.10485 12.6005L5.0953 12.591C5.09519 12.5909 5.09508 12.5907 5.09497 12.5906C3.30157 10.7969 3.30168 7.88891 5.0953 6.0953C6.88902 4.30158 9.79721 4.30157 11.5909 6.09528Z"
                    stroke="currentColor"
                    stroke-width="2"
                  />
                </svg>
              </button>
            </div>
            <div class="product-detail pt-4">
              <div>
                <p class="label-detail mb-1">Price:</p>
                <p class="price-detail">Rp 250.000</p>
              </div>
              <button
                class="buy-product button btn-rounded"
                onclick="handleBuy(this)"
              >
                Buy Now
              </button>
            </div>
          </div>
          <div class="product-card">
            <img
              src="asset/images/nike_kiger.png"
              alt="Nike Kiger"
              width="260"
              height="180"
            />
            <div class="product-detail pt-3">
              <div>
                <p class="label-detail mb-1">2 Colours</p>
                <p class="title-detail">Nike Kiger 1 Mid</p>
              </div>
              <button
                class="btn btn-fav"
                aria-label="Button Favorite"
                onclick="handleFavorite(this)"
              >
                <svg fill="currentColor">
                  <path
                    d="M11.5909 6.09528L12.1213 6.6256L12.6516 6.09528C14.4453 4.30157 17.3535 4.30157 19.1472 6.0953C20.941 7.88902 20.941 10.7972 19.1473 12.591L12.2207 19.5176C12.1658 19.5725 12.0768 19.5725 12.022 19.5176L5.10555 12.6012L5.10485 12.6005L5.0953 12.591C5.09519 12.5909 5.09508 12.5907 5.09497 12.5906C3.30157 10.7969 3.30168 7.88891 5.0953 6.0953C6.88902 4.30158 9.79721 4.30157 11.5909 6.09528Z"
                    stroke="currentColor"
                    stroke-width="2"
                  />
                </svg>
              </button>
            </div>
            <div class="product-detail pt-4">
              <div>
                <p class="label-detail mb-1">Price:</p>
                <p class="price-detail">Rp 990.000</p>
              </div>
              <button
                class="buy-product button btn-rounded"
                onclick="handleBuy(this)"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div> -->
                        <div class="block-content block-content-full">
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 5%;">No</th>
                                        <th>Nama Kategori</th>
                                        <th class="text-center" style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php $no = 1; foreach($tampil as $key){?>
										<tr>
											<td class="text-center"><?php echo $no;?></td>
											<td><?php echo $key->nama_category; ?></td>
											<td class="text-center">
													<button type="button" class="btn btn-sm btn-warning btn-ubah" value="<?php echo $key->id_category?>" data-toggle="tooltip" title="Ubah">
														<i class="fa fa-edit"></i>
													</button>
													<button type="button" class="btn btn-sm btn-danger btn-hapus" value="<?php echo $key->id_category?>" data-toggle="tooltip" title="Hapus">
														<i class="fa fa-trash"></i>
													</button>
											</td>
										</tr>
									<?php $no++;}?>
                                </tbody>
                            </table>
                        </div>
      </section>
      <section class="d-flex flex-column gap-4 mb-5">
       
      </section>
    </main>

    <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
         crossorigin="anonymous"
      ></script>

      <!-- <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script> -->

      <script
      src="https://kit.fontawesome.com/32f82e1dca.js"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="<?php echo base_url()?>asset/js/index.js"></script> -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script>
    function clear(){
		$('form').trigger("reset");
		$('form input, form select, form textarea, form button').prop("disabled",false);
		$(".kelompok-detail:not(:first)").remove();
	   }
   </script>
   <script>
	function hapus(id,tabel){
		Swal.fire({
			html:
				'<p class="font-16 font-weight-bold mt-3" style="font-family: Roboto, sans-serif"><b>Apakah Anda yakin ingin menghapus Data ini?</b></p><br><p class="font-weight-regular mb-1 px-3" style="font-family: Roboto, sans-serif; font-size: 16px;color: #7C8CA3!important " text-align="justify">Data yang telah dihapus tidak akan bisa dipulihkan kembali.</p>',
			showCancelButton: true,
			cancelButtonText: "Batal",
			confirmButtonText: 'Hapus',
			confirmButtonColor: '#dc3545',
			reverseButtons: true
		}).then((result) => {
			if(result.value){
				$.ajax({
					url : "<?php echo base_url();?>"+tabel+"/hapus",
					type : "POST",
					data : {
						id : id
					},
					success : function(data) {
						new PNotify({
							title: 'Sukses',
							text: 'Berhasil Dihapus',
							type: 'success',
							nonblock: {
								nonblock: true
							},
							styling: 'bootstrap3'
						});
						setTimeout(
							function() {
								location.reload();
							}, 1000
						);
					},
					error : function () {
						new PNotify({
							title: 'Gagal',
							text: 'Gagal Dihapus',
							type: 'error',
							nonblock: {
								nonblock: true
							},
							styling: 'bootstrap3'
						});
						setTimeout(
							function() {
								location.reload();
							}, 1000
						);
					}
				});
			}
		});
	}
	</script>
<script src="<?php echo base_url();?>asset/js/pnotify/dist/pnotify.js"></script>
<script src="<?php echo base_url();?>asset/js/pnotify/dist/pnotify.buttons.js"></script>
<script src="<?php echo base_url();?>asset/js/pnotify/dist/pnotify.nonblock.js"></script>
<script src="<?php echo base_url();?>asset/js/sweetalert2/sweetalert2.min.js"></script>

<script>
    function get_data(id_category){
				$.ajax({
					url : "<?php echo base_url();?>"+'Kategori/tampil_kategori',
					type: "POST",
					data: {
						id_category:id_category
					},
					dataType: 'json',
					success: function(respond){
                        console.log(respond);
						$(".id_category").val(respond.id_category);
						$(".nama_category").val(respond.nama_category);
					},
					error: function() {
						console.log('Error ya');
					}
				});
			};
            $(".btn-hapus").on("click", function(){
				var id = $(this).attr("value");
				hapus(id,'Kategori');
			});
            $(".btn-ubah").on("click", function(){
				var id = $(this).attr("value");
				$("#myModalLabel").html('Ubah Data');
				$("form").attr("action","<?php echo base_url();?>"+'index.php/Kategori/ubah');
				// $(".password").prop("required", false);
				clear();
				// $(".product_picture").parent().find("img").attr("src","");
				// $(".product_picture").prop("required",false);
				get_data(id);
				$(".modal-tampil").modal("show");
				$(".btn-simpan").show();
			});
            $(".btn-tambah").on("click", function(){
				$("#myModalLabel").html('Tambah Data');
				$("form").attr("action","<?php echo base_url();?>"+'index.php/Kategori/simpan');
				clear();
				$(".product_picture").parent().find("img").attr("src","");
				$(".product_picture").prop("required",true);
				$(".modal-tampil").modal("show");
				$(".btn-simpan").show();
			});
</script>

  </body>
</html>
