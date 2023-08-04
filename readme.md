# Simple discord message via webhook

## Installation

Via Composer

``` bash
$ composer require imjonos/discord-messages
```

## How to use
``` php
use Nos\DiscordMessages\DiscordMessage;
use Nos\DiscordMessages\DiscordSender;

$sender = new DiscordSender(WEBHOOK_URL);
$sender->send(new DiscordMessage('text'));
```
## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## License

license. Please see the [license file](license.md) for more information.
