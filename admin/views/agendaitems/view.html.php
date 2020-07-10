<?php
defined('_JEXEC') or die('Restricted access');


/**
 * HTML View class for the Agenda Component
 *
 * @since  0.0.1
 */
class AgendaViewAgendaItems extends JViewLegacy
{
    /**
     * Display the main Agenda view
     *
     * @param string $tpl The name of the template file to parse; automatically searches through the template paths.
     *
     * @return  void
     *
     * @since 1.6
     */
    public function display($tpl = null)
    {
        // Get data from the model
        $this->items		= $this->get('Items');
        $this->pagination	= $this->get('Pagination');

        // Check for errors.
        if (count($errors = $this->get('Errors')))
        {
            JLog::add(implode('<br />', $errors), JLog::ERROR, 'jerror');

            return;
        }

        $this->addToolBar();

        parent::display($tpl);
    }

    /**
     * Add the page title and toolbar.
     *
     * @return  void
     *
     * @since   1.6
     */
    protected function addToolBar()
    {
        JToolbarHelper::title(JText::_('COM_AGENDA_ADMIN_MANAGE_AGENDA_ITEMS'));
        JToolbarHelper::addNew('agendaitem.add');
        JToolbarHelper::editList('agendaitem.edit');
        JToolbarHelper::deleteList(JText::_('COM_AGENDA_AGENDA_ITEMS_DELETE_CONFIRM'), 'agendaitems.delete');
    }

    public function getSpeaker($id = null)
    {
        if ($id) {
            $db    = JFactory::getDbo();
            $query = $db->getQuery(true);

            // Create the base select statement.
            $query->select('title')
                ->from($db->quoteName('#__nexus_agenda_speakers'))
                ->where('id = ' . $id);
            $db->setQuery((string) $query);

            $speakers = $db->loadObjectList();
            return $speakers[0]->title;
        }
        return '-';
    }

    public function getLocation($id = null)
    {
        if ($id) {
            $db    = JFactory::getDbo();
            $query = $db->getQuery(true);

            // Create the base select statement.
            $query->select('title')
                ->from($db->quoteName('#__nexus_agenda_locations'))
                ->where('id = ' . $id);
            $db->setQuery((string) $query);

            $locations = $db->loadObjectList();
            return $locations[0]->title;
        }
        return '-';
    }
}