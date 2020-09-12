<?php
declare(strict_types=1);

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
     * @return object
     */
    public function validate(DocumentInterface $document): ?object;
}
