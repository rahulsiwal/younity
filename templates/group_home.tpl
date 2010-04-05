{include file='header.tpl'}

{* $Id: profile.tpl 162 2009-04-30 01:43:11Z nico-izo $ *}

<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td class='profile_leftside' width='200'>
{* BEGIN LEFT COLUMN *}

  {* SHOW USER PHOTO *}
  <table cellpadding='0' cellspacing='0' width='100%' style='margin-bottom: 10px;'>
  <tr>
  <td class='profile_photo'><img class='photo' src='{$owner->user_photo("./images/nophoto.gif")}' border='0'></td>
  </tr>
  </table>

  <table class='profile_menu' cellpadding='0' cellspacing='0' width='100%'>

  {* SHOW PHOTOS OF THIS PERSON *}
  {if $total_photo_tags != 0}
    <tr><td class='profile_menu1' nowrap='nowrap'><a href='profile_photos.php?user={$owner->user_info.user_username}'><img src='./images/icons/photos16.gif' class='icon' border='0'>{lang_sprintf id=1204 1=$owner->user_displayname_short 2=$total_photo_tags}</a></td></tr>
    {assign var='showmenu' value='1'}
  {/if}


  {* SHOW BUTTONS IF LOGGED IN AND VIEWING SOMEONE ELSE *}
  {if $owner->user_info.user_id != $user->user_info.user_id}

    {* SHOW JOIN MENU ITEM *}
    <tr><td class='profile_menu1' nowrap='nowrap'><a><img src='./images/icons/plus16.gif' class='icon' border='0'>Join</a></td></tr>
 
    {* SHOW REPORT THIS PERSON MENU ITEM *}
    {if $user->user_exists != 0}
      <tr><td class='profile_menu1' nowrap='nowrap'><a href="javascript:TB_show('report abuse', 'user_report.php?return_url={$url->url_current()|escape:url}&TB_iframe=true&height=300&width=450', '', './images/trans.gif');"><img src='./images/icons/report16.gif' class='icon' border='0'>Report Abuse</a></td></tr>
      {assign var='showmenu' value='1'}
    {/if}
    
  {/if}
  
  </table>

{* END LEFT COLUMN *}
</td>
<td class='profile_rightside'>
{* BEGIN RIGHT COLUMN *}
    
    {* JAVASCRIPT FOR SWITCHING TABS *}
    {literal}
    <script type='text/javascript'>
    <!--
      var visible_tab = '{/literal}{$v}{literal}';
      function loadProfileTab(tabId)
      {
        if(tabId == visible_tab)
        {
          return false;
        }
        if($('profile_'+tabId))
        {
          $('profile_tabs_'+tabId).className='profile_tab2';
          $('profile_'+tabId).style.display = "block";
          if($('profile_tabs_'+visible_tab))
          {
            $('profile_tabs_'+visible_tab).className='profile_tab';
            $('profile_'+visible_tab).style.display = "none";
          }
          visible_tab = tabId;
        }
      }
    //-->
    </script>
    {/literal}
    
    {* SHOW PROFILE TAB BUTTONS *}
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td valign='bottom'><table cellpadding='0' cellspacing='0'><tr><td class='profile_tab{if $v == 'profile'}2{/if}' id='profile_tabs_profile' onMouseUp="this.blur()"><a href='javascript:void(0);' onMouseDown="loadProfileTab('profile')" onMouseUp="this.blur()">Home</a></td></tr></table></td>

    <td valign='bottom'><table cellpadding='0' cellspacing='0'><tr><td class='profile_tab{if $v == 'profile'}2{/if}' id='profile_tabs_profile' onMouseUp="this.blur()"><a href='javascript:void(0);' onMouseDown="loadProfileTab('profile')" onMouseUp="this.blur()">Discussions</a></td></tr></table></td>

   <td valign='bottom'><table cellpadding='0' cellspacing='0'><tr><td class='profile_tab{if $v == 'profile'}2{/if}' id='profile_tabs_profile' onMouseUp="this.blur()"><a href='javascript:void(0);' onMouseDown="loadProfileTab('profile')" onMouseUp="this.blur()">Members</a></td></tr></table></td>

    <td width='100%' class='profile_tab_end'>&nbsp;</td>
 
    </tr>
    </table>

    <div style="border: thin solid; border-color: grey; padding: 10px;"></div>

  {* END RIGHT COLUMN *}
  </td></tr>
</table>

{include file='footer.tpl'}
