<?php
declare(strict_types=1);

namespace Flogar\Services;

use Flogar\Model\Response\BaseResult;

/**
 * Interface SenderInterface.
 */
interface SenderInterface
{
    /**
     * Send document.
     *
     * @param string $filename Filename
     * @param string $content  Content File
     *
     * @return BaseResult
     */
    public function send(?string $filename, ?string $content): ?BaseResult;
}
