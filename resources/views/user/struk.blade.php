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
      <h2>Detail Pembayaran</h2>
    </div>

    <div class="row g-5 " style="margin-left: 300px">
      <div class="col-md-5 col-lg-4 order-md-last">      
      </div>
     <div class="col-md-7 col-lg-8">
        
        <form class="needs-validation" novalidate>
          <div class="row g-3">
           
            <div class="col-12">
              <label for="address" class="form-label">Nama Pemesan</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
              Silakan masukkan alamat  anda.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="">
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
            <div class="col-12">
              <label for="address" class="form-label">Jumlah Kamar yg dipesan</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              
            </div>
            <div class="col-12 mb-5">
              <label for="address" class="form-label">Total Harga</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
             
            </div>

          </div>

          <a class="w-100 btn btn-primary btn-lg" href="/" type="submit">kembali ke halaman utama</a>
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