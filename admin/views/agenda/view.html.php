<?php
defined('_JEXEC') or die('Restricted access');


/**
 * HTML View class for the Agenda Component
 *
 * @since  0.0.1
 */
class AgendaViewAgenda extends JViewLegacy
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
        $this->msg = $this->get('Msg');

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
        JToolbarHelper::title(JText::_('COM_AGENDA_MANAGER_AGENDA'));
        JToolbarHelper::addNew('agendaitem.add');
        JToolbarHelper::editList('agendaitem.edit');
        JToolbarHelper::deleteList('Wirklich löschen?', 'agendaitem.delete');
    }
}