<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    $width = 1200;
    $height = 400;
    $image = imagecreatetruecolor($width, $height);

    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);

    imagefilledrectangle($image, 0, 0, $width, $height, $white);

    $font_path = __DIR__ . '/fonts/montserrat/Montserrat-Black.ttf'; 

    $font_size = 12;
    if (file_exists($font_path)) {
        imagettftext($image, $font_size, 0, 10, 50, $black, $font_path, "Nom: " . $name);
        imagettftext($image, $font_size, 0, 10, 100, $black, $font_path, "Email: " . $email);
    } else {
        echo "Police non trouvée à l'emplacement : $font_path";
        imagedestroy($image);
        exit;
    }

    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="data_image.png"');

    imagepng($image);
    imagedestroy($image);
    exit;
} else {
    echo "Aucune donnée reçue.";
}
?>