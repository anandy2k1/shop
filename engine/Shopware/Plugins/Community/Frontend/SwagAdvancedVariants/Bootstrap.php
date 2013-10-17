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
 */

/**
 * Shopware Plugin SwagAdvancedVariants - Bootstrap
 *
 * @category Shopware
 * @package Shopware\Plugin\SwagAdvancedVariants
 * @copyright Copyright (c) 2012, shopware AG (http://www.shopware.de)
 */
class Shopware_Plugins_Frontend_SwagAdvancedVariants_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{

    public $variantInstock = array();

    /**
     * Returns the meta information about the plugin
     * as an array.
     * Keep in mind that the plugin description located
     * in the info.txt.
     *
     * @public
     * @return array
     */
    public function getInfo()
    {
        return array(
            'version'     => $this->getVersion(),
            'label'       => $this->getLabel(),
            'link'        => 'http://www.shopware.de',
            'description' => file_get_contents($this->Path() . 'info.txt')
        );
    }

	/**
	 * Standard Install-method
	 *
	 * @access public
	 * @return bool {boolean} true
	 */
	public function install()
	{
		$this->subscribeEvent('Enlight_Controller_Action_PostDispatch_Frontend_Detail', 'onPostDispatchDetail');

		$form = $this->Form();
		$form->setElement('checkbox', 'checkInstock', array('label' => 'Lagerbestand beachten', 'value' => '1', 'scope' => \Shopware\Models\Config\Element::SCOPE_SHOP));
		$form->setElement('text', 'hoverColor', array('label' => 'Hover-Farbe', 'value' => '#FA992A', 'scope' => \Shopware\Models\Config\Element::SCOPE_SHOP));
		$form->setElement('text', 'activeColor', array('label' => 'Aktiv-Farbe', 'value' => '#DD4800', 'scope' => \Shopware\Models\Config\Element::SCOPE_SHOP));

        $this->createMyTranslations();
        
		return true;
	}

	/**
	 * Standard Update-method
	 *
	 * @access public
	 * @return bool {boolean} true
	 */
    public function update(){
        return true;
    }

    /**
     * Function to create the translations
     */
    public function createMyTranslations()
    {
        $form = $this->Form();
        $translations = array(
            'en_GB' => array(
                'checkInstock' => 'Check stock',
                'hoverColor' => 'Hover color',
                'activeColor' => 'Active color'
            )
        );

        $shopRepository = Shopware()->Models()->getRepository('\Shopware\Models\Shop\Locale');
        foreach($translations as $locale => $snippets) {
            $localeModel = $shopRepository->findOneBy(array(
                'locale' => $locale
            ));
            foreach($snippets as $element => $snippet) {
                if($localeModel === null){
                    continue;
                }
                $elementModel = $form->getElement($element);
                if($elementModel === null) {
                    continue;
                }
                $translationModel = new \Shopware\Models\Config\ElementTranslation();
                $translationModel->setLabel($snippet);
                $translationModel->setLocale($localeModel);
                $elementModel->addTranslation($translationModel);
            }
        }
    }

    /**
     * Returns the plugin-label
     * @return array
     */
    public function getLabel()
    {
        return 'Erweiterter Variantenwechsel';
    }

    /**
     * Returns the version of plugin as string.
     *
     * @return string
     */
    public function getVersion()
    {
        return '1.1.6';
    }

