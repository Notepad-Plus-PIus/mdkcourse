<?php
class UserService
{
    public static function sortByUsername($users, $flag = true)
    {
        usort($users, function ($x, $y) use ($flag) {
            $result = $x->username <=> $y->username;
            return $flag ? $result : -$result;
        });

        return $users;
    }

    public static function sortByBirthday($users, $flag = true)
    {
        usort($users, function ($x, $y) use ($flag) {
            $result = $x->birthday <=> $y->birthday;
            return $flag ? $result : -$result;
        });

        return $users;
    }
}
?>