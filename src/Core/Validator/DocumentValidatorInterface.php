<?php
/**
 * Created by NetBeansIDE.
 * User: Jucafloga
 */

namespace Flogar\Validator;

use Flogar\Model\DocumentInterface;

/**
 * Interface DocumentValidatorInterface.
 */
interface DocumentValidatorInterface
{
    /**
     * @param DocumentInterface $document
     *
     * @return mixed
     */
    public function validate(DocumentInterface $document);
}
