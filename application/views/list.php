<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>News - List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                </div>
                                <h4 class="page-title">News - List</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card-box">
                                <table id="table-news" class="table table-bordered dt-responsive nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="5%">No.</th>
                                            <th width="10%">Date</th>
                                            <th width="30%">Title</th>
                                            <th width="25%">Description</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end content -->
        </div>
    </div>
    <script>
        $(function() {
            var table_news = $('#table-news').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: '<?php echo base_url("news/news_list"); ?>',
                    type: "GET"
                },
                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                }, ],
            });
            $("#table-news tbody").on('click', 'button', function() {
                var id = $(this).attr('data-id');
                if (this.name == "deleteButton") {
                    var is_delete = confirm("Are your sure?");
                    if (is_delete) {
                        $.post('news/delete', {
                            id: id
                        }, function(result) {
                            $(".result").html(result);
                            table_news.ajax.reload();
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>