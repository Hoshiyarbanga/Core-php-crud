<?php

function getTitle() {
    return 'Dashboard';
}

function getContent() {
    return '
        <h2>Welcome to the Home Page</h2>
        <p>This is the content of the home page.</p>
    ';
}

include './layout.php';
?>