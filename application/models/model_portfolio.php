<?php
    class Model_Portfolio extends Model{
        public function get_data(){
            return array(
                array(
                    'Year'=> '2012', 'Site'=>'artclick.su', 'Description'=>'Описание номир 1'
                ),
                array(
                    'Year'=> '2018', 'Site'=>'travel-mango.su', 'Description'=>'Описание номир 2'
                ),
            );
        }
    }
?>