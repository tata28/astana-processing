<?php
require "session.php";
include_once "head.html";
$_SESSION['pagename']="";
?>

<!DOCTYPE html>
<html lang="en">
<body>

<style>
    .upload{
        background-color:rgba(52, 25, 80, 1);
        color:white;
        width:100px;
        border: 1px solid white;
        border-radius: 5px;
        width:150px;
        height:50px;
        
    }
    .text{
        color:rgba(52, 25, 80, 1);
        float: left;
    }
    .textField{
        background-color:white;
        border-radius: 5px;
        text-align:left;
    }
</style>

    <div class="wrapper">
        <?php include_once "sidebar.html"?>
            <div class="container">
                    <nav>
                        <div class="row">
                            <div class="col-sm">
                                <button type="button" id="sidebarcollapse" class="btn btn-info">
                                    <i class="fas fa-align-left"></i>
                                    <span>Menu</span>
                                </button>
                            </div>
                            <div class="col-sm">
                                <h2>    
                                    <?php echo $_SESSION['pagename'];?>
                                </h2>
                            </div>
                        </div>
                    </nav>
                    <div class="container justify text-center">
                        <!-- <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <img src="images/user/11.png" alt="profile-img" class="avatar-130 img-fluid"/>
                                </div>
                                <div class="btn-action col-3 d-flex justify-content-center align-items-center">
                                    <label for="file-upload" class="custom-file-upload upload btn-primary d-flex justify-content-center align-items-center">
                                        <p>Upload Foto</p>
                                    </label>
                                    <input id="file-upload" type="file" hidden=""/>
                                    &nbsp;
                                &nbsp;
                                    <label class="custom-file-upload upload btn-primary d-flex justify-content-center align-items-center">
                                        Delete Foto
                                    </label>
                                </div>
                                
                            </div>
                                
                            
                        </div> -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputFirstName" class="text">Nama Pelanggan</label>
                                </div>
                                <div class="col-10">
                                    <input type="firstname" class="form-control textField" id="exampleInputFirstName"
                                        placeholder="Masukkan Nama Pelanggan">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                <label for="exampleInputLastName" class="text">NPWP</label>
                                </div>
                                <div class="col-10">
                                <input type="Number" class="form-control textField" id="exampleInputNumber"
                                        placeholder="Masukkan NPWP">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label class="text">Jenis Pelanggan</label>
                            </div>
                            <div class="col-10">
                                <select class="form-control" id="city" name="city" >
                                    <option value="pilihJenisPelanggan">Jenis Pelanggan</option>
                                    <option value="internal">Pelanggan Internal</option>
                                    <option value="eksternal">Pelanggan Eksternal</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>

                        <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label class="text">Provinsi</label>
                            </div>
                            <div class="col-10">
                                <select class="form-control" id="province" name="province" >
                                    <option value="pilihProvinsi">Pilih Provinsi</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label class="text">Kota Daerah</label>
                            </div>
                            <div class="col-10">
                                <select class="form-control" id="city" name="city" >
                                    <option value="pilihProvinsi">Pilih Kota</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Bandung">Bandung</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Plus price</label>
                                </div>
                                <div class="col-10">
                                    <input type="kecamatan" class="form-control textField" id="exampleInputKecamatan" placeholder="Masukkan Plus Price">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Min Machine Width</label>
                                </div>
                                <div class="col-10">
                                    <input type="Desa" class="form-control textField" id="exampleInputDesa" placeholder="Masukkan Min Machine Width">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Net</label>
                                </div>
                                <div class="col-10">
                                    <input type="kecamatan" class="form-control textField" id="exampleInputKecamatan" placeholder="Masukkan Net">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Kode Pos</label>
                                </div>
                                <div class="col-10">
                                    <input type="kodepos" class="form-control textField" id="exampleInputkodepos" placeholder="Masukkan Kode Pos">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Alamat</label>
                                </div>
                                <div class="col-10">
                                    <input type="Alamat" class="form-control textField" id="exampleInputAlamat" placeholder="Masukkan Alamat">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Kecamatan</label>
                                </div>
                                <div class="col-10">
                                    <input type="Alamat" class="form-control textField" id="exampleInputAlamat" placeholder="Masukkan Kecamatan">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Desa</label>
                                </div>
                                <div class="col-10">
                                    <input type="Alamat" class="form-control textField" id="exampleInputAlamat" placeholder="Masukkan Desa">
                                </div>
                                
                            </div>
                        </div>

                    
                    <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Telepon</label>
                                </div>
                                <div class="col-10">
                                    <input type="tel" class="form-control textField" id="phone" placeholder="Masukkan Telepon">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Fax</label>
                                </div>
                                <div class="col-10">
                                    <input type="Fax" class="form-control textField" id="exampleInputFax" placeholder="Masukkan Fax">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Email</label>
                                </div>
                                <div class="col-10">
                                    <input type="Email" class="form-control textField" id="exampleInputEmail" placeholder="Masukkan Email">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Keterangan</label>
                                </div>
                                <div class="col-10">
                                    <input type="Keterangan" class="form-control textField" id="exampleInputKeterangan" placeholder="Masukkan Keterangan">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label class="text">Status</label>
                            </div>
                            <div class="col-10">
                                <select class="form-control" id="city" name="city" >
                                    <option value="pilihJenisStatus">Status</option>
                                    <option value="lunas">Delivered</option>
                                    <option value="belum lunas">Non Delivered</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>

                    
                    <div class="form-group text-right">
                    <a class="btn btn-primary " href="financeCustomer.php">Finance Customer</a>
                    </div>
                </div>

                
            </div>
    </div>

    <script>      
        $(document).ready(
            function(){
                $('#sidebarcollapse').on('click',function(){
                    $('#sidebar').toggleClass('active');
                });
            }
        )
        $(document).ready(
            function(){
                var handlerid=1;
                $.ajax({
                    url:"handler.php",
                    type:"POST",
                    data:{handlerid:handlerid},
                    success:function(response){
                        $('#province').html(response);
                    },
                    error:function(xhr,textStatus,errorThrown){
                        var str="ERROR : SERVER error<br>"+xhr+
                        "<br>" + textStatus + "<br>" + errorThrown;
                        alert(str);
                    }
                })
            });

            function() {
                readURL(this);
            }
            function(b) {
                return "undefined" != typeof r && r.event.triggered !== b.type ? r.event.dispatch.apply(a, arguments) : void 0
            }

            function() {
                $('#foto').click();
            }
            function() {
                $("#preview-foto").attr("src", "http://sumbermulia.id/pos/public/pictures/default.jpg");
            }

        function fillcity(){
            var s=document.getElementById("province");
            var i=s.selectedIndex;
            var value=s.options[i].value;
            var handlerid=2;
            $.ajax({
                url:"handler.php",
                type:"POST",
                data:{handlerid:handlerid,value:value},
                success: function(response){
                    $('#city').html(response);
                },
                error:function(xhr,textStatus,errorThrown){
                    var str="ERROR : SERVER error<br>"+xhr+
                    "<br>" + textStatus + "<br>" + errorThrown;
                    alert(str);
                }
            });
        }

        $(".province li a").click(function () {
            $(".btn1").html($(this).text() + ' <span class="caret"></span>');
        });
        $(".city li a").click(function () {
            $(".btn2").html($(this).text() + ' <span class="caret"></span>');
        });
        $(".status li a").click(function () {
            $(".btn3").html($(this).text() + ' <span class="caret"></span>');
        });
    </script>
</body>
</html>
