# redcomand

asdas

        http://190.202.105.252/API_GOB/saime.php?cedula=19881315
        $cedula = 19881315;
        $json = json_decode(file_get_contents('http://190.202.105.252/API_GOB/saime.php?cedula='.$cedula.''));
        //Arr($json);
        Arr($json);
        echo $json[0]->intcedula;