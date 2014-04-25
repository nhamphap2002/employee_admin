<?php
/*
  Created on : Apr 24, 2014, 10:03:28 AM
  Author: Tran Trong Thang
  Email: trantrongthang1207@gmai.com
 */
?>
<form action="<?php echo JRoute::_('index.php?option=com_tienluong&task=nationality.display&view=nationality.list') ?>" method="post" name="adminForm" id="adminForm">

    <div>

        <table class="adminlist" id="modules-mgr">
            <thead>
                <tr>
                    <th width="1%">
                        #
                    </th>
                    <th width="1%">
                        <input type="checkbox" onclick="checkAll(this)" value="" name="checkall-toggle">
                    </th>
                    <th width="5%">Postcode</th>
                    <th width="93%">Ten tinh thanh</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($this->listnation); $i++) {
                    $listnation = $this->listnation[$i];
                    ?>
                    <tr class="row<?php echo $i % 2 == 0 ? '0' : '1'; ?>">
                        <td>
                            <?php echo $i + 1; ?>
                        </td>
                        <td>
                            <input type="checkbox" title="Checkbox for row 2" onclick="Joomla.isChecked(this.checked);" value="<?php echo $listnation->id; ?>" name="cid[]" id="cb1">
                        </td>
                        <td>
                            <? echo $listnation->postcode; ?>
                        </td>
                        <td>
                            <? echo utf8_decode(mysql_real_escape_string($listnation->nationality)); ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <input type="hidden" value="0" name="boxchecked">
        <input type="hidden" name="task" value="nationality.display" />
    </div>
</form>
