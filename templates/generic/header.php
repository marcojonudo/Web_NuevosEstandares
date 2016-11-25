<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>
        <div class="wrapper">
            <header>
                <div class="content">
                    <div class="logo">
                        <a href="./">
                            <img src="./img/logo/logo-white.png">
                            <span class="logo-font">
                                <span class="big">MIW</span>
                                <span>Brand</span>
                            </span>
                        </a>
                    </div><!-- .logo -->
                    <?php
                        include("main-menu.php");
                    ?>
                </div><!-- .content -->
            </header>
            <header class="mobile">
                <div class="logo">
                </div><!-- .logo -->
                <div class="menu-button">
                    <span class="bars">
                        <span class="bar"></span><!-- .bar -->
                        <span class="bar"></span><!-- .bar -->
                        <span class="bar"></span><!-- .bar -->
                    </span><!-- .bars -->
                </div><!-- .menu-button -->
                <?php
                    include("main-menu.php");
                ?>
            </header>
            <div class="push"></div>
            <div class="main">
