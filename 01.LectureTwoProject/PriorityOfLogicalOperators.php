<?php

// This will print OK

if( true || true && false) {
    echo 'OK';
}
else {
    echo 'Not OK';
}

// This will print NOT OK

if(true || true AND false) {
    echo 'OK';
}
else {
    echo 'not OK';
}
