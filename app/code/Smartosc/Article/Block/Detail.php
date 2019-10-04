<?php
namespace Smartosc\Article\Block;

use Magento\Framework\View\Element\Template\Context;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory;


class Detail extends \Magento\Framework\View\Element\Template
{

    protected $articleFactory;
    protected $context;

    public function __construct(Context $context, CollectionFactory $articleFactory)
    {
        $this->articleFactory = $articleFactory;
        parent::__construct($context);
    }

    public function getArticleDetail($id)
    {
        return  $this->articleFactory->create()->addFieldToFilter(['article_id'],[$id])->getData();
    }

    public function getArticleDetailById()
    {
        $id = $this->_request->getParam('id');
        return  $this->articleFactory->create()->addFieldToFilter(['article_id'],[$id])->getData();
    }

}