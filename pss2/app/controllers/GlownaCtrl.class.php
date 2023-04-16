<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class GlownaCtrl {
    
    public function action_Glowna() {
        App::getSmarty()->display("Glowna.tpl");
    }
}
