<?php
include_once "head.html";
$_SESSION['pagename']="";
?>

<head>
    <style>
    </style>
</head>

<!DOCTYPE html>
<html>


<body>
    <div class="wrapper">
        <?php include_once "sidebar.html";?>

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
                
        </div>

        <script>
            // $('#myTable').DataTable();

            $(document).ready(function () {
                $('#myTable').DataTable({
                    "order": [[3, "desc"]]
                });
                $('.dataTables_length').addClass('bs-select');
            })
            $(document).ready(
                function () {
                    $('#sidebarcollapse').on('click', function () {
                        $('#sidebar').toggleClass('active');
                    });
                }
            )
            $(document).ready(
                function () {
                    var handlerid = 5;
                    $.ajax({
                        url: "handler.php",
                        type: "POST",
                        data: { handlerid: handlerid },
                        success: function (response) {
                            $('#tablebody').html(response);
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            var str = "ERROR : SERVER error<br>" + xhr +
                                "<br>" + textStatus + "<br>" + errorThrown;
                            alert(str);
                        }
                    });
                }
            )
            function msuccess(str) {
                $('#mmMyModal').modal('hide');
                $('#scmode').text(str);
                var handlerid = 4;
                $.ajax({
                    url: "handler.php",
                    type: "POST",
                    data: { handlerid: handlerid },
                    success: function (response) {
                        $('#ModalSuccess').modal();
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        var str = "ERROR : SERVER error<br>" + xhr +
                            "<br>" + textStatus + "<br>" + errorThrown;
                        alert(str);
                    }
                });
            }

        // function refreshPage() {
        //     // selectElement()
        //     // function selectElement(){
        //     // let element= document.getElementById(id);
        //     // element.value = "filterby";
        //     document.getElementById("mySearch").value = "";
        //     document.getElementById("myFilter").innerHTML = "filterby";
        //     document.getElementById("mySort").innerHTML = "sortingby";

        //     // }
        //     window.location.reload();
        // }

        // $("button").click(function () {
        //     // alert("helo");

        //     var _mySort = document.getElementById("mySort").value;
        //     var _myFilter = document.getElementById("myFilter").value;
        //     // alert(_mySort);
        //     // alert(_myFilter);
        //     if (_mySort != "sortingby" && _myFilter != "filterby") {
        //         alert("Mohon Maaf, Harap Mengisi Salah Satu dari Sorting atau Filter.")
        //     }
        //     else if (_mySort != "sortingby") {
        //         // alert("sort");
        //         _sorting();
        //     }

        //     else if (_myFilter != "filterby") {
        //         // alert("filter");
        //         _filter();
        //     }

        //     function _sorting() {
        //         var table, rows, switching, i, x, y, shouldSwitch, input, index, whatSort, indexSort;
        //         input = document.getElementById("mySearch").value;

        //         if (input == "id" || input == "ID") {
        //             index = 0;
        //         }
        //         else if (input == "distributor" || input == "Distributor") {
        //             index = 1;
        //         }
        //         else if (input == "totalHargaBeli" || input == "TotalHargaBeli") {
        //             index = 2;
        //         }
        //         else if (input == "totalHargaJual" || input == "TotalHargaJual") {
        //             index = 3;
        //         }
        //         else if (input == "keuntungan" || input == "Keuntungan") {
        //             index = 4;
        //         }

        //         whatSort = document.getElementById("mySort").value;

        //         if (whatSort == "ascending" || whatSort == "Ascending") {
        //             indexSort = 1;
        //         }
        //         else if (whatSort == "descending" || whatSort == "Descending") {
        //             indexSort = 2;
        //         }
        //         table = document.getElementById("myTable");
        //         switching = true;
        //         if (indexSort == 1) {
        //             while (switching) {
        //                 switching = false;
        //                 rows = table.rows;
        //                 for (i = 1; i < (rows.length - 1); i++) {
        //                     shouldSwitch = false;
        //                     x = rows[i].getElementsByTagName("TD")[index];
        //                     y = rows[i + 1].getElementsByTagName("TD")[index];
        //                     if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //                         shouldSwitch = true;
        //                         break;
        //                     }
        //                 }
        //                 if (shouldSwitch) {
        //                     rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        //                     switching = true;
        //                 }
        //             }
        //         }
        //         else if (indexSort == 2) {
        //             while (switching) {
        //                 switching = false;
        //                 rows = table.rows;
        //                 for (i = 1; i < (rows.length - 1); i++) {
        //                     shouldSwitch = false;
        //                     x = rows[i].getElementsByTagName("TD")[index];
        //                     y = rows[i + 1].getElementsByTagName("TD")[index];
        //                     if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
        //                         shouldSwitch = true;
        //                         break;
        //                     }

        //                 }
        //                 if (shouldSwitch) {
        //                     rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        //                     switching = true;
        //                 }
        //             }
        //         }
        //     }




        //     //button search menggunakan keyup baru tekan lgsg trigger keluar sesuai yang kita search
        //     function _filter() {
        //         var input, filter, table, tr, td, i, txtValue, index;
        //         input = document.getElementById("mySearch");
        //         filter = input.value.toUpperCase();
        //         table = document.getElementById("myTable");
        //         tr = table.getElementsByTagName("tr");
        //         filt = document.getElementById("myFilter").value;
        //         $('myFilter').click(function () {
        //             filt = document.getElementById("myFilter").value;
        //         });

        //         if (filt == "id" || filt == "ID") {
        //             index = 0;
        //         }
        //         if (filt == "distributor" || filt == "Distributor") {
        //             index = 1;
        //         }
        //         if (filt == "totalHargaBeli" || filt == "TotalHargaBeli") {
        //             index = 2;
        //         }
        //         if (filt == "totalHargaJual" || filt == "TotalHargaJual") {
        //             index = 3;
        //         }
        //         if (filt == "keuntungan" || filt == "Keuntungan") {
        //             index = 4;
        //         }

        //         for (i = 0; i < tr.length; i++) {
        //             td = tr[i].getElementsByTagName("td")[index];
        //             if (td) {
        //                 txtValue = td.textContent || td.innerText;
        //                 if (txtValue.toUpperCase().indexOf(filter) > -1) {
        //                     tr[i].style.display = "";
        //                 } else {
        //                     tr[i].style.display = "none";
        //                 }
        //             }
        //         }
        //     }

        // })

        </script>
</body>

</html>