<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Here are all the fruits:</p>
    <?php foreach ($allFruits as $fruits): ?>
       <li> <?php echo $fruits['name'] . 'Costs' . $fruits['price'] . '$'; ?></li>
    <?php endforeach;?>
</body>

</html>