<?php /* Smarty version 2.6.27, created on 2017-10-26 15:55:49
         compiled from /var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/main_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/main_menu.tpl', 2, false),)), $this); ?>
<ul id="main_menu">
    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_page_class_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== 'LC_Page_Index'): ?>
    <li><a href="/">ホーム</a></li>
    <li <?php if (((is_array($_tmp=$_SERVER['REQUEST_URI'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == "/user_data/vietnam.php"): ?>class='active'<?php endif; ?>><a href="/user_data/vietnam.php">ベトナム在住向け</a></li>
    <li <?php if (((is_array($_tmp=$_SERVER['REQUEST_URI'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == "/user_data/japan.php"): ?>class='active'<?php endif; ?>><a href="/user_data/japan.php">日本在住向け</a></li>
    <?php endif; ?>

    <li <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_page_class_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'LC_Page_Abouts'): ?>class='active'<?php endif; ?>><a href="/abouts">会社概要</a></li>
    <li <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_page_class_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'LC_Page_Contact'): ?>class='active'<?php endif; ?>><a href="/contact">お問い合わせ</a></li>
</ul>