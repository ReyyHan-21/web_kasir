<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/font/css/all.css">
    <link rel="stylesheet" href="assets/node_modules/sweetalert2/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container mt-4">
        <!-- Judul -->
        <h2 class="text-center fw-bold">Data Pelanggan</h2>
        <!-- Button -->
        <button class="btn btn-success float-end mb-4" id="klik-ini"><i class="fa-solid fa-cart-plus"></i> Tambah Data</button>
        <!-- Tabel -->
        <table class="table table-bordered table-secondary text-center fw-semibold">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>No. Telp</td>
                    <td>Aksi</td>
                </tr>
            </thead>
        </table>
    </div>


    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <script>
        document.getElementById("klik-ini").addEventListener("click", function() {
            Swal.fire({
                title: "Do you want to save the changes?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire("Saved!", "", "success");
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        });
    </script>

</body>


</html>