<!doctype html>
<html lang="en">

<head>
  <!-- Requi meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="./public/css/main.css">
  <link rel="stylesheet" href="./public/fonts/css/all.min.css">
  <title>Password Generetor</title>
</head>

<body>
  <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 mx-auto">
    <div class="col-10 mt-4 mb-4 mx-auto p-4">
      <h2 class="text-center text-lg text-color-1 text-uppercase text-weight-bold mt-4">Generator password</h2>
      <p class="text-justify text-sm text-color-2  text-weight-light mb-4">Password generator, add symbols,numbers,
        upper
        and lower case. A
        good password should contain a lenght of at least 12
        alphanumeric
        characters. Remember to enable double verification of your application or account!
      </p>
    </div>

    <form action="" class="col-10 mx-auto app" id="app">

      <div class="col-12 d-flex flex-wrap mt-4 mb-4 mx-auto bg-color-1 rounded ">
        <div class="col-11 d-flex flex-wrap justify-content-center ">
          <input type="text" class="input-password rounded p-3" id="input-password" readonly value="Test">
        </div>
        <div class="col-1 d-flex justify-content-center text-center text-xl  ">
          <i class="icon far fa-clipboard"></i>
        </div>
      </div>

      <div class="col-12 d-flex flex-wrap mt-4 mb-4 mx-auto num-characters">
        <div class="col-7 d-flex justify-content-center p-2">
          <h2 class="col-12 text-justify text-sm text-color-1 text-weight-normal p-2 ">Password length</h2>
        </div>
        <div class="col-5 d-flex flex-wrap justify-content-between">
          <div class="col-6 d-flex justify-content-center p-2">
            <input class="rounded" id="num-characters" readonly value="12">
          </div>

          <div class="col-3 d-flex justify-content-center p-2">
            <button class="btn-circle btn-pass" id="btn-less-one"><i class="fas fa-angle-down"></i></button>
          </div>

          <div class="col-3 d-flex justify-content-center p-2">
            <button class="btn-circle btn-pass" id="btn-plus-one"><i class="fas fa-angle-up"></i></button>
          </div>
        </div>
      </div>

      <div class="col-12 d-flex flex-wrap mt-4 mb-4 mx-auto symbols">
        <div class="col-7 d-flex justify-content-center p-2">
          <h2 class="col-12 text-justify text-sm text-color-1 text-weight-normal p-2 ">Include symbols</h2>
        </div>
        <div class="col-5 d-flex flex-wrap justify-content-between btn">
          <button class="btn-pass rounded" id="btn-symbols"><i class="fas fa-check"></i></button>
        </div>
      </div>

      <div class="col-12 d-flex flex-wrap mt-4 mb-4 mx-auto numbers">
        <div class="col-7 d-flex justify-content-center p-2">
          <h2 class="col-12 text-justify text-sm text-color-1 text-weight-normal p-2 ">Include numbers</h2>
        </div>
        <div class="col-5 d-flex flex-wrap justify-content-between btn">
          <button class="btn-pass rounded" id="btn-numbers"><i class="fas fa-check"></i></button>
        </div>
      </div>

      <div class="col-12 d-flex flex-wrap mt-4 mb-4 mx-auto uppercase">
        <div class="col-7 d-flex justify-content-center p-2">
          <h2 class="col-12 text-justify text-sm text-color-1 text-weight-normal p-2 ">Include uppercase letters</h2>
        </div>
        <div class="col-5 d-flex flex-wrap justify-content-between btn">
          <button class="btn-pass rounded" id="btn-uppercase"><i class="fas fa-check"></i></button>
        </div>
      </div>

      <div class="col-12 d-flex flex-wrap mt-4 mb-4 mx-auto generate">
        <div class="col-12 d-flex justify-content-center p-2">
          <button class="btn-generate" id="btn-generate">Generate password <i class="fas fa-lock"></i></button>
        </div>
      </div>

      <div class="col-12 d-flex flex-wrap mt-4 mb-4 mx-auto alert">
        <div class="col-12">
          <div class="alert-copy" id="alert-copy">
            <p class="mx-auto"><i class="fas fa-copy"></i> Texto copiado!</p>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
  <!-- JavaScrip -->
  <script src="./app/main.js"></script>
</body>

</html>