<?php
declare(strict_types=1);

namespace Flogar\Builder;

use Flogar\Model\DocumentInterface;

/**
 * Interface BuilderInterface.
 */
interface BuilderInterface
{
    /**
     * Create file for document.
     *
     * @param DocumentInterface $document
     *
     * @return string Content File
     */
    public function build(DocumentInterface $document): ?string;
}
