<?php
/**
 * @Author: Hesti Yunita Sari
 * @Date:   2020-11-12 19:23:09
 * @Last Modified by:   Hesti Yunita Sari
 * @Last Modified time: 2020-11-13 10:33:35
 */

class PaketId_Booking_Block_Adminhtml_Sales_Order_View_Info_Booking extends Mage_Core_Block_Template {
    
    protected $order;
    
    public function getOrder() {
        if (is_null($this->order)) {
            if (Mage::registry('current_order')) {
                $order = Mage::registry('current_order');
            }
            elseif (Mage::registry('order')) {
                $order = Mage::registry('order');
            }
            else {
                $order = new Varien_Object();
            }
            $this->order = $order;
        }
        return $this->order;
    }
}