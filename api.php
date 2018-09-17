
                <?php
error_reporting(0);
if (isset($_REQUEST["input_hash"]) && !is_null($_REQUEST["input_hash"])) {
    $result = file_get_contents('http://www.nitrxgen.net/md5db/' . $_REQUEST["input_hash"]);
    if ($result == "") echo trim("No hash found!");
    else echo "$result";
}
?>     
