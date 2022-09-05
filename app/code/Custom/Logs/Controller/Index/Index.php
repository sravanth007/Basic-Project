<?php
namespace Custom\Logs\Controller\Index;

use Magento\Backend\App\Action\Context;
use \Magento\Framework\Controller\ResultFactory;


class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * @var \Magento\Framework\App\Cache\TypeListInterface
     */
    protected $_cacheTypeList;

    /**
     * @var \Magento\Framework\App\Cache\StateInterface
     */
    protected $_cacheState;

    /**
     * @var \Magento\Framework\App\Cache\Frontend\Pool
     */
    protected $_cacheFrontendPool;

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * Logging instance
     * @var \Custom\Logs\Logger\Logger
     */
    protected $_logger;


    /**
     * @param Action\Context $context
     * @param \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList
     * @param \Magento\Framework\App\Cache\StateInterface $cacheState
     * @param \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     **/
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
        \Magento\Framework\App\Cache\StateInterface $cacheState,
        \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool,
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Custom\Logs\Logger\Logger $logger

    ) {
        parent::__construct($context);
        $this->_cacheTypeList = $cacheTypeList;
        $this->_cacheState = $cacheState;
        $this->_cacheFrontendPool = $cacheFrontendPool;
        $this->resultPageFactory = $resultPageFactory;
        $this->_messageManager = $messageManager;
        $this->_logger = $logger;

    }

    /**
     * Flush cache storage
     *
     */
    public function execute()
    {

        $this->_logger->info(" created  custom module for Custom Log");

        $this->resultPage = $this->resultPageFactory->create();
        return $this->resultPage;
    }
}
