<?php

declare(strict_types=1);

namespace AzaSystems;

use Exception;

use function AzaSystems\Jobs\DeadLetter\runDeadLetter;
use function AzaSystems\Jobs\Sender\runSender;
use function AzaSystems\Jobs\Validator\runValidator;
use function AzaSystems\Tests\runTester;
use function AzaSystems\UI\help;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/azasystems/email_sender_service_library/src/UI/index.php';
require_once __DIR__ . '/vendor/azasystems/email_sender_service_library/src/tests/index.php';
require_once __DIR__ . '/vendor/azasystems/email_sender_service_library/src/app/Jobs/validator.php';
require_once __DIR__ . '/vendor/azasystems/email_sender_service_library/src/app/Jobs/sender.php';
require_once __DIR__ . '/vendor/azasystems/email_sender_service_library/src/app/Jobs/deadletter.php';

help();
runTester();
try {
    runValidator();
} catch (Exception $e) {
    echo 'runValidator error: ' . $e->getMessage();
}
try {
    runSender();
} catch (Exception $e) {
    echo 'runSender error: ' . $e->getMessage();
}
runDeadletter();
