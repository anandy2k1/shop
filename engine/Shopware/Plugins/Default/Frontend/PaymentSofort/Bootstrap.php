<?php
/**
 * Shopware 4.0
 * Copyright © 2013 shopware AG
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
 */

/**
 * @category  Shopware
 * @package   Shopware\Plugins\Frontend\PaymentSofort
 * @copyright Copyright (c) 2013, shopware AG (http://www.shopware.de)
 */
class Shopware_Plugins_Frontend_PaymentSofort_Bootstrap extends Shopware_Components_DummyPlugin_Bootstrap
{
    /**
     * @return array
     */
    public function getInfo()
    {
        return array(
            'version'   => $this->getVersion(),
            'autor'     => 'SOFORT AG',
            'copyright' => 'SOFORT AG, 2012',
            'label'     => 'SOFORT Gateway',
            'support'   => 'https://www.payment-network.com/sue_de/integration/list/88',
            'link'      => 'http://www.sofort.com',
        );
    }
}