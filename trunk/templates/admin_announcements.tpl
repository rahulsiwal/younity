{include file='admin_header.tpl'}

{* $Id: admin_announcements.tpl 8 2009-01-11 06:02:53Z nico-izo $ *}

<h2>{lang_print id=23}</h2>
{lang_print id=583}
<br><br>
<b><a href='javascript: composeEmail();'>{lang_print id=584}</a></b>
<br>{lang_print id=585}
<br><br>
<b><a href='javascript: postNews();'>{lang_print id=586}</a></b>
<br>{lang_print id=587}

<br><br>

{* LIST PAST ANNOUNCEMENTS *}
{if $news|@count > 0}
  <table cellpadding='0' cellspacing='0' class='list'>
  <tr>
  <td class='header' width='10'>{lang_print id=87}</td>
  <td class='header' width='80%'>{lang_print id=588}</td>
  <td class='header' width='50'>{lang_print id=153}</td>
  </tr>
  {section name=news_loop loop=$news}
    <tr class='{cycle values="background1,background2"}'>
    <td class='item' valign='top'>{$news[news_loop].announcement_id}</td>
    <td class='item'>
      <div><b>{if $news[news_loop].announcement_subject != ""}{$news[news_loop].announcement_subject|truncate:50:"...":true}{else}<i>{lang_print id=589}</i>{/if}</b></div>
      <div>{if $news[news_loop].announcement_date != ""}{$news[news_loop].announcement_date}{else}<i>{lang_print id=590}</i>{/if}</div>
      <br><div>{$news[news_loop].announcement_body|truncate:300:"...":true}</div>
    </td>
    <td class='item' valign='top' nowrap='nowrap' align='right'>
      [ <a href="javascript:editNews('{$news[news_loop].announcement_id}');">{lang_print id=187}</a> ]<br>
      {if $smarty.section.news_loop.last != true}[ <a href='admin_announcements.php?task=moveup&announcement_id={$news[news_loop].announcement_id}'>{lang_print id=591}</a> ]<br>{/if}
      [ <a href="javascript:confirmDelete('{$news[news_loop].announcement_id}');">{lang_print id=155}</a> ]
    </td>
    </tr>
  {/section}
  </table>
{/if}






{* JAVASCRIPT FOR CONFIRMING DELETION *}
{literal}
<script type="text/javascript">
<!-- 
var announcement_id = 0;
function confirmDelete(id) {
  announcement_id = id;
  TB_show('{/literal}{lang_print id=598}{literal}', '#TB_inline?height=150&width=300&inlineId=confirmdelete', '', '../images/trans.gif');

}

function deleteNews() {
  window.location = 'admin_announcements.php?task=deletenews&announcement_id='+announcement_id;
}

function editNews(id) {
  $('announcement_id').value = id;
  var url = 'admin_announcements.php?task=getnews&announcement_id='+id;
  var request = new Request.JSON({secure: false, url: url,
	onComplete: function(jsonObj) {
		edit(jsonObj);
	}
  }).send();
}

function edit(announcement) {
  $('announcement_date').value = announcement.date;
  $('announcement_date').defaultValue = announcement.date;
  $('announcement_subject').value = announcement.subject;
  $('announcement_subject').defaultValue = announcement.subject;
  $('announcement_body').innerHTML = announcement.body;
  TB_show('{/literal}{lang_print id=597}{literal}', '#TB_inline?height=400&width=600&inlineId=postnews', '', '../images/trans.gif');
}

function postNews() {
  $('announcement_date').value = '';
  $('announcement_date').defaultValue = '';
  $('announcement_subject').value = '';
  $('announcement_subject').defaultValue = '';
  $('announcement_body').innerHTML = '';
  TB_show('{/literal}{lang_print id=592}{literal}', '#TB_inline?height=400&width=500&inlineId=postnews', '', '../images/trans.gif');
}


function composeEmail() {
  TB_show('{/literal}{lang_print id=584}{literal}', '#TB_inline?height=450&width=600&inlineId=composeemail', '', '../images/trans.gif');
}

function sendEmail(start, total_users) {
  start = parseInt(start);
  total_users = parseInt(total_users);

  if(start == 0) {
    TB_show('{/literal}{lang_print id=608}{literal}', '#TB_inline?height=150&width=300&inlineId=sendemail', '', '../images/trans.gif', 1);
    setTimeout("ajaxframe.document.emailform.submit();", 3000);
  } else if(start >= total_users) {
    TB_show('{/literal}{lang_print id=610}{literal}', '#TB_inline?height=150&width=300&inlineId=emailcomplete', '', '../images/trans.gif');
  } else {
    setTimeout("ajaxframe.document.emailform.submit();", 3000);
  }
}

//-->
</script>
{/literal}

{* HIDDEN DIV TO DISPLAY CONFIRMATION MESSAGE *}
<div style='display: none;' id='confirmdelete'>
  <div style='margin-top: 10px;'>
    {lang_print id=599}
  </div>
  <br>
  <input type='button' class='button' value='{lang_print id=175}' onClick='parent.TB_remove();parent.deleteNews();'> <input type='button' class='button' value='{lang_print id=39}' onClick='parent.TB_remove();'>
</div>


