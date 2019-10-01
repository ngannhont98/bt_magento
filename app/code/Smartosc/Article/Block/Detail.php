<?php
namespace Smartosc\Article\Block;

use Magento\Framework\View\Element\Template;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory;


class Detail extends \Magento\Framework\View\Element\Template{

    protected $articleFactory;

    public function __construct(Template\Context $context, CollectionFactory $articleFactory)
    {
        $this->articleFactory = $articleFactory;
        parent::__construct($context);
    }

    public function getArticleCollection()
    {
        return $article = $this->articleFactory->create();
    }
}