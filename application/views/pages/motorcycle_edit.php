<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url('motorcycles/verifyEdit/'. $this->uri->segment(3)); ?>" method="post">
    <?php extract($motorcycles); ?>
        Brand: <input type="text" name ="brand" value="<?php echo $mc_brand;?>"><br/>
        Model: <input type="text" name="model" value="<?php echo $mc_model;?>"><br/>
        Displacement: <input type="number" name="displacement" value="<?php echo $mc_displacement;?>"><br/>
        <input type="submit" value="Update">
    </form>
</body>