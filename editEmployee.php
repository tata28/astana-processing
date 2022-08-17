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
                                    <label for="exampleInputFirstName" class="text">Nama Depan Employee</label>
                                </div>
                                <div class="col-10">
                                    <input type="firstname" class="form-control textField" id="exampleInputFirstName"
                                        placeholder="Masukkan Nama Depan Employee">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputFirstName" class="text">Nama Belakang Employee</label>
                                </div>
                                <div class="col-10">
                                    <input type="firstname" class="form-control textField" id="exampleInputFirstName"
                                        placeholder="Masukkan Nama Belakang Employee">
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
                                    <label for="exampleInputEmail" class="text">Jenis Kelamin</label>
                                </div>
                                <div class="col-10">
                                    <input type="kecamatan" class="form-control textField" id="exampleInputKecamatan" placeholder="Masukkan Jenis Kelamin">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Tanggal Lahir</label>
                                </div>
                                <div class="col-10">
                                    <input type="Desa" class="form-control textField" id="exampleInputDesa" placeholder="Masukkan Tanggal lahir">
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
                                    <label for="exampleInputEmail" class="text">Mulai Bekerja</label>
                                </div>
                                <div class="col-10">
                                    <input type="Keterangan" class="form-control textField" id="exampleInputKeterangan" placeholder="Masukkan Tanggal Mulai Bekerja">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Tanggal Dipekerjakannya</label>
                                </div>
                                <div class="col-10">
                                    <input type="Keterangan" class="form-control textField" id="exampleInputKeterangan" placeholder="Masukkan Tanggal Dipekerjakannya">
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
                                    <option value="lunas">Bekerja</option>
                                    <option value="belum lunas">Tidak Bekerja</option>
                                    <option value="belum lunas">Pensiun</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label class="text">Departmen</label>
                            </div>
                            <div class="col-10">
                                <select class="form-control" id="city" name="city" >
                                    <option value="pilihJenisStatus">Memilih Departmen</option>
                                    <option value="lunas">PRD</option>
                                    <option value="belum lunas">HND</option>
                                    <option value="belum lunas">Academic</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label class="text">Posisi</label>
                            </div>
                            <div class="col-10">
                                <select class="form-control" id="city" name="city" >
                                    <option value="pilihJenisStatus">Memilih Posisi</option>
                                    <option value="lunas">Marketing</option>
                                    <option value="belum lunas">Finance</option>
                                    <option value="belum lunas">Accounting</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Gaji</label>
                                </div>
                                <div class="col-10">
                                    <input type="Keterangan" class="form-control textField" id="exampleInputKeterangan" placeholder="Masukkan Gaji">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="exampleInputEmail" class="text">Pendidikan Terakhir</label>
                            </div>
                            <div class="col-10">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <input type="file" class="custom-file-input" id="formFileMultiple">
                                
                            </div>
                            
                        </div>
                    </div>

                    
                        <div class="row col-md-lg-1 float-end ">
                <button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#myModal">
                    Submit
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body ">
                                <p>An employee has successfully been edited</p>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn close" href="addNewEmployee1.html">Close</button> -->
                                <a class="btn  close " type="button" href="addEmployee.php">Close</a>
                            </div>
                        </div>

                    </div>
                </div>
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
