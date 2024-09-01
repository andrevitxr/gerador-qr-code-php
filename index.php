<?php

include 'qrcode.php';

$successMessage = "";
$viewButtonHtml = "";

if(isset($_POST['qr'])) {
    $text = $_POST['qr'];
    $name = md5(time()) . ".png";

    $file = "files/{$name}";
    $options = array(
        'w' => 500,
        'h' => 500,
    );
    $generator = new QRCode($text, $options);
    $image = $generator->render_image();
    imagepng($image, $file);
    imagedestroy($image);

    $successMessage = "Imagem gerada com sucesso.";
    $viewButtonHtml = "<a href='{$file}' target='_blank' class='view-button'>Clique aqui para visualizar</a>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador QR Code</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>Gerador de QR Code</h1>
        <form action="" method="POST">
            <input type="text" name="qr" placeholder="Digite o texto para o QR Code">
            <button type="submit">Gerar</button>
        </form>

        <?php if ($successMessage): ?>
            <p><?php echo $successMessage; ?></p>
            <?php echo $viewButtonHtml; ?>
        <?php endif; ?>
    </div>
</body>
</html>