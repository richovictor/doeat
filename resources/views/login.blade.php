<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f4f4f4;
    }
  </style>
</head>
<body class style="background-color:#F4F4F5">
    <div class="container mt-3" >
  		<div class="row d-flex justify-content-center">
  			<div class="col-lg-5">
        <div class="card" style="background-color: rgb(255, 255, 255)">
  					<div class="card-body">
  						<div class="row">
  							<div class="col-12">
                  <div class="text-center">
                    <img src="img/logo.png" height="30" style="margin-bottom: 20px" alt="Doeat">
                  </div>
  
                  <p class="text-center h4   mx-1 mx-md-4 mt-2">Masuk</p>
                  <p class="text-center "style="font-weight: 350; font-size:15px;"> belum punya akun? <a href="register" style="font-weight: 350; font-size:15px; text-decoration:none">Daftar</a></p>
  
                <form action="{{ route('proses.login') }}" class="mx-1 mx-md-4" method="POST">
                  @csrf

                    <div class="form-floating mb-2">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                      <label for="email">Email</label>
                      @error('email')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
  
                  <div class="form-floating mb-2">
                    <input type="Password" class="form-control @error('password') is-invalid @enderror"  name="password" id="password" placeholder="password" value="{{ old('password') }}" >
                    <label for="email">Kata Sandi</label>
                    @error('password')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="d-grid gap-2 mb-1">
                  <button class="btn btn-primary" type="submit">Masuk</button>
                </div>
  
                <div class=" d-flex justify-content-center mb-4 ">
                  <label class="form-check-label" for="form2Example3">
                    <a href="forgot" style="font-weight: 450; font-size:15px; text-decoration:none">Lupa kata sandi ?</a> 
                  </label>
                </div>
     
                  <div class="d-grid gap-2 ">
                    <button onclick="window.location.href='#'" class="btn btn-outline-dark" type="button">
                        <div class="d-flex">
                            <div>
                                <img src="img/google.png" height="20" style="margin-top: -4px">
                            </div>
                            <div class="text-center flex-grow-1">
                                Masuk dengan Google
                            </div>
                        </div>
                    </button>
                </div>
                <div class="d-grid gap-2 pt-1">
                  <button onclick="window.location.href='#'" class="btn btn-outline-dark" type="button">
                      <div class="d-flex">
                          <div>
                              <img src="img/facebook.png" height="20" style="margin-top: -4px">
                          </div>
                          <div class="text-center flex-grow-1">
                              Masuk dengan Facebook
                          </div>
                      </div>
                  </button>
                </div>
  
              </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between pt-2">
            <!-- <a onclick="back()" class="link-login" href="#"><i class="feather-16" data-feather="arrow-left"></i>&nbsp;&nbsp;Kembali</a> -->
            <div class="my-auto text-muted">
                <small>© doeat.com</small>
            </div>
            <div >
                <a class="link-login" href="#" target="_blank" style="text-decoration: none; color:black; font-weight:350;">Bantuan</a>
                <a class="link-login  ms-3" href="#" target="_blank" style="text-decoration: none;color:black;font-weight:350;">Privasi</a>
                <a class="link-login ms-3" href="#" target="_blank" style="text-decoration: none;color:black;font-weight:350;">Ketentuan</a>
            </div>
        </div>
      </div>
    </div>
    
  
</body>
</html>
