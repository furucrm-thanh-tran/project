<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>List Students</title>

    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        .table td {
            vertical-align: middle;
        }

        td:last-child {
            text-align: center
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- DataTales -->
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3 d-inline-flex justify-content-between align-items-center" id="test">
                <h4 class="m-0 font-weight-bold text-primary">List Students <span style="color: black;">(Group: {{ $list[0]->LopHP->id }})</span></h4>
                <div>
                    <a href="/" class="btn btn-outline-dark"><i class="fas fa-home"></i> Home</a>
                    <button id="" class="btn btn-outline-dark" onclick="history.back()"><i class="fas fa-arrow-left"></i> Back</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student ID</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th data-orderable="false">Diem danh</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Student ID</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($list as $l)
                            <tr>
                                <td>{{ $l->id }}</td>
                                <td>{{ $l->SinhVien->mssv }}</td>
                                <td>{{ $l->SinhVien->HoTen }}</td>
                                <td>{{ $l->SinhVien->GioiTinh }}</td>
                                <td>{{ $l->SinhVien->Email }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>
</body>

</html>