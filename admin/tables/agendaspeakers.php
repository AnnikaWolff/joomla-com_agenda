<?php
defined('_JEXEC') or die('Restricted access');

/**
 * Speaker Table class
 *
 * @since  0.0.6
 */
class AgendaTableAgendaSpeakers extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  A database connector object
     * @since 0.0.6
     */
    function __construct(&$db)
    {
        parent::__construct('#__nexus_agenda_speaker', 'id', $db);
    }
}