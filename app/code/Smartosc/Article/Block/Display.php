<?php
namespace Smartosc\Article\Block;

use Magento\Framework\View\Element\Template;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory;


class Display extends \Magento\Framework\View\Element\Template{

    protected $articleFactory;

    public function __construct(Template\Context $context, CollectionFactory $articleFactory)
    {
        $this->articleFactory = $articleFactory;
        parent::__construct($context);
    }

//    public function collection()
//    {
//        return ['data'=>'data ne'];
//    }

    public function getArticleCollection()
    {
        return $this->articleFactory->create();
    }

    public function getArticleDetail($id)
    {
        return  $this->articleFactory->create()->addFieldToFilter(['article_id'],[$id])->getData();
    }
}