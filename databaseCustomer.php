<?php
require "session.php";
include_once "head.html";
$_SESSION['pagename']="";
?>

<!DOCTYPE html>
<html lang="en">
<body>

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
                        <div class="d-flex justify-content-between">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-sm">
                                        <h4 style="text-align:left;">Data Customer</h4>
                                    </div>
                                    <div class="col-sm">
                                        <button type="button" class="btn btn-success">
                                            <i class="fa fa-file-excel-o"></i>
                                            <span>Import</span>
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-file-excel-o"></i>
                                            <span>Export</span>
                                        </button>
                                    </div>
                                    <div class="col-sm">
                                        <div class="row">
                                            <form class="position-relative" style="margin-right:8px;">
                                                <div class="form-group mb-0">
                                                <input type="text" class="form-control todo-search" id="exampleInputEmail001" placeholder="Cari">
                                                </div>
                                            </form>
                                            <button type="button" class="btn btn-primary" onclick="location.href='addCustomer.php'">
                                                <span>+ Add</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="iq-card">

                            <div class="iq-card-body">
                                <table id="mytable" class="table table-hover table-striped table-light" style="text-align:left">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Pelanggan</th>
                                            <!-- <th scope="col">NPWP</th>
                                            <th scope="col">Provinsi</th>
                                            <th scope="col">Kota Daerah</th>
                                            <th scope="col">Kecamatan</th>
                                            <th scope="col">Desa</th>
                                            <th scope="col">Kode Pos</th> -->
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Jenis Pelanggan</th>
                                            <th scope="col">Kredit Limit</th>
                                            <!-- <th scope="col">Telepon</th>
                                            <th scope="col">Fax</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Keterangan</th> -->
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lily</td>
                                            <!-- <td>12345</td>
                                            <td>Jawa Timur</td>
                                            <td>Surabaya</td>
                                            <td>Siwalankerto</td>
                                            <td>Wonocolo</td>
                                            <td>78615</td> -->
                                            <td>Jalan Siwalankerto no.17</td>
                                            <td>Pelangan Internal</td>
                                            <td>Ketua</td>
                                            <!-- <td>0812638478910</td>
                                            <td>ab2345</td>
                                            <td>lili@gmail.com</td>
                                            <td> - </td> -->
                                            <td>lunas</td>
                                            <td>
                                                <div class='btn-group'>
                                                    <button type='button' class="btn btn-edit" onclick="location.href='editCustomer.php'" style="color: #FDBE33;">
                                                        <i class='fas fa-edit'></i>&nbspEdit</button>
                                                    <button type='button' class='btn btn-remove' data-toggle='modal'
                                                        data-target='#mmMyModal' style='color: grey;'>
                                                        <i class='fas fa-trash'></i>&nbspRemove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>Lily</td>
                                            <td>Jalan Siwalankerto no.17</td>
                                            <td>Pelangan Internal</td>
                                            <td>Ketua</td>
                                            <td>lunas</td>
                                            <td>
                                                <div class='btn-group'>
                                                    <button type='button' class="btn btn-edit" onclick="location.href='editCustomer.php'" style="color: #FDBE33;">
                                                        <i class='fas fa-edit'></i>&nbspEdit</button>
                                                    <button type='button' class='btn btn-remove' data-toggle='modal'
                                                        data-target='#mmMyModal' style='color: grey;'>
                                                        <i class='fas fa-trash'></i>&nbspRemove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>Lily</td>
                                            <td>Jalan Siwalankerto no.17</td>
                                            <td>Pelangan Internal</td>
                                            <td>Ketua</td>
                                            <td>lunas</td>
                                            <td>
                                                
                                                <div class='btn-group'>
                                                    <button type='button' class="btn btn-edit" onclick="location.href='editCustomer.php'" style="color: #FDBE33;">
                                                        <i class='fas fa-edit'></i>&nbspEdit</button>
                                                    <button type='button' class='btn btn-remove' data-toggle='modal'
                                                        data-target='#mmMyModal' style='color: grey;'>
                                                        <i class='fas fa-trash'></i>&nbspRemove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>Lily</td>
                                            <td>Jalan Siwalankerto no.17</td>
                                            <td>Pelangan Internal</td>
                                            <td>Ketua</td>
                                            <td>lunas</td>
                                            <td>
                                                <div class='btn-group'>
                                                    <button type='button' class="btn btn-edit" onclick="location.href='editCustomer.php'" style="color: #FDBE33;">
                                                        <i class='fas fa-edit'></i>&nbspEdit</button>
                                                    <button type='button' class='btn btn-remove' data-toggle='modal'
                                                        data-target='#mmMyModal' style='color: grey;'>
                                                        <i class='fas fa-trash'></i>&nbspRemove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>Lily</td>
                                            <td>Jalan Siwalankerto no.17</td>
                                            <td>Pelangan Internal</td>
                                            <td>Ketua</td>
                                            <td>lunas</td>
                                            <td>
                                                <div class='btn-group'>
                                                    <button type='button' class="btn btn-edit" onclick="location.href='editCustomer.php'" style="color: #FDBE33;">
                                                        <i class='fas fa-edit'></i>&nbspEdit</button>
                                                    <button type='button' class='btn btn-remove' data-toggle='modal'
                                                        data-target='#mmMyModal' style='color: grey;'>
                                                        <i class='fas fa-trash'></i>&nbspRemove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        

                                    </tbody>
                                </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="mmMyModal" role="dialog" style="border-radius:45px">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header" style="background:rgba(52, 25, 80, 1); color:white;">
                                                    <p id="employeeidname" style="font-weight: bold;">DeusCode</p>
                                                    <button type="button" class="close" data-dismiss="modal" style="color:white;">×</button>
                                                </div>

                                                <div class="modal-body">
                                                    <button id="btnModalBiodata" onclick="msuccess('remove')" style="text-align:left">
                                                        <a style="color: rgba(3, 15, 39, 1);">
                                                            <i class='fas fa-edit'></i>&nbspRemove Customer</a></button>
                                                    <hr>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            </div>
    </div>

    <script>
        function nextpage(){
            var handlerid=4;
            $.ajax({
                url:"handler.php",
                type:"POST",
                data:{handlerid:handlerid},
                success: function(){
                    window.location.href="kelolaBarang_aksiInputPasokBarang.php";
                },
                error:function(xhr,textStatus,errorThrown){
                    var str="ERROR : SERVER error<br>"+xhr+
                    "<br>" + textStatus + "<br>" + errorThrown;
                    alert(str);
                }
            });
        }
        $(document).ready(
            function(){
                $('#sidebarcollapse').on('click',function(){
                    $('#sidebar').toggleClass('active');
                });
            }
        )
        $(document).ready(
            function(){
                var handlerid=22;
                $.ajax({
                    url:"handler.php",
                    type:"POST",
                    data:{handlerid:handlerid},
                    success:function(response){
                        $('#showdata').html(response);
                    },
                    error:function(xhr,textStatus,errorThrown){
                        var str="ERROR : SERVER error<br>"+xhr+
                        "<br>" + textStatus + "<br>" + errorThrown;
                        alert(str);
                    }
                })
            });
        
        //$('#mytable').DataTable();
        
    </script>
</body>
</html>
