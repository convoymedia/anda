<div class="image_content_box">
    <div class="coloured-box"></div>
    <h2>Meet The Team</h2>
    <div class="team-members">
        <?php
            if (have_rows('team')) {
                while (have_rows('team')) {
                    the_row();
                    ?>
                    <div class="team-member" data-aos="fade-up">
                        <img src="<?php the_sub_field("person"); ?>" />
                        <div class="role"><?php the_sub_field("role"); ?></div>
                        <div class="name"><?php the_sub_field("name"); ?></div>
                        <?php 
                            if (get_sub_field("linkedin")) {
                                ?><a href="<?php the_sub_field("linkedin"); ?>" class="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a><?php
                            }  
                        ?>                      
                    </div>
                    <?php
                }
            }
        ?>
    </div>
</div> 