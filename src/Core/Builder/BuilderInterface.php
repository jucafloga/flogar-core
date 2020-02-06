<?php
/**
 * Created by NetBeansIDE.
 * User: Jucafloga
 */

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
    public function build(DocumentInterface $document);
}
