<?php

namespace Nos\DiscordMessages;

use Nos\DiscordMessages\Interfaces\MessageInterface;

final readonly class DiscordMessage implements MessageInterface
{
    public function __construct(private string $message)
    {
    }

    public function getContent(): string
    {
        return $this->message;
    }
}
