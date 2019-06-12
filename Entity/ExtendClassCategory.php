<?php
namespace Plugin\ColorThumb\Entity;

use Eccube\Entity\Category;
use Eccube\Entity\ClassCategory;
use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity(repositoryClass="Plugin\ColorThumb\Repository\ExtendExtendClassCategoryRepository")
 */
class ExtendClassCategory extends ClassCategory
{
    /**
     * @var string
     *
     * @ORM\Column(name="color_thumb_hex", type="string", nullable=true)
     */
    public $color_thumb_hex;

    public function setColorThumbHex($color_thumb_hex)
    {
        $this->color_thumb_hex = $color_thumb_hex;
        return $this;
    }
}