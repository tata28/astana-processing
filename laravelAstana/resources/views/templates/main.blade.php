<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Astana</title>

    <!-- TEMPLATE -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/js/star-rating.min.js"></script>

    <!-- bootdtrap css cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->

    <!-- Latest compiled and minified CSS ??????-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    
    <!-- popper.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	
    <!-- bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified JavaScript ??????/ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

    <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/css/star-rating.min.css"></script>

    @yield('css')

    <style type="text/css">
        *{
            overflow-x: hidden;
            /* overflow-y: hidden; */
        }

        .dtHorizontalExampleWrapper {
        max-width: 600px;
        margin: 0 auto;
        }
        a:hover{
            text-decoration:none;
        }
        .labelclass{
            color:black;
            text-align:left;
            font-weight:500;
        }
        .col{
            padding-right: 0;
        }
        p,h4{
            margin: 0;
        }
        .invert { 
            filter: invert(100%); 
        }
        body{
            background-color: rgba(197, 219, 236, 1)
        }
        label,h2{
            color: rgba(253, 190, 51, 1);
        }
        .container{
            padding:8px;
        }
        .col-sm s{
            flex-grow:0;
        }
        
        /* navbar */
        .list-group-item{
            background-color:rgba(52, 25, 80, 1);
            padding:8;
        }
        #profile{
        width: 62px;
        height: 62px;
        background: #F47D7E;
        border-radius: 45px;
        }

        .wrapper{
            display: flex;
            align-items: stretch;
            width:100%;
        }
        #sidebar{
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            background: rgba(52, 25, 80, 1);
            color: #fff;
            transition: all 0.3s;
        }
        #sidebar.active{
            margin-left: -250px;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: rgba(52, 25, 80, 1);
            color: #fff;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
            color:#fff;
        }
        #sidebar ul li.list-group-item :hover {
            background: rgb(42, 20, 64);
            transition: all 0.3s;
        } 

        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #fff;
            background: rgb(42, 20, 64);
        }
        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: rgba(52, 25, 80, 1);
        }
        a[data-toggle="collapse"]{
            position: relative;
        }
        .dropdown-toggle::after{
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
        @media(max-width:768px){
            #sidebar{
                margin-left: -250px;
            }
            #sidebar.active{
                margin-left:0;
            }
        }

        /* back button */
        button{
            background-color: transparent;
            background-repeat: no-repeat;
            border: none;
            cursor: pointer;
            overflow: hidden;
            outline: none;
        }
        button:focus {
            border: none;
        }

        
    </style>
</head>

