<?php

declare(strict_types=1);

use Tobias\Tea\Domain\Model\Tea;

return [
    Tea::class => [
        'properties' => [
            'ownerUid' => ['fieldName' => 'owner'],
        ],
    ],
];