# Simple discord message via webhook

## Installation

Via Composer

``` bash
$ composer require imjonos/discord-messages
```

## How to use

use Nos\DiscordMessages\DiscordMessage; <br>
use Nos\DiscordMessages\DiscordSender; <br>
<br>
$sender = new DiscordSender(WEBHOOK_URL);<br>
$sender->send(new DiscordMessage('text'));<br>

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## License

license. Please see the [license file](license.md) for more information.
