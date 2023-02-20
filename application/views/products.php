<html>
<head>
    <title><?php echo $title; ?></title>
</head>
    <h1>Product Listings</h1>

    <ul>
    <?php foreach($products as $product): ?>
        <li><?php echo $product; ?></li>
    <?php endforeach; ?>
</html>