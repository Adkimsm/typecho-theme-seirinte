<div class="mdui-col-xs-12 mdui-col-md-2">
            <div class="rin-left">
                <div class="rin-logo">
                    <img src="<?php $this->options->avatarimg();?>">
                </div>
                <a href="<?php $this->options->siteUrl();?>"><div class="rin-left-title"><?php $this->options->title();?></div></a>
                <div class="rin-left-title2"><?php $this->options->bloggername();?></div>
                <div class="rin-left-slogan">「<?php $this->options->blogbiaoyu();?>」</div>
                <a href="<?php $this->options->feedUrl(); ?>" class="mdui-btn mdui-btn-raised rin-btn rin-btn-blue rin-btn-left mdui-text-capitalize">RSS</a>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
				<?php while($pages->next()): ?>
				    <a href="<?php $pages->permalink(); ?>" class="mdui-btn mdui-btn-raised rin-btn rin-btn-blue rin-btn-left mdui-text-capitalize"><?php $pages->title(); ?></a>
				<?php endwhile; ?>

            </div>
        </div>
