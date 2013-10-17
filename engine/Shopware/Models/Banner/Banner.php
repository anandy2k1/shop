<?php
/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Shopware_Models
 * @subpackage Banner
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     Jens Schwehn
 * @author     $Author$
 */

namespace   Shopware\Models\Banner;
use         Shopware\Components\Model\ModelEntity,
            Doctrine\ORM\Mapping AS ORM;

/**
 * Banner Model
 * <br>
 * This Model represented a banner which can be displayed on top of a given category.
 * A banner can be shown based on a given time window. To set this window you have to
 * set the following fields
 * - validFrom as datetime
 * - validTo   as datetime
 *
 * Each banner may link to an other website or to an internal page. If the link starts
 * with http:// or https:// it will be assumed that the link is an external one otherwise
 * an internal link will be generated.
 *
 * Relations and Associations
 * <code>
 * - Category    =>  Shopware\Models\Category\Category     [1:n] [s_categories]
 * </code>
 *
 * Indices for s_emarketing_banners:
 * <code>
 *   - PRIMARY KEY (`id`)
 * </code>
 *
 * @ORM\Table(name="s_emarketing_banners")
 * @ORM\Entity(repositoryClass="Repository")
 * @ORM\HasLifecycleCallbacks
 */
class Banner extends ModelEntity
{
    /**
     * Primary Key - autoincrement value
     *
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Description for that banner. This description will be used as alt and title attribute
     *
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=60, nullable=false)
     */
    private $description;

    /**
     * Defines the date and time when this banner should be displayed
     *
     * @var \DateTime $validFrom
     *
     * @ORM\Column(name="valid_from", type="datetime", nullable=false)
     */
    private $validFrom;

    /**
     * Defines the date and time when this banner should not more displayed
     *
     * @var \DateTime $validTo
     *
     * @ORM\Column(name="valid_to", type="datetime", nullable=false)
     */
    private $validTo;

    /**
     * Relative path to the real banner image.
     *
     * @var string $image
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=false)
     */
    private $image;

    /**
     * An optional link which will be fired when the banner is been clicked.
     *
     * @var string $link
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * Determines if the click at the banner should be opened in a new browser
     * window or if the current window is used.
     *
     * @var string $linkTarget
     *
     * @ORM\Column(name="link_target", type="string", length=255, nullable=false)
     */
    private $linkTarget;

    /**
     * The id of the category for which this banner is for.
     *
     * @var integer $categoryId
     *
     * @ORM\Column(name="categoryID", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * The extension of the banner image file will be stored here
     *
     * @var string $extension
     *
     * @ORM\Column(name="extension", type="string", length=25, nullable=false)
     */
    private $extension;

    /**
     * The id which links the banner to a live shopping event.
     *
     * @var integer $liveShoppingId
     * @deprecated
     * @ORM\Column(name="liveshoppingID", type="integer", nullable=false)
     */
    private $liveShoppingId;

    /**
     * INVERSE SIDE
     * @ORM\OneToOne(targetEntity="Shopware\Models\Attribute\Banner", mappedBy="banner", cascade={"persist", "update"})
     * @var \Shopware\Models\Attribute\Banner
     */
    protected $attribute;

    /**
     * Returns the numeric id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Allows to set a new description for the banner.
     *
     * Max: 60 chars
     * This filed must not be left empty
     *
     * @param string $description
     * @return Banner
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Returns the description of the banner.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the date and time on which this banner should be displayed
     *
     * This field may be null or empty
     *
     * @param \DateTime $validFrom
     * @return Banner
     */
    public function setValidFrom($validFrom)
    {
        if (empty($validFrom)) {
            $validFrom = null;
        };
        // if the date isn't null try to transform it to a DateTime Object.
        if (!$validFrom instanceof \DateTime && !is_null($validFrom)) {
            $validFrom = new \DateTime($validFrom);
        }

        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * Returns a datetime object containing the date this banner should displayed.
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets the date and time this banner should stopped to been displayed
     *
     * @param \DateTime $validTo
     * @return Banner
     */
    public function setValidTo($validTo)
    {
        if (empty($validTo)) {
            $validTo = null;
        }
        // if the date isn't null try to transform it to a DateTime Object.
        if (!$validTo instanceof \DateTime && !is_null($validTo)) {
            $validTo = new \DateTime($validTo);
        }
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * Returns a dateTime object with the datetime on which this banner should no more displayed
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Sets the path and file name of the banner image.
     * The file extension will be set also.
     *
     * Max chars: 100 char
     * This field must be filled
     *
     * @param string $image
     * @return Banner
     */
    public function setImage($image)
    {
        if (!empty($image)) {
            $fileInfo = pathinfo($image);
            $this->extension = $fileInfo['extension'];
            $this->image = $image;
        } else {
            $this->extension = '';
            $this->image = $image;
        }
        return $this;
    }

    /**
     * Returns the relative path and file name to the banner image file
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the optional link which is bind to the banner.
     *
     * Max chars: 255
     * This field can be null
     *
     * @param string $link
     * @return Banner
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Returns the link which will be triggered if the banner is clicked
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the HTML target parameter.
     *
     * There are just only two valid options
     * - _blank
     * -_new
     *
     * @param string $linkTarget
     * @return Banner
     */
    public function setLinkTarget($linkTarget)
    {
        $this->linkTarget = $linkTarget;
        return $this;
    }

    /**
     * Returns the HTML target parameter
     *
     * @return string
     */
    public function getLinkTarget()
    {
        return $this->linkTarget;
    }

    /**
     * Set the category id on which this banner should be displayed
     *
     * @param integer $categoryId
     * @return Banner
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * Returns the ID on which this banner should be displayed.
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets the extension of the banner image file
     *
     * Max chars: 25
     * This Field is optional
     *
     * @param string $extension
     * @return Banner
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Returns the extension of the banner image.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the live shopping ID
     *
     * @param integer $liveShoppingId
     * @return Banner
     */
    public function setLiveShoppingId($liveShoppingId)
    {
        $this->liveShoppingId = (int) $liveShoppingId;
        return $this;
    }

    /**
     * Returns the live shopping ID
     *
     * @return integer
     */
    public function getLiveShoppingId()
    {
        return $this->liveShoppingId;
    }

    /**
     * @return \Shopware\Models\Attribute\Banner
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param \Shopware\Models\Attribute\Banner|array|null $attribute
     * @return \Shopware\Models\Attribute\Banner
     */
    public function setAttribute($attribute)
    {
        return $this->setOneToOne($attribute, '\Shopware\Models\Attribute\Banner', 'attribute', 'banner');
    }

}