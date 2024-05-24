<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Stock</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Master</a></li>
                        <li class="breadcrumb-item active">Supplier</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Master Supplier</h3>
                            <p></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-document-text"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">

                    <div id="rekaptab">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <!-- general form elements disabled -->
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h3 class="card-title">Master Supplier</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form role="form" id="formcust" action="/kirimmastersupplier" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Kode</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="kode" name="kode" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="nama" name="nama" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Lokasi</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="lokasi" name="lokasi" />

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div id="row">
                                                <div class="col-sm-3 offset-5">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="submit" class="btn btn-primary" value="Kirim Master Supplier" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card-body -->

                                </div>
                                <!-- /.card -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Master Customer</h3>

                                                <div class="card-tools">

                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap table-bordered elevation-4">
                                                    <thead>
                                                        <tr>
                                                            <th>Kode</th>
                                                            <th>Nama</th>
                                                            <th>Lokasi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($supplier as $sto) { ?>
                                                            <tr>
                                                                <td><?= $sto['kode_supplier'] ?></td>
                                                                <td><?= $sto['nama_supplier'] ?></td>
                                                                <td><?= $sto['lokasi_supplier'] ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>
    function validateForm(e) {
        e.preventDefault();
        var k;
        var kode = document.getElementById("kode").value;
        var nama = document.getElementById("nama").value;
        var hpp = document.getElementById("lokasi").value;


        if (kode == "" || nama == "" || lokasi == "") {
            alertify
                .alert("Ooopss..", "Kolom wajib diisi.");
            return false;
        } else {
            alertify.confirm("This is a confirm dialog.",
                function() {
                    alertify.success('Ok');
                    document.getElementById('formcust').submit();
                },
                function() {
                    alertify.error('Cancel');
                });
        }
    }
</script>
<!-- /.content-wrapper -->