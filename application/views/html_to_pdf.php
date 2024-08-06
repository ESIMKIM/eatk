<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .p {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <img src="<?php echo base_url('assets/surat/kop_surat_imi') ?>">
    <br>
    <table style="width: 100%; border-style: solid; font-family: Arial, Helvetica, sans-serif;">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Lastname</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td style="text-align: right;">
                <p><?php echo date("d-m-Y") ?></p>
            </td>
        </tr>
        <tr>
            <td>Lois</td>
            <td>Griffin</td>
        </tr>
        <tr>
            <td>xx</td>
            <td>xxx</td>
        </tr>
    </table>


    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4">
            <p><?php echo date("d-m-Y") ?></p>
        </div>
        <div class="col-4">
            <p><?php echo date("d-m-Y") ?></p>
        </div>
    </div>

</body>

</html>