<?php

// Attach basic log for debugging unit tests
if (PHP_SAPI === 'cli' && Kohana::$environment === Kohana::TESTING) {
    Kohana::$log->attach(new Log_StdOut(), Log::DEBUG, Log::EMERGENCY);
}
