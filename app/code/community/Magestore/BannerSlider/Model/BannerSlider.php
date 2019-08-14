<?php

class Magestore_BannerSlider_Model_BannerSlider extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('bannerslider/bannerslider');
    }
}