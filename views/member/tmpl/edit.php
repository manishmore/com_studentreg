<?php
/**
 * @version     1.0.0
 * @package     com_studentreg
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      rohit singh <rhtsingh240@gmail.com> - http://eduvance.in
 */
// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.keepalive');
// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_studentreg/assets/css/studentreg.css');
?>
<script type="text/javascript">
    function getScript(url,success) {
        var script = document.createElement('script');
        script.src = url;
        var head = document.getElementsByTagName('head')[0],
        done = false;
        // Attach handlers for all browsers
        script.onload = script.onreadystatechange = function() {
            if (!done && (!this.readyState
                || this.readyState == 'loaded'
                || this.readyState == 'complete')) {
                done = true;
                success();
                script.onload = script.onreadystatechange = null;
                head.removeChild(script);
            }
        };
        head.appendChild(script);
    }
    getScript('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',function() {
        js = jQuery.noConflict();
        js(document).ready(function(){
            

            Joomla.submitbutton = function(task)
            {
                if (task == 'member.cancel') {
                    Joomla.submitform(task, document.getElementById('member-form'));
                }
                else{
                    
                    if (task != 'member.cancel' && document.formvalidator.isValid(document.id('member-form'))) {
                        
                        Joomla.submitform(task, document.getElementById('member-form'));
                    }
                    else {
                        alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED')); ?>');
                    }
                }
            }
        });
    });
</script>

<form action="<?php echo JRoute::_('index.php?option=com_studentreg&layout=edit&id=' . (int) $this->item->id); ?>" method="post" enctype="multipart/form-data" name="adminForm" id="member-form" class="form-validate">
    <div class="width-60 fltlft">
        <fieldset class="adminform">
            <legend><?php echo JText::_('COM_STUDENTREG_LEGEND_MEMBER'); ?></legend>
            <ul class="adminformlist">

                				<li><?php echo $this->form->getLabel('certificate_number'); ?>
				<?php echo $this->form->getInput('certificate_number'); ?></li>
				<li><?php echo $this->form->getLabel('course'); ?>
				<?php echo $this->form->getInput('course'); ?></li>
				<li><?php echo $this->form->getLabel('college'); ?>
				<?php echo $this->form->getInput('college'); ?></li>
				<li><?php echo $this->form->getLabel('date'); ?>
				<?php echo $this->form->getInput('date'); ?></li>
				<li><?php echo $this->form->getLabel('grade'); ?>
				<?php echo $this->form->getInput('grade'); ?></li>
				<li><?php echo $this->form->getLabel('image'); ?>
				<?php echo $this->form->getInput('image'); ?></li>
				<li><?php echo $this->form->getLabel('name'); ?>
				<?php echo $this->form->getInput('name'); ?></li>


            </ul>
        </fieldset>
    </div>

    

    <input type="hidden" name="task" value="" />
    <?php echo JHtml::_('form.token'); ?>
    <div class="clr"></div>

    <style type="text/css">
        /* Temporary fix for drifting editor fields */
        .adminformlist li {
            clear: both;
        }
    </style>
</form>