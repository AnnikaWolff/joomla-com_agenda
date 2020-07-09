<?php
defined('_JEXEC') or die('Restricted access');

class AgendaViewAgendaItem extends JViewLegacy
{
    protected $form = null;

    public function display($tpl = null)
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        if (count($errors = $this->get('Errors')))
        {
            JLog::add(implode('<br />', $errors), JLog::ERROR, 'jerror');
            return;
        }

        $this->addToolBar();

        parent::display($tpl);
    }

    protected function addToolBar()
    {
        $input = JFactory::getApplication()->input;

        // Hide Joomla Administrator Main menu
        $input->set('hidemainmenu', true);

        $isNew = ($this->item->id === 0);

        if ($isNew)
        {
            $title = JText::_('COM_AGENDA_MANAGER_AGENDA_ITEM_NEW');
        }
        else
        {
            $title = JText::_('COM_AGENDA_MANAGER_AGENDA_ITEM_EDIT');
        }

        JToolbarHelper::title($title, 'agendaitem');
        JToolbarHelper::save('agendaitem.save');
        JToolbarHelper::cancel(
            'agendaitem.cancel',
            $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
        );
    }
}