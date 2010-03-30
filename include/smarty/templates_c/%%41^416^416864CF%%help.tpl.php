<?php /* Smarty version 2.6.14, created on 2010-03-29 21:11:01
         compiled from help.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'help.tpl', 28, false),)), $this);
?><?php
SELanguage::_preload_multi(957,958);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<img src='./images/icons/help48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo SELanguage::_get(957); ?></div>
<div><?php echo SELanguage::_get(958); ?></div>
<br />
<br />

<?php echo '
<script type="text/javascript">
<!-- 
  function faq_show(id) {
    if($(id).style.display == \'block\') {
      $(id).style.display = \'none\';
    } else {
      $(id).style.display = \'block\';
      $(\'ajaxframe\').src = \'help.php?task=view&faq_id=\'+id;
    }
  }
//-->
</script>
'; 
 unset($this->_sections['faqcat_loop']);
$this->_sections['faqcat_loop']['name'] = 'faqcat_loop';
$this->_sections['faqcat_loop']['loop'] = is_array($_loop=$this->_tpl_vars['faqcats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['faqcat_loop']['show'] = true;
$this->_sections['faqcat_loop']['max'] = $this->_sections['faqcat_loop']['loop'];
$this->_sections['faqcat_loop']['step'] = 1;
$this->_sections['faqcat_loop']['start'] = $this->_sections['faqcat_loop']['step'] > 0 ? 0 : $this->_sections['faqcat_loop']['loop']-1;
if ($this->_sections['faqcat_loop']['show']) {
    $this->_sections['faqcat_loop']['total'] = $this->_sections['faqcat_loop']['loop'];
    if ($this->_sections['faqcat_loop']['total'] == 0)
        $this->_sections['faqcat_loop']['show'] = false;
} else
    $this->_sections['faqcat_loop']['total'] = 0;
if ($this->_sections['faqcat_loop']['show']):

            for ($this->_sections['faqcat_loop']['index'] = $this->_sections['faqcat_loop']['start'], $this->_sections['faqcat_loop']['iteration'] = 1;
                 $this->_sections['faqcat_loop']['iteration'] <= $this->_sections['faqcat_loop']['total'];
                 $this->_sections['faqcat_loop']['index'] += $this->_sections['faqcat_loop']['step'], $this->_sections['faqcat_loop']['iteration']++):
$this->_sections['faqcat_loop']['rownum'] = $this->_sections['faqcat_loop']['iteration'];
$this->_sections['faqcat_loop']['index_prev'] = $this->_sections['faqcat_loop']['index'] - $this->_sections['faqcat_loop']['step'];
$this->_sections['faqcat_loop']['index_next'] = $this->_sections['faqcat_loop']['index'] + $this->_sections['faqcat_loop']['step'];
$this->_sections['faqcat_loop']['first']      = ($this->_sections['faqcat_loop']['iteration'] == 1);
$this->_sections['faqcat_loop']['last']       = ($this->_sections['faqcat_loop']['iteration'] == $this->_sections['faqcat_loop']['total']);
?>
  <?php if (count($this->_tpl_vars['faqcats'][$this->_sections['faqcat_loop']['index']]['faqs']) != 0): ?>
    <div class='header'><?php echo SELanguage::_get($this->_tpl_vars['faqcats'][$this->_sections['faqcat_loop']['index']]['faqcat_title']); ?></div>
    <?php unset($this->_sections['faq_loop']);
$this->_sections['faq_loop']['name'] = 'faq_loop';
$this->_sections['faq_loop']['loop'] = is_array($_loop=$this->_tpl_vars['faqcats'][$this->_sections['faqcat_loop']['index']]['faqs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['faq_loop']['show'] = true;
$this->_sections['faq_loop']['max'] = $this->_sections['faq_loop']['loop'];
$this->_sections['faq_loop']['step'] = 1;
$this->_sections['faq_loop']['start'] = $this->_sections['faq_loop']['step'] > 0 ? 0 : $this->_sections['faq_loop']['loop']-1;
if ($this->_sections['faq_loop']['show']) {
    $this->_sections['faq_loop']['total'] = $this->_sections['faq_loop']['loop'];
    if ($this->_sections['faq_loop']['total'] == 0)
        $this->_sections['faq_loop']['show'] = false;
} else
    $this->_sections['faq_loop']['total'] = 0;
if ($this->_sections['faq_loop']['show']):

            for ($this->_sections['faq_loop']['index'] = $this->_sections['faq_loop']['start'], $this->_sections['faq_loop']['iteration'] = 1;
                 $this->_sections['faq_loop']['iteration'] <= $this->_sections['faq_loop']['total'];
                 $this->_sections['faq_loop']['index'] += $this->_sections['faq_loop']['step'], $this->_sections['faq_loop']['iteration']++):
$this->_sections['faq_loop']['rownum'] = $this->_sections['faq_loop']['iteration'];
$this->_sections['faq_loop']['index_prev'] = $this->_sections['faq_loop']['index'] - $this->_sections['faq_loop']['step'];
$this->_sections['faq_loop']['index_next'] = $this->_sections['faq_loop']['index'] + $this->_sections['faq_loop']['step'];
$this->_sections['faq_loop']['first']      = ($this->_sections['faq_loop']['iteration'] == 1);
$this->_sections['faq_loop']['last']       = ($this->_sections['faq_loop']['iteration'] == $this->_sections['faq_loop']['total']);
?>
      <div class='faq_questions'>
      <a href="javascript:void(0);" onClick="faq_show('<?php echo $this->_tpl_vars['faqcats'][$this->_sections['faqcat_loop']['index']]['faqs'][$this->_sections['faq_loop']['index']]['faq_id']; ?>
');"><?php echo SELanguage::_get($this->_tpl_vars['faqcats'][$this->_sections['faqcat_loop']['index']]['faqs'][$this->_sections['faq_loop']['index']]['faq_subject']); ?></a><br>
      <div class='faq' style='display: none;' id='<?php echo $this->_tpl_vars['faqcats'][$this->_sections['faqcat_loop']['index']]['faqs'][$this->_sections['faq_loop']['index']]['faq_id']; ?>
'><?php echo SELanguage::_get($this->_tpl_vars['faqcats'][$this->_sections['faqcat_loop']['index']]['faqs'][$this->_sections['faq_loop']['index']]['faq_content']); ?></div>
      </div>
    <?php endfor; endif; ?>
    <br>
  <?php endif; 
 endfor; endif; 
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>