<?php
defined('_JEXEC') or die('Restricted Access');
?>

<div id="j-sidebar-container" class="j-sidebar-container j-toggle-transition j-sidebar-visible">
    <div id="sidebar" class="sidebar">
        <div class="sidebar-nav">
            <ul id="submenu" class="nav nav-list">
                <li><a href="index.php?option=com_agenda&view=agendaitems"><?php echo JText::_('COM_AGENDA_ADMIN_MANAGE_AGENDA_ITEMS'); ?></a></li>
            </ul>
            <ul id="submenu" class="nav nav-list">
                <li><a href="index.php?option=com_agenda&view=agendalocations"><?php echo JText::_('COM_AGENDA_ADMIN_MANAGE_AGENDA_LOCATIONS'); ?></a></li>
            </ul>
            <ul id="submenu" class="nav nav-list">
                <li><a href="index.php?option=com_agenda&view=agendaspeakers"><?php echo JText::_('COM_AGENDA_ADMIN_MANAGE_AGENDA_SPEAKERS'); ?></a></li>
            </ul>
        </div>
    </div>
</div>

<div id="j-main-container" class="j-toggle-main j-toggle-transition span10">
    <h1><?php echo $this->viewTitle; ?></h1>

    <form action="index.php?option=com_agenda&view=agendaspeakers" method="post" id="adminForm" name="adminForm">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?php echo JHtml::_('grid.checkall'); ?></th>
                <th><?php echo JText::_('COM_AGENDA_AGENDA_SPEAKER_ID'); ?></th>
                <th>
                    <?php echo JText::_('COM_AGENDA_AGENDA_SPEAKER_TITLE'); ?>
                </th>
                <th>
                    <?php echo JText::_('COM_AGENDA_AGENDA_SPEAKER_COMPANY'); ?>
                </th>
                <th>
                    <?php echo JText::_('COM_AGENDA_AGENDA_SPEAKER_HAS_DESC'); ?>
                </th>
                <th>
                    <?php echo JText::_('COM_AGENDA_AGENDA_SPEAKER_HAS_PORTRAIT'); ?>
                </th>
                <th>
                    <?php echo JText::_('COM_AGENDA_PUBLISHED'); ?>
                </th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="5">
                    <?php echo $this->pagination->getListFooter(); ?>
                </td>
            </tr>
            </tfoot>
            <tbody>
            <?php if (! empty($this->items)) : ?>
                <?php foreach ($this->items as $i => $row) :
                    $link = JRoute::_('index.php?option=com_agenda&task=agendaspeaker.edit&id=' . $row->id);
                    ?>

                    <tr>
                        <td>
                            <?php echo JHtml::_('grid.id', $i, $row->id); ?>
                        </td>
                        <td><?php echo $row->id; ?></td>
                        <td>
                            <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_AGENDA_EDIT'); ?>">
                                <?php echo $row->title; ?>
                            </a>
                        </td>
                        <td><?php echo $row->company; ?></td>
                        <td><?php
                                echo (!empty($row->description) && $row->description !== null)
                                    ? JText::_('COM_AGENDA_YES')
                                    : JText::_('COM_AGENDA_NO');
                            ?>
                        </td>
                        <td><?php
                                echo (!empty($row->portrait) && $row->portrait !== null)
                                    ? JText::_('COM_AGENDA_YES')
                                    : JText::_('COM_AGENDA_NO');
                            ?>
                        </td>
                        <td>
                            <?php
                            echo ($row->published)
                                ? JText::_('COM_AGENDA_YES')
                                : JText::_('COM_AGENDA_NO');
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <input type="hidden" name="task" value=""/>
        <input type="hidden" name="boxchecked" value="0"/>
        <?php echo JHtml::_('form.token'); ?>
    </form>
</div>