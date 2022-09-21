<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Checkout example · Bootstrap v5.2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 

    

    



    
    <!-- Custom styles for this template -->
    <link href="/css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">

      <h2>Pembayaran</h2>
      
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        
        

       
      </div>
     <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Alamat Penagihan</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nama Depan</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
              Diperlukan nama depan yang valid.              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Nama Belakang</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
              Diperlukan nama belakang yang valid.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">NamaPengguna</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
              Silakan masukkan alamat email anda.              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
              Silakan masukkan alamat  anda.
              </div>
            </div>

           

         

            

           
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Alamat pengiriman sama dengan alamat penagihan saya</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Simpan informasi ini untuk waktu berikutnya</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nama Kartu</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Nama lengkap seperti yang ditampilkan pada kartu</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Nomor Kartu Anda</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

           
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
   
  </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 

      <script src="/js/form-validation.js"></script>
  </body>
</html>
