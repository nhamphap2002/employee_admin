<?php
/*
  Created on : Apr 24, 2014, 10:59:08 AM
  Author: Tran Trong Thang
  Email: trantrongthang1207@gmai.com
 */
?>
<form action="<?php echo JRoute::_('index.php?option=com_tienluong&task=nationality.display&view=nationality.list') ?>" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
    <div>
        <div class="pline">
            <label>Chon file</label>
            <input type="file" name="upload_file" value="" />
            <input type="submit" name="Import" id="pimportnationality"/>
        </div>
        <div class="pline" id="infoimport">
            
        </div>
        <input type="hidden" name="task" value="nationality.add" />
    </div>
</form>