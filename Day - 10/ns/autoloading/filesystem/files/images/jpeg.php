<?php
namespace CloudStorage\FileSystem\Files\Images;

class Jpeg implements \CloudStorage\FileSystem\Files\Contracts\ImageContract
{
    public function getDimension()
    {
        return "100x100\n";
    }
}