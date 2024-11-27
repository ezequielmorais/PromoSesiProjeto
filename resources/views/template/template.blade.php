<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
  </script>
  <link
    href="https://fonts.googleapis.com/css2?family=Danfo&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>template</title>
</head>
<style>
  body {
    margin: 0;
    font-family: "Noto Sans", sans-serif;
  }

  .header {
    background-color: #0E4194;
    height: 80px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
  }

  .logo-container {
    width: 180px;
    height: auto;
    overflow: hidden;
    margin-left: 150px;

  }

  .logo-container img {
    width: 100%;
    height: auto;

  }
</style>

<body>

  <header class="header">
    <img class="logo-container " src="img/logo-promoSesi.png" alt="logo">
    <i class="bi bi-list"></i>

  </header>
  <div class="page-content">
    @yield('Conteudo')
  </div>
</body>

</html>