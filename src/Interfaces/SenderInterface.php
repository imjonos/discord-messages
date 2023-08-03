<?php

namespace Nos\DiscordMessages\Interfaces;

use Nos\DiscordMessages\Exceptions\SendMessageException;

interface SenderInterface
{
    /**
     * @throws SendMessageException
     */
    public function send(MessageInterface $message): void;
}
