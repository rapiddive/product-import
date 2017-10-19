<?php

namespace BigBridge\ProductImport\Model\Data;

use Magento\Catalog\Model\Product\Attribute\Source\Status;
use Magento\Catalog\Model\Product\Visibility;

/**
 * Product fields.
 * Use underscores, not camelcase, to keep close to import columns.
 *
 * @author Patrick van Bergen
 */
abstract class Product
{
    // a collection of some commonly used constants

    const STATUS_ENABLED = Status::STATUS_ENABLED;
    const STATUS_DISABLED = Status::STATUS_DISABLED;

    const VISIBILITY_NOT_VISIBLE = Visibility::VISIBILITY_NOT_VISIBLE;
    const VISIBILITY_IN_CATALOG = Visibility::VISIBILITY_IN_CATALOG;
    const VISIBILITY_IN_SEARCH = Visibility::VISIBILITY_IN_SEARCH;
    const VISIBILITY_BOTH = Visibility::VISIBILITY_BOTH;


    /** @var  int */
    public $id;

    /** @var  int  */
    public $status;

    public $visibility;

    /** @var  string */
    public $attribute_set_id;

    /** @var  string */
    public $store_view_id = 0;

    /** @var  string 64 character */
    public $sku;

    /** @var  string */
    public $name;

    /** @var  string A 12.4 decimal field */
    public $price;

    /** @var  int */
    public $tax_class_id;

    /** @var int[] */
    public $category_ids = [];

    // =========================================
    // importer data
    // =========================================

    /** @var bool  */
    public $ok = false;

    /** @var  string */
    public $error = "";

    /** @var string  */
    public $lineNumber = "";
}