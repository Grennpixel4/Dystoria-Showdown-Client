<?php

require_once 'replays.lib.php';

header('Content-Type: text/plain; charset=utf-8');

switch ($_GET['action'] ?? '') {
case 'recent':
	echo ']' . json_encode($Replays->recent());
	break;
case 'search':
	echo ']' . json_encode($Replays->search(
		$_GET['username'] ?? '',
		$_GET['format'] ?? '',
		(int)($_GET['page'] ?? 1),
		($_GET['sort'] ?? '') === 'rating'
	));
	break;
case 'searchprivate':
	echo ']' . json_encode(['actionerror' => "Private replays can only be opened from their link."]);
	break;
default:
	http_response_code(404);
}
