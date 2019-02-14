<?php
namespace Ecommerce121\Core\Block;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;
use Magento\Backend\Block\AbstractBlock;
use Magento\Backend\Block\Context;
use Magento\Framework\View\Asset\Repository;
/**
 * Class Info
 * @package Ecommerce121\Core\Block
 */
class Info extends AbstractBlock implements RendererInterface
{
    /**
     * @var Repository
     */
    protected $repository;

    /**
     * Info constructor.
     * @param Context $context
     * @param Repository $repository
     * @param array $data
     */
    public function __construct(
        Context $context, Repository $repository, array $data = [])
    {
        $this->repository = $repository;
        parent::__construct($context, $data);
    }

    /**
     * @param AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element = null;
        $fileId = 'Ecommerce121_Core::images/logo121.svg';
        $params = [
            'area' => 'adminhtml'
        ];
        $asset = $this->repository->createAsset($fileId, $params);
        $logo = $asset->getUrl();
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
