<?php
/**
 Admin Page Framework v3.7.2 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class AdminPageFramework_Form_View___Generate_FlatFieldName extends AdminPageFramework_Form_View___Generate_FieldName {
    public function get() {
        return $this->_getFiltered($this->_getFlatFieldName());
    }
    public function getModel() {
        return $this->get() . '|' . $this->sIndexMark;
    }
    protected function _getFlatFieldName() {
        $_sSectionIndex = isset($this->aArguments['section_id'], $this->aArguments['_section_index']) ? "|{$this->aArguments['_section_index']}" : '';
        return $this->getAOrB($this->_isSectionSet(), "{$this->aArguments['_section_path']}{$_sSectionIndex}|{$this->aArguments['_field_path']}", "{$this->aArguments['_field_path']}");
    }
}