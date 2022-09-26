<?php
/*
 Template Name: Наша история
 */
?>

<?php

get_header();

?>
    <div class="aboutus" id="aboutus">
        <div class="container">
            <h1 class="title">Наша история</h1>

            <?php
            $history = [get_field('history_1',2),get_field('history_2',2),get_field('history_3',2)];
            $description = [get_field('description_1',2),get_field('description_2',2),get_field('description_3',2)];
            $image = [get_field('image_1',2),get_field('image_2',2),get_field('image_3',2)];

            $array = array_map(null,$history,$description,$image);


            foreach ($array as $elem => $value){
                if(($value[0]==null)||($value[1]==null)||($value[2]==null)){
                    continue;
                }
                else{
                    if($elem%2==0){
                        echo (
                            '<div class="row">
                                <div class="col-lg-6">'.
                            '<img class="aboutus__img" src="'.$value[2].'" alt="мир детства">'.
                            '</div>
                            <div class="col-lg-6">
                                <div class="subtitle">'.
                            $value[0].
                            '</div>
                                <div class="aboutus__text">'.
                            $value[1].
                            '</div>
                            </div>
                      
                        </div>'
                        );
                    }
                    else{
                        echo (
                            '<div class="row">
                            <div class="col-lg-6">
                                <div class="subtitle">'.
                            $value[0].
                            '</div>
                                <div class="aboutus__text">'.
                            $value[1].
                            '</div>
                            </div>
                            <div class="col-lg-6">'.
                            '<img class="aboutus__img" src="'.$value[2].'" alt="мир детства">'.
                            '</div>
                        </div>'
                        );
                    }

                }
            }
            ?>

        </div>
    </div>
<?php

get_footer();

?>