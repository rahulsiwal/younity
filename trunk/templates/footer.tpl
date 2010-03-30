
{* $Id: footer.tpl 62 2009-02-18 02:59:27Z nico-izo $ *}

  {* SHOW PAGE BOTTOM ADVERTISEMENT BANNER *}
  {if $ads->ad_bottom != ""}
    <div class='ad_bottom' style='display: block; visibility: visible;'>
      {$ads->ad_bottom}
    </div>
  {/if}

{* END CONTENT CONTAINER *}
</div>


{* END BODY CONTAINER *}
</td>
{* SHOW RIGHT-SIDE ADVERTISEMENT BANNER *}
{if $ads->ad_right != ""}
  <td valign='top'><div class='ad_right' width='1' style='display: table-cell; visibility: visible;'>{$ads->ad_right}</div></td>
{/if}
</tr>
</table>


{* COPYRIGHT FOOTER *}
<div class='copyright'>
  {lang_print id=1175} {$smarty.now|date_format:'%Y'} &nbsp;-&nbsp;
  <a href='help.php' class='copyright'>{lang_print id=752}</a> &nbsp;-&nbsp;
  <a href='help_tos.php' class='copyright'>{lang_print id=753}</a> &nbsp;-&nbsp;
  <a href='help_contact.php' class='copyright'>{lang_print id=754}</a>
  {if $setting.setting_lang_anonymous == 1 && $lang_packlist|@count != 0}
    &nbsp;-&nbsp;
    {if $smarty.server.QUERY_STRING|strpos:"&lang_id=" !== FALSE}{assign var="pos" value=$smarty.server.QUERY_STRING|strstr:"&lang_id="}{assign var="query_string" value=$smarty.server.QUERY_STRING|replace:$pos:""}{else}{assign var="query_string" value=$smarty.server.QUERY_STRING}{/if}
    <select class='small' name='user_language_id' onchange="window.location.href='{$smarty.server.PHP_SELF}?{$query_string}&lang_id='+this.options[this.selectedIndex].value;">
      {section name=lang_loop loop=$lang_packlist}
        <option value='{$lang_packlist[lang_loop].language_id}'{if $lang_packlist[lang_loop].language_id == $global_language} selected='selected'{/if}>{$lang_packlist[lang_loop].language_name}</option>
       {/section}
    </select>
  {/if}
</div>


{* END CENTERED TABLE *}
</td>
</tr>
</table>


{* INCLUDE ANY FOOTER TEMPLATES NECESSARY *}
{hook_include name=footer}


</body>
</html>