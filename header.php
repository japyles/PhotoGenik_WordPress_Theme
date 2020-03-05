<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/w3.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title>PhotoGenik</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="w3-container w3-teal">
        <div class="w3-row">

            <div class="w3-col m9 l9">
                <h1><?php bloginfo('name'); ?></h1>
            </div>

            <div class="w3-col m3 l3">
                <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input name="s" class="w3-input" type="text" placeholder="Search . . . ">
                </form>
            </div>

        </div>
    </header>

    <div class="w3-row">

        <div class="w3-col m3 l3">

            <?php if (is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>

        </div>

        <div class="w3-col m9 l9">
            <div class="w3-row">
