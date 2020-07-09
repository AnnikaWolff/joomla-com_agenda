<?php

defined('_JEXEC') or die('Restricted access');

/**
 * HTML View class for the HelloWorld Component
 *
 * @since  0.0.1
 */
class AgendaViewAgenda extends JViewLegacy
{
    /**
     * Display the Agenda view
     *
     * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
     *
     * @return  void
     */
    public function display($tpl = null)
    {
        $this->msg = 'Agenda';

        parent::display($tpl);
    }
}