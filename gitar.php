<?php

require_once 'musikpetik.php';

class Gitar implements MusikPetik {
    public function petik()
    {
        echo '<br> Suara Gitar Jreng... Jren... Jret...';
    }
}

?>