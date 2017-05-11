<?php

if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$fuzzy = ["meow", "feed the kitty", "love the kitty"];
echo json_encode($fuzzy);
