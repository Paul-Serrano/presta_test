<?php

class Product extends ProductCore
{
    public $delivery;
    public $second_reference;

    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null)
    {
        self::$definition['fields']['delivery'] = array('type' => self::TYPE_BOOL, 'validate' => 'isBool');
        self::$definition['fields']['second_reference'] = array('type' => self::TYPE_STRING, 'validate' => 'isString');
        parent::__construct($id_product, $full, $id_lang, $id_shop);
    }
}