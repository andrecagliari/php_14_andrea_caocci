<?php
require_once __DIR__ . '/SpallaDestra.php';

class MissiliGuidati extends SpallaDestra {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public function shoulder1() {
        echo "🚀 Missili guidati in lancio!\n";
    }
}
