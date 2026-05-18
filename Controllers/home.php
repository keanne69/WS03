<?php

global $db;

$listings = $db->Query('SELECT * FROM listings ORDER BY created_at DESC LIMIT 6')->fetchAll();

loadView('home', ['listings' => $listings]);