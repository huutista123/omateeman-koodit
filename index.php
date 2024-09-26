<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('grid-container'); ?>>

<header class="header">Harrastus sivu</header>

<nav class="navbar">
    <button class="color-change-button" onclick="location.href='<?php echo home_url(); ?>'">Etusivu</button>
</nav>

<aside class="sidebar"></aside>

<article class="main">
    <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/kuva.png" alt="Metsästyksestä kertova kuva" class="resized-image">
        <img src="<?php echo get_template_directory_uri(); ?>/kuva2.png" alt="Metsästyksestä kertova kuva" class="resized-image">
    </div>
    <div class="teksti-vasemmalle">
    <p class="gray-box">Harrastan metsästystä, pelaamista ja uimista.</p>
<p class="gray-box">Metsästys on tällä hetkellä suuressa roolissa minulle, koska syksyllä alkoi sorsastus.</p>

<div class="box">
    <h3>Metsästyskauppojen sivustoja, joista hankin omat varusteeni.</h2>
    <p class="mustateksti">https://www.karkkainen.com/ </p>
<p class="mustateksti">https://www.motonet.fi/</p>
<p class="mustateksti">https://www.retkitukku.fi/ </p>
</div>



    </div>
</article>

<footer class="footer">Vili Matinaho 2024</footer>

<?php wp_footer(); ?>
</body>
</html>
