<?php

declare(strict_types=1);

namespace Flogar\Model\Sale\FormaPagos;

use Flogar\Model\Sale\PaymentTerms;

class FormaPagoContado extends PaymentTerms
{
    /**
     * FormaPagoContado constructor.
     */
    public function __construct()
    {
        $this->tipo = 'Contado';
        $this->moneda = null;
        $this->monto = null;
    }
}