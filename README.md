# PHP-ImageToWebp
A PHP class to convert JPG, PEG, PNG or GIF images to webp format

## How to use it
As an example take a look at the `index.php` file.
```
    require "./ImageToWebp.php"; // Load the class.

    $jw = new ImageToWebp(); // Instantiate the object.
    
    // Call the convert method and pass the source and destination
    // you can also specify webp quality in the third params.
    $jw->convert( './png-test.png', './png-test.webp' );
    $jw->convert( './jpg-test.jpg', './jpg-test.webp', 95 );
```
