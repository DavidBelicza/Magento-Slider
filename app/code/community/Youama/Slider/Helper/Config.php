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

/**
 * Deprecated from Youama_Slider 2.1.1
 */
class Youama_Slider_Helper_Config extends Mage_Core_Helper_Abstract
{
    private $_configs;
    private $_sliders;
    private $_design;
    private $_animation;
    private $_event;
    private $_media;


    public function __construct()
    {
        $this->_configs = Mage::getStoreConfig('youamaslider');
        $this->_media = Mage::getBaseUrl('media') . 'youama/slider/';
        
        $this->setSliders();
        $this->setDesign();
        $this->setAnimation();
        $this->setEvent();
    }

    private function setSliders()
    {
        $sliderItems = array();
        
        $item = 0;
        for ($i = 0; $i < 6; $i++)
        {
            if (isset($this->_configs["slideritem$i"]['image']))
            {
                if ($this->_configs["slideritem$i"]['image'] != null && $this->_configs["slideritem$i"]['image'] != '')
                {
                    $sliderItems[$item]['image'] = $this->_media . $this->_configs["slideritem$i"]['image'];
                    $sliderItems[$item]['title'] = $this->_configs["slideritem$i"]['title'];
                    $sliderItems[$item]['link'] = $this->_configs["slideritem$i"]['link'];
                    $item++;
                }
            }
        }
        
        if (!isset($sliderItems[0]))
        {
            $sliderItems[0]['image'] = $this->_media . '111.jpg';
            $sliderItems[0]['title'] = '20 animation types!';
            $sliderItems[0]['link'] = 'http://www.youama.com/items';
                
            $sliderItems[1]['image'] = $this->_media . '222.jpg';
            $sliderItems[1]['title'] = 'The most popular jQuery slider!';
            $sliderItems[1]['link'] = 'http://www.youama.com/items';
            
            $sliderItems[2]['image'] = $this->_media . '333.jpg';
            $sliderItems[2]['title'] = 'From Magento Connect by Youama.com';
            $sliderItems[2]['link'] = 'http://www.youama.com/items';
            
            $sliderItems[3]['image'] = $this->_media . '444.jpg';
            $sliderItems[3]['title'] = '- Easy admin management<br />- Design via admin page<br />- It\'s all free!';
            $sliderItems[3]['link'] = 'http://www.youama.com/items';
        }
        
        $this->_sliders = $sliderItems;
    }
    
    public function getSliders()
    {
        return $this->_sliders;
    }
    
