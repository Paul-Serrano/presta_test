<?php

if (!defined('_PS_VERSION_'))
	exit;

class ModuleTest extends Module {

    function __construct()
    {
        $this->name = 'moduleTest';
        $this->tab = 'front_office_features';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Testing module');
        $this->description = $this->l('Module to test my skills');

        $this->version = '1.3.0';
        $this->author = 'PrestaShop';
        $this->error = false;
        $this->valid = false;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    function install()
 	{
 	 	if (!parent::install()) {
            return false;
        }
        
		Configuration::updateValue('MODULE_TEST_TITLE', $this->l('Module test'));

        Configuration::updateValue('TEST_TITLE', '') &&
        Configuration::updateValue('TEST_DESCRIPTION', '') &&
        Configuration::updateValue('TEST_NUMBER', '');

		return ($this->registerHook('header') && $this->registerHook('displayLeftColumn') && $this->registerHook('displayRightColumn'));
  	}

    function uninstall()
    {

        Configuration::deleteByName('Module test');
        if (!parent::uninstall()) {
            return false;
        }

        Configuration::deleteByName('TEST_TITLE');
        Configuration::deleteByName('TEST_DESCRIPTION');
        Configuration::deleteByName('TEST_NUMBER');
        
    
        return true;
    }

    function getContent()
    {

        $output = null;

        if(Tools::isSubmit('submit'.$this->name)) {
            $title = Tools::getValue('TEST_TITLE');
            $description = Tools::getValue('TEST_DESCRIPTION');
            $number = Tools::getValue('TEST_NUMBER');
        
            if(!$title || !$description || !$number ||
            empty($title) || empty($description || empty($number) ||
            !Validate::isGenericName($title) || !Validate::isGenericName($description) || !Validate::isGenericName($number))) {
                $output = $this->displayError($this->l('Configurartion failed'));
            }
            else {
                Configuration::updateValue('TEST_TITLE', $title);
                Configuration::updateValue('TEST_DESCRIPTION', $description);
                Configuration::updateValue('TEST_NUMBER', $number);
                $output = $this->displayConfirmation($this->l('Update successful'));
            }
        }

        return $output.$this->displayForm();
    }

    function displayForm() {

        $fields_form = array();
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        $fields_form[0]['form'] = array(

            'legend' => array(
                'title' => $this->l('Test Settings'),
            ),

            'input' => array(
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Title'),
                    'name' => 'TEST_TITLE',
                    'size' => 20,
                    'required' => true
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Description'),
                    'name' => 'TEST_DESCRIPTION',
                    'size' => 20,
                    'required' => true
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Number'),
                    'name' => 'TEST_NUMBER',
                    'size' => 20,
                    'required' => true
                )
            ),

            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'btn btn_default'
            )

        );

        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submit' . $this->name;
        $helper->toolbar_btn = array(
            'save' =>
                array(
                    'desc' => $this->l('Save'),
                    'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&save' . $this->name .'&token=' . Tools::getAdminTokenLite('AdminModules')
                ),
            'back' => array(
            'href' => AdminController::$currentIndex . '&token=' . Tools::getAdminTokenLite('AdminModules'),
            'desc' => $this->l('Back to list')
                )
            );

    
        $helper->tpl_vars = array(
            'fields_value' => array(
                'TEST_TITLE' => Configuration::get('TEST_TITLE'),
                'TEST_DESCRIPTION' => Configuration::get('TEST_DESCRIPTION'),
                'TEST_NUMBER' => Configuration::get('TEST_NUMBER')
            ),
        );

        return $helper->generateForm($fields_form);

    }

    
    public function hookheader()
    {
    $this->context->controller->addCSS($this->_path . '/views/css/moduleTest.css', 'all');
    }

    
    public function hookDisplayLeftColumn($params)
    {
        $this->context->smarty->assign(
            array(
                'test_title' => Configuration::get('TEST_TITLE'),
                'test_description' => Configuration::get('TEST_DESCRIPTION'),
                'test_number' => Configuration::get('TEST_NUMBER'),
            )
        );
        return $this->display(__FILE__, 'views/templates/hook/moduleTest.tpl');
    }
    
}