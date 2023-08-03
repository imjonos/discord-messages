<?php

namespace Nos\DiscordMessages;

use Nos\DiscordMessages\Exceptions\SendMessageException;
use Nos\DiscordMessages\Interfaces\MessageInterface;
use Nos\DiscordMessages\Interfaces\SenderInterface;

final readonly class DiscordSender implements SenderInterface
{

    public function __construct(private string $webHookUrl)
    {
    }

    /**
     * @throws SendMessageException
     */
    public function send(MessageInterface $message): void
    {
        if (!$this->webHookUrl) {
            throw new SendMessageException('Webhook url can\'t be empty!');
        }

        $ch = curl_init($this->webHookUrl);
        $payload = json_encode([
            'content' => $message->getContent()
        ]);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        if ($result) {
            $messages = json_decode($result);
            $message = '';
            if (isset($messages->content) && is_array($messages->content) && count($messages->content)) {
                $message = array_pop($messages->content);
            }
            throw new SendMessageException($message);
        }
    }
}
