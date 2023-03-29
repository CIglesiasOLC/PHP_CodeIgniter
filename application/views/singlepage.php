<!DOCTYPE html>
<html>
<head>
    <title>Single Page App</title>
    <link href="<?php echo base_url('assets/dataTables/datatables.min.css'); ?>" rel="stylesheet"/>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.6.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dataTables/datatables.min.js'); ?>"></script>
</head>
<body>
    <h1>Single Page Motorcycle Listing</h1>
    <table id="motorcycle-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Displacement</th>
                <th>Action</th>
            </tr>   
        </thead>
        <tbody>
        </tbody>
    </table>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#motorcycle-table").DataTable();
        });
    </script>
</body>