<?php

require_once __DIR__. DIRECTORY_SEPARATOR. "../interfaces/interface.php";

class jsonExport implements can_export{

    public function export()
    {
        echo 'The format is: json';
    }
}

