<?php
require_once 'functions.php';
$site = site();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site['title'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top main-nav bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><?= $site['title'] ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item home">
                        <a class="nav-link" href="<?= uri_string() == 'cek-pengumuman' ? '/' : 'javascript:void(0)' ?>" onclick="doScrollTo('body')">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item tingkat-sekolah">
                        <a class="nav-link" href="<?= uri_string() == 'cek-pengumuman' ? '/' : 'javascript:void(0)' ?>" onclick="doScrollTo('#tingkat-sekolah')">Tingkat Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= uri_string() == 'cek-pengumuman' ? '/' : 'javascript:void(0)' ?>">Cara Mendaftar</a>
                    </li>
                    <li class="nav-item <?= uri_string() == 'cek-pengumuman' ? 'active' : '' ?>">
                        <a class="nav-link" href="cek-pengumuman">Cek Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary btn-nav-daftar" href="<?=base_url('login')?>">Daftar / Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <footer>
        <div class="container">
            <center>
                Copyright &copy; 2021. <b><?= $site['name'] ?></b>
                <br>
                <a href="">Privacy and Policy</a> | <a href="">Terms and Conditions</a>
            </center>
        </div>
    </footer>

    <button class="btn btn-danger" onclick="doScrollTo('body')" id="scroll_to_top" title="Go to top">
        <i class="fa fa-angle-up fa-fw"></i>
    </button>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    var nav_height = 80;
    var $nav = $('.main-nav');
    var $win = $(window);
    var winH = $win.height(); // Get the window height.
    $win.on("scroll", function() {
        addClassToNav()
        var windscroll = $(window).scrollTop();
        if (windscroll >= nav_height) {
            $('body section').each(function(i) {
                if ($(this).position().top <= (windscroll + nav_height)) {
                    $('.nav-item').removeClass('active');
                    $('.nav-item').eq(i).addClass('active');
                }
            });

        }
    }).on("resize", function() { // If the user resizes the window
        winH = $(this).height(); // you'll need the new height value
    });

    function addClassToNav() {
        return
        if ($(this).scrollTop() > nav_height) {
            $nav.addClass("bg");
            $("#scroll_to_top").css("display", "block")
        } else {
            $nav.removeClass("bg");
            $("#scroll_to_top").css("display", "none")
        }
    }

    function doScrollTo(el) {
        var margin = 15
        // if(el == '#tingkat-sekolah') margin = -20
        $('html, body').animate({
            scrollTop: $(el).offset().top - nav_height + margin
        }, 1000);
    }

    addClassToNav()
</script>

</html>