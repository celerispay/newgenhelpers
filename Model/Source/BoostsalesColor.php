<?php

namespace NewgenPayments\Helpers\Model\Source;

class BoostsalesColor implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'text-orange', 'label' => __('Orange')],
            ['value' => 'text-white',  'label' => __('White')],
            ['value' => 'text-purple', 'label' => __('Purple')]
        ];
    }
}
