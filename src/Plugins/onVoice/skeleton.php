<?php

namespace Sovereign\Plugins\onVoice;

use Discord\Discord;
use Discord\Parts\Channel\Channel;
use Discord\Parts\Channel\Message;
use Discord\Voice\VoiceClient;
use Discord\WebSockets\WebSocket;
use Monolog\Logger;
use Sovereign\Lib\cURL;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;
use YoutubeDl\YoutubeDl;

class skeleton
{
    public function run(Message $message, Discord $discord, WebSocket $webSocket, Logger $log, &$audioStreams, Channel $channel, cURL $curl)
    {
    }
}
