<?php

namespace NewgenPayments\Helpers\Model;

use Magento\Framework\App\ObjectManager;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Store\Model\Information;

class Config implements ConfigInterface
{
    private $scopeConfig;

    private $storeManager;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storeManager = null
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager ?: ObjectManager::getInstance()->get(StoreManagerInterface::class);

    }

    public function isStickyLayeredNav()
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_STICKY_LAYERED_NAV,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getScopeConfigValue($path)
    {
        return !empty($path)
            ? $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE)
            : null;
    }

    public function getMediaUrl()
    {
        return $this->storeManager
                    ->getStore()
                    ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
    }

    public function getGeneralEmail()
    {
        return $this->getScopeConfigValue(self::XML_GENERAL_EMAIL);
    }

    public function getSupportEmail()
    {
        return $this->getScopeConfigValue(self::XML_SUPPORT_EMAIL);
    }

    public function getStoreContact()
    {
        return $this->getScopeConfigValue(Information::XML_PATH_STORE_INFO_PHONE);
    }

    public function getSocialLinks()
    {
        $res = [];
        foreach(self::XML_SNS as $sns) {
            if($link = $this->getScopeConfigValue(self::XML_SOCIAL_BASE_LINK . $sns)) {
                $res[$sns] = $link;
            }
        }
        return $res;
    }

    public function getStoreActiveHourText()
    {
        return $this->getScopeConfigValue(Information::XML_PATH_STORE_INFO_HOURS);
    }

    public function getBoostsalesColor1()
    {
        return $this->getScopeConfigValue(self::XML_BOOSTSALES_COLOR_1);
    }

    public function getBoostsalesColor2()
    {
        return $this->getScopeConfigValue(self::XML_BOOSTSALES_COLOR_2);
    }

    public function getBoostsalesColorInvert()
    {
        return $this->getScopeConfigValue(self::XML_BOOSTSALES_COLOR_INVERT);
    }

    public function getHeaderLogo()
    {
        return $this->getScopeConfigValue(self::XML_STICKY_HEADER_LOGO);
    }

    public function getGoogleMapApiKey()
    {
        return $this->getScopeConfigValue(self::XML_GOOGLE_MAP_API);
    }
}
