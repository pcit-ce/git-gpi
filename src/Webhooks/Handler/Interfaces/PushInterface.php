<?php

declare(strict_types=1);

namespace PCIT\GPI\Webhooks\Handler\Interfaces;

interface PushInterface
{
    public function handle(string $webhooks_content): void;

    public function tag(array $content): void;
}
