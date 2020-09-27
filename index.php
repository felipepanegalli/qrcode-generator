<?php

//Carrega automaticamente as classes da pasta vendor
include "vendor/autoload.php";

//Classes que o Bacon utiliza para gerar o QRCode
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd; //Classe SVG
use BaconQrCode\Renderer\Image\ImagickImageBackEnd; //Classe PNG
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

//Configuração para gerar o render
$renderer = new ImageRenderer(
    new RendererStyle(300),
    new SvgImageBackEnd()
);

//Prepara o core do Bacon para gerar a imagem com as confs passadas
$writer = new Writer($renderer);

//Gera o QRCode
echo($writer->writeString("Exemplo de um QRCode"));