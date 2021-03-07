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
                
                <div class="rin-card-part" id="contact">
                    <div class="rin-card-title2 mdui-typo"><h2><?php $this->title();?></h2></div>
                    <p><?php $this->content(); ?></p>


                    
                </div>


                <?php $this->need('footer.php'); ?>