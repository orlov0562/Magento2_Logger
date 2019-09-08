<?php

namespace Orlov\Logger\Observer;

use Magento\Framework\Event\ObserverInterface;

class ActionPreDispatch implements ObserverInterface
{
    const CONFIG_IS_LOGGER_ENABLED = 'orlov_logger/log/action_pre_dispatch_enabled';

    protected $logger;
    protected $scopeConfig;
    protected $isLoggerEnabled;

    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        $this->logger = $logger;
        $this->scopeConfig = $scopeConfig;
        $this->isLoggerEnabled = $this->scopeConfig->isSetFlag(self::CONFIG_IS_LOGGER_ENABLED);
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if (!$this->isLoggerEnabled) return;

        //To print string Output in debug.log
        $this->logger->addDebug('Your Text Or Variables');

        // To print array Output in system.log
        $this->logger->log('600', print_r(['a', 'b'], true));
    }
}