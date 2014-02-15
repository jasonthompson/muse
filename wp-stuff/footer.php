
       <footer>
       <div id="footer-left">
         <h2 class="footer">Who?</h2>
         <p>Jason Thompson is a husband, father, cyclist, writer, photographer, occasional programmer and all-around trouble-maker based in Toronto, Ontario. [<a href="/about.html" title="More about me and my blog">more</a>]</p>

         <h2>Copyright</h2>
         <p></a>The material on this site is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons By-NC-SA License</a>.</p>


     </div><!--footer-left -->

     <div id="footer-right">
       <h2>Recent Posts</h2>
       	<ul class='article_list'>
	<?php   $myposts = get_posts('numberposts=5&offset=0');
		foreach($myposts as $post) :?>
<li><?php the_time('M d, Y') ?> <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
<div class="tags">Posted in <?php the_tags(); ?></div></li>
<?php endforeach; ?>
</ul>
       <h2>Elsewhere</h2>
       <ul class="article_list">
         <li><a href="http://www.120babies.ca/" title="My wife's weblog">MM's Weblog</a></li>
         <li><a href="http://www.twitter.com/jasonthompson" title="Follow me on Twitter">Follow me on Twitter</a></li>
       </ul>
     </div><!--footer-right-->
     </footer>






   </div><!-- page -->
 </body>

</html>

