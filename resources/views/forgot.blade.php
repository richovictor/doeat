<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f4f4f4;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class style="background-color:#F4F4F5">
    <div class="container mt-3" >
  		<div class="row d-flex justify-content-center">
  			<div class="col-lg-5">
        <div class="card" style="background-color: rgb(255, 255, 255)" ">
  					<div class="card-body">
  						<div class="row">
  							<div class="col-12">
                  <div class="text-center">
                    <img src="img/logo.png" height="30" alt="Doeat">
                </div>
  
                  <p class="text-center h4 fw-bold  mx-1 mx-md-4 mt-4">Lupa Kata Sandi?</p>
                  <p class="text-center">Tautan reset kata sandi akan dikirimkan ke email anda.</p>
  
                  <form class="mx-1 mx-md-4">
  
                    <div class="form-floating mb-3 mt-3">
                      <input type="email" class="form-control " name="email" id="email" placeholder="name@example.com" autofocus="">
                      <label for="email">Email</label>
                  </div>
  
                    <div class="d-grid gap-2   mb-4">
                      <button onclick="next_step2()" class="btn btn-primary" type="button">Lanjutkan</button>
                  </div>
                      </div>
                  </button>
              </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                </div>
              </div>
              <div class="d-flex justify-content-between pt-2">
                <!-- <a onclick="back()" class="link-login" href="#"><i class="feather-16" data-feather="arrow-left"></i>&nbsp;&nbsp;Kembali</a> -->
                <div class="my-auto text-muted">
                    <small>© doeat.com</small>
                </div>
                <div>
                    <a class="link-login" href="#" target="_blank">Bantuan</a>
                    <a class="link-login  ms-3" href="#" target="_blank">Privasi</a>
                    <a class="link-login ms-3" href="#" target="_blank">Ketentuan</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
</body>
</html>
