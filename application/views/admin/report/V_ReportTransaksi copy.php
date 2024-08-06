<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Laporan Assets
        </h4>

        <!-- <div class="row">
            <div class="col-2">
                <a href="<?php echo base_url('histori-update-stok') ?>" class="btn rounded-pill btn-info">History Stock
                    Update
                    </br></a>
                <span><br><br></span>
            </div>
            <div class="col-5">
                <a href="#" class="btn rounded-pill btn-success" data-bs-toggle="modal"
                    data-bs-target="#mTambahPerangkat">Tambah
                    Barang </br></a>
                <span><br><br></span>
            </div>
        </div> -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- <?php echo $this->session->userdata('role_id') ?> -->

            <br>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card" style="padding: 50px;">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-header" style="margin-top: -25px;">Pilih Periode Pengiriman Barang ke
                                    masing-masing Direktorat / Bagian</h4>
                                <br>
                                <form action="<?php echo base_url("cari_laporan_bagian") ?>" method="post">
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="form-label">Dari Bulan</label>
                                            <input type="date" name="tgl_laporan_dari" class="form-select"
                                                id="tgl_laporan_dari" />
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Sampai Bulan</label>
                                            <input type="date" name="tgl_laporan_sampai" class="form-select"
                                                id="tgl_laporan_sampai" />
                                        </div>
                                        <div class="col-3">
                                            <br class="form-label">
                                            <input type="submit" class="btn btn-info"></input>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="col-4">
                                <div class="position-relative">
                                    <img src="<?php echo base_url("assets/img/gif/data3.gif") ?>" alt="Computer man"
                                        width="50%" style="margin-left: 100px;">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="table-responsive text-nowrap">
                            <table id="mydata" class="table">
                                <thead>
                                    <tr class="text-nowrap" style="text-align:center;">
                                        <th style="text-align:center;">#</th>
                                        <th style="text-align:center;">Direktorat / Bagian</th>
                                        <th style="text-align:center;">No Surat</th>
                                        <th style="text-align:center;">Tanggal</th>
                                        <th style="text-align:center;">Jenis Barang</th>
                                        <th style="text-align:center;">Total Barang</th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">
                                    <?php $i = 1; ?>
                                    <?php foreach ($datalaporan as $data) : ?>
                                    <tr style="text-align:center;">
                                        <td><?= $i ?></td>
                                        <td><?= $data->department_name; ?></td>
                                        <td><?= $data->no_surat; ?></td>
                                        <td><?= $data->tgl_surat; ?></td>
                                        <td><?= $data->total_jenis; ?></td>
                                        <td><?= $data->total_quantity; ?> </td>
                                    </tr>
                                    <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card" style="padding: 50px;">
                        <div class="row">
                            <div class="col-lg-5 position-relative">
                                <img src="<?php echo base_url("assets/img/gif/data3.gif") ?>" alt="Computer man"
                                    width="100%">
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <h2 class="text-black">Hasil Klasifikasi FS (Fast and Slow Moving) Assets</h2>
                                <hr>

                                <p class="text-black">Kelas Fast : barang yang memiliki tingkat permintaan yang sangat
                                    tinggi.<br>
                                    Kelas Slow : barang yang memiliki tingkat permintaan yang rendah.
                                </p>
                                <p class="text-black">Summary Reports</p>
                                <hr>
                                <p class="text-black">Fast : 135 item <br> Slow : 10 item </p>

                            </div>

                        </div>
                        <hr>
                        <br>
                        <div class="table-responsive text-nowrap">
                            <table id="mydata" class="table">
                                <thead>
                                    <tr class="text-nowrap" style="text-align:center;">
                                        <th style="display:none;">id</th>
                                        <th style="text-align:center;">#</th>
                                        <th style="text-align:center;">Gambar</th>
                                        <th style="text-align:center;">Nama Barang</th>
                                        <th style="text-align:center;">Merk Barang</th>
                                        <th style="text-align:center;">Klasifikasi</th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>1</td>
                                        <td><img src="<?php echo base_url('assets/img/sementara/5.jpg') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>RAUTAN PENSIL KECIL</td>
                                        <td>Kenko</td>
                                        <td>13500</td>

                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>2</td>

                                        <td><img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/MTA-1168095/paper-one_paper-one-kertas-fotokopi--80-g--f4-_full03.jpg"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>Kertas F4</td>
                                        <td>Paper One</td>
                                        <td>13500</td>

                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>3</td>

                                        <td><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/4/23/2225839/2225839_05eeff78-ddfb-4655-9aab-d8865e97887c_877_877.jpg"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>LEM KERTAS STIK 25 GR</td>
                                        <td>Kenko</td>
                                        <td>13500</td>


                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>4</td>

                                        <td><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/2/7/16297281/16297281_47c39ee5-d4b8-45a4-8b8e-838474a2b6be_800_800.jpg"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>PEMBOLONG KERTAS NO.85</td>
                                        <td>Kenko</td>
                                        <td>13500</td>


                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>5</td>

                                        <td><img src="<?php echo base_url('assets/img/sementara/1.jpg') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>PEMBOLONG KERTAS NO.40</td>
                                        <td>Kenko</td>
                                        <td>13500</td>

                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>6</td>

                                        <td><img src="<?php echo base_url('assets/img/sementara/2.jpg') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>PEMBOLONG KERTAS KECIL</td>
                                        <td>Kenko</td>
                                        <td>13500</td>


                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>7</td>

                                        <td><img src="<?php echo base_url('assets/img/sementara/3.jpg') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>Buku Agenda Expedisi 1</td>
                                        <td>Sinar Dunia</td>
                                        <td>13500</td>


                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>8</td>

                                        <td><img src="<?php echo base_url('assets/img/sementara/4.jpg') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>Cutter L500</td>
                                        <td>Kenko</td>
                                        <td>13500</td>


                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>9</td>

                                        <td><img src="<?php echo base_url('assets/img/sementara/6.png') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>Kertas A4</td>
                                        <td>Kenko</td>
                                        <td>13500</td>


                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>10</td>

                                        <td><img src="<?php echo base_url('assets/img/sementara/7.jpg') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>Buku Agenda Expedisi 2/td>
                                        <td>Sinar Dunia</td>
                                        <td>13500</td>


                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>11</td>

                                        <td><img src="<?php echo base_url('assets/img/sementara/9.jpg') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>Spidol Snowman</td>
                                        <td>Kenko</td>
                                        <td>13500</td>


                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>12</td>

                                        <td><img src="<?php echo base_url('assets/img/sementara/10.jpg') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>Cutter L300</td>
                                        <td>Kenko</td>
                                        <td>13500</td>


                                    </tr>
                                    <tr style="text-align:center;">
                                        <td style="display: none;">nomor_urut</td>
                                        <td>13</td>

                                        <td><img src="<?php echo base_url('assets/img/sementara/11.jpg') ?>"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                                        </td>
                                        <td>Rautan Pensil Meja</td>
                                        <td>Kenko</td>
                                        <td>13500</td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- / Content -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                    ©
                    <script>
                    document.write(new Date().getFullYear());
                    </script>
                    , IDM
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>

    <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core S -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?php echo base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/iconify-icon.min.js"></script>

<script src="<?php echo base_url() ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo base_url() ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url() ?>/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url() ?>/assets/js/dashboards-analytics.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/select2.min.js"></script>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<!-- <script src="<?php echo base_url() ?>/assets/js/bodymovin.js"></script>
<script src="<?php echo base_url() ?>/assets/js/lottie.js"></script> -->

<script type="text/javascript">
$(document).ready(function() {
    // $('#mydata').dataTable();
    $('#mydata').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>




</body>

</html>