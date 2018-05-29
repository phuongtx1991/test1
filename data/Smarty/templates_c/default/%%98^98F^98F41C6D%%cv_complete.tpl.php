<?php /* Smarty version 2.6.27, created on 2018-01-12 16:27:06
         compiled from entry/cv_complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'entry/cv_complete.tpl', 25, false),array('modifier', 'h', 'entry/cv_complete.tpl', 25, false),array('modifier', 'u', 'entry/cv_complete.tpl', 45, false),)), $this); ?>

<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
        <div id="complete_area">
            <p class="message">履歴書登録が完了いたしました。</p>

            <p>今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>

            <br />
            <form name="form1" id="form1" method="post" action="/user_data/apply.php">
                <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                <input type="hidden" name="mode" value="finish" />
                <div class="btn_area">
                    <ul>
                        <li>
                            <a href="/mypage/change.php" class="bttn">マイページへ</a>
                        </li>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['applyProductId'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
                            <li>
                                <a href="#" class="bttn" onClick="eccube.setModeAndSubmit('finish', '', '');">応募を完了する</a>
                            </li>
                            <li>
                                <a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['applyProductId'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
" class="bttn">仕事詳細に戻る</a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/list.php" class="bttn">仕事情報一覧へ</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>