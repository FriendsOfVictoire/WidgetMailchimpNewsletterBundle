<?php

namespace Victoire\Widget\MailchimpNewsletterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetMailchimpNewsletter.
 *
 * @ORM\Table("vic_widget_mailchimpnewsletter")
 * @ORM\Entity
 */
class WidgetMailchimpNewsletter extends Widget
{
    /**
     * @var string
     *
     * @ORM\Column(name="listId", type="string", length=55)
     */
    protected $listId;

    /**
     * @var string
     *
     * @ORM\Column(name="buttonLabel", type="string", length=55)
     */
    protected $buttonLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255)
     */
    protected $icon;

    /**
     * @var bool
     *
     * @ORM\Column(name="enableFirstName", type="boolean")
     */
    protected $enableFirstName;

    /**
     * @var bool
     *
     * @ORM\Column(name="enableLastName", type="boolean")
     */
    protected $enableLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="congratulationMessage", type="string", length=255)
     */
    protected $congratulationMessage;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent.
     *
     * @return string
     */
    public function __toString()
    {
        return 'MailchimpNewsletter #'.$this->id;
    }

    /**
     * Set listId.
     *
     * @param string $listId
     */
    public function setListid($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId.
     *
     * @return string
     */
    public function getListid()
    {
        return $this->listId;
    }

    /**
     * Set buttonLabel.
     *
     * @param string $buttonLabel
     */
    public function setButtonlabel($buttonLabel)
    {
        $this->buttonLabel = $buttonLabel;

        return $this;
    }

    /**
     * Get buttonLabel.
     *
     * @return string
     */
    public function getButtonlabel()
    {
        return $this->buttonLabel;
    }

    /**
     * Set icon.
     *
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set enableFirstName.
     *
     * @param string $enableFirstName
     */
    public function setEnablefirstname($enableFirstName)
    {
        $this->enableFirstName = $enableFirstName;

        return $this;
    }

    /**
     * Get enableFirstName.
     *
     * @return string
     */
    public function getEnablefirstname()
    {
        return $this->enableFirstName;
    }

    /**
     * Set enableLastName.
     *
     * @param string $enableLastName
     */
    public function setEnablelastname($enableLastName)
    {
        $this->enableLastName = $enableLastName;

        return $this;
    }

    /**
     * Get enableLastName.
     *
     * @return string
     */
    public function getEnablelastname()
    {
        return $this->enableLastName;
    }

    /**
     * Set congratulationMessage.
     *
     * @param string $congratulationMessage
     */
    public function setCongratulationmessage($congratulationMessage)
    {
        $this->congratulationMessage = $congratulationMessage;

        return $this;
    }

    /**
     * Get congratulationMessage.
     *
     * @return string
     */
    public function getCongratulationmessage()
    {
        return $this->congratulationMessage;
    }
}
