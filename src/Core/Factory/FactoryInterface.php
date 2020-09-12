<?php
declare(strict_types=1);

namespace Flogar\Factory;

use Flogar\Model\DocumentInterface;
use Flogar\Model\Response\BaseResult;

/**
 * Interface FactoryInterface.
 */
interface FactoryInterface
{
    /**
     * @param DocumentInterface $document
     *
     * @return BaseResult
     */
    public function send(DocumentInterface $document): ?BaseResult;
}
