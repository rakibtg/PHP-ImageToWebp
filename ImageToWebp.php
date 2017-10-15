<?php

  class ImageToWebp {

    private $source = null;

    protected function getImageResource () {

      // Find the extension of source image.
      $extension = strtolower( strrchr ( $this->source, '.' ) );

      // Convert image to resource object according to its type.
      switch ( $extension ) {
        case '.jpg':
        case '.jpeg':
          $img = @imagecreatefromjpeg( $this->source );
          break;
        case '.gif':
          $img = @imagecreatefromgif( $this->source );
          break;
        case '.png':
          $img = @imagecreatefrompng( $this->source );
          break;
        default:
          $img = false;
          break;
      }
      return $img;
    }

    public function convert ( $source, $destination, $quality = 80 ) {

      // Set default values globally
      $this->source = $source;

      // Convert to webp, yey
      imagewebp( $this->getImageResource(), $destination, $quality );

    }
  }