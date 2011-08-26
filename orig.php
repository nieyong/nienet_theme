<h1> <?php the_title(); ?></h1>

<div class="date">
	<?php the_time('F j, Y'); ?>  by <?php the_author_posts_link(); ?><br />Filed under: <?php the_category(', ') ?>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?>
</div>


<div id="article_cotent">
    <div class="row">
        <div class="column">
            <div class="article_title">
                <h2>Linux系列</h2>
                <p>折腾你所愿意折腾的，明白你所需要明白的。折腾Linux的你，肯定是一个充满好奇和激情的人。</p>
            </div>
            <div class="article_list">
                <?php query_posts('category_name=Linux&showposts=5');?>
                <?php while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink() ?>"rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile;?>
            </div>
        </div>

        <div class="column column_last">
            <div class="article_title">
                <h2>ARM/MIPS/X86</h2>
                <p>CPU体系架构，这家伙可是一门基本功，是所有武功的宗师，相当与江湖流传的《易筋经》。</p>
            </div>
            <div class="article_list">
                <?php query_posts('category_name=cpu体系架构&showposts=5');?>
                <?php while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink() ?>"rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile;?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <div class="article_title">
                <h2>嵌入式开发</h2>
                <p>嵌入式千变万化，各式各样，要做到融会贯通，举一反三，实属不易。需要总结，再总结……</p>
            </div>
            <div class="article_list">
                <?php query_posts('category_name=嵌入式开发&showposts=5');?>
                <?php while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink() ?>"rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile;?>
            </div>
        </div>

        <div class="column column_last">
            <div class="article_title">
                <h2>Android</h2>
                <p>现在就属它最火，折腾Linux的人，怎么会不喜欢Android呢？</p>
            </div>
            <div class="article_list">
                <?php query_posts('category_name=Android&showposts=5');?>
                <?php while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink() ?>"rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile;?>
            </div>
        </div>
    </div>
</div>




/***********************************************
*                article_content
************************************************/
#article_cotent{
                margin-left: auto;
                margin-right: auto;
                overflow:hidden;
                width:960px;
}

.row{
    height: 400px;
}

.column{
                overflow:hidden;
                float:left;
                width:450px;
                margin-right:60px;

}

.column_last{
    margin-right:0;
}

.article_title{
    margin-top: 50px;
    height: 110px;
}

.article_list{
    height: 290px;
    background-color: #E0E0E0;
    padding: 5px 8px 5px 8px;
    border-bottom-left-radius:12px 12px;
    border-bottom-right-radius:12px 12px;
    border-top-left-radius:12px 12px;
    border-top-right-radius:12px 12px;
}

.article_list a{
    font-size:16px;
}

.article_list a:hover{
    font-size: 18px;
    text-decoration:none;

}