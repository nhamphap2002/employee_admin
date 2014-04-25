<?php
/*
  Created on : Apr 24, 2014, 10:59:08 AM
  Author: Tran Trong Thang
  Email: trantrongthang1207@gmai.com
 */
?>
<form action="<?php echo JRoute::_('index.php?option=com_tienluong&task=nationality.display&view=nationality.list') ?>" method="post" name="adminForm" id="adminForm">
    <div>
        <div class="pline">
            <label>Post code</label>
            <input type="text" name="tinhthanh"/>
        </div>
        <div class="pline">
            <label>Tinh thanh</label>
            <input type="text" name="tinhthanh"/>
        </div>
        <input type="hidden" name="task" value="nationality.add" />
    </div>
</form>