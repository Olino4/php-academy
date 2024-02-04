<?php
$date_time =  date('d/m/Y 21:i:s');
echo $date_time;

function fget_files()
{
    $fget = file_get_contents('date.log');
    print '<pre>';
    print $fget;
    print '</pre>';
}
fget_files();

if (date('h') < 20) {
    if (date('h') >= 8) {
        file_put_contents('date.log', $date_time . " | meskanie" . "\n", FILE_APPEND);
    } else {
        file_put_contents('date.log', $date_time . "\n", FILE_APPEND);
    }
} else {
    die ('Prisiel si neskoro');
};