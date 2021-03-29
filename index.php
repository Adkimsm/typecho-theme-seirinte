<?php
/**
 * 移植皮皮凛凛姬的首页为Typecho主题
 * 更新地址 https://github.com/Adkinsm2020/typecho-theme-seirinte/
 * 
 * 
 * @package SeirinTe
 * @author Adkinsm
 * @version 0.99
 * @link https://www.adkinsm.top/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<?php $this->need('head.php'); ?>
<main id="rin-main">
    <div class="mdui-row">
    <?php $this->need('aside.php'); ?>
        <div class="mdui-col-xs-12 mdui-col-md-10">
            <div class="mdui-card rin-card">
                <div class="rin-card-part" id="introduce" style="margin-top: 0;">
                    <div class="rin-card-content mdui-typo"><?php $this->options->jijianjie1();?><br>
                    <?php $this->options->jijianjie2();?><br>
                    <?php $this->options->jijianjie3();?><br>
                    <?php $this->options->jijianjie4();?><br>
                        How lucky to meet you!<br>
                    </div>
                </div>
                
                
                <div class="rin-card-part" id="article">
                    <div class="rin-card-title2 mdui-typo"><a href="#article">#</a> 文章</div>

                    <?php while($this->next()): ?>
                    <a target="_blank" href="<?php $this->permalink() ?>">
                    <div class="mdui-card rin-card rin-card-article" style="margin-bottom: 10px;">
                        <div class="rin-article-title"><?php $this->title() ?></div>
                        <div class="rin-article-content"><p><?php $this->excerpt('233','...'); ?></p></div>
                    </div>
                    </a>
                    <?php endwhile; ?>

                    
                    <!-- 乱乱的翻页 --><!-- 代码来源:qqdie,略改 -->
                    <ul>     
                        <nav>
                            <?php $this->pageLink('<li class="button big previous">上一页</li>'); ?>
                            <?php $this->pageLink('<li class="button big next">下一页</li>','next'); ?>
                        </nav>
                    </ul>
                    <!-- 翻页结束喽 -->


                </div>

                <?php $this->need('footer.php'); ?>
                




                
