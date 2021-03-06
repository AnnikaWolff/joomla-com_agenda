<?php
defined('_JEXEC') or die('Restricted access');

/**
 * AgendaLocationsList Model
 *
 * @since  0.0.9
 */
class AgendaModelAgendaLocations extends JModelList
{
    /**
     * Method to build an SQL query to load the list data.
     *
     * @return      string  An SQL query
     * @since  0.0.9
     */
    protected function getListQuery()
    {
        $db    = JFactory::getDbo();
        $query = $db->getQuery(true);

        // Create the base select statement.
        $query->select('*')
            ->from($db->quoteName('#__nexus_agenda_locations'));

        return $query;
    }
}