<?php

require_once 'OntoWiki/Component/Helper.php';
require_once 'OntoWiki/Menu/Registry.php';
require_once 'OntoWiki/Menu.php';
/**
 * @category   OntoWiki
 * @package    OntoWiki_extensions_components_files
 */
class TranslateHelper extends OntoWiki_Component_Helper
{
    public function __construct()
    {
        $this->owApp = OntoWiki::getInstance();
        // register with extras menu
        $this->translate  = $this->owApp->translate;
        $url        = new OntoWiki_Url(array('controller' => 'translate', 'action' => 'init'));

        $appMenu    = OntoWiki_Menu_Registry::getInstance()->getMenu('application');
        $extrasMenu = $appMenu->getSubMenu('Extras');
        $label      = $this->translate->_('Model Translate', $this->owApp->config->languages->locale);
#        $url        = $this->owApp->urlBase . 'cacheconfiguration/init';

        $extrasMenu->appendEntry($label, (string) $url);

    }
}
