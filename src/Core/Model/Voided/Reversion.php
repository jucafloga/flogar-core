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
        $fecComunicacionPe = $this->getDateWithTimezone($this->fecComunicacion);
        $parts = [
            'RR',
            $fecComunicacionPe->format('Ymd'),
            $this->correlativo,
        ];

        return join('-', $parts);
    }
}
