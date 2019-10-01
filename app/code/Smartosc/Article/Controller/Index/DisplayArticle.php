<?php
namespace Smartosc\Article\Controller\Index;

use Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

/**
 * Class DisplayArticle
 * @package Smartosc\Article\Controller\Index
 */
class DisplayArticle extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }

}


