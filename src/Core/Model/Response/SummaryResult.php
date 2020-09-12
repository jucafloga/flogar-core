<?php
declare(strict_types=1);

namespace Flogar\Model\Response;

/**
 * Class SummaryResult.
 */
class SummaryResult extends BaseResult
{
    /**
     * @var string
     */
    protected $ticket;

    /**
     * @return string
     */
    public function getTicket(): ?string
    {
        return $this->ticket;
    }

    /**
     * @param string $ticket
     *
     * @return $this
     */
    public function setTicket(?string $ticket): self
    {
        $this->ticket = $ticket;

        return $this;
    }
}
