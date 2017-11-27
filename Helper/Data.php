<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 6/22/17
 * Time: 9:05 PM
 */

namespace Ecommerce121\Core\Helper;


class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getConfig($path)
    {
        return $this->scopeConfig->getValue($path);
    }

}