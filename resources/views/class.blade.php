<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TKB</title>

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
                <h4 class="m-0 font-weight-bold text-primary">Thời khóa biểu (<span style="color: black; font-size: 20px">{{ $tkb[0]->HocPhan->MaHP }}</span>)</h4>
                <div>
                    <button id="" class="btn btn-outline-dark" onclick="history.back()"><i class="fas fa-arrow-left"></i> Back</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Buổi học</th>
                                <th>Tiết bắt đầu</th>
                                <th>Số tiết</th>
                                <th>Số tuần</th>
                                <th data-orderable="false">List Students</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Buổi học</th>
                                <th>Tiết bắt đầu</th>
                                <th>Số tiết</th>
                                <th>Số tuần</th>
                                <th>List Students</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($tkb as $t)
                            <tr>
                                <td>{{ $t->id }}</td>
                                <td>{{ $t->BuoiHoc }}</td>
                                <td>{{ $t->TietBD }}</td>
                                <td>{{ $t->SoTiet }}</td>
                                <td>{{ $t->SoTuan }}</td>
                                <td>
                                    <a href="{{ route('list',$t->id) }}" class="btn btn-info"><i class="fas fa-arrow-circle-right"></i></a>
                                </td>
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