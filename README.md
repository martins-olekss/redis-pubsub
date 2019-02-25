# Redis Pub/Sub
Minimal sample for Redis Pub/Sub functionality using Predis - PHP Redis client

## Instructions
### Setup
1. Install dependencies using `composer install`
2. Install `redis-server`
3. [optional] Install `redis-tools`, to get `redis-cli`
4. Start Redis server with default parameters ( no password, port `6379`)
5. [optional] Can run `redis-cli` and execute `monitor` command to see what's happening

### Usage
1. Run `php sub.php` to subscribe to "main-channel" channel and see messages sent to this channel
2. Run `php pub.php` to send hardcoded message
3. Run `php unsub.php` to unsubscribe from channel ( will close also sub.php process)

## Source
Instructions were taken from http://squizzle.me/php/predis/doc/#pub