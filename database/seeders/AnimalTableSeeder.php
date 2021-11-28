<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create([
            'name' => 'Conejo',
            'description' => 'Mamífero de cuerpo alargado y arqueado de unos 40 cm de longitud,
             pelo suave y espeso, orejas largas, cola corta y patas traseras más desarrolladas que
             las delanteras; vive en madrigueras y se reproduce con enorme rapidez; es comestible,
             estimado como pieza de caza y fácilmente domesticable; hay muchas especies',
            'image' => 'https://t2.uc.ltmcdn.com/images/7/8/2/como_cuidar_un_conejo_domestico_7287_orig.jpg',
            'type' => 'Herviboro'
        ]);

        Animal::create([
            'name' => 'Caballo',
            'description' => 'Los caballos se caracterizan por sus largas extremidades y por su cola
            formada por una gran cantidad de cerdas extensas. Las razas más grandes pueden presentar
            ejemplares con una altura de 1,80 metros y un peso cercano a la tonelada.',
            'image' => 'data:image/jpeg;base64,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',
            'type' => 'Herviboro'
        ]);

        Animal::create([
            'name' => 'Foca',
            'description' => 'Mamífero carnívoro adaptado a la vida acuática, de 150 a 300 cm de longitud,
            cuerpo fusiforme, generalmente rechoncho, y cubierto de pelo corto, con cuatro patas en forma de aletas,
            cola apenas desarrollada, capas de grasa bajo la piel para protegerse del frío y carente de pabellones auditivos;
            se alimenta de peces y moluscos, y habita en mares fríos',
            'image' => 'https://happyeureka.com/image/cache/data/calendario/cdsd/sleich/49-800x800.jpg',
            'type' => 'Carnivoro'
        ]);

        Animal::create([
            'name' => 'Araña',
            'description' => 'Son unos animales llamados artrópodos, que respiran aire, tienen ocho patas, y quelíceros
             modificados en colmillos capaces de inyectar veneno. Las arañas viven en todos los continentes excepto la Antártida.',
            'image' => 'https://pestcontrol-uc1.azureedge.net/-/media/Images/Project/RaidSite/Bugs/BugDetails/Spiders/Spiders-Hero-2_2X.jpg?la=es-US&mw=600',
            'type' => 'Carnivoro'
        ]);

        Animal::create([
            'name' => 'Serpiente',
            'description' => 'Reptil sin extremidades, de cuerpo muy alargado y estrecho, con la cabeza aplastada,
            la boca grande y la piel escamosa; se aplica este nombre especialmente a los de gran tamaño; hay especies
             terrestres y especies acuáticas.',
            'image' => 'https://static.nationalgeographicla.com/files/styles/image_3200/public/snake-lasso1.jpg?w=1600&h=900',
            'type' => 'Carnivoro'
        ]);

        Animal::create([
            'name' => 'Hiena',
            'description' => 'Los hiénidos, mejor conocidos como hienas, son parte de la familia Hyaenidae y poseen la mordida
             más fuerte de todos los mamíferos. El mayor distintivo de estos animales es el sonido que emiten, muy parecido a una
             risa aguda',
            'image' => 'https://media.istockphoto.com/photos/spotted-hyena-isolated-picture-id451043463',
            'type' => 'Carroñero'
        ]);
    }
}
