<footer id="footer">
<div class="container">
	
		<?php if ( is_active_sidebar('bottom-sidebar-area') ) : ?>
        
            <!-- FOOTER WIDGET BEGINS -->
            
                <section class="row widget">
                    <?php dynamic_sidebar('bottom-sidebar-area') ?>
                </section>
                
            <!-- FOOTER WIDGET END -->
            
        <?php endif; ?>

         <div class="row copyright" >
            </div>
            <div class="span6" >
                <!-- start social -->
                <div class="socials">
                    <?php suevafree_socials(); ?>
                </div>
                <!-- end social -->

            </div>
		</div>
	</div>
</footer>

<?php wp_footer() ?>   

</body>

</html>