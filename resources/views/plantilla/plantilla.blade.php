<!DOCTYPE html>
<html lang="ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catorce</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Incluimos Bootstrap 4.4.1-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top">
				<div class="container">
					<a class="navbar-brand" href="index.html">
						<img class="logo logo-dark" alt="logo" src="{{ asset('img/logo.png') }}" width="187">
					</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><span data-i18n="features">Contacto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><span data-i18n="price">Iniciar Sesion</a>
							</li>
						</ul> 
					</div>
				</div> <!-- Container --> 
			</nav> <!-- navbar -->
    </header>
    <section class="wrapper-principal d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center d-flex justify-content-between">
          <div class="col-lg-5 text-center text-lg-left order-last order-lg-first">
            <div class="header-text">
              <h1 class="head-text mb-3">Saca un <span class="marked">CATORCE</span> en la <span class="marked">EBAU</span></h1>
              <p class="big-text mb-4">Estudia con nosotros, y olvídate de los libros.</p>
              <button class="btn-head">Únete ahora</button>
            </div>
          </div>
          <div class="col-12 col-lg-7 d-flex justify-content-center mt-4 mt-md-0">
            <img src="{{ asset('img/student.svg') }}" alt="" class="icon-stdnt">
          </div>
        </div>
      </div>
    </section>
    <section>
      <article>
        <div class="head-line"></div>
      </article>
    </section>
</html>