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
                                    <label for="exampleInputFirstName" class="text">Credit Limit</label>
                                </div>
                                <div class="col-10">
                                    <input type="firstname" class="form-control textField" id="exampleInputFirstName"
                                        placeholder="Masukkan Credit Limit">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Credit Exposure</label>
                                </div>
                                <div class="col-10">
                                    <input type="kecamatan" class="form-control textField" id="exampleInputKecamatan" placeholder="Masukkan Credit Exposure">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Available Credit</label>
                                </div>
                                <div class="col-10">
                                    <input type="Desa" class="form-control textField" id="exampleInputDesa" placeholder="Masukkan Available Credit">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Account Receiveble</label>
                                </div>
                                <div class="col-10">
                                    <input type="kecamatan" class="form-control textField" id="exampleInputKecamatan" placeholder="Masukkan Account Receiveble">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Turn Of Payment</label>
                                </div>
                                <div class="col-10">
                                    <input type="kodepos" class="form-control textField" id="exampleInputkodepos" placeholder="Masukkan Turn Of Payment">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Payment Method</label>
                                </div>
                                <div class="col-10">
                                    <input type="Alamat" class="form-control textField" id="exampleInputAlamat" placeholder="Masukkan Payment Method">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Bonded Area</label>
                                </div>
                                <div class="col-10">
                                    <input type="Alamat" class="form-control textField" id="exampleInputAlamat" placeholder="Masukkan Bonded Area">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="exampleInputEmail" class="text">Finance Customer</label>
                                </div>
                                <div class="col-10">
                                    <input type="Alamat" class="form-control textField" id="exampleInputAlamat" placeholder="Masukkan Finance Customer">
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
                                <p>A customer has successfully been edited</p>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn close" href="addNewEmployee1.html">Close</button> -->
                                <a class="btn  close " type="button" href="addCustomer.php">Close</a>
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
