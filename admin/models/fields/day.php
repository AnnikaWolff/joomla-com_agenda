<?php
defined('_JEXEC') or die('Restricted Access');

use Joomla\CMS\Form\FormField;

class JFormFieldDay extends FormField
{
    protected $type = 'day';

    protected function getInput()
    {
        $attr = ! empty($this->class) ? ' class="' . $this->class . '"' : '';

        $html = '<input type="date" name="' . $this->name . '" value="' . $this->value . '"' . $attr . '/>';

        return $html;
    }
}