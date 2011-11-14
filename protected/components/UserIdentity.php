<?php

class UserIdentity extends CUserIdentity {
    
    private $_id;
    public function authenticate() {
        
        $record = User::model()->findByAttributes(array('username' => $this->username));
        $phpAss = new PHPAssHash(8, false);
        
        if ($record === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if (!$phpAss->CheckPassword($this->password, $record->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id = $record->id;
            $this->errorCode = self::ERROR_NONE;
        }
        
        return !$this->errorCode;
    }
 
    public function getId() {
        return $this->_id;
    }
}