<?php

class Varien_Image_Gd2Memoryleak extends Varien_Image_Adapter_Gd2
{

    public function __construct()
    {
        // Initialize shutdown function
        //register_shutdown_function(array($this, 'destruct'));
    }

    public function __destruct()
    {
        @imagedestroy($this->_imageHandler);
    }
}