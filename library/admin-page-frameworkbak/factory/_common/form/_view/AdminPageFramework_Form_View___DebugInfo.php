<?php
/**
 Admin Page Framework v3.7.2b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class AdminPageFramework_Form_View___DebugInfo extends AdminPageFramework_FrameworkUtility {
    public $sStructureType = '';
    public $oMsg;
    public function __construct() {
        $_aParameters = func_get_args() + array($this->sStructureType, $this->oMsg,);
        $this->sStructureType = $_aParameters[0];
        $this->oMsg = $_aParameters[1];
    }
    public function get() {
        if (!$this->isDebugModeEnabled()) {
            return '';
        }
        if (!in_array($this->sStructureType, array('widget', 'post_meta_box', 'page_meta_box', 'user_meta'))) {
            return '';
        }
        return "<div class='admin-page-framework-info'>" . $this->oMsg->get('debug_info') . ': ' . AdminPageFramework_Registry::NAME . ' ' . AdminPageFramework_Registry::getVersion() . "</div>";
    }
}