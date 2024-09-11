<?php

include __DIR__.'/../../bootstrap.php';

// Disable output buffering
if (($ob_len = ob_get_length()) !== false) {
    // flush_end on an empty buffer causes headers to be sent. Only flush if needed.
    if ($ob_len > 0) {
        ob_end_flush();
    } else {
        ob_end_clean();
    }
}

//// Enable the unittest module if it is not already loaded - use the absolute path
//$modules       = Kohana::modules();
//$unittest_path = realpath(__DIR__).DIRECTORY_SEPARATOR;
//if (!in_array($unittest_path, $modules)) {
//    $modules['unittest'] = $unittest_path;
//    Kohana::modules($modules);
//}
