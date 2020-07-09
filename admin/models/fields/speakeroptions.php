<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldSpeakerOptions extends JFormFieldList {

    protected $type = 'SpeakerOptions';

    protected function getOptions()
    {
        $db    = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('id,title');
        $query->from('#__nexus_agenda_speakers');
        $query->where('published = 1');

        $db->setQuery((string) $query);

        $speakers = $db->loadObjectList();

        $options  = array();
        if ($speakers)
        {
            foreach ($speakers as $speaker)
            {
                $options[] = JHtml::_('select.option', $speaker->id, $speaker->title);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}