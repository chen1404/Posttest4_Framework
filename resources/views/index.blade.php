<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Weesia - Your Best Mar ketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
  </head>

  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="/index.html" class="navbar-brand">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <span class="fs-4">Selamat Datang {{ Auth::user()->name ?? "HomePage"}}</span>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="/index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="/categories.html" class="nav-link">Categories</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Rewards</a>
            </li>
            <li class="nav-item">
              <a href="/register.html" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item"><a href="{{ Auth::user() ? '/logout': '/login'}}" class="nav-link active" aria-current="page">{{ Auth::user() ? 'Logout' :'Login'}}</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Page Content-->
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    class="active"
                    data-target="#storeCarousel"
                    data-slide-to="0"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="/images/Banner1.jpg"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner2.png"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/Banner1.jpg"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Data Saham</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/bca.png"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">BBCA </p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="/details" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/Agro.jpg" alt="" class="w-100" />
                </div>
                <p class="categories-text">AGRO </p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a
                href="/details"
                class="component-categories d-block"
              >
                <div class="categories-image">
                  <img
                    src="/images/Buka.png"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">BUKA </p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a
                href="/details"
                class="component-categories d-block"
              >
                <div class="categories-image">
                  <img
                    src="/images/amar.jpg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">AMAR </p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="/details" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/Jago.jpg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">ARTO </p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="/details" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/brii.png"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">BBRI </p>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Data Saham  </h5>
            </div>
          </div>
          <a href="{{ route('create') }}" class=""><Button class="btn btn-primary mb-3">Tambah</Button></a>
          <table border="1" class="table table-dark mt-5">
		<tr>
			<th>Kode Saham</th>
			<th>Nama</th>
			<th>Saham</th>
			<th>Papan Pencatatan</th>
      <th>Volume</th>
      <th>Aksi</th>
		</tr>
		@foreach($sahams as $sh)
		<tr>
			<td scope="row">{{ $sh->Kode_Saham }}</td>
			<td>{{ $sh->Nama }}</td>
			<td>{{ $sh->Saham }}</td>
			<td>{{ $sh->broker->papan_pencatatan }}</td>
      <td>{{ $sh->broker->volume }}</td>
      <td><a href="/show/{{ $sh->id }}" class=""><Button class="btn btn-success mb-3">Lihat</Button></a></td>
			
		</tr>
		@endforeach
	</table>
<footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">2022 Copyright Weesia. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="/script/navbar-scroll.js"></script>
  </body>
</html>

