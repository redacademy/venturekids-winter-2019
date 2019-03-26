

<div class="event-summary">
    <div class="event-summary__content">
    <h1 class="event-summary__title headline headline--tiny"><?php the_title(); ?></a></h1>
    <a class="event-summary__date t-center">
    <span class="event-summary__month"><?php 
        $eventDate = new DateTime(get_field('event_date', false, false));
        echo $eventDate->format('M')
    ?></span>
    <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span>
    <span class="event-summary__day"><?php echo $eventDate->format('Y') ?></span>    
    </a>
    <p><?php echo get_the_content();?></p>
    <a href="<?php the_field('event_link'); ?>" class="nu gray">Register</a>
    </div>
</div>