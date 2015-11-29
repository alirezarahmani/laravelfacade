<?php
namespace App\MyFacade;

class IsPdf
{
    private $pdf = "\x25\x50\x44\x46\x2D";

    public function check($file)
    {
        return (file_get_contents($file, false, null, 0, strlen($this->pdf)) === $this->pdf) ? true : false;
    }
}
