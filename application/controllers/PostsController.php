<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class PostsController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        $this->setParamsDataFromPost(['id', 'name']);
        $this->setModelList(['Roles']);
    }

}