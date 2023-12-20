<?php
    class LoginChecker
    {
        private function isLoggedIn($entity)
        {
            if (!isset($_COOKIE[session_name()])) return false;
            if (session_id() == '') {
                session_start();
            }
            if (!isset($_SESSION[$entity])) return false;
            return $_SESSION[$entity];
        }
    
    
        public function checkUserIsLoggedInOrRedirect($entity, $redirect)
        {
            if (self::isLoggedIn($entity)) {
                return self::isLoggedIn($entity);
            };

            header("Location: $redirect");
            exit;
        }
    }