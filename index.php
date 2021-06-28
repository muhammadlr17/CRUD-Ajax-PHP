<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>TI PSDKU Sumenep</title>
        <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <h1 style="text-align: center;">Data Mahasiswa</h1>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-15 mx-auto" >
                    <div class="card mb-3">
                    <div class="card-header">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal">Tambah Data</button>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>NRP</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Interest</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="barisData">
                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto" >
                    <div class="card mb-3">
                    <div class="card-header">
                        <h5>Edit Data</h5>
                    </div>
                        <div class="card-body">
                        <form action="#" class="needs-validation" novalidate>
                                <div class="form-group" hidden>
                                  <label>ID :</label>
                                  <input type="text" class="form-control" placeholder="Masukkan ID" name="id_u" required>
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label>NRP :</label>
                                  <input type="text" class="form-control" placeholder="Masukkan NRP" name="nrp_u" required disabled>
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label>Nama :</label>
                                  <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="nama_u" required>
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label>Email :</label>
                                  <input type="text" class="form-control" placeholder="Masukkan email" name="email_u" required>
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label>Interest :</label>
                                  <input type="text" class="form-control" placeholder="Masukkan interest" name="interest_u" required>
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="alert alert-info" id="pesan1">
                                </div>
                                <button onclick="updateData()" type="button" class="btn btn-primary btn-sm">Simpan</button>
                              </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Modal -->
            <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="#" class="needs-validation" novalidate>
                                <div class="form-group">
                                  <label>NRP :</label>
                                  <input type="text" class="form-control" placeholder="Masukkan NRP" name="nrp" required>
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label>Nama :</label>
                                  <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="nama" required>
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label>Email :</label>
                                  <input type="text" class="form-control" placeholder="Masukkan email" name="email" required>
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label>Interest :</label>
                                  <input type="text" class="form-control" placeholder="Masukkan interest" name="interest" required>
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button onclick="tambahData()" type="button" class="btn btn-primary btn-sm">Submit</button>
                              </form>
                </div>
                <div class="modal-footer">
                <div class="alert alert-info" id="pesan">
                </div>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                </div>
                </div>
            </div>
            </div>
            
            <script type="text/javascript">
                onload();

                function tambahData(){
                    var nrp = $("[name='nrp']").val();
                    var nama = $("[name='nama']").val();
                    var email = $("[name='email']").val();
                    var interest = $("[name='interest']").val();

                    $.ajax({
                        type: "POST",
                        data: "nrp="+nrp+"&nama="+nama+"&email="+email+"&interest="+interest,
                        url : 'tambahData.php',
                        success : function(result){
                            var objResult=JSON.parse(result);
                            $("#pesan").html(objResult.pesan);

                            onload();
                        }
                    })
                }

                function pilihData(idx){
                    var id=idx;
                    $.ajax({
                        type: "POST",
                        data: "id_u="+id,
                        url: "ambilID.php",
                        success : function(result){
                            var objResult = JSON.parse(result);
                            $("[name='id_u']").val(objResult.id);
                            $("[name='nrp_u']").val(objResult.nrp);
                            $("[name='nama_u']").val(objResult.nama);
                            $("[name='email_u']").val(objResult.email);
                            $("[name='interest_u']").val(objResult.interest);
                        }
                    })
                }
                
                function updateData(){
                    var id = $("[name='id_u']").val();
                    var nrp = $("[name='nrp_u']").val();
                    var nama = $("[name='nama_u']").val();
                    var email = $("[name='email_u']").val();
                    var interest = $("[name='interest_u']").val();

                    $.ajax({
                        type: "POST",
                        data: "id_u="+id+"&nrp_u="+nrp+"&nama_u="+nama+"&email_u="+email+"&interest_u="+interest,
                        url : 'updateData.php',
                        success : function(result){
                            var objResult=JSON.parse(result);
                            $("#pesan1").html(objResult.pesan);

                            onload();
                        }
                    })
                }

                function hapusData(idx){
                    var validasi = confirm("Apakah Anda yakin akan menghapus data mahasiswa ini ?");
                    if(validasi){
                    $.ajax({
                        type: "POST",
                        data: "id="+idx,
                        url : "hapusData.php",
                        success: function($result){
                            alert("Data berhasil dihapus");
                            onload();
                        }
                    })
                    }
                }

                function onload(){
                    var dataHandler=$("#barisData");
                    dataHandler.html("");
                    $.ajax({
                        type : "GET",
                        data : "",
                        url : "ambilData.php",
                        success : function (result){
                            var objResult=JSON.parse(result);
                            var no = 1;   
                            $.each(objResult, function(key,val){
                                var barisBaru=$("<tr>");
                                barisBaru.html("<td>"+no+"</td><td>"+val.nrp+"</td><td>"+val.nama+"</td><td>"+val.email+"</td><td>"+val.interest+
                                "</td><td><button onclick='pilihData("
                                +val.id+")' type='button' class='btn btn-warning btn-sm text-white'>Edit</button> | <button onclick='hapusData("
                                +val.id+")' type='button' class='btn btn-danger btn-sm text-white'>Hapus</button></td>")
                            dataHandler.append(barisBaru);
                            no++;
                            })
                        }
                    })
                }
            </script>
    </body>
</html>