<body>
    <div class="wrapper">        
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4>ASTANA</h4>
                <p>for your daily activity</p>
            </div>
            <div class="row" style="padding-left:8px;">
                <div class="col-4">
                    <div id="profile" class="d-flex justify-content-center align-items-center">
                        <p style="font-weight:bold;">NL</p>
                    </div>
                </div>
                <div class="col align-self-center">
                    <div class="row"><p style="font-weight:bold;">Nama Lengkap</p></div>
                    <div class="row"><p style="color:rgba(199, 199, 199, 1);">Role</p></div>
                </div>
            </div>

            <ul class="list-unstyled components">        
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/dashboard.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="dashboard.php">Dashboard</a>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/kelola akun.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="kelolaAkun.php">Kelola Akun</a>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/cust.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#customer" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customer</a>
                            <ul class="collapse list-unstyled" id="customer">
                                <li>
                                    <a href="addCustomer.php">Add New Customer</a>
                                </li>
                                <li>
                                    <a href="databaseCustomer.php">Data Customer</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/employee.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#employee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employee</a>
                            <ul class="collapse list-unstyled" id="employee">
                                <li>
                                    <a href="addEmployee.php">Add New Employee</a>
                                </li>
                                <li>
                                    <a href="databaseEmployee.php">Data Employee</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/kelola barang.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#kelolabarang" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kelola Barang</a>
                            <ul class="collapse list-unstyled" id="kelolabarang">
                                <li>
                                    <a href="kelolaBarang_daftarBarangPusat.php">Daftar Barang Pusat</a>
                                </li>
                                <li>
                                    <a href="kelolaBarang_daftarBarangDistributor.php">Daftar Barang Distributor</a>
                                </li>
                                <li>
                                    <a href="kelolaBarang_inputPasokBarang.php">Input Pasok Barang</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/supplier.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="supplier.php">Supplier</a>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/distributor.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="distributor_crm_omzet.php">Distributor / CRM</a>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/retur.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#retur" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Retur</a>
                            <ul class="collapse list-unstyled" id="retur">
                                <li>
                                    <a href="retur-customer.php">Retur Customer</a>
                                </li>
                                <li>
                                    <a href="retur-supplier.php">Retur Supplier</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/kelola transaksi.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#kelolatransaksi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kelola Transaksi</a>
                            <ul class="collapse list-unstyled" id="kelolatransaksi">
                                <li>
                                    <a href="transaksi.php">Transaksi</a>
                                </li>
                                <li>
                                    <a href="riwayat-transaksi.php">Riwayat Transaksi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/kelola laporan.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#kelolalaporan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kelola Laporan</a>
                            <ul class="collapse list-unstyled" id="kelolalaporan">
                                <li>
                                    <a href="laporan-transaksi.php">Laporan Transaksi</a>
                                </li>
                                <li>
                                    <a href="laporan-pegawai.php">Laporan Pegawai</a>
                                </li>
                                <li>
                                    <a href="kelolaLaporan_laporanStock.php">Laporan Stok</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/clipboard.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#laporanbarang" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Laporan Barang</a>
                            <ul class="collapse list-unstyled" id="laporanbarang">
                                <li>
                                    <a href="laporanBarangHarian.php">Laporan Barang Harian</a>
                                </li>
                                <li>
                                    <a href="laporan-barang-hilang.php">Laporan Barang Hilang</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/budget.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#akun" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Akuntansi</a>
                            <ul class="collapse list-unstyled" id="akun">
                                <li class="subheader">Akun</li>
                                <li>
                                    <a href="#">Manage Akun</a>
                                </li>
                                <li>
                                    <a href="#">Data Akun</a>
                                </li>
                
                                <li class="subheader">Aktiva</li>
                                <li>
                                    <a href="#">Aktiva Tetap</a>
                                </li>
                                <li>
                                    <a href="#">Aktiva Lancar</a>
                                </li>
                                <li>
                                    <a href="#">Laporan Aktiva</a>
                                </li>
                
                                <li class="subheader">Kas</li>
                                <li>
                                    <a href="#">Kas In</a>
                                </li>
                                <li>
                                    <a href="#">Kas Out</a>
                                </li>
                                <li>
                                    <a href="#">Bank</a>
                                </li>
                
                                <li class="subheader">Laporan Keuangan</li>
                                <li>
                                    <a href="#">Jurnal Harian</a>
                                </li>
                                <li>
                                    <a href="#">Buku Besar</a>
                                </li>
                                <li>
                                    <a href="#">Neraca</a>
                                </li>
                                <li>
                                    <a href="#">Laporan Laba Rugi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/debt.png') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#Utang" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Utang</a>
                            <ul class="collapse list-unstyled" id="Utang">
                                <li>
                                    <a href="pembayaranPiutang.php">Pembayaran Piutang</a>
                                </li>
                                <li>
                                    <a href="pembayaranUtang.php">Pembayaran Utang</a>
                                </li>
                                <li>
                                    <a href="pengirimanTagihanPiutang.php">Pengiriman Tagihan Piutang</a>
                                </li>
                                <li>
                                    <a href="tandaTerimaTagihan.php">Tanda Terima Tagihan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 align-self-center">
                            <img src="{{ asset('img/order.jpg') }}" style="height:16px;width:16px;" class="invert">
                        </div>
                        <div class="col">
                            <a href="#Order" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Order</a>
                            <ul class="collapse list-unstyled" id="Order">
                                <li>
                                    <a href="penerimaanBarang.php">Penerimaan Barang</a>
                                </li>
                                <li>
                                    <a href="orderRetur.php">Order Retur</a>
                                </li>
                                <li>
                                    <a href="penerimaanTagihan.php">Penerimaan Tagihan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item">            
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                </li>   

            </ul>
        </nav>

        <div class="container">            
            <div class="row">
                <!-- <div class="col-sm">
                    <button type="button" id="sidebarcollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                </div> -->
            </div>             
            @yield('content')
        </div>         
    </div>   
</body>
@yield('script')
<script>                        
    $(document).ready(
        function () {
            $('#sidebarcollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        }
    )
</script>
</html>