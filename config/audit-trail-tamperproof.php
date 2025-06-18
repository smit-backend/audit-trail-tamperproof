<?php

return [
    'enabled' => env('AUDIT_TRAIL_TAMPERPROOF_ENABLED', true),
    'timeout' => env('AUDIT_TRAIL_TAMPERPROOF_TIMEOUT', 30),
    'log_channel' => env('AUDIT_TRAIL_TAMPERPROOF_LOG', 'stack'),
];
