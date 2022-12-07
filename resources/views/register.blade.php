<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
  
                  <p class="text-center h4  mx-1 mx-md-4">Buat Akun</p>
                  <p class="text-center" style="font-weight: 350; font-size:15px;"> Sudah punya akun? <a href="login" style="font-weight: 350; font-size:15px; text-decoration:none">Masuk</a></p>
  
                  <form class="mx-1 mx-md-4" method="POST" action="{{ route('proses.form') }}">
                    @csrf
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="nama" autofocus="" value="{{ old('nama') }}">
                      @error('nama')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                      <label for="name">Nama</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="phone" autofocus="" value="{{ old('nama') }}">
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label for="name">Phone</label>
                </div>
  
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus="" value="{{ old('email') }}">
                      @error('email')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                      <label for="email">Email</label>
                      
                  </div>
  
                  <div class="form-floating mb-3">
                    <input type="Password" class="form-control @error('password') is-invalid @enderror"  name="password" id="password" placeholder="password" autofocus="" value="{{ old('password') }}">
                    @error('password')
                          <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label for="email">Kata Sandi</label>
                </div>

                <div class="d-grid gap-2   mb-1">
                  <button onclick="next_step2()" class="btn btn-primary" type="submit">Daftar</button>
                </div>
  
                <div class="mb-3 mt-2">
                  <label class="form-check-label" >
                    <p style="font-weight:350;font-size:13px;">Dengan membuat akun, Anda setuju dengan <a href="#" style="text-decoration: none">Syarat dan Ketentuan</a> dan <a href="#" style="text-decoration: none">Kebikan Privasi</a> </p> 
                  </label>
                </div>
  
                
                  <div class="d-grid gap-2 ">
                    <button onclick="window.location.href='#'" class="btn btn-outline-dark" type="button">
                        <div class="d-flex">
                            <div>
                                <img src="img/google.png" height="20" style="margin-top: -4px">
                            </div>
                            <div class="text-center flex-grow-1">
                                Daftar dengan Google
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
                              Daftar dengan Facebook
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
            <div class="mb-1">
                <a class="link-login" href="#" target="_blank" style="text-decoration: none; color:black;font-weight:350;">Bantuan</a>
                <a class="link-login  ms-3" href="#" target="_blank" style="text-decoration: none; color:black;font-weight:350;">Privasi</a>
                <a class="link-login ms-3" href="#" target="_blank" style="text-decoration: none; color:black;font-weight:350;">Ketentuan</a>
            </div>
        </div>
      </div>
    </div>

    
    
  
</body>
</html>
