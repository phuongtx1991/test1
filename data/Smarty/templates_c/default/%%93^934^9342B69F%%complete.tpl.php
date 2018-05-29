<?php /* Smarty version 2.6.27, created on 2018-05-29 12:54:54
         compiled from C:/home/testjp/html/../data/Smarty/templates/default/regist/complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:/home/testjp/html/../data/Smarty/templates/default/regist/complete.tpl', 26, false),array('modifier', 'h', 'C:/home/testjp/html/../data/Smarty/templates/default/regist/complete.tpl', 33, false),array('modifier', 'u', 'C:/home/testjp/html/../data/Smarty/templates/default/regist/complete.tpl', 59, false),)), $this); ?>

 <script type="text/javascript">//<![CDATA[
    $(function(){
        $('.finishOrder').click(function(){
            $.colorbox({href:"<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@USER_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
apply_popup.php", iframe:true, fastIframe:false, width:"600px", height:"360px", transition:"fade", scrolling:false});
        });
    });
//]]></script>

<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
        <div id="complete_area">
            <p class="message">会員登録を完了いたしました。</p>
            <p>●　アルバイトを探している方はそのままお仕事をお探しし応募してください。<br />
●　正社員の仕事をお探しの方は「履歴書記入」または「履歴書ファイルupload」を選び、手続きをすすめてください。<br />
登録後にも情報を修正することが出来ます。</p>

            <br />
            <form name="form1" id="form1" method="post" action="/user_data/apply.php">
                <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                <input type="hidden" name="mode" value="finish" />
                <div class="btn_area">
                    <ul>
                        <li>
                            <a href="/entry/cv.php" class="bttn">履歴書記入</a>
                        </li>
                        <li>
                            <a href="/entry/cv_upload.php" class="bttn">履歴書ファイルupload</a>
                        </li>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['applyProductId'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
                            <?php if (((is_array($_tmp=$this->_tpl_vars['applyProductEmploymentStatus'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 1): ?>
                            <li>
                                <a href="#" class="bttn finishOrder">応募を完了する</a>
                            </li>
                            <?php endif; ?>
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