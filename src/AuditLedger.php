<?php

declare(strict_types=1);

namespace SmitBackend\MerkleAudit;

use SmitBackend\MerkleAudit\Contracts\HashChainInterface;

/**
 * Class AuditLedger
 *
 * @package SmitBackend\MerkleAudit
 */
class AuditLedger implements HashChainInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
