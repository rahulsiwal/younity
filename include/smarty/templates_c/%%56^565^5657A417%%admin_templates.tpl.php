<?php /* Smarty version 2.6.14, created on 2010-03-27 23:23:52
         compiled from admin_templates.tpl */
?><?php
SELanguage::_preload_multi(15,467,468,469,470,471,472,173,466);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<h2><?php echo SELanguage::_get(15); ?></h2>
<?php echo SELanguage::_get(467); ?>
<br />
<br />

<div class='floatleft' style='width: 250px;'>
<b><?php echo SELanguage::_get(468); ?></b><br>
<table cellpadding='0' cellspacing='0'>
<?php unset($this->_sections['file_loop']);
$this->_sections['file_loop']['name'] = 'file_loop';
$this->_sections['file_loop']['loop'] = is_array($_loop=$this->_tpl_vars['user_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file_loop']['show'] = true;
$this->_sections['file_loop']['max'] = $this->_sections['file_loop']['loop'];
$this->_sections['file_loop']['step'] = 1;
$this->_sections['file_loop']['start'] = $this->_sections['file_loop']['step'] > 0 ? 0 : $this->_sections['file_loop']['loop']-1;
if ($this->_sections['file_loop']['show']) {
    $this->_sections['file_loop']['total'] = $this->_sections['file_loop']['loop'];
    if ($this->_sections['file_loop']['total'] == 0)
        $this->_sections['file_loop']['show'] = false;
} else
    $this->_sections['file_loop']['total'] = 0;
if ($this->_sections['file_loop']['show']):

            for ($this->_sections['file_loop']['index'] = $this->_sections['file_loop']['start'], $this->_sections['file_loop']['iteration'] = 1;
                 $this->_sections['file_loop']['iteration'] <= $this->_sections['file_loop']['total'];
                 $this->_sections['file_loop']['index'] += $this->_sections['file_loop']['step'], $this->_sections['file_loop']['iteration']++):
$this->_sections['file_loop']['rownum'] = $this->_sections['file_loop']['iteration'];
$this->_sections['file_loop']['index_prev'] = $this->_sections['file_loop']['index'] - $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['index_next'] = $this->_sections['file_loop']['index'] + $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['first']      = ($this->_sections['file_loop']['iteration'] == 1);
$this->_sections['file_loop']['last']       = ($this->_sections['file_loop']['iteration'] == $this->_sections['file_loop']['total']);
?>
<tr>
<td><img src='../images/icon_file.gif' border='0'>&nbsp;</td>
<td><a href="javascript: editTemplate('<?php echo $this->_tpl_vars['user_files'][$this->_sections['file_loop']['index']]['filename']; ?>
');"><?php echo $this->_tpl_vars['user_files'][$this->_sections['file_loop']['index']]['filename']; ?>
</a></td>
</tr>
<?php endfor; endif; ?>
</table>
</div>

<div class='floatleft' style='width: 200px; padding-left: 20px;'>
<b><?php echo SELanguage::_get(469); ?></b><br>
<table cellpadding='0' cellspacing='0'>
<?php unset($this->_sections['file_loop']);
$this->_sections['file_loop']['name'] = 'file_loop';
$this->_sections['file_loop']['loop'] = is_array($_loop=$this->_tpl_vars['base_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file_loop']['show'] = true;
$this->_sections['file_loop']['max'] = $this->_sections['file_loop']['loop'];
$this->_sections['file_loop']['step'] = 1;
$this->_sections['file_loop']['start'] = $this->_sections['file_loop']['step'] > 0 ? 0 : $this->_sections['file_loop']['loop']-1;
if ($this->_sections['file_loop']['show']) {
    $this->_sections['file_loop']['total'] = $this->_sections['file_loop']['loop'];
    if ($this->_sections['file_loop']['total'] == 0)
        $this->_sections['file_loop']['show'] = false;
} else
    $this->_sections['file_loop']['total'] = 0;
if ($this->_sections['file_loop']['show']):

            for ($this->_sections['file_loop']['index'] = $this->_sections['file_loop']['start'], $this->_sections['file_loop']['iteration'] = 1;
                 $this->_sections['file_loop']['iteration'] <= $this->_sections['file_loop']['total'];
                 $this->_sections['file_loop']['index'] += $this->_sections['file_loop']['step'], $this->_sections['file_loop']['iteration']++):
$this->_sections['file_loop']['rownum'] = $this->_sections['file_loop']['iteration'];
$this->_sections['file_loop']['index_prev'] = $this->_sections['file_loop']['index'] - $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['index_next'] = $this->_sections['file_loop']['index'] + $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['first']      = ($this->_sections['file_loop']['iteration'] == 1);
$this->_sections['file_loop']['last']       = ($this->_sections['file_loop']['iteration'] == $this->_sections['file_loop']['total']);
?>
<tr>
<td><img src='../images/icon_file.gif' border='0'>&nbsp;</td>
<td><a href="javascript: editTemplate('<?php echo $this->_tpl_vars['base_files'][$this->_sections['file_loop']['index']]['filename']; ?>
');"><?php echo $this->_tpl_vars['base_files'][$this->_sections['file_loop']['index']]['filename']; ?>
</a></td>
</tr>
<?php endfor; endif; ?>
</table>
</div>

<div>
<b><?php echo SELanguage::_get(470); ?></b><br>
<table cellpadding='0' cellspacing='0'>
<?php unset($this->_sections['file_loop']);
$this->_sections['file_loop']['name'] = 'file_loop';
$this->_sections['file_loop']['loop'] = is_array($_loop=$this->_tpl_vars['head_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file_loop']['show'] = true;
$this->_sections['file_loop']['max'] = $this->_sections['file_loop']['loop'];
$this->_sections['file_loop']['step'] = 1;
$this->_sections['file_loop']['start'] = $this->_sections['file_loop']['step'] > 0 ? 0 : $this->_sections['file_loop']['loop']-1;
if ($this->_sections['file_loop']['show']) {
    $this->_sections['file_loop']['total'] = $this->_sections['file_loop']['loop'];
    if ($this->_sections['file_loop']['total'] == 0)
        $this->_sections['file_loop']['show'] = false;
} else
    $this->_sections['file_loop']['total'] = 0;
if ($this->_sections['file_loop']['show']):

            for ($this->_sections['file_loop']['index'] = $this->_sections['file_loop']['start'], $this->_sections['file_loop']['iteration'] = 1;
                 $this->_sections['file_loop']['iteration'] <= $this->_sections['file_loop']['total'];
                 $this->_sections['file_loop']['index'] += $this->_sections['file_loop']['step'], $this->_sections['file_loop']['iteration']++):
$this->_sections['file_loop']['rownum'] = $this->_sections['file_loop']['iteration'];
$this->_sections['file_loop']['index_prev'] = $this->_sections['file_loop']['index'] - $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['index_next'] = $this->_sections['file_loop']['index'] + $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['first']      = ($this->_sections['file_loop']['iteration'] == 1);
$this->_sections['file_loop']['last']       = ($this->_sections['file_loop']['iteration'] == $this->_sections['file_loop']['total']);
?>
<tr>
<td><img src='../images/icon_file.gif' border='0'>&nbsp;</td>
<td><a href="javascript: editTemplate('<?php echo $this->_tpl_vars['head_files'][$this->_sections['file_loop']['index']]['filename']; ?>
');"><?php echo $this->_tpl_vars['head_files'][$this->_sections['file_loop']['index']]['filename']; ?>
</a></td>
</tr>
<?php endfor; endif; ?>
</table>
</div>


<?php echo '
<script type="text/javascript">
<!-- 
  function editTemplate(t) {
    $(\'t\').value = t;
    var url = \'admin_templates.php?task=gettemplate&t=\'+t;
	var request = new Request.JSON({secure: false, url: url,
		onComplete: function(jsonObj) {
			if(jsonObj.is_error == 0) {
			  edit(jsonObj.template);
			} else {
			  alert(jsonObj.error_message);
			}
		}
	}).send();
  }
  function edit(template) {
    TB_show(\''; 
 echo SELanguage::_get(471); 
 echo '\', \'#TB_inline?height=600&width=700&inlineId=template\', \'\', \'../images/trans.gif\');
    $("TB_window").getElements(\'textarea[id=template_code]\').each(function(el) { el.value = template; });
  }

//-->
</script>
'; ?>


<div style='display: none;' id='template'>
  <form action='admin_templates.php' method='post' name='editform' target='ajaxframe' onSubmit='parent.TB_remove();'>
  <div style='margin-top: 10px; margin-bottom: 10px;'><?php echo SELanguage::_get(472); ?></div>
  <textarea name='template_code' id='template_code' rows='20' style='width: 100%; font-size: 8pt; height: 485px; font-family: verdana, serif;'><?php echo $this->_tpl_vars['template_code']; ?>
</textarea>
  <br><br>
  <input type='submit' class='button' value='<?php echo SELanguage::_get(173); ?>'> <input type='button' class='button' value='<?php echo SELanguage::_get(466); ?>' onClick='parent.TB_remove();'>
  <input type='hidden' name='task' value='save'>
  <input type='hidden' name='t' id='t' value=''>
  </form>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>