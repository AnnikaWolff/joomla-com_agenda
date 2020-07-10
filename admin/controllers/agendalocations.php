<?php

use Joomla\CMS\Factory;

defined('_JEXEC') or die('Restricted access');

/**
 * Class AgendaControllerAgendaLocation
 * @since 0.0.9
 */
class AgendaControllerAgendaLocations extends JControllerAdmin
{
    public function getModel($name = 'AgendaLocations', $prefix = 'AgendaModel', $config = array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, $config);
    }

    public function delete() {

        $request = Factory::getApplication()->input;
        $checkedBoxes = $request->get('cid');

        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->delete($db->quoteName('#__nexus_agenda_locations'));
        $query->where('id IN ('.implode(', ', $checkedBoxes).')');

        $db->setQuery($query);

        $result = $db->execute();

        if ($result === false) {
            JFactory::getApplication()->enqueueMessage(JText::_('COM_AGENDA_DELETE_ERROR'), 'error');
        } else {
            JFactory::getApplication()->enqueueMessage(JText::_('COM_AGENDA_DELETE_SUCCESS'), 'message');
        }

        // JRoute::_() should be used, but it encodes the url, so & becomes &amp; and joomla cannot handle that
        $this->setRedirect('index.php?option=' . $request->get('option') . '&view=' . $request->get('view'));
    }
}