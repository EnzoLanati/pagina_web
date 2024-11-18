<?php
$images = [
    [
        'url' => '/static/images/image-list/breakfast.jpg',
        'title' => 'Breakfast',
        'width' => '40%',
    ],
    [
        'url' => '/static/images/image-list/burgers.jpg',
        'title' => 'Burgers',
        'width' => '30%',
    ],
    [
        'url' => '/static/images/image-list/camera.jpg',
        'title' => 'Camera',
        'width' => '30%',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="styles.css"> <!-- Tu archivo de estilos CSS -->
</head>
<body>
    <div class="root">
        <?php foreach ($images as $image): ?>
            <div class="image" style="width: <?php echo $image['width']; ?>">
                <div class="imageSrc" style="background-image: url('<?php echo $image['url']; ?>');"></div>
                <div class="imageBackdrop"></div>
                <div class="imageButton">
                    <span class="imageTitle">
                        <?php echo $image['title']; ?>
                        <span class="imageMarked"></span>
                    </span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
