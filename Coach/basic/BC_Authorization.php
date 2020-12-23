<?php
namespace CH\basic;

use app\models\user;

class BC_Authorization
{
    public static function isAuthorized():bool
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
            return false;
        }
        if(isset($_SESSION['user']['id'])){
            $user = $_SESSION['user']['id'];
            return (bool) $user;
        }
    }
    public static function getUser():user
    {
        if(!self::isAuthorized())
        {
            return null;
        }
        if(isset($_SESSION['user']['id']))
        {
            $user = $_SESSION['user']['id'];
            $user = user::byId($user);
            return $user;
        }
    }    
    /**
     * SignOut
     * if user was sign in and now not returns true. If user was not sign in returns false
     * @return bool
     */
    public static function SignOut():bool
    {
        if(self::isAuthorized())
        {
            $_SESSION['user']['id'] = null;
        }else{
            return false;
        }
    }    
    /**
     * SingIn
     * if user was sign in returns false (because user is already signet in and we dont need to do it again).
     * if user was NOT signet in returns try  sign in and returns true if all is ok and false if oparation failed
     * @param  mixed $userId
     * @return bool
     */
    public static function SingIn($userId):bool
    {
        if(!self::isAuthorized())
        {
            $_SESSION['user']['id'] = $userId;
            $user = $_SESSION['user']['id'];
            $user = user::byId($user);
            return $user;
        }else{
            return false;
        } 
    }
}

