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

class Youama_Slider_Model_System_Config_Source_Dropdown_Position
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'top',
                'label' => 'Top',
            ),
            array(
                'value' => 'bottom',
                'label' => 'Bottom',
            ),
            array(
                'value' => 'lefttop',
                'label' => 'Top at Left side',
            ),
            array(
                'value' => 'righttop',
                'label' => 'Top at Right side',
            ),
            array(
                'value' => 'leftbottom',
                'label' => 'Bottom at Left side',
            ),
            array(
                'value' => 'rightbottom',
                'label' => 'Bottom at Right side',
            )
        );
    }
}