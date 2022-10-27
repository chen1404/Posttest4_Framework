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

    <title>Store - Your Best Marketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="/dashboard.html"
              class="list-group-item list-group-item-action"
            >
              Dashboard
            </a>
            <a
              href="/dashboard-product.html"
              class="list-group-item list-group-item-action active"
            >
              Details Stock
            </a>
            <a
              href="/dashboard-transactions.html"
              class="list-group-item list-group-item-action"
            >
              Transactions
            </a>
            <a
              href="/dashboard-settings.html"
              class="list-group-item list-group-item-action"
            >
              Settings
            </a>
            <a
              href="/dashboard-account.html"
              class="list-group-item list-group-item-action"
            >
              My Account
            </a>
            <a
              href="/index.html"
              class="list-group-item list-group-item-action"
            >
              Sign Out
            </a>
          </div>
        </div>

        <!-- Page Content  -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Dekstop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="/images/icon-user.png"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                      />
                      Hi, Rai
                    </a>
                    <div class="dropdown-menu">
                      <a href="/dashboard.html" class="dropdown-item"
                        >Dashboard</a
                      >
                      <a href="/dashboard-account.html" class="dropdown-item"
                        >Settings</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="/" class="dropdown-item">Logout</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link d-inline-block mt-2">
                      <img src="/images/icon-cart-filled.svg" alt="" />
                      <div class="card-badge">3</div>
                    </a>
                  </li>
                </ul>

                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> Hi, Rai </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block"> Cart </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- Section Content-->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading mt-5 ml-4" >
                <h2 class="dashboard-title">Details Data Saham [Posttest 2]</h2>
                <p class="dashboard-subtitle"></p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                 
                  <table border="1" class="table table-dark mt-3">
		<tr>
			<th>Kode Saham</th>
			<th>Nama</th>
			<th>Saham</th>
			<th>Papan Pencatatan</th>
      <th>Volume</th>
      <th>Frequency</th>
      <th>Value</th>
		</tr>
		@foreach($sahams as $sh)
		<tr>
			<td scope="row">{{ $sh->Kode_Saham }}</td>
			<td>{{ $sh->Nama }}</td>
			<td>{{ $sh->Saham }}</td>
			<td>{{ $sh->Papan_Pencatatan }}</td>
			<td>{{ $sh->broker->volume }}</td>
			<td>{{ $sh->broker->frequency }}</td>
      <td>{{ $sh->broker->value }}</td>
		</tr>
		@endforeach
	</table>
                     
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>
</html>
