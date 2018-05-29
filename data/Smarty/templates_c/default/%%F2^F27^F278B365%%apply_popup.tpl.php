<?php /* Smarty version 2.6.27, created on 2017-11-08 17:13:19
         compiled from /var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/user_data/apply_popup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/user_data/apply_popup.tpl', 8, false),array('modifier', 'u', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/user_data/apply_popup.tpl', 55, false),)), $this); ?>
<style>
    #container { width: 100% }
    #topcolumn { display: none; }
</style>

<script>
    $(function(){
        <?php if (((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
        parent.$.colorbox.close();
        window.parent.location.href = '<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
';
        <?php endif; ?>
        
        $('.bttn.back').click(function(){
            parent.$.colorbox.close();
        });
    });
</script>

<div id="apply_popup">
    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="" />
        <div id="concierge_area">
            <div id="concierge_photo">
                <img src="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['customer_data']['image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer_data']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['customer_data']['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            </div>
            <div id="concierge_info">
                <div class="concierge_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer_data']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['customer_data']['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</div>
                メール：<?php echo ((is_array($_tmp=$this->_tpl_vars['customer_data']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
                電話番号：<?php echo ((is_array($_tmp=$this->_tpl_vars['customer_data']['tel'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
            </div>
        </div>
        <?php if (((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'complete'): ?>
        <div id="complete_area">
            <p>応募を完了いたしました。</p>
            <p>担当者からの連絡をお待ちしてください。</p>
        </div>
        <?php else: ?>
        <div id="cv_area">
            <?php if (((is_array($_tmp=$this->_tpl_vars['customer_data']['current_address'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ""): ?>
            <label><input type="radio" name="apply_type" value="1" />オンラインで履歴書記入</label>
            <?php else: ?>
            <label><input type="radio" name="apply_type" value="2" />登録した履歴書を使用する</label>
            <?php endif; ?>
            
            <?php if (((is_array($_tmp=$this->_tpl_vars['customer_data']['cv'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
            <label><input type="radio" name="apply_type" value="3" />アップロードした履歴書ファイルを使用する</label>
            <?php endif; ?>
            
            <label><input type="radio" name="apply_type" value="4" />新しい履歴書ファイルをアップロードする</label>
        </div>
        <div class="btn_area">
            <ul>
                <li>
                    <a href="#" data-url="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['applyProductId'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
" class="bttn back">仕事詳細に戻る</a>
                </li>
                <li>
                    <a href="#" class="bttn" onClick="eccube.setModeAndSubmit('finish', '', '');">応募する</a>
                </li>
            </ul>
        </div>
        <?php endif; ?>
    </form>
</div>