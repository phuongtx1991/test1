<?php /* Smarty version 2.6.27, created on 2018-01-22 11:23:30
         compiled from mail_templates/order_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail_templates/order_mail.tpl', 22, false),array('modifier', 'h', 'mail_templates/order_mail.tpl', 35, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrOrder']['order_name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['arrOrder']['order_name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 様

<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_header'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>


************************************************
　仕事詳細
************************************************

<?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrOrderDetail'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
<?php $this->assign('pid', ($this->_tpl_vars['arrOrderDetail'][$this->_sections['cnt']['index']]['product_id'])); ?>
<?php $this->assign('regionId', ($this->_tpl_vars['arrProduct'][$this->_tpl_vars['pid']]['region'])); ?>
<?php $this->assign('cityId', ($this->_tpl_vars['arrProduct'][$this->_tpl_vars['pid']]['city'])); ?>
仕事名： <?php echo ((is_array($_tmp=$this->_tpl_vars['arrOrderDetail'][$this->_sections['cnt']['index']]['product_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

給与： <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['pid']]['salary_full'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['pid']]['salary'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

就業日： <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['pid']]['working_day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

勤務時間： <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['pid']]['working_hour'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

勤務地： <?php echo ((is_array($_tmp=$this->_tpl_vars['arrRegion'][$this->_tpl_vars['regionId']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['arrCity'][$this->_tpl_vars['cityId']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['pid']]['work_location'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

<?php endfor; endif; ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_footer'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
