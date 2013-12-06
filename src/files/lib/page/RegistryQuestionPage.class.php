<?php
// wcf imports
require_once(WCF_DIR.'lib/page/AbstractPage.class.php');
// util imports
require_once(WCF_DIR.'lib/util/StringStack.class.php');
require_once(WCF_DIR.'lib/util/HeaderUtil.class.php');
/**
 * 
 *
 * @author    zerocool
 * @copyright    2013 sexygaming.de
 * @package    de.sexygaming.registryquestion
 * @license    insert it here
 */
class ServerQuestionPage extends AbstractPage {
    // RegistryQuestion.tpl
    public $templateName = 'registryQuestion';
    
    protected $questionPool = array();
        
    /**
	 * @see AbstractPage::readParameters()
	 */
    public function readParameters() {
        parent::readParameters();
    }
    
	/**
	 * @see AbstractPage::readData()
	 */    
    public function readData() {
        parent::readData();
        
    }
    
	/**
	 * @see AbstractPage::assignVariables()
	 */
    public function assignVariables() {
        parent::assignVariables();

    }
    
    /**
	 * @see AbstractPage::show()
	 */
    public function show() {
        parent::show();
    }
}
