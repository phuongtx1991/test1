<?php /* Smarty version 2.6.27, created on 2017-12-13 13:50:34
         compiled from /var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/contact/complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/contact/complete.tpl', 24, false),array('modifier', 'h', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/contact/complete.tpl', 24, false),)), $this); ?>

<div id="undercolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <div id="undercolumn_contact">
        <div id="complete_area">
            <p class="message">お問い合わせ内容の送信が完了いたしました。</p>
            <p>
                万一、ご回答メールが届かない場合は、トラブルの可能性もありますので<br />大変お手数ではございますがもう一度お問い合わせいただくか、お電話にてお問い合わせください。<br />
                今後ともご愛顧賜りますようよろしくお願い申し上げます。
            </p>

            <div class="btn_area">
                <ul>
                <li>
                    <a href="<?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><img class="hover_change_image" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_toppage.jpg" alt="トップページへ" /></a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>