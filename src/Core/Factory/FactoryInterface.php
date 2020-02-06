<?php
/**
 * Created by NetBeansIDE.
 * User: Jucafloga
 */

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
    public function send(DocumentInterface $document);
}
