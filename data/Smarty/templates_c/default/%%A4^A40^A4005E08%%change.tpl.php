<?php /* Smarty version 2.6.27, created on 2017-12-15 11:08:28
         compiled from /var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/mypage/change.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/mypage/change.tpl', 26, false),array('modifier', 'h', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/mypage/change.tpl', 26, false),)), $this); ?>

<div id="mypagecolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <div id="mycontents_area">    
        <?php if (((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
        <p>下記項目にご入力ください。「<span class="attention">※</span>」印は入力必須項目です。<br />
            入力後、一番下の「確認ページへ」ボタンをクリックしてください。</p>
        <?php endif; ?>

        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="mode" value="confirm" />
            <input type="hidden" name="customer_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['customer_id']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
            <table summary="会員登録内容変更 " class="delivname">
                <?php if (((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ''): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_REALDIR)."frontparts/form_personal_confirm.tpl", 'smarty_include_vars' => array('flgFields' => 3,'emailMobile' => false,'prefix' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php else: ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_REALDIR)."frontparts/form_personal_input.tpl", 'smarty_include_vars' => array('flgFields' => 3,'emailMobile' => false,'prefix' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            </table>
            <div class="btn_area">
                <ul>
                    <?php if (((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ''): ?>
                    <li>
                        <input type="button" class="bttn" value="編集" onClick="eccube.setModeAndSubmit('edit', '', '');" />
                    </li>
                    <?php else: ?>
                    <li>
                        <input type="submit" name="confirm" value="保存" />
                    </li>
                    <li>
                        <input type="button" class="bttn back" value="キャンセル" onClick="eccube.setModeAndSubmit('profile', '', '');" />
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </form>
    </div>
</div>