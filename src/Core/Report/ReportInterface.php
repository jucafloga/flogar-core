<?php
/**
 * Created by NetBeansIDE.
 * User: Jucafloga
 */

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
     * @return mixed
     */
    public function render(DocumentInterface $document, $parameters = []);
}
