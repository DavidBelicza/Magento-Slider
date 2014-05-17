<?php
/**
 * YouAMA.com
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA that is bundled with this package
 * in the file license.txt.
 *
 /****************************************************************************
 *                      MAGENTO EDITION USAGE NOTICE                         *
 ****************************************************************************/
 /* This package designed for Magento Community edition YouAMA.com does not
 * guarantee correct work of this extension on any other Magento edition 
 * except Magento Community edition. YouAMA.com does not provide extension
 * support in case of incorrect edition usage.
 /****************************************************************************
 *                               DISCLAIMER                                  *
 ****************************************************************************/
 /* Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future.
 *****************************************************
 * @category   Youama
 * @package    Youama_Slider
 * @copyright  Copyright (c) 2012 YouAMA.com (http://www.youama.com/)
 * @license    http://youama.com/freemodule-license.txt
 */

class Youama_Slider_Model_System_Config_Source_Dropdown_Animations
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'random',
                'label' => 'Full Random',
            ),
            array(
                'value' => 'slideInRight',
                'label' => 'Slide In Right',
            ),
            array(
                'value' => 'slideInLeft',
                'label' => 'Slide In Left',
            ),
            array(
                'value' => 'slideInRighteaseOutBounce',
                'label' => 'Bouncing with Slide In Right',
            ),
            array(
                'value' => 'slideInLefteaseOutBounce',
                'label' => 'Bouncing with Slide In Left',
            ),
            array(
                'value' => 'slideInRighteaseInOutCirc',
                'label' => 'Braking with Slide In Right',
            ),
            array(
                'value' => 'slideInLefteaseInOutCirc',
                'label' => 'Braking with Slide In Left',
            ),
            array(
                'value' => 'sliceDown',
                'label' => 'Slice Down',
            ),
            array(
                'value' => 'sliceDownLeft',
                'label' => 'Slice Down Left',
            ),
            array(
                'value' => 'sliceUp',
                'label' => 'Slice Up',
            ),
            array(
                'value' => 'sliceUpLeft',
                'label' => 'Slice Up Left',
            ),
            array(
                'value' => 'sliceUpDown',
                'label' => 'Slice Up Down',
            ),
            array(
                'value' => 'sliceUpDownLeft',
                'label' => 'Slice Up Down Left',
            ),
            array(
                'value' => 'fold',
                'label' => 'Fold',
            ),
            array(
                'value' => 'fade',
                'label' => 'Fade',
            ),
            array(
                'value' => 'boxRandom',
                'label' => 'Box Random',
            ),
            array(
                'value' => 'boxRain',
                'label' => 'Box Rain',
            ),
            array(
                'value' => 'boxRainReverse',
                'label' => 'Box Rain Reverse',
            ),
            array(
                'value' => 'boxRainGrow',
                'label' => 'Box Rain Grow',
            ),
            array(
                'value' => 'boxRainGrowReverse',
                'label' => 'Box Rain Grow Reverse',
            )
        );
    }
}