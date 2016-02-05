<?php

class Uqppa_FixSeparateCopyMethod_Model_Observer {

    /**
     * Clear Mage_Core_Model_Email_Queue recipients after saving it
     *
     * @param Varien_Event_Observer $observer
     */
    public function clearCoreEmailQueueRecipientsAfterSave(Varien_Event_Observer $observer){
        $object = $observer->getObject();

        if ($object instanceof Mage_Core_Model_Email_Queue) {
            $object->clearRecipients();
        }
    }

}