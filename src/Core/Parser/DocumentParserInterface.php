<?php

declare(strict_types=1);

namespace Flogar\Parser;

use Flogar\Model\DocumentInterface;

/**
 * Interface DocumentParserInterface.
 */
interface DocumentParserInterface
{
    /**
     * @param mixed $value
     *
     * @return DocumentInterface
     */
    public function parse($value): ?DocumentInterface;
}