    /**
     * Will be executed every time in the frontend-detail module
     *
     * Prepares every necessary template-variables
     * for the advanced variant-choose
     *
     * @access public
     * @param \Enlight_Event_EventArgs $args
     * @throws Exception
     * @return void
     * @internal param $Enlight_Event_EventArgs
     */
	public function onPostDispatchDetail(Enlight_Event_EventArgs $args)
	{
		$view = $args->getSubject()->View();
		$config = $this->Config();

		$articleConfigurator = $view->sArticle['sConfigurator'];
        //The plugin only works with article-configurators
        if(empty($articleConfigurator)){
            return;
        }

        //The plugin only works with those templates
        if(!$view->sArticle['template'] || ($view->sArticle['template'] != "swag_advancedconfig.tpl" && $view->sArticle['template'] != "swag_advancedconfig_emotion.tpl")){
            return;
        }

        //The plugin only works with 2 configurator-groups
        if(count($articleConfigurator) > 2){
            throw new Exception("This plugin only works with one or two configurator-groups. Change the article-template or set two configurator-groups for this article.");
        }

        foreach($articleConfigurator as $key=>&$configuratorGroup) {
            foreach($configuratorGroup['values'] as &$configuratorOption) {

                if($configuratorOption["user_selected"] == 1){
                    $articleConfigurator[$key]["selected_value"] = $configuratorOption["optionID"];
                }
                $configuratorOption['image'] = $this->getArticleVariantImage($configuratorOption, $view->sArticle["articleID"]);

                if($key==0){
                    $configuratorOption["instock"] = $this->getArticleVariantInstock($configuratorOption, $view->sArticle["articleID"], count($articleConfigurator));
                }else{
                    $configuratorOption["instock"] = $this->variantInstock[$articleConfigurator[0]["selected_value"]][$configuratorOption["optionID"]];
                }
            }
        }

        $view->configGroups = $articleConfigurator;

        $view->addTemplateDir(dirname(__FILE__) . '/Views/');
        $templateVersion = Shopware()->Shop()->getTemplate()->getVersion();
        if($templateVersion == 2){
            $view->extendTemplate = "../_emotion/frontend/detail/index.tpl";
        }
        else{
            $view->extendTemplate = "../_default/frontend/detail/index.tpl";
        }
        $view->assign('swagVariant', array(
          'hoverColor' => $config->hoverColor,
          'activeColor' => $config->activeColor,
          'checkInstock' => $config->checkInstock
        ));

    }

    /**
     * Helper function to get the image for the variants
     * @param $configuratorOption
     * @param $articleID
     * @return mixed
     */
    private function getArticleVariantImage($configuratorOption, $articleID){

        $mediaRepository = Shopware()->Models()->getRepository('\Shopware\Models\Media\Media');
        $sql= "SELECT image.*, media.*, settings.*
                        FROM s_article_img_mapping_rules rule
                            INNER JOIN s_article_img_mappings mapping
                                ON (mapping.id = rule.mapping_id)
                            INNER JOIN s_articles_img image
                                ON (image.id = mapping.image_id)
                        INNER JOIN s_media media
                            ON media.id = image.media_id
                        INNER JOIN s_media_album_settings settings
                            ON settings.albumID = media.albumID
                        WHERE option_id = ? AND articleID = ?
                        ORDER BY image.main ASC, image.position ASC
                        LIMIT 0, 1";

        $image = Shopware()->Db()->fetchRow($sql, array($configuratorOption['optionID'], $articleID));
        $url = $image['path'];
        if($image['media_id'] !== null) {
            $media = $mediaRepository->find($image['media_id']);
            $sizes = $media->getAlbum()->getSettings()->getThumbnailSize();
            if($media !== null) {
                $url = $media->getThumbnails();
                $url = $url[$sizes[1]];
            }
        }
        return $url;
    }

    /**
     * Helper function to get a true/false value for the instock for the first group
     * and an instock-value for each option of the second group
     * @param $configuratorOption
     * @param $articleID
     * @return int
     */
    private function getArticleVariantInstock($configuratorOption, $articleID, $count)
    {
        $builder = Shopware()->Models()->createQueryBuilder();
        $builder->select(array('detail', 'notSelected'))
                ->from('Shopware\Models\Article\Detail', 'detail')
                ->innerJoin('detail.configuratorOptions', 'selectedOption')
                ->innerJoin('detail.configuratorOptions', 'notSelected')
                ->where('selectedOption.id = :optionId')
                ->andWhere('detail.inStock > 0')
                ->andWhere('detail.articleId = :articleId');

        //This won't work with only one group.
        if($count == 2){
            $builder->andWhere('notSelected.id != :optionId');
        }

        $builder->setParameters(array('optionId' => $configuratorOption["optionID"]))
                ->setParameters(array('articleId' => $articleID));

        $variants = $builder->getQuery()->getArrayResult();

        //Save the instock value of the configurator-option-combination of both configurator-groups
        foreach($variants as $variant ){
            $this->variantInstock[$configuratorOption["optionID"]][$variant["configuratorOptions"][0]["id"]] = $variant["inStock"];
        }
        //if at least one variant has an instock
        if(count($variants) > 0){
            return 1;
        }

        return 0;
    }
}