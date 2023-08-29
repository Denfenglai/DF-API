<?php
$imageDirectory = './img/';
$imageTypes = ['gif', 'jpg', 'png', 'jpeg', 'webp', 'bmp'];

// 获取图片文件列表
$images = glob($imageDirectory . '*.{'. implode(',', $imageTypes) . '}', GLOB_BRACE);

if (count($images) === 0) {
    die('没有找到图片文件。 MuaOoO ~ ' . $imageDirectory . ' 文件夹');
}

// 随机选择一张图片
$randomImage = $images[array_rand($images)];

// 输出图片
header('Content-Type: image/' . pathinfo($randomImage, PATHINFO_EXTENSION));
readfile($randomImage);