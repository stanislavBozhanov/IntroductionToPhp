<?php
if ( stripos($path, './') !== false || stripos($path, '../') !== false) {
    echo 'error';
    exit;
}
