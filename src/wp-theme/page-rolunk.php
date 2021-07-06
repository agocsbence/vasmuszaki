<?php
/*

Template Name: Rólunk

*/

get_header();

?>

<section class="section nolinkdecor container">
    <h1 class="mt-5"><?php the_title() ?></h1>
    <div class="row bg-white p-3 mt-4">
        
        <?php the_content() ?>
        
        <div class="about-icons row">
            
            <?php $szolgaltatasok = get_field('szolgaltatasok'); ?>
            
            <div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_1']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_1']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_1']; ?></p></div>
            <div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_2']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_2']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_2']; ?></p></div>
            <div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_3']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_3']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_3']; ?></p></div>
            <div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_4']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_4']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_4']; ?></p></div>
            <div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_5']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_5']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_5']; ?></p></div>
        </div>

    </div>
</section>

<?php get_footer(); ?>