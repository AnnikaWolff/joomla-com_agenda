<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

// The class name must always be the same as the filename (in camel case)
class JFormFieldLocationOptions extends JFormFieldList {

    //The field class must know its own type through the variable $type.
    protected $type = 'LocationOptions';

    protected function getOptions()
    {
        $db    = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('id,title');
        $query->from('#__nexus_agenda_locations');
        $query->where('published = 1');

        $db->setQuery((string) $query);

        $locations = $db->loadObjectList();

        $options  = array();
        if ($locations)
        {
            foreach ($locations as $location)
            {
                $options[] = JHtml::_('select.option', $location->id, $location->title);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}