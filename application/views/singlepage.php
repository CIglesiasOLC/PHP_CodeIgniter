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
            </tr>   
        </thead>
    </table>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#motorcycle-table").DataTable({
                "ajax": {
                    "url": "<?php echo base_url('motorcyclesapi');?>",
                    "dataSrc": "data"
                },
                "columns": [
                    { "data": "mc_id" },
                    { "data": "mc_brand" },
                    { "data": "mc_model" },
                    { "data": "mc_displacement" }
                ] 
            });
        });
    </script>
</body>