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

jQuery(document).ready(function(){
	jQuery('#youamaslider_design_buttonscolor, #youamaslider_design_buttonscolorup, #youamaslider_design_textscolor, #youamaslider_design_bgscolor').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).val(hex);
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        }
    })
    .bind('keyup', function(){
        jQuery(this).ColorPickerSetColor(this.value);
    });
});