<?php /* Smarty version 2.6.27, created on 2018-05-29 13:22:08
         compiled from C:/home/testjp/html/../data/Smarty/templates/default/mypage/cv_complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:/home/testjp/html/../data/Smarty/templates/default/mypage/cv_complete.tpl', 26, false),array('modifier', 'h', 'C:/home/testjp/html/../data/Smarty/templates/default/mypage/cv_complete.tpl', 26, false),)), $this); ?>

<div id="mypagecolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <div id="mycontents_area">
        <div id="complete_area">
            <div class="message">
                履歴書内容変更が完了いたしました。<br />
            </div>
            <p>今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>
        </div>
    </div>
</div>