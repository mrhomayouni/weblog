<?php

class utility
{
    /**
     * @param $name_part
     */
    public static function get_part($name_part)
    {
        require_once PATH_PART . $name_part . ".php";
    }
}