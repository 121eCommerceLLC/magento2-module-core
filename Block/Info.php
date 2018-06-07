<?php
namespace Ecommerce121\Core\Block;

use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Class Info
 * @package Ecommerce121\Core\Block
 */
class Info extends \Magento\Backend\Block\AbstractBlock implements
    \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    /**
     * @param AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element = null;
        $logo = 'https://www.121ecommerce.com/hubfs/2017%20Redesign/logo.png';
        $html = '<div style="background: url('.$logo.')no-repeat scroll 15px 15px #f8f8f8; 
                border:1px solid #ccc; min-height:100px; margin:5px 0; 
                padding:15px 15px 15px 140px;">
                <p>
                <strong>121 Ecommerce Extensions M2</strong><br />
                <a href="https://www.121ecommerce.com" target="_blank">121Ecommerce</a><br /> 
                We’re an eCommerce development agency specializing in both B2B and B2C eCommerce.
                </p>
                <p>
                Website: <a href="https://www.121ecommerce.com/" target="_blank">https://www.121ecommerce.com/</a>
                <br />
                If you have any questions send email at 
                <a href="mailto:info@121ecommerce.com">info@121ecommerce.com</a>.
                </p>
                </div>';

        return $html;
    }
}