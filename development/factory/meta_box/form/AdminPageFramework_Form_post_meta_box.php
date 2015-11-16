<?php
/**
 * Admin Page Framework
 * 
 * http://en.michaeluno.jp/admin-page-framework/
 * Copyright (c) 2013-2015 Michael Uno; Licensed MIT
 * 
 */

/**
 * Provides methods to build forms of the `post_meta_box` structure type.
 * 
 * The suffix represents the structure type of the form.
 * 
 * @package     AdminPageFramework
 * @subpackage  Form
 * @since       DEVVER      
 * @extends     AdminPageFramework_Form_Meta       There are some methods defined in the post_meta_box class and are used in this class.
 * @internal
 */
class AdminPageFramework_Form_post_meta_box extends AdminPageFramework_Form_Meta {
    
    public $sStructureType = 'post_meta_box';    
    
    /**
     * Does set-ups.
     * @since       DEVVER
     * @return      void
     */
    public function construct() {        
        $this->_addDefaultResources();
    }

        /**
         * @return      void
         * @since       DEVVER
         */
        private function _addDefaultResources() {
            $_oCSS = new AdminPageFramework_Form_View___CSS_meta_box;
            $this->addResource( 'inline_styles', $_oCSS->get() );
        }    
    
}