<?php

declare(strict_types=1);

namespace Lsp\Server\Event;

use Lsp\Contracts\Rpc\Message\ResponseInterface;
use Lsp\Server\ConnectionInterface;

class ResponseSent extends MessageSent
{
    /**
     * @param ResponseInterface<mixed> $response
     */
    public function __construct(
        ResponseInterface $response,
        ConnectionInterface $connection,
    ) {
        parent::__construct($response, $connection);
    }
}
