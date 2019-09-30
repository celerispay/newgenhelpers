<?php

namespace NewgenPayments\Helpers\Block;

use NewgenPayments\Helpers\Model\ConfigInterface;

class HelperBlock extends \Magento\Framework\View\Element\Template
{
    protected $npconfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        ConfigInterface $config,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->npconfig = $config;
    }

    public function getNPConfig()
    {
        return $this->npconfig;
    }

}
