<?php /* Smarty version 2.6.27, created on 2017-10-26 15:55:49
         compiled from /var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/login_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/login_header.tpl', 1, false),array('modifier', 'h', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/login_header.tpl', 47, false),array('modifier', 'sfGetChecked', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/login_header.tpl', 70, false),)), $this); ?>
<?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
<script type="text/javascript">//<![CDATA[
    $(function(){
        var $login_email = $('#header_login_area input[name=login_email]');

        if (!$login_email.val()) {
            $login_email
                .val('メールアドレス')
                .css('color', '#AAA');
        }

        $login_email
            .focus(function() {
                if ($(this).val() == 'メールアドレス') {
                    $(this)
                        .val('')
                        .css('color', '#000');
                }
            })
            .blur(function() {
                if (!$(this).val()) {
                    $(this)
                        .val('メールアドレス')
                        .css('color', '#AAA');
                }
            });

        $('#header_login_form').submit(function() {
            if (!$login_email.val()
                || $login_email.val() == 'メールアドレス') {
                if ($('#header_login_area input[name=login_pass]').val()) {
                    alert('メールアドレス/パスワードを入力して下さい。');
                }
                return false;
            }
            return true;
        });
    });
//]]></script>
<?php endif; ?>
<?php echo '<div class="block_outer"><div id="header_login_area" class="clearfix"><form name="header_login_form" id="header_login_form" method="post" action="'; ?><?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'frontparts/login_check.php"'; ?><?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ' onsubmit="return eccube.checkLoginFormInputted(\'header_login_form\')"'; ?><?php endif; ?><?php echo '><input type="hidden" name="mode" value="login" /><input type="hidden" name="'; ?><?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" /><input type="hidden" name="url" value="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['REQUEST_URI'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '" /><div class="block_body clearfix">'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo '<div class="user_area">ようこそ、<span class="user_name">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' 様 <span class=\'caret\'></span></span><ul class="mymenu clearfix"><li><p>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</p><input type="button" class="bttn" onclick="document.location.href=\'/mypage/change.php\';" value="プロフィール" /></li><li><a href="/mypage/cv.php">履歴書</a></li><li><a href="/user_data/mylist.php?l=keep">キープしたお仕事</a></li><li><a href="/user_data/mylist.php?l=viewed">閲覧したお仕事</a></li><li><a href="/user_data/mylist.php?l=applied">応募したお仕事</a></li><li><a href="#" onclick="eccube.fnFormModeSubmit(\'header_login_form\', \'logout\', \'\', \'\'); return false;">ログアウト</a></li></ul></div>'; ?><?php else: ?><?php echo '<ul class="formlist clearfix"><li class="mail"><input type="text" class="box150" name="login_email" value="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '" style="ime-mode: disabled;" placeholder="メールアドレス" /></li><li class="password"><input type="password" class="box150" name="login_pass" title="パスワードを入力して下さい" placeholder="パスワード" /></li><li class="btn"><input type="checkbox" name="login_memory" id="header _login_memory" value="1" '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_memory'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetChecked', true, $_tmp, 1) : SC_Utils_Ex::sfGetChecked($_tmp, 1)); ?><?php echo ' /><label for="header_login_memory"><span>記憶</span></label><input type="submit" value="ログイン" /></li><li class="regist"><a href="'; ?><?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'entry/kiyaku.php" class="bttn">新規登録</a></li><li class="forgot"><a href="'; ?><?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'forgot/'; ?><?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" onclick="eccube.openWindow(\''; ?><?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'forgot/'; ?><?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '\',\'forget\',\'600\',\'400\',{scrollbars:\'no\',resizable:\'no\'}); return false;" target="_blank">パスワードを忘れた方</a></li></ul>'; ?><?php endif; ?><?php echo '</div></form></div></div>'; ?>
