<?php

class Uqppa_FixSeparateCopyMethod_Model_Core_Resource_Email_Queue extends Mage_Core_Model_Resource_Email_Queue {

    /**
     * Save message recipients - Fix for separate emails copy method
     *
     * @param int $messageId
     * @param array $recipients
     *
     * @throws Exception
     *
     * @return Mage_Core_Model_Resource_Email_Queue
     */
    public function saveRecipients($messageId, array $recipients)
    {
        return parent::saveRecipients($messageId, array(end($recipients)));
    }

}