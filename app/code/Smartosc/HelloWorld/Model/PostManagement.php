<?php
namespace Smartosc\HelloWorld\Model;


use Smartosc\HelloWorld\Api\PostManagementInterface;

class PostManagement implements PostManagementInterface {

    /**
     * {@inheritdoc}
     */
    public function getPost($param)
    {
        return 'api GET return the $param ' . $param;
    }
}