<?php
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;

/**
 * Class AgendaControllerAgenda
 * main controller of this package
 *
 * @since 0.0.1
 */
class AgendaControllerAgendaItems extends JControllerAdmin
{
    public function getModel($name = 'AgendaItems', $prefix = 'AgendaModel', $config = array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, $config);
    }

    public function delete() {

        $request = Factory::getApplication()->input;
        $checkedBoxes = $request->get('cid');

        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->delete($db->quoteName('#__nexus_agenda_items'));
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

    public function publish() {
        $request = Factory::getApplication()->input;
        $checkedBoxes = $request->get('cid');

        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query
            ->update($db->quoteName('#__nexus_agenda_items'))
            ->set($db->quoteName('published') . ' = 1')
            ->where('id IN ('.implode(', ', $checkedBoxes).')');

        $db->setQuery($query);

        $result = $db->execute();

        if ($result === false) {
            JFactory::getApplication()->enqueueMessage(JText::_('COM_AGENDA_PUBLISH_ERROR'), 'error');
        } else {
            JFactory::getApplication()->enqueueMessage(JText::_('COM_AGENDA_PUBLISH_SUCCESS'), 'message');
        }

        // JRoute::_() should be used, but it encodes the url, so & becomes &amp; and joomla cannot handle that
        $this->setRedirect('index.php?option=' . $request->get('option') . '&view=' . $request->get('view'));
    }

    /**
     * Because Joomla's own unpublish() does not seem to work, but simply calls publish() :O
     *
     * @throws Exception
     * @since 0.0.11
     */
    public function overwrittenUnpublish() {
        $request = Factory::getApplication()->input;
        $checkedBoxes = $request->get('cid');

        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query
            ->update($db->quoteName('#__nexus_agenda_items'))
            ->set($db->quoteName('published') . ' = 0')
            ->where('id IN ('.implode(', ', $checkedBoxes).')');

        $db->setQuery($query);

        $result = $db->execute();

        if ($result === false) {
            JFactory::getApplication()->enqueueMessage(JText::_('COM_AGENDA_UNPUBLISH_ERROR'), 'error');
        } else {
            JFactory::getApplication()->enqueueMessage(JText::_('COM_AGENDA_UNPUBLISH_SUCCESS'), 'message');
        }

        // JRoute::_() should be used, but it encodes the url, so & becomes &amp; and joomla cannot handle that
        $this->setRedirect('index.php?option=' . $request->get('option') . '&view=' . $request->get('view'));
    }
}