<div class="centered_pre__loader">
    <div class="preloader_things">
        <div class="preloader_thing">
            <div class="preloader_thing">
            <div class="preloader_thing">
                <div class="preloader_thing">
                <div class="preloader_thing">
                    <div class="preloader_thing">
                    <div class="preloader_thing">
                        <div class="preloader_thing">
                        <div class="preloader_thing">
                            <div class="preloader_thing">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php 

    $logo = get_field('loading_logo', 'option');

    if (!empty($logo)) : 
        echo wp_get_attachment_image($logo, array('60', '60') );
    endif; ?>

    <div class="preloader__number__text">
    0%
    </div>
   
</div>

