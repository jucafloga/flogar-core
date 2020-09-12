<?php
declare(strict_types=1);

namespace Flogar\Model\Voided;

/**
 * Class Reversion.
 */
class Reversion extends Voided
{
    /**
     * Get Id Xml.
     *
     * @return string
     */
    public function getXmlId(): string
    {
        $parts = [
            'RR',
            $this->getFecComunicacion()->format('Ymd'),
            $this->getCorrelativo(),
        ];

        return join('-', $parts);
    }
}
