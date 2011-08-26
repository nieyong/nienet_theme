<?php get_header(); ?>

<div id="slider_wrap">
    <div id="slider">
        
        <a href="http://nieyong.github.com/"><img src="http://nienet.com/wp-content/uploads/2011/05/wiki.jpg" alt="" title="#image01" /></a>
         <a href="http://nienet.com/?cat=25"><img src="http://nienet.com/wp-content/uploads/2011/06/linux-series.jpg" alt="" title="#image02" /></a>
         <a href="http://nienet.com/?cat=24"><img src="http://nienet.com/wp-content/uploads/2011/06/arm-mips-x86.jpg" alt="" title="#image03" /></a>
    </div>
    <div id="image01" class="nivo-html-caption">
        <strong>NieNet知识库</strong>Wiki知识库，更完整，专业，权威...
    </div>
    <div id="image02" class="nivo-html-caption">
        <strong>Linux系列</strong>内容不在多，而在于精
    </div>
    <div id="image03" class="nivo-html-caption">
        <strong>ARM/MIPS/X86</strong>RISC和CISC，寄存器，寻址方式，指令集，寻址空间，Cache...
    </div>
</div>


    <br clear="all" />

<div id="homebottom">
    <div class="h_b_area">
        
        <h2>关于</h2>
        <div class="h_b_area_bg">
        <p>NieNet是一个多人供稿的技术博客。本站专注于嵌入式基本知识，为嵌入式和Linux初学者提供一个静心学习，夯实基础的平台。</p>
        <p>了解更多：<a href="http://nienet.com/?page_id=2">关于NieNet</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://nienet.com/?page_id=73">本站日志</a></p>
        </div>
    </div>    
    <div class="h_b_area">
        <h2>技术主题</h2>
        <div class="h_b_area_bg">
        <ul>
            <p>专注以下四个技术领域</p>
            <?php wp_list_categories('sort_column=name&title_li=&exclude=23,1'); ?>
        </ul>
        </div>
    </div>
    <div class="h_b_area h_b_area_last">
        <h2>最新文章</h2>
        <div class="h_b_area_bg">
        <ul>
                
                <?php get_archives('postbypost', 6); ?>
        </ul>
        </div>
    </div>
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>