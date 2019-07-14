<?php
namespace CloudStorage;

use CloudStorage\Mail\Mailer;
use CloudStorage\FileSystem\Scanner;
use CloudStorage\FileSystem\Files\Images\Jpeg;

include "autoloader.php";
class Main
{
    public function __construct()
    {
        $mailer = new Mailer();
        $mailer->sendMail();

        $scanner = new Scanner();
        $scanner->scan();

        $jpeg = new Jpeg();
        echo $jpeg->getDimension();
    }
}
new Main();
