<?php

require_once __DIR__. DIRECTORY_SEPARATOR. "../interfaces/interface.php";

class xmlExport implements can_export{

    public function export()
    {
        echo 'The format is: xml';
    }
}

