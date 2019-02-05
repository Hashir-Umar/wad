<?php
    if(isset($_REQUEST["url"]) && $_REQUEST["url"] != "")
    {
        $output = "";
        $url = $_REQUEST["url"];
        $url = str_replace(" ","\n", $url);

        $res = "";
        $pattern = "/^(http:\/\/|https:\/\/)?([a-zA-Z]{2,3}\.)?([a-zA-Z0-9]+\.[a-zA-Z]{2,3})(\/.*)?$/m";
        preg_match_all($pattern, $url, $res, PREG_SET_ORDER, 0);
        
        $i = 1;
        foreach ($res as $key => $value) {
            $output .= "<tr>";
            $output .= "<td>".$i++."</td>";
            $output .= "<td>".$value[3]."</td>";
            $output .= "</tr>";
        }

        echo $output;
    }
    else {
        echo "";
    }
?>