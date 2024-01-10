<?php
namespace App\Utils;
class Utilitaire{
    public static function cleaninput(?string $value):?string{
        return htmlspecialchars(strip_tags(trim($value)),ENT_NOQUOTES);
    }
}