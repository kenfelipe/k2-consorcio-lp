<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>K2 Consórcio - Realizamos o seu sonho de comprar a casa própria ou o carro novo.</title>
  <link rel="icon" type="image/x-icon" href="./assets/img/k2/k2.png">

  <meta name="description" content="Nosso trabalho é te ajudar a encontrar a melhor opção do mercado. Conheça as vantagens de se trabalhar com a K2. Processo consultivo, pois orientamos sobre a melhor opção. Sólida experiência, no mercado a mais de 22 anos. Consultor dedicado, trate sempre com a mesma pessoa.">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/56cda3019b.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> -->

  <!-- css -->
  <link rel="stylesheet" href="./css/style.css">

  <script>
    var scrollto = function(id) {
      document.getElementById(id).scrollIntoView({
        behavior: 'smooth'
      });
    }
  </script>
</head>

<body class="position-relative">
  <a
    id="wapp"
    href="https://api.whatsapp.com/send?phone=5511987654321"
    target="_blank" rel="noopener noreferrer"
    class="position-fixed d-flex align-items-center fs-6 px-4 py-3 btn-wapp fw-600 ls-1 z-1000"
    style="bottom:20px; right:20px;"
  >
    <i class="fa-brands fa-whatsapp fs-2 me-2"></i>
    <span class="ms-1">Fale com um consultor</span>
  </a>

  <header>
    <div class="header_container container py-2">

      <!-- Telphone -->
      <div class="header_telphone d-sm-flex justify-content-between align-items-center c-primary">
        <a href="tel:(11)1234-5678"
          class="d-flex align-items-center d-sm-block fs-6 fw-700 ls-1 ln-opac"
        >
          <div class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-phone fs-5 ms-1"></i> (11) 1234-5678
          </div>
        </a>
        <a href="tel:(11)12345-6789"
          class="d-flex justify-content-end align-items-center d-sm-block fs-6 fw-700 ls-1 ln-opac"
        >
          <div class="d-flex align-items-center gap-2">
            (11) 12345-6789 <i class="fa-solid fa-mobile-screen fs-5 me-1"></i>
          </div>
        </a>
      </div>

      <!-- Logos -->
      <div class="header_logos">
        <div class="header_logos-mobile d-md-none">
          <div class="d-flex justify-content-around align-items-center my-2">
            <a class="ln-opac-2"
              href="#" target="_blank" rel="noopener noreferrer"
            >
              <img src="./assets/img/logo/porto_1.png" alt="..." style="width:120px">
            </a>
            <button class="ln-opac-2" onclick="scrollto('form')">
              <img src="./assets/img/logo/yamaha_1.png" alt="..." style="width:140px">
            </button>
          </div>
          <div class="d-flex justify-content-around align-items-center my-2">
            <button class="ln-opac-2" onclick="scrollto('form')">
              <img src="./assets/img/logo/itau_1.png" alt="..." style="width:120px">
            </button>
            <button class="ln-opac-2" onclick="scrollto('form')">
              <img src="./assets/img/logo/magalu_1.png" alt="..." style="width:120px">
            </button>
          </div>
        </div>

        <div class="header_logos-pc d-none d-md-block">
          <ul class="d-flex justify-content-between align-items-center mt-2">
            <li>
              <a class="ln-opac-2"
                href="#" target="_blank" rel="noopener noreferrer"
              >
                <img src="./assets/img/logo/porto_1.png" alt="..." style="width:140px">
              </a>
            </li>
            <li>
              <button class="ln-opac-2" onclick="scrollto('form')">
                <img src="./assets/img/logo/yamaha_1.png" alt="..." style="width:160px">
              </button>
            </li>
            <li>
              <button class="ln-opac-2" onclick="scrollto('form')">
                <img src="./assets/img/logo/itau_1.png" alt="..." style="width:140px">
              </button>
            </li>
            <li>
              <button class="ln-opac-2" onclick="scrollto('form')">
                <img src="./assets/img/logo/magalu_1.png" alt="..." style="width:140px">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <section class="banner">
    <div class="banner_container container p-none-mobile">
      <img src="./assets/img/banner/banner_3.png" alt="..." class="img-fluid w-100">
    </div>
  </section>

  <section class="feature py-5">
    <div class="feature_container container py-3">

      <h1 class="text-center fs-2 mb-3 fw-700">A K2 e o consórcio</h1>
      <p class="text-center fs-5 c-gray fw-400">Conheça as vantagens de se trabalhar com a K2</p>

      <ul class="feature_items row text-center">
        <li class="col-md-4 my-4">
          <i class="fa-solid fa-magnifying-glass mb-4 c-primary is-feature"></i>
          <h3 class="fs-5 fw-700">Processo consultivo</h3>
          <p class="fs-5">Orientamos sobre a melhor opção</p>
        </li>
        <li class="col-md-4 my-4">
          <i class="fa-solid fa-user-tie mb-4 c-primary is-feature"></i>
          <h3 class="fs-5 fw-700">Sólida experiência</h3>
          <p class="fs-5">No mercado a mais de 22 anos</p>
        </li>
        <li class="col-md-4 my-4">
          <i class="fa-solid fa-handshake-simple mb-4 c-primary is-feature"></i>
          <h3 class="fs-5 fw-700">Consultor dedicado</h3>
          <p class="fs-5">Trate sempre com a mesma pessoa</p>
        </li>
      </ul>
    </div>
  </section>

  <article
    id="carousel" class="carousel slide carousel-fade"
    data-bs-ride="carousel"
    data-bs-interval="true"
  >
    <div class="carousel-inner">
      <section
        id="carousel-porto"
        class="carousel-item py-5 bg-cover active"
        data-bs-interval="5000"
      >
        <div class="container py-4">
          <div class="row flex-row-reverse">
            <div class="col-lg-4 pe-lg-5">
              <a
                id="carousel-porto-logo"
                class="d-inline-block ln-bright-2"
                href="./portoconsorcio" target="_blank" rel="noopener noreferrer"
              >
                <img src="./assets/img/logo/porto_3.png" alt="..." class="img-fluid">
              </a>
              <p class="fs-carousel c-black fw-700 my-4 pt-3 pb-2">
                Com o Porto Seguro Consórcio, você se planeja para conquistar seus objetivos.
              </p>
              <button
                class="btn btn-outline-primary px-4 py-2"
                onclick="scrollto('form')"
              >
                Fale com um consultor
              </button>
            </div>
          </div>
        </div>
      </section>

      <section
        id="carousel-yamaha"
        class="carousel-item py-5 bg-cover"
        data-bs-interval="5000"
      >
        <div class="container py-4">
          <div class="row flex-row-reverse">
            <div class="col-lg-4 pe-lg-5">
              <button
                id="carousel-yamaha-logo"
                class="d-inline-block ln-bright-2"
                onclick="scrollto('form')"
              >
                <img src="./assets/img/logo/yamaha_1.png" alt="..." class="img-fluid">
              </button>
              <p class="fs-carousel c-white-4 fw-700 my-4 pt-3 pb-2">
                Com a YAMAHA Consórcio, você pode conquistar sua YAMAHA dos sonhos.
              </p>
              <button
                onclick="scrollto('form')"
                class="btn btn-outline-secondary px-4 py-2"
              >
                Fale com um consultor
              </button>
            </div>
          </div>
        </div>
      </section>

      <section
        id="carousel-itau"
        class="carousel-item py-5 bg-cover"
        data-bs-interval="5000"
      >
        <div class="container py-4">
          <div class="row flex-row-reverse">
            <div class="col-lg-5 pe-lg-5">
              <button
                id="carousel-itau-logo"
                class="d-inline-block ln-bright-2"
                onclick="scrollto('form')"
              >
                <img src="./assets/img/logo/itau_1.png" alt="..." class="img-fluid">
              </button>
              <p class="fs-carousel c-itau fw-500 my-4 pt-3 pb-2">
                <span class="d-inline-block fs-1 lh-sm mb-3 fw-700">
                  conquiste seu sonho com planejamento
                </span>
                <br/>
                Sem juros e sem entrada. Quem faz as contas, faz um consórcio Itaú.
              </p>
              <button
                onclick="scrollto('form')"
                class="btn btn-outline-secondary px-4 py-2"
              >
                Fale com um consultor
              </button>
            </div>
          </div>
        </div>
      </section>

      <section
        id="carousel-magalu"
        class="carousel-item py-5 bg-cover"
        data-bs-interval="5000"
      >
        <div class="container py-4">
          <div class="row flex-row-reverse">
            <div class="col-lg-4 pe-lg-5">
              <button
                id="carousel-magalu-logo"
                class="d-inline-block ln-bright-2"
                onclick="scrollto('form')"
              >
                <img src="./assets/img/logo/magalu_1.png" alt="..." class="img-fluid">
              </button>
              <p class="fs-carousel c-white-4 fw-700 my-4 pt-3 pb-2">
                <span class="d-inline-block mb-3">#É PRA TUDO!!</span>
                <br/>
                Para móveis e eletroeletrônicos, eletrodomésticos e para serviços como cirurgias, viagens, casamentos e muito mais...
              </p>
              <button
                onclick="scrollto('form')"
                class="btn btn-outline-secondary px-4 py-2"
              >
                Fale com um consultor
              </button>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" aria-label="Slide 1"
        class="active" aria-current="true"
      ></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </article>

  <section class="dealers py-5">
    <div class="dealers_container container pt-3 mb-4">

      <h2 class="text-center fs-2 mb-3 fw-700">Realizamos o seu sonho</h2>
      <p class="text-center fs-5 c-gray">
        Nosso trabalho é te ajudar a encontrar a melhor opção do mercado
      </p>

      <!-- Logos -->
      <ul class="dealers_logos d-flex flex-column flex-lg-row justify-content-between align-items-center gap-4 mt-4 mb-5">
        <li>
          <a class="ln-opac"
            href="#" target="_blank" rel="noopener noreferrer"
          >
            <img src="./assets/img/logo/porto_1.png" alt="..." style="width:200px">
          </a>
        </li>
        <li>
          <button class="ln-opac-2" onclick="scrollto('form')">
            <img src="./assets/img/logo/yamaha_1.png" alt="..." style="width:220px">
          </button>
        </li>
        <li>
          <button class="ln-opac-2" onclick="scrollto('form')">
            <img src="./assets/img/logo/itau_1.png" alt="..." style="width:200px">
          </button>
        </li>
        <li class="mt-4 mt-lg-0">
          <button class="ln-opac-2" onclick="scrollto('form')">
            <img src="./assets/img/logo/magalu_1.png" alt="..." style="width:200px">
          </button>
        </li>
      </ul>

      <!-- Footer -->
      <div class="dealers_footer row">
        <div class="col-sm-6 col-md-5 col-lg-4 d-flex flex-column mx-auto">
          <button
            onclick="scrollto('footer')"
            class="d-block btn btn-outline-primary border-2 px-4 py-2 fw-600"
          >
            Fale com um consultor
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="biography">

    <!-- Mobile -->
    <div class="biography-mobile d-lg-none bg-black-2">
      <div class="container position-relative text-center py-4 c-white">
        <h2 class="fs-2 my-4 fw-700">Origem da Marca K2</h2>
        <p class="fs-5 py-3 px-2 px-sm-3 c-gray">
          O nome K2 foi inspirado no Monte K2, a segunda maior montanha do mundo com 8.611 metros. Considerada pelos alpinistas como a mais difícil de se escalar. O nosso desafio é diariamente, atender nossos clientes e amigos com qualidade.
        </p>
        <a
          href="#" target="_blank" rel="noopener noreferrer"
          class="d-inline-block position-absolute ln-opac"
          style="right:16px; bottom:16px;"
        >
          <i class="fa-solid fa-arrow-up ln-arrow"></i>
        </a>
      </div>

      <img src="./assets/img/etc/handshake.png" alt="..." class="img-fluid">
    </div>

    <!-- PC -->
    <div class="biography-pc d-none d-lg-block overflow-hidden mw-100vw">
      <div class="row">

        <div class="col-7 bg-cover" style="
          background-image: url('./assets/img/etc/handshake.png');
          background-position: center center;
        ">
        </div>

        <div class="col-5 p-0 bg-black-2">
          <div class="position-relative p-5 gp c-white">
            <h2 class="fs-2 my-lg-4 fw-700">Origem da Marca K2</h2>
            <p class="fs-5 my-lg-4 c-gray">
              O nome K2 foi inspirado no Monte K2, a segunda maior montanha do mundo com 8.611 metros. Considerada pelos alpinistas como a mais difícil de se escalar. O nosso desafio é diariamente, atender nossos clientes e amigos com qualidade.
            </p>
            <a
              href="#" target="_blank" rel="noopener noreferrer"
              class="d-block position-absolute ln-opac"
              style="right:10%; bottom:5%;"
            >
              <i class="fa-solid fa-arrow-up ln-arrow"></i>
            </a>
          </div>
        </div>

      </div>
    </div>

  </section>

  <section
    class="records"
    style="background-image: url('./assets/img/etc/gray_bg.png')"
  >
    <div class="records_container container py-5">

      <ul class="records_items row text-center c-black">
        <li class="col-md-4 my-3 my-md-2">
          <h3 class="fs-1 fw-700">+ 50 Milhões</h3>
          <p class="fs-5 c-gray">Créditos<br/>vendidos</p>
        </li>
        <li class="col-md-4 my-3 my-md-2">
          <h3 class="fs-1 fw-700">+ 1000</h3>
          <p class="fs-5 c-gray">Clientes<br/>ativos</p>
        </li>
        <li class="col-md-4 my-3 my-md-2">
          <h3 class="fs-1 fw-700">+ 22 anos</h3>
          <p class="fs-5 c-gray">Ajudando pessoas a<br/>realizar seus sonhos</p>
        </li>
      </ul>

    </div>
  </section>

  <section id="form" class="form py-5">
    <div class="form_container container pt-3 pb-4">

      <!-- Header -->
      <div class="form_header row mb-4">
        <h2 class="text-center fs-2 mb-3 c-primary fw-700">Te ajudamos com seu sonho</h2>
        <p class="text-center fs-5">
          Preencha o formulário abaixo e um consultor estará entrando em contato
        </p>
      </div>

      <!-- Icons -->
      <div class="form_icons row">
        <div class="col-sm-8 col-md-6 col-lg-5 d-flex justify-content-around mx-auto mb-4 c-primary">
          <i class="fa-solid fa-car is-form"></i>
          <i class="fa-solid fa-house-chimney is-form"></i>
          <i class="fa-solid fa-plane is-form"></i>
          <i class="fa-solid fa-heart-circle-plus is-form"></i>
        </div>
      </div>

      <!-- Form -->
      <div class="form_form row">
        <form
          action="./sendmail.php" method="post"
          class="col-sm-8 col-md-6 col-lg-5 d-flex flex-column justify-content-between gap-3 mx-auto py-2"
        >
          <input
            class="form-control py-2"
            name="name" type="text"
            placeholder="nome completo" required
          >
          <input
            class="form-control py-2"
            name="telephone" type="text"
            placeholder="telefone com DDD" required
          >
          <input
            class="form-control py-2"
            name="email" type="email"
            placeholder="e-mail" required
          >
          <button
            type="submit"
            class="btn btn-outline-primary border-2 py-2 fw-600"
          >
            Enviar
          </button>
        </form>
      </div>

    </div>
  </section>

  <footer id="footer" class="pb-5 pb-md-0 bg-black">
    <div class="footer_container container py-5">
      <div class="footer-items row">

        <!-- Contact -->
        <div class="col-md-6 c-white-3">
          <h4 class="text-center text-md-start fs-6 mb-3 c-white fw-600 ls-1">
            K2 Corretora de Seguros e Consórcios
          </h4>

          <ul class="d-flex flex-column gap-2 text-center text-md-start fs-7 ls-1">
            <li>Av. Lorem ipsum dolor sit amet, XXXXX | SP</li>
            <li>
              <a href="tel:(11)1234-5678" class="ln-bright">(11) 1234-5678</a>

              <span class="mx-1"> | </span>

              <a href="tel:(11)12345-6789" class="ln-bright">(11) 12345-6789</a>
            </li>
            <li>example@email.com</li>
          </ul>

          <ul class="d-flex flex-row justify-content-center justify-content-md-start gap-3 my-4">
            <li>
              <a class="ln-bright"
                href="https://facebook.com" target="_blank" rel="noopener noreferrer"
              >
                <i class="fa-brands fa-facebook fs-3"></i>
              </a>
            </li>
            <li>
              <a class="ln-bright"
                href="https://instagram.com" target="_blank" rel="noopener noreferrer"
              >
                <i class="fa-brands fa-instagram fs-3"></i>
              </a>
            </li>
          </ul>
        </div>

        <!-- K2 -->
        <div class="col-md-5 d-flex flex justify-content-center justify-content-md-end align-items-start c-white-3">
          <a class="d-flex flex-column align-items-center ln-bright-2"
            href="#" target="_blank" rel="noopener noreferrer"
          >
            <span
              class="fw-600 fst-italic"
              style="font-size:13px; margin-left:-1px; margin-bottom:-4px;"
            >
              Uma Empresa
            </span>
            <img
              src="./assets/img/k2/k2_seguros.png" alt="..."
              class="img-fluid"
              style="max-width:120px"
            />
          </a>
        </div>

      </div>
    </div>
  </footer>

  <?= isset($_POST['mvform']) ? "<script>scrollto('form');</script>" : ''; ?>
</body>
</html>
