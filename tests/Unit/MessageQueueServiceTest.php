<?php

declare(strict_types=1);

namespace Werkspot\MessageBus\MessageQueue\WerkspotMessageQueue\Test\Unit;

use Mockery;
use PHPUnit\Framework\TestCase;
use Werkspot\MessageBus\Message\AsynchronousMessage;
use Werkspot\MessageBus\MessageQueue\WerkspotMessageQueue\MessageQueueService;
use Werkspot\MessageQueue\MessageQueueServiceInterface as WerkspotMessageQueueServiceInterface;

final class MessageQueueServiceTest extends TestCase
{
    /**
     * @test
     */
    public function enqueueMessage(): void
    {
        $message = new AsynchronousMessage('payload', 'destination', ['metadata']);
        $werkspotMessageQueueService = Mockery::mock(WerkspotMessageQueueServiceInterface::class);
        $werkspotMessageQueueService
            ->shouldReceive('enqueueMessage')
            ->once()
            ->with(
                $message->getPayload(),
                $message->getDestination(),
                $message->getDeliverAt(),
                $message->getPriority()->toInt(),
                $message->getMetadata()
            );

        $messageQueueService = new MessageQueueService($werkspotMessageQueueService);
        $messageQueueService->enqueueMessage($message);
    }
}
