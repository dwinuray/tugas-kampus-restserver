
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>RestClient</title>

    <link rel="canonical" href="https://getbootstrap.comhttps://getbootstrap.com/docs/5.0/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Web Service - Rest Client</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="https://github.com/dwinuray">Dwi's Github Profile</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Implementasi RESTful Client</h1>
      <p class="fs-5 text-muted">Buatlah sebuah RESTful Client yang mengakses data dari RESTful Server yang sudah kalian kembangkan sebelumnya. Aplikasi front end boleh menggunakan framework apapun, bahasa pemrograman apapun (web, android, swift, javascript)</p>
    </div>
  </header>

  <main>
      
    <hr>

    <h2 class="display-6">Tabel Produk</h2>
    <p>Buat tabel produk dibawah ini untuk melakukan pengujian</p>

    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Tambah Produk Baru</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="data-form">
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Kode Produk</label>
                    <input type="text" name="kd_produk" class="form-control" placeholder="..." />
                    <small class="text-muted">Masukkan kode produk</small>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama_produk" class="form-control" placeholder="..." />
                    <small class="text-muted">Masukkan nama produk</small>
                </div>
                <div class="form-group">
                    <label for="">Berat</label>
                    <input type="number" name="berat" class="form-control" placeholder="..." />
                    <small class="text-muted">Masukkan berat produk</small>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" class="form-control" placeholder="..."></textarea>
                    <small class="text-muted">Masukkan deskripsi produk</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
            </form>
            </div>
        </div>
    </div>


    <br><br>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th style="width: 5%;">#</th>
            <th style="width: 10%;">Kode </th>
            <th style="width: 22%;">Nama</th>
            <th>Berat</th>
            <th>Deskripsi</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody id="data-table"></tbody>
      </table>
    </div>
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">&copy; 2017–2021 - Big Thanks for Awesome UI Framework Bootstrap</small>
      </div>
    </div>
  </footer>
</div>



<script>

    $(function() {

        var base_url = "<?php echo site_url() ?>";
        onLoad();

        $('#data-form').submit(function( e ) {


            // let form = $(this).serialize();
            let kd = $('input[name="kd_produk"]').val();
            let nama = $('input[name="nama_produk"]').val();
            let berat = $('input[name="berat"]').val();
            let desc = $('textarea[name="deskripsi"]').val();

            $.ajax({

                type: "POST",
                url : base_url + '/produk',
                data : {kd_produk : kd, nama_produk : nama, berat : berat, deskripsi: desc},
                dataType: "json",
                success : function( res ) {

                    console.log( res );
                    onLoad();

                    $('#exampleModal').modal('hide');
                }, error: function( jqXHR ){

                    console.log( jqXHR );
                }
            });

            e.preventDefault();
        })



        



        function onLoad(){

            $.ajax({

                type: "GET",
                url : base_url + '/produk',
                dataType: "json",
                success : function( res ) {

                    let content = "";

                    if (res.status){

                        let no = 1;
                        res.data.forEach( e => {

                            content += `
                                <tr>
                                    <td>${no}</td>
                                    <th>${e.kd_produk}</th>
                                    <td>${e.nama_produk}</td>
                                    <td>${e.berat}</td>
                                    <td>${e.deskripsi}</td>
                                    <td>
                                        <a href="javascript:void(0)" data-kd="${e.kd_produk}" id="hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</a>
                                        <a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#edit-${e.kd_produk}" >Edit</a>
                                    
                                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="edit-${e.kd_produk}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Perbarui Produk</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form id="data-form-update" data-kd="${e.kd_produk}">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Nama</label>

                                                        <input type="hidden" data-kd="${e.kd_produk}" name="kd_produk" class="form-control" placeholder="..." value="${e.kd_produk}" />
                                                        <input type="text" name="nama_produk" class="form-control" placeholder="..." value="${e.nama_produk}" />
                                                        <small class="text-muted">Masukkan nama produk</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Berat</label>
                                                        <input type="number" name="berat" class="form-control" placeholder="..." value="${e.berat}" />
                                                        <small class="text-muted">Masukkan berat produk</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Deskripsi</label>
                                                        <textarea name="deskripsi" id="" class="form-control" placeholder="...">${e.deskripsi}</textarea>
                                                        <small class="text-muted">Masukkan deskripsi produk</small>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-warning">Perbarui</button>
                                                </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            `;

                            no++;
                        })
                    }

                    $('#data-table').html(content);

                }, error: function( jqXHR ){

                    console.log( jqXHR );
                }
            });
        }



        $('#data-table').on('click', '#hapus', function() {

            
            let kd = $(this).data('kd');

            $.ajax({

                type: "DELETE",
                url : base_url + '/produk',
                data : 'kd_produk='+ kd,
                dataType: "json",
                success : function( e ) {

                    if ( e.status ) {

                        alert("Oke berhasil");
                        onLoad();
                    } else {

                        alert("Hapus gagal");
                    }
                }
            });
        });


        $('#data-table').on('submit', '#data-form-update', function( e ) {


            let form = $(this).serialize();
            let kd = $(this).data('kd');
            
            $.ajax({

                type: "PUT",
                url : base_url + '/produk',
                data : form,
                dataType: "json",
                success : function( res ) {

                    console.log( res );
                    onLoad();
                }, error: function( jqXHR ){

                    console.log( jqXHR );
                }
            });


            $('#edit-' + kd).modal('hide');

            e.preventDefault();
        });


        
    })
</script>


  </body>
</html>
