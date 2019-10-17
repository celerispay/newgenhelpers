<?php

namespace NewgenPayments\Helpers\Model;

interface ConfigInterface
{
    const XML_STICKY_HEADER_LOGO = 'general/nphelpers/sticky_header_logo';

    const XML_BOOSTSALES_COLOR_1 = 'general/nphelpers/boostsale_color_1';

    const XML_BOOSTSALES_COLOR_2 = 'general/nphelpers/boostsale_color_2';

    const XML_BOOSTSALES_COLOR_INVERT = 'general/nphelpers/boostsale_color_invert';

    const XML_STICKY_LAYERED_NAV = 'general/nphelpers/enable_sticky_sidebar';

    const XML_GENERAL_EMAIL = 'trans_email/ident_general/email';

    const XML_SUPPORT_EMAIL = 'trans_email/ident_support/email';

    const XML_SOCIAL_BASE_LINK = 'general/nphelpers/';

    const XML_SNS = ["twitter", "facebook", "linkedin", "instagram", "youtube", "pinterest", "tumblr"];

    const XML_GOOGLE_MAP_API = "google/maps/apikey";

    public function isStickyLayeredNav();

    public function getScopeConfigValue($path);

    public function getMediaUrl();

    public function getGeneralEmail();

    public function getSupportEmail();

    public function getStoreContact();

    public function getSocialLinks();

    public function getStoreActiveHourText();

    public function getBoostsalesColor1();

    public function getBoostsalesColor2();

    public function getBoostsalesColorInvert();

    public function getHeaderLogo();

    public function getGoogleMapApiKey();
}
