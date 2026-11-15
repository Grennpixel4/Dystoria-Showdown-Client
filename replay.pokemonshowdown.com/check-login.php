<?php

/**
 * Literally only used for the Replays webapp to know which username's
 * private replays you're allowed to view.
 *
 * TODO: Move to loginserver.
 *
 * @author Guangcong Luo <guangcongluo@gmail.com>
 * @license MIT
 */

if (!file_exists(__DIR__ . '/../lib/ntbb-session.lib.php')) die('],');

require '../lib/ntbb-session.lib.php';

echo ']' . ($curuser['loggedin'] ? $curuser['userid'] : '') . ',';

echo $users->isSysop() ? '1' : '';
