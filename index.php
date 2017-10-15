<?php

    require "./ImageToWebp.php";

    $jw = new ImageToWebp();

    $jw->convert( './gif-test.gif', './gif-test.webp' );