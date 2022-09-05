<?php
declare(strict_types=1);

namespace Admin\Acl\Controller\Adminhtml\Create\Index;

abstract class Index extends \Magento\Backend\App\Action
{

const ADMIN_RESOURCE = 'Admin_Acl::create';
 protected function _isAllowed()
{
 return $this->_authorization->isAllowed('Admin_Acl::manage');
}
}
