<?php

declare(strict_types=1);

namespace SmitBackend\MerkleAudit\Contracts;

/**
 * Interface HashChainInterface
 *
 * @package SmitBackend\MerkleAudit
 */
interface HashChainInterface
{
    public function execute(array $payload = []): mixed;
}
