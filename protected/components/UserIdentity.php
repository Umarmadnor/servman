<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        /*$users=array(
            // username => password
            'demo'=>'demo',
            'admin'=>'admin',
        );*/


        $Users = Users::model()->find('username=:username', array(':username' => $this->username));
        if (!isset($Users))
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($Users->password !== $this->password)//without hash
       /* else if ($Users->password !== hash('sha256', $this->password))*/
            $this->errorCode = self::ERROR_PASSWORD_INVALID;


        else {

            $this->errorCode = self::ERROR_NONE;

            $this->setState('user_id', $Users->id);
            $this->setState('user_login', $Users->username);

            $LoginLog = new LoginLog();
            $LoginLog->userid=$Users->id;
            $LoginLog->save(false);
        }

        return !$this->errorCode;
    }
}