    private function setDesign()
    {
        $this->_configs['design']['width'] = ((int)$this->_configs['design']['width'] != '') ? 'width:' . (int)$this->_configs['design']['width'] . 'px;' : '';
        $this->_configs['design']['height'] = ((int)$this->_configs['design']['height'] != '') ? 'height:' . (int)$this->_configs['design']['height'] . 'px;' : '';
        
        $this->_configs['design']['textscolor'] = (ctype_xdigit($this->_configs['design']['textscolor']) == true && strlen($this->_configs['design']['textscolor']) == 6) ? 'color:#' . $this->_configs['design']['textscolor'] . ';' : '';
        $this->_configs['design']['bgscolor'] = (ctype_xdigit($this->_configs['design']['bgscolor']) && strlen($this->_configs['design']['bgscolor']) == 6) ? 'background-color:#' . $this->_configs['design']['bgscolor'] . ';' : '';
        
        if ($this->_configs['design']['textopacity'] != '')
        {
            $opc = $this->_configs['design']['textopacity'];
            $this->_configs['design']['textopacity'] = 'opacity:' . $opc . ';-moz-opacity:' . $opc . ';filter:alpha(opacity=' . (10*$opc) . ');';
        }
        else
        {
            $this->_configs['design']['textopacity'] = '';
        }
        
        if ($this->_configs['design']['textpos'] == 'top')
        {
            $this->_configs['design']['textpos'] = 'left:0;top:0;width:100%;';
        }
        elseif ($this->_configs['design']['textpos'] == 'bottom')
        {
            $this->_configs['design']['textpos'] = 'left:0;bottom:0;width:100%;';
        }
        elseif ($this->_configs['design']['textpos'] == 'lefttop')
        {
            $this->_configs['design']['textpos'] = 'left:0;top:10%;';
        }
        elseif ($this->_configs['design']['textpos'] == 'righttop')
        {
            $this->_configs['design']['textpos'] = 'right:0;top:10%;';
        }
        elseif ($this->_configs['design']['textpos'] == 'leftbottom')
        {
            $this->_configs['design']['textpos'] = 'left:0;bottom:10%;';
        }
        elseif ($this->_configs['design']['textpos'] == 'rightbottom')
        {
            $this->_configs['design']['textpos'] = 'right:0;bottom:10%;';
        }
        
        if ($this->_configs['design']['buttonen'] == 1)
        {
            $this->_configs['design']['buttonen'] = 'true';
        }
        else
        {
            $this->_configs['design']['buttonen'] = 'false';
        }
        
        if ($this->_configs['design']['buttonscolor'] != '')
        {
            $color1 = '#' . $this->_configs['design']['buttonscolor'];
            $color2 = '#' . $this->_configs['design']['buttonscolorup'];
            
            $colors = 'background-color:' . $color1 . ';';
            $colors .= 'background-image:linear-gradient(bottom, ' . $color1 . ' 1%, ' . $color2 . ' 100%);';
            $colors .= 'background-image:-o-linear-gradient(bottom, ' . $color1 . ' 1%, ' . $color2 . ' 100%);';
            $colors .= 'background-image:-moz-linear-gradient(bottom, ' . $color1 . ' 1%, ' . $color2 . ' 100%);';
            $colors .= 'background-image:-webkit-linear-gradient(bottom, ' . $color1 . ' 1%, ' . $color2 . ' 100%);';
            $colors .= 'background-image:-ms-linear-gradient(bottom, ' . $color1 . ' 1%, ' . $color2 . ' 100%);';
            $colors .= "filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='" . $color1 . "', endColorstr='" . $color2 . "',GradientType=0 );";
            
            $this->_configs['design']['buttonscolor'] = $colors;
            
            $colorshover = 'background-color:' . $color2 . ';';
            $colorshover .= 'background-image:linear-gradient(bottom, ' . $color2 . ' 1%, ' . $color1 . ' 100%);';
            $colorshover .= 'background-image:-o-linear-gradient(bottom, ' . $color2 . ' 1%, ' . $color1 . ' 100%);';
            $colorshover .= 'background-image:-moz-linear-gradient(bottom, ' . $color2 . ' 1%, ' . $color1 . ' 100%);';
            $colorshover .= 'background-image:-webkit-linear-gradient(bottom, ' . $color2 . ' 1%, ' . $color1 . ' 100%);';
            $colorshover .= 'background-image:-ms-linear-gradient(bottom, ' . $color2 . ' 1%, ' . $color1 . ' 100%);';
            $colorshover .= "filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='" . $color2 . "', endColorstr='" . $color1 . "',GradientType=0 );";
            
            $this->_configs['design']['buttonscolorhover'] = $colorshover;
        }
        else
        {
            $this->_configs['design']['buttonscolorhover'] = '';
        }
        
        if ($this->_configs['design']['buttonpos'] == 'top')
        {
            $this->_configs['design']['buttonpos'] = 'left:0;right:0;top:0;';
        }
        elseif ($this->_configs['design']['buttonpos'] == 'bottom')
        {
            $this->_configs['design']['buttonpos'] = 'left:0;right:0;bottom:0;';
        }
        elseif ($this->_configs['design']['buttonpos'] == 'lefttop')
        {
            $this->_configs['design']['buttonpos'] = 'left:10px;top:0;';
        }
        elseif ($this->_configs['design']['buttonpos'] == 'righttop')
        {
            $this->_configs['design']['buttonpos'] = 'right:10px;top:0';
        }
        elseif ($this->_configs['design']['buttonpos'] == 'leftbottom')
        {
            $this->_configs['design']['buttonpos'] = 'left:10px;bottom:0';
        }
        elseif ($this->_configs['design']['buttonpos'] == 'rightbottom')
        {
            $this->_configs['design']['buttonpos'] = 'right:10px;bottom:0;';
        }
        
        if ($this->_configs['design']['nextpreven'] == 1)
        {
            $this->_configs['design']['nextpreven'] = 'true';
        }
        else
        {
            $this->_configs['design']['nextpreven'] = 'false';
        }
        
        if (isset($this->_configs['design']['nextimage']))
        {
            if ($this->_configs['design']['nextimage'] != '' && $this->_configs['design']['nextimage'] != null)
            {
                $this->_configs['design']['nextimage'] = "background-image:url('" . $this->_media . '/nextprev/' . $this->_configs['design']['nextimage'] . "')";
            }
        }
        else
        {
            $this->_configs['design']['nextimage'] = '';
        }
        
        if (isset($this->_configs['design']['previmage']))
        {
            if ($this->_configs['design']['previmage'] != '' && $this->_configs['design']['previmage'] != null)
            {
                $this->_configs['design']['previmage'] = "background-image:url('" . $this->_media . '/nextprev/' . $this->_configs['design']['previmage'] . "')";
            }
        }
        else
        {
            $this->_configs['design']['previmage'] = '';
        }
        
        $fontsize = ((int)$this->_configs['design']['textsize'] >= 6 && (int)$this->_configs['design']['textsize'] <= 62) ? (int)$this->_configs['design']['textsize'] : '18';
        $this->_configs['design']['textsize'] = 'font-size:' . $fontsize . 'px;';
        
        $this->_design = $this->_configs['design'];        
    }

    public function getDesign()
    {
        return $this->_design;
    }
    
    private function setAnimation()
    {
        if ($this->_configs['animations']['hover'] == 1)
        {
            $this->_configs['animations']['hover'] = 'true';
        }
        else
        {
            $this->_configs['animations']['hover'] = 'false';
        }
            
        $this->_animation = $this->_configs['animations'];
    }
    
    public function getAnimation()
    {
        return $this->_animation;
    }
    
    private function setEvent()
    {
        $this->_event = $this->_configs['events'];
    }
    
    public function getEvent()
    {
        return $this->_event;
    }
}

?>