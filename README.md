# Werkspot \ MessageBus \ MessageQueue \ WerkspotMessageQueue

[![Author](http://img.shields.io/badge/author-Werkspot-blue.svg?style=flat-square)](https://www.werkspot.com)
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)
[![Latest Version](https://img.shields.io/github/release/werkspot/message-bus-werkspot-message-queue-adapter.svg?style=flat-square)](https://github.com/werkspot/message-bus-werkspot-message-queue-adapter/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/werkspot/message-bus-werkspot-message-queue-adapter.svg?style=flat-square)](https://packagist.org/packages/werkspot/message-bus-werkspot-message-queue-adapter)

[![Build Status](https://img.shields.io/scrutinizer/build/g/werkspot/message-bus-werkspot-message-queue-adapter.svg?style=flat-square)](https://scrutinizer-ci.com/g/werkspot/message-bus-werkspot-message-queue-adapter/build)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/werkspot/message-bus-werkspot-message-queue-adapter.svg?style=flat-square)](https://scrutinizer-ci.com/g/werkspot/message-bus-werkspot-message-queue-adapter/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/werkspot/message-bus-werkspot-message-queue-adapter.svg?style=flat-square)](https://scrutinizer-ci.com/g/werkspot/message-bus-werkspot-message-queue-adapter)

This is an adapter around Werkspot\MessageQueue, so Werkspot\MessageBus can use it and still be decoupled.

## Usage 

The `MessageDispatcher` is the entry point to the message bus. There are already a few middlewares provided with
 this library, which you can find in `src/Bus/DeliveryChain`.

```php
    use Werkspot\MessageBus\MessageQueue\WerkspotMessageQueue\MessageQueueService;
    use Werkspot\MessageQueue\MessageQueueService as WerkspotMessageQueueService;

    $message = new AsynchronousMessage('payload', 'destination', ['metadata']);

    $messageQueueService = new MessageQueueService(new WerkspotMessageQueueService(/* ... */));

    $messageQueueService->enqueueMessage($message);
```

## Installation

To install the library, run the command below and you will get the latest version:

```
composer require werkspot/message-bus-werkspot-message-queue-adapter
```

## Tests

To execute the tests run:
```bash
make test
```

## Coverage

To generate the test coverage run:
```bash
make test_with_coverage
```

## Code standards

To fix the code standards run:
```bash
make cs-fix
```
