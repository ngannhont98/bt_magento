<?php
namespace Smartosc\Article\Block;
use Magento\Framework\View\Element\Template;

class Display extends \Magento\Framework\View\Element\Template{

    public function __construct(Template\Context $context)
    {
        parent::__construct($context);
    }

    public function example()
    {
        echo 'hello';
    }
}