<?php


namespace app\models;


class PostsModel
{
    public function viewAction(){
        return [
            1=>[
                'title'=>'Первая статья',
                'descr'=>'description of post 1',
                'autor'=>'Name Surname',
                'date_add'=>'10 Января, 2014',
                'text'=>'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.'
            ],
            2=>[
                'title'=>'Вторая статья',
                'descr'=>'description of post 1',
                'autor'=>'Name Surname',
                'date_add'=>'10 Января, 2015',
                'text'=>'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.'
            ],
            3=>[
                'title'=>'Третяя статья',
                'descr'=>'description of post 1',
                'autor'=>'Name Surname',
                'date_add'=>'10 Января, 2016',
                'text'=>'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.'
            ],
            4=>[
                'title'=>'Четвертая статья',
                'descr'=>'description of post 1',
                'autor'=>'Name Surname',
                'date_add'=>'10 Января, 2017',
                'text'=>'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.'
            ],
            5=>[
                'title'=>'Пятая статья',
                'descr'=>'description of post 1',
                'autor'=>'Name Surname',
                'date_add'=>'10 Января, 2018',
                'text'=>'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.'
            ]
        ];
    }

}