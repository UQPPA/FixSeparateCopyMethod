<?php

class Uqppa_FixSeparateCopyMethod_Model_Core_Email_Template extends Mage_Core_Model_Email_Template {

    /**
     * @return Mage_Core_Model_Email_Queue
     */
    public function getQueue(){
        if ($this->hasQueue() && parent::getQueue() instanceof Mage_Core_Model_Email_Queue) {
            return parent::getQueue()->clearRecipients();
        }
        return Mage::getModel('core/email_queue');
    }
}