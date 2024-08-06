<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Data Pengiriman Barang ATK <br> Semester Pertama
        </h4>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 50px;">
                    <h5 class="card-header">Daftar Barang</h5>

                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="display:none;">id</th>
                                    <th style="text-align:center;">#</th>
                                    <th style="text-align:center;">Direktorat</th>
                                    <th style="text-align:center;">Nomor Surat Permintaan</th>
                                    <th style="text-align:center;">Tanggal</th>
                                    <th style="text-align:center;">Total Permintaan</th>
                                    <th style="text-align:center;">Total Alokasi</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <tr style="text-align:center;">
                                    <td style="display: none;">id coy</td>
                                    <td>1</td>
                                    <td>Direktorat Lalu Lintas Keimigrasian</td>
                                    <td>IMI.1.2.3.4.5</td>
                                    <td>10/01/2023</td>
                                    <td>1500</td>
                                    <td>1350</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td style="display: none;">id coy</td>
                                    <td>2</td>
                                    <td>Direktorat Lalu Lintas Keimigrasian</td>
                                    <td>IMI.1.2.3.4.5</td>
                                    <td>15/01/2023</td>
                                    <td>1750</td>
                                    <td>1500</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td style="display: none;">id coy</td>
                                    <td>3</td>
                                    <td>Direktorat Lalu Lintas Keimigrasian</td>
                                    <td>IMI.1.2.3.4.5</td>
                                    <td>18/01/2023</td>
                                    <td>1400</td>
                                    <td>1380</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td style="display: none;">id coy</td>
                                    <td>4</td>
                                    <td>Direktorat Lalu Lintas Keimigrasian</td>
                                    <td>IMI.1.2.3.4.5</td>
                                    <td>25/01/2023</td>
                                    <td>1750</td>
                                    <td>1500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
<!-- <script src="<?php echo base_url() ?>/assets/js/main.js"></script> -->
<!-- <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.5/datatables.min.js"></script> -->



<script type="text/javascript">
$(document).ready(function() {
    $('#mydata').DataTable({
        buttons: [
            'copy', 'excel', 'pdf'
        ]
    });
});
</script>



</body>

</html>