<?php

global $db;

$listings = $db->Query('SELECT * FROM listings ORDER BY created_at DESC')->fetchAll();

loadView('listings/index', ['listings' => $listings]);
