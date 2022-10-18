<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace News\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use News\DBUtils\DBHelper;
use News\DBUtils\PostValidator;
use News\Post\PostDAO;

session_start();

class NewsController extends AbstractActionController
{
    public function indexAction()
    {
        $dao = new PostDAO();
        $_SESSION['post_list'] = $dao->getAllPost();
        return new ViewModel();
    }

    public function createAction()
    {
        return new ViewModel();
    }

    public function successAction()
    {
        return new ViewModel();
    }

    public function failedAction()
    {
        return new ViewModel();
    }

    public function updateAction()
    {
        if (isset($_POST['updateID'])) {
            $dao = new PostDAO();

            $_POST['post'] = $dao->getPostById($_POST['updateID']);
        }
        return new ViewModel();
    }

    public function confirmAction()
    {
        if (isset($_SESSION['post'])) {
            $dao = new PostDAO();
            $rs = $dao->updatePost();
            if ($rs) {
                $this->redirect()->toRoute('news');
            } else {
                $this->redirect()->toRoute('failed');
            }
        }
    }

    public function confirmCreateAction()
    {
        if (isset($_POST['id'])) {

            $a = new PostDAO();
            $rs = $a->createPost();
        }
    }


    public function deleteAction()
    {
        if (isset($_POST['deleteID'])) {
            $dao = new PostDAO();
            $rs = $dao->deletePost($_POST['deleteID']);
            if ($rs) {
                $this->redirect()->toRoute('news');
            } else {
                $this->redirect()->toRoute('failed');
            }
        }
    }
}
