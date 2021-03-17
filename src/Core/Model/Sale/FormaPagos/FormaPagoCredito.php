<?php

declare(strict_types=1);

namespace Flogar\Model\Sale\FormaPagos;

use Flogar\Model\Sale\PaymentTerms;

class FormaPagoCredito extends PaymentTerms
{
    /**
     * FormaPagoCredito constructor.
     * @param float|null $monto
     * @param string|null $moneda
     */
    public function __construct(?float $monto = null, ?string $moneda = null)
    {
        $this->tipo = 'Credito';
        $this->monto = $monto;
        $this->moneda = $moneda;
    }
}