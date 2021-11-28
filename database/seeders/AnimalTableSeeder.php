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
            'image' => 'imageURL',
            'type' => 'Herviboro'
        ]);

        Animal::create([
            'name' => 'Caballo',
            'description' => 'Los caballos se caracterizan por sus largas extremidades y por su cola
            formada por una gran cantidad de cerdas extensas. Las razas más grandes pueden presentar
            ejemplares con una altura de 1,80 metros y un peso cercano a la tonelada.',
            'image' => 'imageURL',
            'type' => 'Herviboro'
        ]);

        Animal::create([
            'name' => 'Foca',
            'description' => 'Mamífero carnívoro adaptado a la vida acuática, de 150 a 300 cm de longitud,
            cuerpo fusiforme, generalmente rechoncho, y cubierto de pelo corto, con cuatro patas en forma de aletas,
            cola apenas desarrollada, capas de grasa bajo la piel para protegerse del frío y carente de pabellones auditivos;
            se alimenta de peces y moluscos, y habita en mares fríos',
            'image' => 'imageURL',
            'type' => 'Carnivoro'
        ]);

        Animal::create([
            'name' => 'Araña',
            'description' => 'Son unos animales llamados artrópodos, que respiran aire, tienen ocho patas, y quelíceros
             modificados en colmillos capaces de inyectar veneno. Las arañas viven en todos los continentes excepto la Antártida.',
            'image' => 'imageURL',
            'type' => 'Carnivoro'
        ]);

        Animal::create([
            'name' => 'Serpiente',
            'description' => 'Reptil sin extremidades, de cuerpo muy alargado y estrecho, con la cabeza aplastada,
            la boca grande y la piel escamosa; se aplica este nombre especialmente a los de gran tamaño; hay especies
             terrestres y especies acuáticas.',
            'image' => 'imageURL',
            'type' => 'Carnivoro'
        ]);

        Animal::create([
            'name' => 'Hiena',
            'description' => 'Los hiénidos, mejor conocidos como hienas, son parte de la familia Hyaenidae y poseen la mordida
             más fuerte de todos los mamíferos. El mayor distintivo de estos animales es el sonido que emiten, muy parecido a una
             risa aguda',
            'image' => 'imageURL',
            'type' => 'Carroñero'
        ]);
    }
}
