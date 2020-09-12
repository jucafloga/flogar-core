<?php
declare(strict_types=1);

namespace Flogar\Report;

use Flogar\Model\DocumentInterface;

/**
 * Interface ReportInterface.
 */
interface ReportInterface
{
    /**
     * @param DocumentInterface $document
     * @param array             $parameters
     *
     * @return string
     */
    public function render(DocumentInterface $document, array $parameters = []): ?string;
}
