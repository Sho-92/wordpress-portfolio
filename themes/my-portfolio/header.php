<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    echo '<link href="' . get_template_directory_uri() . '/assets/css/styles.css" rel="stylesheet">';
    echo '<link href="' . get_template_directory_uri() . '/assets/css/common.css" rel="stylesheet">';

    if (is_front_page()) {
        echo '<link href="' . get_template_directory_uri() . '/assets/css/index.css" rel="stylesheet">';
    } elseif (is_page('about')) {
        echo '<link href="' . get_template_directory_uri() . '/assets/css/about.css" rel="stylesheet">';
    } elseif (is_page('projects')) {
        echo '<link href="' . get_template_directory_uri() . '/assets/css/projects.css" rel="stylesheet">';
    } elseif (is_page('contact')) {
        echo '<link href="' . get_template_directory_uri() . '/assets/css/contact.css" rel="stylesheet">';
    } else {
    // デフォルトのCSSを適用
    echo '<link href="' . get_template_directory_uri() . '/assets/css/index.css" rel="stylesheet">';
    }
   
    ?>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Montserrat&family=Lora&display=swap" rel="stylesheet">

    <title>Portfolio</title>
</head>

<body>
    <header>
        <h1 class="text-3xl font-bold"><a href="<?php echo home_url(); ?>">SHO's Portfolio</a></h1>
        <input id="menu-toggle" type="checkbox" />
        <label class="menu-button-container" for="menu-toggle">
            <div class="menu-button"></div>
        </label>
        <nav class="nav-list">
            <ul class="menu">
                <li><a href="<?php echo home_url(); ?>" class="nav-button">Home</a></li>
<li><a href="<?php echo get_permalink(get_page_by_path('projects')); ?>" class="nav-button">Projects</a></li>
<li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="nav-button">About</a></li>
<li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="nav-button">Contact</a></li>

            </ul>
            <div class="language">
                <button onclick="switchLanguage('en'); closeNavList();" class="custom-button" aria-label="Switch to English">English</button>
                <button onclick="switchLanguage('ja'); closeNavList();" class="custom-button" aria-label="Switch to Japanese">Japanese</button>
            </div>
        </nav>
    </header>
