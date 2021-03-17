<?php

declare(strict_types=1);

namespace Flogar\Validator;

/**
 * Interface ErrorCodeProviderInterface.
 */
interface ErrorCodeProviderInterface
{
    /**
     * @return array
     */
    public function getAll(): ?array;

    /**
     * @param string $code
     *
     * @return string
     */
    public function getValue(?string $code): ?string;
}
