<?php

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
    public function getXmlId()
    {
        $parts = [
            'RR',
            $this->getFecComunicacion()->format('Ymd'),
            $this->getCorrelativo(),
        ];

        return join('-', $parts);
    }
}
