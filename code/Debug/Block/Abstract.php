<?php
class Magneto_Debug_Block_Abstract extends Mage_Core_Block_Template
{
    public function getDefaultStoreId(){
        return Mage::app()
            ->getWebsite()
            ->getDefaultGroup()
            ->getDefaultStoreId();
    }

    public function _getViewVars() {
        return $this->_viewVars;
    }

    public function getShowTemplateHints()
    {
        return false;
    }
}
