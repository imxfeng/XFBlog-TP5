<?php
namespace app\admin\controller;
use app\admin\controller\Base;

class Manage extends Base
{
    public function post()
    {
        return $this->fetch();
    }
}
