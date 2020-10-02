<?php if (get_the_ID() !== 22) { ?>
<div class="get_in_touch">
    <div class="touch-holder">
        <img src="<?php the_sub_field("image"); ?>" />
        <div class="form-holder">
            <h2><?php the_sub_field("title"); ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="167"]'); ?>
        </div>
    </div>
</div> 
<style>
    .get_in_touch .touch-holder {
        background:none;
        height:auto;
    }
</style>
<?php
}
else {
    ?>
<div style="background-color:<?php the_sub_field("background_colour"); ?>" class="test-form">
    <div class="main-bit" style="width: 80%;margin-left: auto;margin-right: auto;display:flex;flex-direction:row;justify-content:space-between;align-items:center;">
        <div class="left-bit" data-aos="fade-right" style="color: white;width: 30%;font-family: 'Montserrat', sans-serif;font-size: 20px;font-weight: 600;line-height: 24px;">
            <?php the_sub_field("left_text"); ?>
        </div>
        <div class="right-bit" style="background-image:url(<?php the_sub_field("image"); ?>); width:60%;background-size: contain;background-repeat: no-repeat;">
            <div style="background-color: #F2F2F2;border-radius: 30px;padding: 50px;margin: 15% 20% 15% 15%;">
                <h2 style="margin-bottom: 25px;font-weight: 300;text-align: left;margin-top: 0px;"><?php the_sub_field("title"); ?></h2>
                <?php echo do_shortcode('[contact-form-7 id="167"]'); ?>
            </div>
        </div>
    </div>
</div>  
</div>
<style>
    .page-id-22 .test-form input[type="text"], .test-form input[type="email"], .test-form textarea {
        background-color: transparent;
        padding: 7px 14px 7px 14px;
        margin-bottom: 12px;
        outline: none;
        border: 1px solid #333333;
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        font-weight: 300;
        color: #333333;
        box-sizing: border-box;
        max-height:150px;
        width:100%;
    }

    .page-id-22 .test-form .Checkbox {
        font-family: 'Montserrat', sans-serif;
        font-size: 13px;
        font-weight: 300;
        color: #333333;
    }

    .page-id-22 .test-form  form > p {
        display: flex;flex-direction: row;flex-wrap: wrap;justify-content: space-between;
    }

    .page-id-22 .test-form .wpcf7-form-control-wrap {
        position:relative;
        width:48%;
    }

    .page-id-22 .test-form .wpcf7-text {
        width:100%;
    }

    .page-id-22 .Message, .Checkbox {
        width:100% !important;
    }

    .page-id-22 .test-form br {
        display:none;
    }
    .page-id-22 .submit-div {
        text-align:right;
    }

    .page-id-22 .test-form hr {
        border-bottom:1px solid #B38F16 !important;
    }

    @media only screen and (max-width: 1100px) {
        .page-id-22 .main-bit {
            flex-direction:column !important;
            padding-top:50px;
            padding-bottom:50px;
        }

        .page-id-22 .left-bit, .right-bit {
            width:100% !important;
        }

        .page-id-22 .right-bit > div {
            margin:0px !important;
        }
    }
</style>
<?php } ?>