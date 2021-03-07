<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $bloggername = new Typecho_Widget_Helper_Form_Element_Text('bloggername', NULL, NULL, _t('博主名'), _t('在这里填入博主昵称'));
    $form->addInput($bloggername);
    $avatarimg = new Typecho_Widget_Helper_Form_Element_Text('avatarimg', NULL, NULL, _t('自定义Footer文字'), _t('可以输入友情链接网站统计什么的，可以用Html和js'));
    $form->addInput($avatarimg);
	$blogbiaoyu = new Typecho_Widget_Helper_Form_Element_Text('blogbiaoyu', NULL, NULL, _t('博客标语'), _t('填入一个博客标语，推荐6~9个字'));
    $form->addInput($blogbiaoyu);
    $jijianjie1 = new Typecho_Widget_Helper_Form_Element_Text('jijianjie1', NULL, NULL, _t('博客简介第一行'), _t('简介第一行，推荐填入介绍，例如“你好，这里是Adkinsm，普通的学生一枚”'));
    $form->addInput($jijianjie1);
    $jijianjie2 = new Typecho_Widget_Helper_Form_Element_Text('jijianjie2', NULL, NULL, _t('博客简介第二行'), _t('简介第二行'));
    $form->addInput($jijianjie2);
    $jijianjie3 = new Typecho_Widget_Helper_Form_Element_Text('jijianjie3', NULL, NULL, _t('博客简介第三行'), _t('简介第三行”'));
    $form->addInput($jijianjie3);
    $jijianjie4 = new Typecho_Widget_Helper_Form_Element_Text('jijianjie4', NULL, NULL, _t('博客简介第四行'), _t('简介第四行”'));
    $form->addInput($jijianjie4);
	$githublink = new Typecho_Widget_Helper_Form_Element_Text('githublink', NULL, NULL, _t('Github'), _t('填入你github的地址'));
    $form->addInput($githublink);
	$maillink = new Typecho_Widget_Helper_Form_Element_Text('maillink', NULL, NULL, _t('邮箱'), _t('填入你邮箱的地址，填法为“mailto:yourmail@xx.com”'));
    $form->addInput($maillink);
    $bilibililink = new Typecho_Widget_Helper_Form_Element_Text('bilibililink', NULL, NULL, _t('bilibili'), _t('填入你B站的地址'));
    $form->addInput($bilibililink);

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
