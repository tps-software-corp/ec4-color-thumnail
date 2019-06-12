<?php
namespace Plugin\ColorThumb\Entity;

use Eccube\Annotation\EntityExtension;
use Doctrine\ORM\Mapping as ORM;

/**
 * @EntityExtension("Eccube\Entity\ClassCategory")
 */
trait ClassCateogoryTrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="color_thumb_hex", type="string", nullable=true)
     */
    public $color_thumb_hex;

}