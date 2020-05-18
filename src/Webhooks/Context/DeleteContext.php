<?php

declare(strict_types=1);

namespace PCIT\GPI\Webhooks\Context;

use PCIT\GPI\Webhooks\Context;
use PCIT\GPI\Webhooks\Parser\UserBasicInfo\Account;

/**
 * @property int     $installation_id
 * @property int     $rid
 * @property string  $repo_full_name
 * @property Account $account
 * @property string  $ref_type
 * @property string  $ref
 */
class DeleteContext extends Context
{
}
