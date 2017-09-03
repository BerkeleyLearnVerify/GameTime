<?php

/* Provides information about the versions of GameTime. */

if (isset($_REQUEST["latest"]))
{
    /* Provide information about the latest available version of GameTime.
     * Code inspired by
     * http://eosrei.net/articles/2011/12/basic-json-requestresponse-php. */
    $response["version"] = "1.0";
    $response["info_url"] = "http://verifun.eecs.berkeley.edu/" .
                            "gametime/getting-started/#download";
    $encoded = json_encode($response);
    header("Content-type: application/json");
    exit($encoded);
}

?>
