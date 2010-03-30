<?php /* Smarty version 2.6.14, created on 2010-03-29 20:50:30
         compiled from signup.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'signup.tpl', 184, false),array('modifier', 'in_array', 'signup.tpl', 344, false),array('modifier', 'escape', 'signup.tpl', 483, false),)), $this);
?><?php
SELanguage::_preload_multi(729,730,731,732,733,734,693,735,722,723,724,725,726,727,728,717,712,713,714,715,716,349,710,711,679,680,681,37,682,29,53,266,683,684,28,685,686,709,206,687,688,689,690,975,691,692);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
 if ($this->_tpl_vars['step'] == 5): ?>
  <img src='./images/icons/signup48.gif' border='0' class='icon_big'>
  <div class='page_header'><?php echo SELanguage::_get(729); ?></div>
  <div><?php echo SELanguage::_get(730); ?>
  <?php if ($this->_tpl_vars['setting']['setting_signup_enable'] == 0): 
 echo SELanguage::_get(731); 
 endif; ?>
  <?php if ($this->_tpl_vars['setting']['setting_signup_randpass'] == 1): 
 echo SELanguage::_get(732); 
 endif; ?>
  <?php if ($this->_tpl_vars['setting']['setting_signup_verify'] == 0): 
 echo SELanguage::_get(733); 
 else: 
 echo SELanguage::_get(734); 
 endif; ?>
  </div>
  <br />
  <br />
  
  <?php if ($this->_tpl_vars['setting']['setting_signup_verify'] == 0 && $this->_tpl_vars['setting']['setting_signup_enable'] != 0 && $this->_tpl_vars['setting']['setting_signup_randpass'] == 0): ?>
    <form action='login.php' method='GET'>
    <input type='submit' class='button' value='<?php echo SELanguage::_get(693); ?>'>
    <input type='hidden' name='email' value='<?php echo $this->_tpl_vars['new_user']->user_info['user_email']; ?>
'>
    </form>
  <?php else: ?>
    <form action='home.php' method='GET'>
    <input type='submit' class='button' value='<?php echo SELanguage::_get(735); ?>'>
    </form>
  <?php endif; 
 elseif ($this->_tpl_vars['step'] == 4): ?>
  <img src='./images/icons/signup48.gif' border='0' class='icon_big'>
  <div class='page_header'><?php echo SELanguage::_get(722); ?></div>
  <div><?php echo SELanguage::_get(723); ?></div>
  <br />
  <br />

  <form action='signup.php' method='POST'>
  <table cellpadding='0' cellspacing='0' class='form'>
  <tr>
    <td>
      <b><?php echo SELanguage::_get(724); ?></b>
      <div><?php echo SELanguage::_get(725); ?></div>
      <textarea name='invite_emails' rows='3' cols='70' style='margin-top: 3px;'></textarea><br><br>
    </td>
  </tr>
  <tr>
    <td>
      <b><?php echo SELanguage::_get(726); ?></b>
      <div><?php echo SELanguage::_get(727); ?></div>
      <textarea name='invite_message' rows='3' cols='70' style='margin-top: 3px;'></textarea>
    </td>
  </tr>
  </table>

  <br>

  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>
    <input type='submit' class='button' value='<?php echo SELanguage::_get(728); ?>'>&nbsp;
    <input type='hidden' name='task' value='<?php echo $this->_tpl_vars['next_task']; ?>
'>
    </form>
  </td>
  <td>
    <form action='signup.php' method='POST'><input type='submit' class='button' value='<?php echo SELanguage::_get(717); ?>'>
    <input type='hidden' name='task' value='<?php echo $this->_tpl_vars['next_task']; ?>
'>
    <input type='hidden' name='step' value='<?php echo $this->_tpl_vars['step']; ?>
'>
    </form>
  </td>
  </tr>
  </table>





<?php elseif ($this->_tpl_vars['step'] == 3): ?>
  <img src='./images/icons/signup48.gif' border='0' class='icon_big'>
  <div class='page_header'><?php echo SELanguage::_get(712); ?></div>
  <div><?php echo SELanguage::_get(713); ?></div><br>
  <br>

    <?php if ($this->_tpl_vars['is_error'] != 0): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr><td class='result'>
      <div class='error'><img src='./images/error.gif' border='0' class='icon'> <?php echo SELanguage::_get($this->_tpl_vars['is_error']); ?></div>
    </td></tr></table>
    <br>
  <?php endif; ?>

  <table cellpadding='0' cellspacing='0' align='center' width='450'>
  <tr>
  <td class='signup_photo'>
    <form action='signup.php' method='POST' enctype='multipart/form-data'>
    <input type='file' class='text' name='photo' size='40'>
    <input type='submit' class='button' value='<?php echo SELanguage::_get(714); ?>'>
    <input type='hidden' name='step' value='<?php echo $this->_tpl_vars['step']; ?>
'>
    <input type='hidden' name='task' value='<?php echo $this->_tpl_vars['next_task']; ?>
'>
    <input type='hidden' name='MAX_FILE_SIZE' value='5000000'>
    </form>
    <div class='signup_photo_desc'>
      <?php echo SELanguage::_get(715); ?> <?php echo $this->_tpl_vars['new_user']->level_info['level_photo_exts']; ?>
.
    </div>
  </td>
  </table>

  <br>

    <?php if ($this->_tpl_vars['new_user']->user_photo() != ""): ?>
    <div class='center'>
      <img src='<?php echo $this->_tpl_vars['new_user']->user_photo(); ?>
' border='0' class='photo'><br><br>
      <form action='signup.php' method='POST'>
      <input type='submit' class='button' value='<?php echo SELanguage::_get(716); ?>'>
      <input type='hidden' name='task' value='<?php echo $this->_tpl_vars['last_task']; ?>
'>
      </form>
    </div>
  <?php else: ?>
    <div class='center'>
      <div style='font-size: 16pt; font-weight: bold;'><?php echo SELanguage::_get(349); ?></div><br>
      <form action='signup.php' method='POST'>
      <input type='submit' class='button' value='<?php echo SELanguage::_get(717); ?>'>
      <input type='hidden' name='task' value='<?php echo $this->_tpl_vars['last_task']; ?>
'>
      </form>
    </div>
  <?php endif; ?>

  <br>




<?php elseif ($this->_tpl_vars['step'] == 2): ?>
  <img src='./images/icons/signup48.gif' border='0' class='icon_big'>
  <div class='page_header'><?php echo SELanguage::_get(710); ?></div>
  <div><?php echo SELanguage::_get(711); ?></div><br>
  <br><br>

    <?php if ($this->_tpl_vars['is_error'] != 0): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr><td class='result'>
      <div class='error'><img src='./images/error.gif' border='0' class='icon'> <?php echo SELanguage::_get($this->_tpl_vars['is_error']); ?></div>
    </td></tr></table>
    <br>
  <?php endif; ?>

    <?php echo '
  <script type="text/javascript">
  <!-- 
  function ShowHideDeps(field_id, field_value, field_type) {
    if(field_type == 6) {
      if($(\'field_\'+field_id+\'_option\'+field_value)) {
        if($(\'field_\'+field_id+\'_option\'+field_value).style.display == "block") {
	  $(\'field_\'+field_id+\'_option\'+field_value).style.display = "none";
	} else {
	  $(\'field_\'+field_id+\'_option\'+field_value).style.display = "block";
	}
      }
    } else {
      var divIdStart = "field_"+field_id+"_option";
      for(var x=0;x<$(\'field_options_\'+field_id).childNodes.length;x++) {
        if($(\'field_options_\'+field_id).childNodes[x].nodeName == "DIV" && $(\'field_options_\'+field_id).childNodes[x].id.substr(0, divIdStart.length) == divIdStart) {
          if($(\'field_options_\'+field_id).childNodes[x].id == \'field_\'+field_id+\'_option\'+field_value) {
            $(\'field_options_\'+field_id).childNodes[x].style.display = "block";
          } else {
            $(\'field_options_\'+field_id).childNodes[x].style.display = "none";
          }
        }
      }
    }
  }
  //-->
  </script>
  '; ?>


  <form action='signup.php' method='POST'>
    <?php unset($this->_sections['cat_loop']);
$this->_sections['cat_loop']['name'] = 'cat_loop';
$this->_sections['cat_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cat_loop']['show'] = true;
$this->_sections['cat_loop']['max'] = $this->_sections['cat_loop']['loop'];
$this->_sections['cat_loop']['step'] = 1;
$this->_sections['cat_loop']['start'] = $this->_sections['cat_loop']['step'] > 0 ? 0 : $this->_sections['cat_loop']['loop']-1;
if ($this->_sections['cat_loop']['show']) {
    $this->_sections['cat_loop']['total'] = $this->_sections['cat_loop']['loop'];
    if ($this->_sections['cat_loop']['total'] == 0)
        $this->_sections['cat_loop']['show'] = false;
} else
    $this->_sections['cat_loop']['total'] = 0;
if ($this->_sections['cat_loop']['show']):

            for ($this->_sections['cat_loop']['index'] = $this->_sections['cat_loop']['start'], $this->_sections['cat_loop']['iteration'] = 1;
                 $this->_sections['cat_loop']['iteration'] <= $this->_sections['cat_loop']['total'];
                 $this->_sections['cat_loop']['index'] += $this->_sections['cat_loop']['step'], $this->_sections['cat_loop']['iteration']++):
$this->_sections['cat_loop']['rownum'] = $this->_sections['cat_loop']['iteration'];
$this->_sections['cat_loop']['index_prev'] = $this->_sections['cat_loop']['index'] - $this->_sections['cat_loop']['step'];
$this->_sections['cat_loop']['index_next'] = $this->_sections['cat_loop']['index'] + $this->_sections['cat_loop']['step'];
$this->_sections['cat_loop']['first']      = ($this->_sections['cat_loop']['iteration'] == 1);
$this->_sections['cat_loop']['last']       = ($this->_sections['cat_loop']['iteration'] == $this->_sections['cat_loop']['total']);
?>
  <?php unset($this->_sections['subcat_loop']);
$this->_sections['subcat_loop']['name'] = 'subcat_loop';
$this->_sections['subcat_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['subcat_loop']['show'] = true;
$this->_sections['subcat_loop']['max'] = $this->_sections['subcat_loop']['loop'];
$this->_sections['subcat_loop']['step'] = 1;
$this->_sections['subcat_loop']['start'] = $this->_sections['subcat_loop']['step'] > 0 ? 0 : $this->_sections['subcat_loop']['loop']-1;
if ($this->_sections['subcat_loop']['show']) {
    $this->_sections['subcat_loop']['total'] = $this->_sections['subcat_loop']['loop'];
    if ($this->_sections['subcat_loop']['total'] == 0)
        $this->_sections['subcat_loop']['show'] = false;
} else
    $this->_sections['subcat_loop']['total'] = 0;
if ($this->_sections['subcat_loop']['show']):

            for ($this->_sections['subcat_loop']['index'] = $this->_sections['subcat_loop']['start'], $this->_sections['subcat_loop']['iteration'] = 1;
                 $this->_sections['subcat_loop']['iteration'] <= $this->_sections['subcat_loop']['total'];
                 $this->_sections['subcat_loop']['index'] += $this->_sections['subcat_loop']['step'], $this->_sections['subcat_loop']['iteration']++):
$this->_sections['subcat_loop']['rownum'] = $this->_sections['subcat_loop']['iteration'];
$this->_sections['subcat_loop']['index_prev'] = $this->_sections['subcat_loop']['index'] - $this->_sections['subcat_loop']['step'];
$this->_sections['subcat_loop']['index_next'] = $this->_sections['subcat_loop']['index'] + $this->_sections['subcat_loop']['step'];
$this->_sections['subcat_loop']['first']      = ($this->_sections['subcat_loop']['iteration'] == 1);
$this->_sections['subcat_loop']['last']       = ($this->_sections['subcat_loop']['iteration'] == $this->_sections['subcat_loop']['total']);
?>
    <?php if (count($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields']) != 0): ?>
    <div class='signup_header'><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['subcat_title']); ?></div>
    <table cellpadding='0' cellspacing='0'>

        <?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_loop']['show'] = true;
$this->_sections['field_loop']['max'] = $this->_sections['field_loop']['loop'];
$this->_sections['field_loop']['step'] = 1;
$this->_sections['field_loop']['start'] = $this->_sections['field_loop']['step'] > 0 ? 0 : $this->_sections['field_loop']['loop']-1;
if ($this->_sections['field_loop']['show']) {
    $this->_sections['field_loop']['total'] = $this->_sections['field_loop']['loop'];
    if ($this->_sections['field_loop']['total'] == 0)
        $this->_sections['field_loop']['show'] = false;
} else
    $this->_sections['field_loop']['total'] = 0;
if ($this->_sections['field_loop']['show']):

            for ($this->_sections['field_loop']['index'] = $this->_sections['field_loop']['start'], $this->_sections['field_loop']['iteration'] = 1;
                 $this->_sections['field_loop']['iteration'] <= $this->_sections['field_loop']['total'];
                 $this->_sections['field_loop']['index'] += $this->_sections['field_loop']['step'], $this->_sections['field_loop']['iteration']++):
$this->_sections['field_loop']['rownum'] = $this->_sections['field_loop']['iteration'];
$this->_sections['field_loop']['index_prev'] = $this->_sections['field_loop']['index'] - $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['index_next'] = $this->_sections['field_loop']['index'] + $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['first']      = ($this->_sections['field_loop']['iteration'] == 1);
$this->_sections['field_loop']['last']       = ($this->_sections['field_loop']['iteration'] == $this->_sections['field_loop']['total']);
?>
      <tr>
      <td class='form1' width='150'><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_title']); 
 if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_required'] != 0): ?>*<?php endif; ?></td>
      <td class='form2'>



            <?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 1): ?>
        <div><input type='text' class='text' name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' id='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']; ?>
' style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
' maxlength='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_maxlength']; ?>
'></div>

                <?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'] != "" && count($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']) != 0): ?>
        <?php echo '
        <script type="text/javascript">
        <!-- 
        window.addEvent(\'domready\', function(){
	  var options = {
		script:"misc_js.php?task=suggest_field&limit=5&'; 
 unset($this->_sections['option_loop']);
$this->_sections['option_loop']['name'] = 'option_loop';
$this->_sections['option_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option_loop']['show'] = true;
$this->_sections['option_loop']['max'] = $this->_sections['option_loop']['loop'];
$this->_sections['option_loop']['step'] = 1;
$this->_sections['option_loop']['start'] = $this->_sections['option_loop']['step'] > 0 ? 0 : $this->_sections['option_loop']['loop']-1;
if ($this->_sections['option_loop']['show']) {
    $this->_sections['option_loop']['total'] = $this->_sections['option_loop']['loop'];
    if ($this->_sections['option_loop']['total'] == 0)
        $this->_sections['option_loop']['show'] = false;
} else
    $this->_sections['option_loop']['total'] = 0;
if ($this->_sections['option_loop']['show']):

            for ($this->_sections['option_loop']['index'] = $this->_sections['option_loop']['start'], $this->_sections['option_loop']['iteration'] = 1;
                 $this->_sections['option_loop']['iteration'] <= $this->_sections['option_loop']['total'];
                 $this->_sections['option_loop']['index'] += $this->_sections['option_loop']['step'], $this->_sections['option_loop']['iteration']++):
$this->_sections['option_loop']['rownum'] = $this->_sections['option_loop']['iteration'];
$this->_sections['option_loop']['index_prev'] = $this->_sections['option_loop']['index'] - $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['index_next'] = $this->_sections['option_loop']['index'] + $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['first']      = ($this->_sections['option_loop']['iteration'] == 1);
$this->_sections['option_loop']['last']       = ($this->_sections['option_loop']['iteration'] == $this->_sections['option_loop']['total']);
?>options[]=<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['label']; ?>
&<?php endfor; endif; 
 echo '",
		varname:"input",
		json:true,
		shownoresults:false,
		maxresults:5,
		multisuggest:false,
		callback: function (obj) {  }
	  };
	  var as_json'; 
 echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; 
 echo ' = new bsn.AutoSuggest(\'field_'; 
 echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; 
 echo '\', options);
        });
        //-->
        </script>
        '; ?>

        <?php endif; ?>


            <?php elseif ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 2): ?>
        <div><textarea rows='6' cols='50' name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
'><?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']; ?>
</textarea></div>



            <?php elseif ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 3): ?>
        <div><select name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' id='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' onchange="ShowHideDeps('<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
', this.value);" style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
'>
        <option value='-1'></option>
                <?php unset($this->_sections['option_loop']);
$this->_sections['option_loop']['name'] = 'option_loop';
$this->_sections['option_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option_loop']['show'] = true;
$this->_sections['option_loop']['max'] = $this->_sections['option_loop']['loop'];
$this->_sections['option_loop']['step'] = 1;
$this->_sections['option_loop']['start'] = $this->_sections['option_loop']['step'] > 0 ? 0 : $this->_sections['option_loop']['loop']-1;
if ($this->_sections['option_loop']['show']) {
    $this->_sections['option_loop']['total'] = $this->_sections['option_loop']['loop'];
    if ($this->_sections['option_loop']['total'] == 0)
        $this->_sections['option_loop']['show'] = false;
} else
    $this->_sections['option_loop']['total'] = 0;
if ($this->_sections['option_loop']['show']):

            for ($this->_sections['option_loop']['index'] = $this->_sections['option_loop']['start'], $this->_sections['option_loop']['iteration'] = 1;
                 $this->_sections['option_loop']['iteration'] <= $this->_sections['option_loop']['total'];
                 $this->_sections['option_loop']['index'] += $this->_sections['option_loop']['step'], $this->_sections['option_loop']['iteration']++):
$this->_sections['option_loop']['rownum'] = $this->_sections['option_loop']['iteration'];
$this->_sections['option_loop']['index_prev'] = $this->_sections['option_loop']['index'] - $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['index_next'] = $this->_sections['option_loop']['index'] + $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['first']      = ($this->_sections['option_loop']['iteration'] == 1);
$this->_sections['option_loop']['last']       = ($this->_sections['option_loop']['iteration'] == $this->_sections['option_loop']['total']);
?>
          <option id='op' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
'<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value'] == $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['label']); ?></option>
        <?php endfor; endif; ?>
        </select>
        </div>
                <div id='field_options_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'>
        <?php unset($this->_sections['option_loop']);
$this->_sections['option_loop']['name'] = 'option_loop';
$this->_sections['option_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option_loop']['show'] = true;
$this->_sections['option_loop']['max'] = $this->_sections['option_loop']['loop'];
$this->_sections['option_loop']['step'] = 1;
$this->_sections['option_loop']['start'] = $this->_sections['option_loop']['step'] > 0 ? 0 : $this->_sections['option_loop']['loop']-1;
if ($this->_sections['option_loop']['show']) {
    $this->_sections['option_loop']['total'] = $this->_sections['option_loop']['loop'];
    if ($this->_sections['option_loop']['total'] == 0)
        $this->_sections['option_loop']['show'] = false;
} else
    $this->_sections['option_loop']['total'] = 0;
if ($this->_sections['option_loop']['show']):

            for ($this->_sections['option_loop']['index'] = $this->_sections['option_loop']['start'], $this->_sections['option_loop']['iteration'] = 1;
                 $this->_sections['option_loop']['iteration'] <= $this->_sections['option_loop']['total'];
                 $this->_sections['option_loop']['index'] += $this->_sections['option_loop']['step'], $this->_sections['option_loop']['iteration']++):
$this->_sections['option_loop']['rownum'] = $this->_sections['option_loop']['iteration'];
$this->_sections['option_loop']['index_prev'] = $this->_sections['option_loop']['index'] - $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['index_next'] = $this->_sections['option_loop']['index'] + $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['first']      = ($this->_sections['option_loop']['iteration'] == 1);
$this->_sections['option_loop']['last']       = ($this->_sections['option_loop']['iteration'] == $this->_sections['option_loop']['total']);
?>
          <?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dependency'] == 1): ?>

	    	    <?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_type'] == 3): ?>
              <div id='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_option<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
' style='margin: 5px 5px 10px 5px;<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value'] != $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> display: none;<?php endif; ?>'>
              <?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_title']); 
 if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_required'] != 0): ?>*<?php endif; ?>
              <select name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_id']; ?>
'>
	        <option value='-1'></option>
	        	        <?php unset($this->_sections['option2_loop']);
$this->_sections['option2_loop']['name'] = 'option2_loop';
$this->_sections['option2_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option2_loop']['show'] = true;
$this->_sections['option2_loop']['max'] = $this->_sections['option2_loop']['loop'];
$this->_sections['option2_loop']['step'] = 1;
$this->_sections['option2_loop']['start'] = $this->_sections['option2_loop']['step'] > 0 ? 0 : $this->_sections['option2_loop']['loop']-1;
if ($this->_sections['option2_loop']['show']) {
    $this->_sections['option2_loop']['total'] = $this->_sections['option2_loop']['loop'];
    if ($this->_sections['option2_loop']['total'] == 0)
        $this->_sections['option2_loop']['show'] = false;
} else
    $this->_sections['option2_loop']['total'] = 0;
if ($this->_sections['option2_loop']['show']):

            for ($this->_sections['option2_loop']['index'] = $this->_sections['option2_loop']['start'], $this->_sections['option2_loop']['iteration'] = 1;
                 $this->_sections['option2_loop']['iteration'] <= $this->_sections['option2_loop']['total'];
                 $this->_sections['option2_loop']['index'] += $this->_sections['option2_loop']['step'], $this->_sections['option2_loop']['iteration']++):
$this->_sections['option2_loop']['rownum'] = $this->_sections['option2_loop']['iteration'];
$this->_sections['option2_loop']['index_prev'] = $this->_sections['option2_loop']['index'] - $this->_sections['option2_loop']['step'];
$this->_sections['option2_loop']['index_next'] = $this->_sections['option2_loop']['index'] + $this->_sections['option2_loop']['step'];
$this->_sections['option2_loop']['first']      = ($this->_sections['option2_loop']['iteration'] == 1);
$this->_sections['option2_loop']['last']       = ($this->_sections['option2_loop']['iteration'] == $this->_sections['option2_loop']['total']);
?>
	          <option id='op' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options'][$this->_sections['option2_loop']['index']]['value']; ?>
'<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options'][$this->_sections['option2_loop']['index']]['value'] == $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_value']): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options'][$this->_sections['option2_loop']['index']]['label']); ?></option>
	        <?php endfor; endif; ?>
	      </select>
              </div>	  

	    	    <?php else: ?>
              <div id='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_option<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
' style='margin: 5px 5px 10px 5px;<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value'] != $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> display: none;<?php endif; ?>'>
              <?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_title']); 
 if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_required'] != 0): ?>*<?php endif; ?>
             <input type='text' class='text' name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_id']; ?>
' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_value']; ?>
' style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_style']; ?>
' maxlength='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_maxlength']; ?>
'>
              </div>
	    <?php endif; ?>

          <?php endif; ?>
        <?php endfor; endif; ?>
        </div>
    


            <?php elseif ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 4): ?>
    
                <div id='field_options_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'>
        <?php unset($this->_sections['option_loop']);
$this->_sections['option_loop']['name'] = 'option_loop';
$this->_sections['option_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option_loop']['show'] = true;
$this->_sections['option_loop']['max'] = $this->_sections['option_loop']['loop'];
$this->_sections['option_loop']['step'] = 1;
$this->_sections['option_loop']['start'] = $this->_sections['option_loop']['step'] > 0 ? 0 : $this->_sections['option_loop']['loop']-1;
if ($this->_sections['option_loop']['show']) {
    $this->_sections['option_loop']['total'] = $this->_sections['option_loop']['loop'];
    if ($this->_sections['option_loop']['total'] == 0)
        $this->_sections['option_loop']['show'] = false;
} else
    $this->_sections['option_loop']['total'] = 0;
if ($this->_sections['option_loop']['show']):

            for ($this->_sections['option_loop']['index'] = $this->_sections['option_loop']['start'], $this->_sections['option_loop']['iteration'] = 1;
                 $this->_sections['option_loop']['iteration'] <= $this->_sections['option_loop']['total'];
                 $this->_sections['option_loop']['index'] += $this->_sections['option_loop']['step'], $this->_sections['option_loop']['iteration']++):
$this->_sections['option_loop']['rownum'] = $this->_sections['option_loop']['iteration'];
$this->_sections['option_loop']['index_prev'] = $this->_sections['option_loop']['index'] - $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['index_next'] = $this->_sections['option_loop']['index'] + $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['first']      = ($this->_sections['option_loop']['iteration'] == 1);
$this->_sections['option_loop']['last']       = ($this->_sections['option_loop']['iteration'] == $this->_sections['option_loop']['total']);
?>
          <div>
          <input type='radio' class='radio' onclick="ShowHideDeps('<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
', '<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
');" style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
' name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' id='label_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
'<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value'] == $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> CHECKED<?php endif; ?>>
          <label for='label_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
'><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['label']); ?></label>
          </div>

                    <?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dependency'] == 1): ?>

	    	    <?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_type'] == 3): ?>
              <div id='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_option<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
' style='margin: 0px 5px 10px 23px;<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value'] != $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> display: none;<?php endif; ?>'>
              <?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_title']); 
 if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_required'] != 0): ?>*<?php endif; ?>
              <select name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_id']; ?>
'>
	        <option value='-1'></option>
	        	        <?php unset($this->_sections['option2_loop']);
$this->_sections['option2_loop']['name'] = 'option2_loop';
$this->_sections['option2_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option2_loop']['show'] = true;
$this->_sections['option2_loop']['max'] = $this->_sections['option2_loop']['loop'];
$this->_sections['option2_loop']['step'] = 1;
$this->_sections['option2_loop']['start'] = $this->_sections['option2_loop']['step'] > 0 ? 0 : $this->_sections['option2_loop']['loop']-1;
if ($this->_sections['option2_loop']['show']) {
    $this->_sections['option2_loop']['total'] = $this->_sections['option2_loop']['loop'];
    if ($this->_sections['option2_loop']['total'] == 0)
        $this->_sections['option2_loop']['show'] = false;
} else
    $this->_sections['option2_loop']['total'] = 0;
if ($this->_sections['option2_loop']['show']):

            for ($this->_sections['option2_loop']['index'] = $this->_sections['option2_loop']['start'], $this->_sections['option2_loop']['iteration'] = 1;
                 $this->_sections['option2_loop']['iteration'] <= $this->_sections['option2_loop']['total'];
                 $this->_sections['option2_loop']['index'] += $this->_sections['option2_loop']['step'], $this->_sections['option2_loop']['iteration']++):
$this->_sections['option2_loop']['rownum'] = $this->_sections['option2_loop']['iteration'];
$this->_sections['option2_loop']['index_prev'] = $this->_sections['option2_loop']['index'] - $this->_sections['option2_loop']['step'];
$this->_sections['option2_loop']['index_next'] = $this->_sections['option2_loop']['index'] + $this->_sections['option2_loop']['step'];
$this->_sections['option2_loop']['first']      = ($this->_sections['option2_loop']['iteration'] == 1);
$this->_sections['option2_loop']['last']       = ($this->_sections['option2_loop']['iteration'] == $this->_sections['option2_loop']['total']);
?>
	          <option id='op' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options'][$this->_sections['option2_loop']['index']]['value']; ?>
'<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options'][$this->_sections['option2_loop']['index']]['value'] == $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_value']): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options'][$this->_sections['option2_loop']['index']]['label']); ?></option>
	        <?php endfor; endif; ?>
	      </select>
              </div>	  

	    	    <?php else: ?>
              <div id='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_option<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
' style='margin: 0px 5px 10px 23px;<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value'] != $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> display: none;<?php endif; ?>'>
              <?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_title']); 
 if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_required'] != 0): ?>*<?php endif; ?>
             <input type='text' class='text' name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_id']; ?>
' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_value']; ?>
' style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_style']; ?>
' maxlength='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_maxlength']; ?>
'>
              </div>
	    <?php endif; ?>

          <?php endif; ?>

        <?php endfor; endif; ?>
        </div>



            <?php elseif ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 5): ?>
        <div>
        <select name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_1' style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
'>
        <?php unset($this->_sections['date1']);
$this->_sections['date1']['name'] = 'date1';
$this->_sections['date1']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['date1']['show'] = true;
$this->_sections['date1']['max'] = $this->_sections['date1']['loop'];
$this->_sections['date1']['step'] = 1;
$this->_sections['date1']['start'] = $this->_sections['date1']['step'] > 0 ? 0 : $this->_sections['date1']['loop']-1;
if ($this->_sections['date1']['show']) {
    $this->_sections['date1']['total'] = $this->_sections['date1']['loop'];
    if ($this->_sections['date1']['total'] == 0)
        $this->_sections['date1']['show'] = false;
} else
    $this->_sections['date1']['total'] = 0;
if ($this->_sections['date1']['show']):

            for ($this->_sections['date1']['index'] = $this->_sections['date1']['start'], $this->_sections['date1']['iteration'] = 1;
                 $this->_sections['date1']['iteration'] <= $this->_sections['date1']['total'];
                 $this->_sections['date1']['index'] += $this->_sections['date1']['step'], $this->_sections['date1']['iteration']++):
$this->_sections['date1']['rownum'] = $this->_sections['date1']['iteration'];
$this->_sections['date1']['index_prev'] = $this->_sections['date1']['index'] - $this->_sections['date1']['step'];
$this->_sections['date1']['index_next'] = $this->_sections['date1']['index'] + $this->_sections['date1']['step'];
$this->_sections['date1']['first']      = ($this->_sections['date1']['iteration'] == 1);
$this->_sections['date1']['last']       = ($this->_sections['date1']['iteration'] == $this->_sections['date1']['total']);
?>
          <option value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array1'][$this->_sections['date1']['index']]['value']; ?>
'<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array1'][$this->_sections['date1']['index']]['selected']; ?>
><?php if ($this->_sections['date1']['first']): ?>[ <?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array1'][$this->_sections['date1']['index']]['name']); ?> ]<?php else: 
 echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array1'][$this->_sections['date1']['index']]['name']; 
 endif; ?></option>
        <?php endfor; endif; ?>
        </select>

        <select name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_2' style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
'>
        <?php unset($this->_sections['date2']);
$this->_sections['date2']['name'] = 'date2';
$this->_sections['date2']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['date2']['show'] = true;
$this->_sections['date2']['max'] = $this->_sections['date2']['loop'];
$this->_sections['date2']['step'] = 1;
$this->_sections['date2']['start'] = $this->_sections['date2']['step'] > 0 ? 0 : $this->_sections['date2']['loop']-1;
if ($this->_sections['date2']['show']) {
    $this->_sections['date2']['total'] = $this->_sections['date2']['loop'];
    if ($this->_sections['date2']['total'] == 0)
        $this->_sections['date2']['show'] = false;
} else
    $this->_sections['date2']['total'] = 0;
if ($this->_sections['date2']['show']):

            for ($this->_sections['date2']['index'] = $this->_sections['date2']['start'], $this->_sections['date2']['iteration'] = 1;
                 $this->_sections['date2']['iteration'] <= $this->_sections['date2']['total'];
                 $this->_sections['date2']['index'] += $this->_sections['date2']['step'], $this->_sections['date2']['iteration']++):
$this->_sections['date2']['rownum'] = $this->_sections['date2']['iteration'];
$this->_sections['date2']['index_prev'] = $this->_sections['date2']['index'] - $this->_sections['date2']['step'];
$this->_sections['date2']['index_next'] = $this->_sections['date2']['index'] + $this->_sections['date2']['step'];
$this->_sections['date2']['first']      = ($this->_sections['date2']['iteration'] == 1);
$this->_sections['date2']['last']       = ($this->_sections['date2']['iteration'] == $this->_sections['date2']['total']);
?>
          <option value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array2'][$this->_sections['date2']['index']]['value']; ?>
'<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array2'][$this->_sections['date2']['index']]['selected']; ?>
><?php if ($this->_sections['date2']['first']): ?>[ <?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array2'][$this->_sections['date2']['index']]['name']); ?> ]<?php else: 
 echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array2'][$this->_sections['date2']['index']]['name']; 
 endif; ?></option>
        <?php endfor; endif; ?>
        </select>

        <select name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_3' style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
'>
        <?php unset($this->_sections['date3']);
$this->_sections['date3']['name'] = 'date3';
$this->_sections['date3']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['date3']['show'] = true;
$this->_sections['date3']['max'] = $this->_sections['date3']['loop'];
$this->_sections['date3']['step'] = 1;
$this->_sections['date3']['start'] = $this->_sections['date3']['step'] > 0 ? 0 : $this->_sections['date3']['loop']-1;
if ($this->_sections['date3']['show']) {
    $this->_sections['date3']['total'] = $this->_sections['date3']['loop'];
    if ($this->_sections['date3']['total'] == 0)
        $this->_sections['date3']['show'] = false;
} else
    $this->_sections['date3']['total'] = 0;
if ($this->_sections['date3']['show']):

            for ($this->_sections['date3']['index'] = $this->_sections['date3']['start'], $this->_sections['date3']['iteration'] = 1;
                 $this->_sections['date3']['iteration'] <= $this->_sections['date3']['total'];
                 $this->_sections['date3']['index'] += $this->_sections['date3']['step'], $this->_sections['date3']['iteration']++):
$this->_sections['date3']['rownum'] = $this->_sections['date3']['iteration'];
$this->_sections['date3']['index_prev'] = $this->_sections['date3']['index'] - $this->_sections['date3']['step'];
$this->_sections['date3']['index_next'] = $this->_sections['date3']['index'] + $this->_sections['date3']['step'];
$this->_sections['date3']['first']      = ($this->_sections['date3']['iteration'] == 1);
$this->_sections['date3']['last']       = ($this->_sections['date3']['iteration'] == $this->_sections['date3']['total']);
?>
          <option value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array3'][$this->_sections['date3']['index']]['value']; ?>
'<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array3'][$this->_sections['date3']['index']]['selected']; ?>
><?php if ($this->_sections['date3']['first']): ?>[ <?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array3'][$this->_sections['date3']['index']]['name']); ?> ]<?php else: 
 echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array3'][$this->_sections['date3']['index']]['name']; 
 endif; ?></option>
        <?php endfor; endif; ?>
        </select>
        </div>



            <?php elseif ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 6): ?>
    
                <div id='field_options_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'>
        <?php unset($this->_sections['option_loop']);
$this->_sections['option_loop']['name'] = 'option_loop';
$this->_sections['option_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option_loop']['show'] = true;
$this->_sections['option_loop']['max'] = $this->_sections['option_loop']['loop'];
$this->_sections['option_loop']['step'] = 1;
$this->_sections['option_loop']['start'] = $this->_sections['option_loop']['step'] > 0 ? 0 : $this->_sections['option_loop']['loop']-1;
if ($this->_sections['option_loop']['show']) {
    $this->_sections['option_loop']['total'] = $this->_sections['option_loop']['loop'];
    if ($this->_sections['option_loop']['total'] == 0)
        $this->_sections['option_loop']['show'] = false;
} else
    $this->_sections['option_loop']['total'] = 0;
if ($this->_sections['option_loop']['show']):

            for ($this->_sections['option_loop']['index'] = $this->_sections['option_loop']['start'], $this->_sections['option_loop']['iteration'] = 1;
                 $this->_sections['option_loop']['iteration'] <= $this->_sections['option_loop']['total'];
                 $this->_sections['option_loop']['index'] += $this->_sections['option_loop']['step'], $this->_sections['option_loop']['iteration']++):
$this->_sections['option_loop']['rownum'] = $this->_sections['option_loop']['iteration'];
$this->_sections['option_loop']['index_prev'] = $this->_sections['option_loop']['index'] - $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['index_next'] = $this->_sections['option_loop']['index'] + $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['first']      = ($this->_sections['option_loop']['iteration'] == 1);
$this->_sections['option_loop']['last']       = ($this->_sections['option_loop']['iteration'] == $this->_sections['option_loop']['total']);
?>
          <div>
          <input type='checkbox' onclick="ShowHideDeps('<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
', '<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
', '<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type']; ?>
');" style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
' name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
[]' id='label_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
'<?php if (((is_array($_tmp=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']) : in_array($_tmp, $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']))): ?> CHECKED<?php endif; ?>>
          <label for='label_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
'><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['label']); ?></label>
          </div>

                    <?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dependency'] == 1): ?>
	    	    <?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_type'] == 3): ?>
              <div id='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_option<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
' style='margin: 0px 5px 10px 23px;<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value'] != $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> display: none;<?php endif; ?>'>
              <?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_title']); 
 if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_required'] != 0): ?>*<?php endif; ?>
              <select name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_id']; ?>
'>
	        <option value='-1'></option>
	        	        <?php unset($this->_sections['option2_loop']);
$this->_sections['option2_loop']['name'] = 'option2_loop';
$this->_sections['option2_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option2_loop']['show'] = true;
$this->_sections['option2_loop']['max'] = $this->_sections['option2_loop']['loop'];
$this->_sections['option2_loop']['step'] = 1;
$this->_sections['option2_loop']['start'] = $this->_sections['option2_loop']['step'] > 0 ? 0 : $this->_sections['option2_loop']['loop']-1;
if ($this->_sections['option2_loop']['show']) {
    $this->_sections['option2_loop']['total'] = $this->_sections['option2_loop']['loop'];
    if ($this->_sections['option2_loop']['total'] == 0)
        $this->_sections['option2_loop']['show'] = false;
} else
    $this->_sections['option2_loop']['total'] = 0;
if ($this->_sections['option2_loop']['show']):

            for ($this->_sections['option2_loop']['index'] = $this->_sections['option2_loop']['start'], $this->_sections['option2_loop']['iteration'] = 1;
                 $this->_sections['option2_loop']['iteration'] <= $this->_sections['option2_loop']['total'];
                 $this->_sections['option2_loop']['index'] += $this->_sections['option2_loop']['step'], $this->_sections['option2_loop']['iteration']++):
$this->_sections['option2_loop']['rownum'] = $this->_sections['option2_loop']['iteration'];
$this->_sections['option2_loop']['index_prev'] = $this->_sections['option2_loop']['index'] - $this->_sections['option2_loop']['step'];
$this->_sections['option2_loop']['index_next'] = $this->_sections['option2_loop']['index'] + $this->_sections['option2_loop']['step'];
$this->_sections['option2_loop']['first']      = ($this->_sections['option2_loop']['iteration'] == 1);
$this->_sections['option2_loop']['last']       = ($this->_sections['option2_loop']['iteration'] == $this->_sections['option2_loop']['total']);
?>
	          <option id='op' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options'][$this->_sections['option2_loop']['index']]['value']; ?>
'<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options'][$this->_sections['option2_loop']['index']]['value'] == $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_value']): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_options'][$this->_sections['option2_loop']['index']]['label']); ?></option>
	        <?php endfor; endif; ?>
	      </select>
              </div>	  

	    	    <?php else: ?>
              <div id='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_option<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value']; ?>
' style='margin: 0px 5px 10px 23px;<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['value'] != $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> display: none;<?php endif; ?>'>
              <?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_title']); 
 if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_required'] != 0): ?>*<?php endif; ?>
             <input type='text' class='text' name='field_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_id']; ?>
' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_value']; ?>
' style='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_style']; ?>
' maxlength='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_maxlength']; ?>
'>
              </div>
	    <?php endif; ?>
          <?php endif; ?>

        <?php endfor; endif; ?>
        </div>

      <?php endif; ?>

      <div class='form_desc'><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_desc']); ?></div>
      <?php ob_start(); 
 echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_error']); 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('field_error', ob_get_contents());ob_end_clean(); ?>
      <?php if ($this->_tpl_vars['field_error'] != ""): ?><div class='form_error'><img src='./images/icons/error16.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['field_error']; ?>
</div><?php endif; ?>
    </td>
    </tr>
    <?php endfor; endif; ?>
  </table>
  <br>
  <?php endif; ?>
  <?php endfor; endif; ?>
  <?php endfor; endif; ?>

  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='form1' width='100'>&nbsp;</td>
  <td class='form2'><input type='submit' class='button' value='<?php echo SELanguage::_get(693); ?>'></td>
  </tr>
  </table>
  <input type='hidden' name='task' value='<?php echo $this->_tpl_vars['next_task']; ?>
'>
  <input type='hidden' name='step' value='<?php echo $this->_tpl_vars['step']; ?>
'>
  <input type='hidden' name='signup_email' value='<?php echo $this->_tpl_vars['signup_email']; ?>
'>
  <input type='hidden' name='signup_password' value='<?php echo $this->_tpl_vars['signup_password']; ?>
'>
  <input type='hidden' name='signup_password2' value='<?php echo $this->_tpl_vars['signup_password2']; ?>
'>
  <input type='hidden' name='signup_username' value='<?php echo $this->_tpl_vars['signup_username']; ?>
'>
  <input type='hidden' name='signup_timezone' value='<?php echo $this->_tpl_vars['signup_timezone']; ?>
'>
  <input type='hidden' name='signup_lang' value='<?php echo $this->_tpl_vars['signup_lang']; ?>
'>
  <input type='hidden' name='signup_invite' value='<?php echo $this->_tpl_vars['signup_invite']; ?>
'>
  <input type='hidden' name='signup_secure' value='<?php echo $this->_tpl_vars['signup_secure']; ?>
'>
  <input type='hidden' name='signup_agree' value='<?php echo $this->_tpl_vars['signup_agree']; ?>
'>
  <input type='hidden' name='signup_cat' value='<?php echo $this->_tpl_vars['signup_cat']; ?>
'>
  </form>










<?php else: ?>
  <img src='./images/icons/signup48.gif' border='0' class='icon_big' />
  <div class='page_header'><?php echo SELanguage::_get(679); ?></div>
  <div><?php echo SELanguage::_get(680); ?></div>
  <br />
  <br />

    <?php if ($this->_tpl_vars['is_error'] != 0): ?>
    <table cellpadding='0' cellspacing='0'>
      <tr>
        <td class='result'>
          <div class='error'>
            <img src='./images/error.gif' border='0' class='icon' />
            <?php echo SELanguage::_get($this->_tpl_vars['is_error']); ?>
          </div>
        </td>
      </tr>
    </table>
    <br />
  <?php endif; ?>

  <form action='signup.php' method='POST'>
  <div class='signup_header'><?php echo SELanguage::_get(681); ?></div>
  <table cellpadding='0' cellspacing='0'>
    <tr>
      <td class='form1' width='100'><?php echo SELanguage::_get(37); ?></td>
      <td class='form2'>
        <input name='signup_email' type='text' class='text' maxlength='70' size='40' value='<?php echo $this->_tpl_vars['signup_email']; ?>
' />
        <div class='form_desc'><?php echo SELanguage::_get(682); ?></div>
      </td>
    </tr>

  <?php if ($this->_tpl_vars['setting']['setting_signup_randpass'] == 0): ?>
    <tr>
      <td class='form1'><?php echo SELanguage::_get(29); ?>:</td>
      <td class='form2'>
        <input name='signup_password' type='password' class='text' maxlength='50' size='40' value='<?php echo $this->_tpl_vars['signup_password']; ?>
'>
        <div class='form_desc'><?php echo SELanguage::_get(53); ?></div>
      </td>
    </tr>
    <tr>
      <td class='form1'><?php echo SELanguage::_get(266); ?>:</td>
      <td class='form2'>
        <input name='signup_password2' type='password' class='text' maxlength='50' size='40' value='<?php echo $this->_tpl_vars['signup_password2']; ?>
'>
        <div class='form_desc'><?php echo SELanguage::_get(683); ?></div>
      </td>
    </tr>
  <?php else: ?>
    <input type='hidden' name='signup_password' value=''>
    <input type='hidden' name='signup_password2' value=''>
  <?php endif; ?>
  </table>
  <br />
  
  
  <div class='signup_header'><?php echo SELanguage::_get(684); ?></div>
  <table cellpadding='0' cellspacing='0'>
  <?php if ($this->_tpl_vars['setting']['setting_username']): ?>
    <tr>
      <td class='form1'><?php echo SELanguage::_get(28); ?>:</td>
      <td class='form2'>
        <input name='signup_username' type='text' class='text' maxlength='50' size='40' value='<?php echo $this->_tpl_vars['signup_username']; ?>
'>
        <?php ob_start(); 
 echo SELanguage::_get(685); 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tip', ob_get_contents());ob_end_clean(); ?>
        <img src='./images/icons/tip.gif' border='0' class='Tips1' title="<?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
">
        <div class='form_desc'><?php echo SELanguage::_get(686); ?></div>
      </td>
    </tr>
  <?php endif; ?>
  <?php if (count($this->_tpl_vars['cats']) > 1): ?>
    <tr>
      <td class='form1'><?php echo SELanguage::_get(709); ?>:</td>
      <td class='form2'>
        <select name='signup_cat'>
        <?php unset($this->_sections['cat_loop']);
$this->_sections['cat_loop']['name'] = 'cat_loop';
$this->_sections['cat_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cat_loop']['show'] = true;
$this->_sections['cat_loop']['max'] = $this->_sections['cat_loop']['loop'];
$this->_sections['cat_loop']['step'] = 1;
$this->_sections['cat_loop']['start'] = $this->_sections['cat_loop']['step'] > 0 ? 0 : $this->_sections['cat_loop']['loop']-1;
if ($this->_sections['cat_loop']['show']) {
    $this->_sections['cat_loop']['total'] = $this->_sections['cat_loop']['loop'];
    if ($this->_sections['cat_loop']['total'] == 0)
        $this->_sections['cat_loop']['show'] = false;
} else
    $this->_sections['cat_loop']['total'] = 0;
if ($this->_sections['cat_loop']['show']):

            for ($this->_sections['cat_loop']['index'] = $this->_sections['cat_loop']['start'], $this->_sections['cat_loop']['iteration'] = 1;
                 $this->_sections['cat_loop']['iteration'] <= $this->_sections['cat_loop']['total'];
                 $this->_sections['cat_loop']['index'] += $this->_sections['cat_loop']['step'], $this->_sections['cat_loop']['iteration']++):
$this->_sections['cat_loop']['rownum'] = $this->_sections['cat_loop']['iteration'];
$this->_sections['cat_loop']['index_prev'] = $this->_sections['cat_loop']['index'] - $this->_sections['cat_loop']['step'];
$this->_sections['cat_loop']['index_next'] = $this->_sections['cat_loop']['index'] + $this->_sections['cat_loop']['step'];
$this->_sections['cat_loop']['first']      = ($this->_sections['cat_loop']['iteration'] == 1);
$this->_sections['cat_loop']['last']       = ($this->_sections['cat_loop']['iteration'] == $this->_sections['cat_loop']['total']);
?>
          <option value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['cat_id']; ?>
'<?php if ($this->_tpl_vars['signup_cat'] == $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['cat_id']): ?> selected='selected'<?php endif; ?>><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['cat_title']); ?></option>
        <?php endfor; endif; ?>
        </select>
      </td>
    </tr>
  <?php endif; ?>
  <tr>
    <td class='form1' width='100'><?php echo SELanguage::_get(206); ?>:</td>
    <td class='form2'>
      <select name='signup_timezone'>
      <option value='-8'<?php if ($this->_tpl_vars['signup_timezone'] == "-8"): ?> SELECTED<?php endif; ?>>Pacific Time (US & Canada)</option>
      <option value='-7'<?php if ($this->_tpl_vars['signup_timezone'] == "-7"): ?> SELECTED<?php endif; ?>>Mountain Time (US & Canada)</option>
      <option value='-6'<?php if ($this->_tpl_vars['signup_timezone'] == "-6"): ?> SELECTED<?php endif; ?>>Central Time (US & Canada)</option>
      <option value='-5'<?php if ($this->_tpl_vars['signup_timezone'] == "-5"): ?> SELECTED<?php endif; ?>>Eastern Time (US & Canada)</option>
      <option value='-4'<?php if ($this->_tpl_vars['signup_timezone'] == "-4"): ?> SELECTED<?php endif; ?>>Atlantic Time (Canada)</option>
      <option value='-9'<?php if ($this->_tpl_vars['signup_timezone'] == "-9"): ?> SELECTED<?php endif; ?>>Alaska (US & Canada)</option>
      <option value='-10'<?php if ($this->_tpl_vars['signup_timezone'] == "-10"): ?> SELECTED<?php endif; ?>>Hawaii (US)</option>
      <option value='-11'<?php if ($this->_tpl_vars['signup_timezone'] == "-11"): ?> SELECTED<?php endif; ?>>Midway Island, Samoa</option>
      <option value='-12'<?php if ($this->_tpl_vars['signup_timezone'] == "-12"): ?> SELECTED<?php endif; ?>>Eniwetok, Kwajalein</option>
      <option value='-3.3'<?php if ($this->_tpl_vars['signup_timezone'] == "-3.3"): ?> SELECTED<?php endif; ?>>Newfoundland</option>
      <option value='-3'<?php if ($this->_tpl_vars['signup_timezone'] == "-3"): ?> SELECTED<?php endif; ?>>Brasilia, Buenos Aires, Georgetown</option>
      <option value='-2'<?php if ($this->_tpl_vars['signup_timezone'] == "-2"): ?> SELECTED<?php endif; ?>>Mid-Atlantic</option>
      <option value='-1'<?php if ($this->_tpl_vars['signup_timezone'] == "-1"): ?> SELECTED<?php endif; ?>>Azores, Cape Verde Is.</option>
      <option value='0'<?php if ($this->_tpl_vars['signup_timezone'] == '0'): ?> SELECTED<?php endif; ?>>Greenwich Mean Time (Lisbon, London)</option>
      <option value='1'<?php if ($this->_tpl_vars['signup_timezone'] == '1'): ?> SELECTED<?php endif; ?>>Amsterdam, Berlin, Paris, Rome, Madrid</option>
      <option value='2'<?php if ($this->_tpl_vars['signup_timezone'] == '2'): ?> SELECTED<?php endif; ?>>Athens, Helsinki, Istanbul, Cairo, E. Europe</option>
      <option value='3'<?php if ($this->_tpl_vars['signup_timezone'] == '3'): ?> SELECTED<?php endif; ?>>Baghdad, Kuwait, Nairobi, Moscow</option>
      <option value='3.3'<?php if ($this->_tpl_vars['signup_timezone'] == "3.3"): ?> SELECTED<?php endif; ?>>Tehran</option>
      <option value='4'<?php if ($this->_tpl_vars['signup_timezone'] == '4'): ?> SELECTED<?php endif; ?>>Abu Dhabi, Kazan, Muscat</option>
      <option value='4.3'<?php if ($this->_tpl_vars['signup_timezone'] == "4.3"): ?> SELECTED<?php endif; ?>>Kabul</option>
      <option value='5'<?php if ($this->_tpl_vars['signup_timezone'] == '5'): ?> SELECTED<?php endif; ?>>Islamabad, Karachi, Tashkent</option>
      <option value='5.5'<?php if ($this->_tpl_vars['signup_timezone'] == "5.5"): ?> SELECTED<?php endif; ?>>Bombay, Calcutta, New Delhi</option>
      <option value='6'<?php if ($this->_tpl_vars['signup_timezone'] == '6'): ?> SELECTED<?php endif; ?>>Almaty, Dhaka</option>
      <option value='7'<?php if ($this->_tpl_vars['signup_timezone'] == '7'): ?> SELECTED<?php endif; ?>>Bangkok, Jakarta, Hanoi</option>
      <option value='8'<?php if ($this->_tpl_vars['signup_timezone'] == '8'): ?> SELECTED<?php endif; ?>>Beijing, Hong Kong, Singapore, Taipei</option>
      <option value='9'<?php if ($this->_tpl_vars['signup_timezone'] == '9'): ?> SELECTED<?php endif; ?>>Tokyo, Osaka, Sapporto, Seoul, Yakutsk</option>
      <option value='9.3'<?php if ($this->_tpl_vars['signup_timezone'] == "9.3"): ?> SELECTED<?php endif; ?>>Adelaide, Darwin</option>
      <option value='10'<?php if ($this->_tpl_vars['signup_timezone'] == '10'): ?> SELECTED<?php endif; ?>>Brisbane, Melbourne, Sydney, Guam</option>
      <option value='11'<?php if ($this->_tpl_vars['signup_timezone'] == '11'): ?> SELECTED<?php endif; ?>>Magadan, Soloman Is., New Caledonia</option>
      <option value='12'<?php if ($this->_tpl_vars['signup_timezone'] == '12'): ?> SELECTED<?php endif; ?>>Fiji, Kamchatka, Marshall Is., Wellington</option>
      </select>
    </td>
  </tr>
  <?php if ($this->_tpl_vars['setting']['setting_lang_allow'] == 1): ?>
    <tr>
      <td class='form1'><?php echo SELanguage::_get(687); ?>:</td>
      <td class='form2'>
        <select name='signup_lang'>
          <?php unset($this->_sections['lang_loop']);
$this->_sections['lang_loop']['name'] = 'lang_loop';
$this->_sections['lang_loop']['loop'] = is_array($_loop=$this->_tpl_vars['lang_packlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['lang_loop']['show'] = true;
$this->_sections['lang_loop']['max'] = $this->_sections['lang_loop']['loop'];
$this->_sections['lang_loop']['step'] = 1;
$this->_sections['lang_loop']['start'] = $this->_sections['lang_loop']['step'] > 0 ? 0 : $this->_sections['lang_loop']['loop']-1;
if ($this->_sections['lang_loop']['show']) {
    $this->_sections['lang_loop']['total'] = $this->_sections['lang_loop']['loop'];
    if ($this->_sections['lang_loop']['total'] == 0)
        $this->_sections['lang_loop']['show'] = false;
} else
    $this->_sections['lang_loop']['total'] = 0;
if ($this->_sections['lang_loop']['show']):

            for ($this->_sections['lang_loop']['index'] = $this->_sections['lang_loop']['start'], $this->_sections['lang_loop']['iteration'] = 1;
                 $this->_sections['lang_loop']['iteration'] <= $this->_sections['lang_loop']['total'];
                 $this->_sections['lang_loop']['index'] += $this->_sections['lang_loop']['step'], $this->_sections['lang_loop']['iteration']++):
$this->_sections['lang_loop']['rownum'] = $this->_sections['lang_loop']['iteration'];
$this->_sections['lang_loop']['index_prev'] = $this->_sections['lang_loop']['index'] - $this->_sections['lang_loop']['step'];
$this->_sections['lang_loop']['index_next'] = $this->_sections['lang_loop']['index'] + $this->_sections['lang_loop']['step'];
$this->_sections['lang_loop']['first']      = ($this->_sections['lang_loop']['iteration'] == 1);
$this->_sections['lang_loop']['last']       = ($this->_sections['lang_loop']['iteration'] == $this->_sections['lang_loop']['total']);
?>
            <option value='<?php echo $this->_tpl_vars['lang_packlist'][$this->_sections['lang_loop']['index']]['language_id']; ?>
'<?php if ($this->_tpl_vars['lang_packlist'][$this->_sections['lang_loop']['index']]['language_default'] == 1): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['lang_packlist'][$this->_sections['lang_loop']['index']]['language_name']; ?>
</option>
          <?php endfor; endif; ?>
        </select>
      </td>
    </tr>
  <?php endif; ?>
  
  
  <?php if ($this->_tpl_vars['setting']['setting_signup_code'] || $this->_tpl_vars['setting']['setting_signup_tos'] || $this->_tpl_vars['setting']['setting_signup_invite']): ?>
  </table>
  <br />
  
  <div class='signup_header'><?php echo SELanguage::_get(688); ?></div>
  <table cellpadding='0' cellspacing='0'>
  <?php endif; ?>
  
    
    <?php if ($this->_tpl_vars['setting']['setting_signup_invite']): ?>
    <tr>
      <td class='form1' width='100'><?php echo SELanguage::_get(689); ?></td>
      <td class='form2'><input type='text' name='signup_invite' value='<?php echo $this->_tpl_vars['signup_invite']; ?>
' class='text' size='10' maxlength='10'></td>
    </tr>
    <?php endif; ?>
    
    <?php if ($this->_tpl_vars['setting']['setting_signup_code']): ?>
    <tr>
      <td class='form1' width='100'><?php echo SELanguage::_get(690); ?></td>
      <td class='form2'>
        <table cellpadding='0' cellspacing='0'>
          <tr>
            <td><input type='text' name='signup_secure' class='text' size='6' maxlength='10'>&nbsp;</td>
            <td>
              <table cellpadding='0' cellspacing='0'>
                <tr>
                  <td align='center'>
                    <img src='./images/secure.php' id='secure_image' border='0' height='20' width='67' class='signup_code'><br />
                    <a href="javascript:void(0);" onClick="$('secure_image').src = './images/secure.php?' + (new Date()).getTime();"><?php echo SELanguage::_get(975); ?></a>
                  </td>
                  <td><?php ob_start(); 
 echo SELanguage::_get(691); 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tip', ob_get_contents());ob_end_clean(); ?><img src='./images/icons/tip.gif' border='0' class='Tips1' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <?php endif; ?>
    
    <?php if ($this->_tpl_vars['setting']['setting_signup_tos']): ?>
    <tr>
      <td class='form1' width='100'>&nbsp;</td>
      <td class='form2'>
        <input type='checkbox' name='signup_agree' id='tos' value='1'<?php if ($this->_tpl_vars['signup_agree'] == 1): ?> CHECKED<?php endif; ?>>
        <label for='tos'> <?php echo SELanguage::_get(692); ?></label>
      </td>
    </tr>
    <?php endif; ?>
    
    <tr>
      <td colspan='2'>&nbsp;</td>
    </tr>
    <tr>
      <td class='form1'>&nbsp;</td>
      <td class='form2'><input type='submit' class='button' value='<?php echo SELanguage::_get(693); ?>'></td>
    </tr>
  </table>
  
  <input type='hidden' name='task' value='<?php echo $this->_tpl_vars['next_task']; ?>
'>
  <input type='hidden' name='step' value='<?php echo $this->_tpl_vars['step']; ?>
'>
  </form>

<?php endif; 
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>