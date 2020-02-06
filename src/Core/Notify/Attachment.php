<?php
/**
 * Created by NetBeansIDE.
 * User: Administrador
 */

namespace Flogar\Notify;

/**
 * Class Attachment.
 */
class Attachment
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $content;
    /**
     * @var string
     */
    private $type;

    /**
     * Get Filename.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set FileName.
     *
     * @param string $name
     *
     * @return Attachment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Raw Content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set raw content.
     *
     * @param string $content
     *
     * @return Attachment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get Content Type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Content Type.
     *
     * @param string $type
     *
     * @return Attachment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
