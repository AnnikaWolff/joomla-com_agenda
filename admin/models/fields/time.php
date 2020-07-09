<?php
defined('_JEXEC') or die('Restricted Access');

use Joomla\CMS\Form\FormField;

class JFormFieldTime extends FormField
{
    protected $type = 'time';

    protected function getInput()
    {
        // get relevant attributes which were defined in the XML form definition
        $attr = ! empty($this->class) ? ' class="' . $this->class . '"' : '';
        $attr .= ! empty($this->element['min']) ? ' min="' . $this->element['min'] . '"' : '';
        $attr .= ! empty($this->element['max']) ? ' max="' . $this->element['max'] . '"' : '';

        // set up html, including the value and other attributes
        $html = '<input type="time" name="' . $this->name . '" value="' . $this->value . '"' . $attr . '/>';

        return $html;
    }
}