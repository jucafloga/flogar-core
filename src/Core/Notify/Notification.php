<?php
/**
 * Created by NetBeansIDE.
 * User: Administrador
 */

namespace Flogar\Notify;

use Flogar\Model\DocumentInterface;

/**
 * Class Notification.
 */
class Notification
{
    /**
     * @var Attachment[]
     */
    private $files;

    /**
     * @var DocumentInterface
     */
    private $document;

    /**
     * @return Attachment[]
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Set Attachment Files.
     *
     * @param Attachment[] $files
     *
     * @return Notification
     */
    public function setFiles(array $files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * @return DocumentInterface
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param DocumentInterface $document
     *
     * @return Notification
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }
}