{* HIDDEN DIV TO DISPLAY POST NEWS ANNOUNCEMENT *}
<div style='display: none;' id='postnews'>
  <form action='admin_announcements.php' method='post' target='_parent'>
  <div style='margin-top: 10px;'>{lang_print id=593}</div>
  <br>
  <b>{lang_print id=88}</b>
  <br><input type='text' name='date' id='announcement_date' size='50' class='text' maxlength='200'>
  <br>{lang_print id=594}
  <br><br>
  <b>{lang_print id=520}</b>
  <br><input type='text' name='subject' id='announcement_subject' size='50' class='text' maxlength='200'>
  <br><br>
  <b>{lang_print id=588}</b> {lang_print id=595}
  <br><textarea name='body' id='announcement_body' class='text' rows='7' cols='80'></textarea>
  <br><br>
  <input type='submit' class='button' value='{lang_print id=596}'>&nbsp;<input type='button' class='button' value='{lang_print id=39}' onClick='parent.TB_remove();'>
  <input type='hidden' name='task' value='postnews'>
  <input type='hidden' name='announcement_id' id='announcement_id' value='0'>
  </form>
</div>


{* HIDDEN DIV TO DISPLAY COMPOSE EMAIL ANNOUNCEMENT *}
<div style='display: none;' id='composeemail'>
  <form action='admin_announcements.php' method='post' target='ajaxframe' onSubmit="{literal}if(this.message.value == ''){ alert('{/literal}{lang_print id=606}{literal}'); return false;}else if($(this).getElement('select[id=levels]').value == '' && $(this).getElement('select[id=subnets]').value == '') {alert('{/literal}{lang_print id=607}{literal}'); return false; }else{ return true; }{/literal}">
  <div style='margin-top: 10px;'>{lang_print id=600}</div>
  <br>
  <b>{lang_print id=601}</b>
  <br><input type='text' name='from' size='50' class='text' maxlength='200' value='{$admin->admin_info.admin_name} <{$admin->admin_info.admin_email}>'>
  <br><br>
  <b>{lang_print id=520}</b>
  <br><input type='text' name='subject' size='50' class='text' maxlength='200'>
  <br><br>
  <b>{lang_print id=588}</b>
  <br><textarea name='message' class='text' rows='7' cols='80'></textarea>
  <br><br>
  <b>{lang_print id=602}</b>
  <br><select class='text' name='emails_at_a_time'>
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
  </select>
  <br><br>

  {* DETERMINE HOW MANY LEVELS AND SUBNETS TO SHOW BEFORE ADDING SCROLLBARS *}
  {if $levels|@count > 10 OR $subnets|@count+1 > 10}
    {assign var='options_to_show' value='10'}
  {elseif $levels|@count > $subnets|@count+1}
    {assign var='options_to_show' value=$levels|@count}
  {elseif $levels|@count < $subnets|@count+1}
    {assign var='options_to_show' value=$subnets|@count+1}
  {elseif $levels|@count == $subnets|@count+1}
    {assign var='options_to_show' value=$levels|@count}
  {/if}
  <b>{lang_print id=603}</b><br>{lang_print id=604}
  <br><br>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td><b>{lang_print id=8}</b></td>
    <td style='padding-left: 10px;'><b>{lang_print id=9}</b></td>
    </tr>
    <tr>
    <td>
      <select size='{$options_to_show}' class='text' name='levels[]' id='levels' multiple='multiple' style='width: 250px;'>
      {section name=level_loop loop=$levels}
        <option value='{$levels[level_loop].level_id}' selected='selected'>{$levels[level_loop].level_name|truncate:75:"...":true}{if $levels[level_loop].level_default == 1} {lang_print id=382}{/if}</option>
      {/section}
      </select>
    </td>
    <td style='padding-left: 10px;'>
      <select size='{$options_to_show}' class='text' name='subnets[]' id='subnets' multiple='multiple' style='width: 250px;'>
      <option value='0' selected='selected'>{lang_print id=383}</option>
      {section name=subnet_loop loop=$subnets}
        <option value='{$subnets[subnet_loop].subnet_id}' selected='selected'>{lang_print id=$subnets[subnet_loop].subnet_name}</option>
      {/section}
      </select>
    </td>
    </tr>
    </table>
  <br><br>
  <input type='submit' class='button' value='{lang_print id=605}'>&nbsp;<input type='button' class='button' value='{lang_print id=39}' onClick='parent.TB_remove();'>
  <input type='hidden' name='task' value='sendemail'>
  <input type='hidden' name='start' value='0'>
  </form>
  <br><br>
</div>


{* HIDDEN DIV TO DISPLAY SENDING EMAIL MESSAGE *}
<div style='display: none;' id='sendemail'>
  <div style='margin-top: 10px;'>
    {lang_print id=609}
  </div>
  <img src='../images/icons/loading2.gif' border='0' style='border: none; margin-left: auto; margin-right: auto;'>
</div>

{* HIDDEN DIV TO DISPLAY EMAILS COMPLETE MESSAGE *}
<div style='display: none;' id='emailcomplete'>
  <div style='margin-top: 10px;'>
    {lang_print id=611}
  </div>
  <br />
  <input type='button' class='button' value='{lang_print id=466}' onClick='parent.TB_remove();'>
</div>

{include file='admin_footer.tpl'}