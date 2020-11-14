<?php

declare(strict_types=1);

namespace PCIT\GPI\Webhooks\Context\Components\PullRequest;

use PCIT\GPI\Webhooks\Context\Components\Repository;
use PCIT\GPI\Webhooks\Context\Components\User\User;

/**
 * @property string $label
 */
class Base
{
    public Repository $repo;
    public User $user;
}
