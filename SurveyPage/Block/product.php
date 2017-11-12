<?php
namespace Survey\SurveyPage\Block;
use Magento\Catalog\Api\ProductRepositoryInterface;
class Product extends \Magento\Framework\View\Element\Template
{
    protected $productRepository;
    protected $_storeManager;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        ProductRepositoryInterface $productRepository
    ) {
        parent::__construct($context);

        $this->productRepository = $productRepository;
    }
    public function getProduct()
    {

        $productId=1;
        return $product = $this->productRepository->getById($productId);
    }
}