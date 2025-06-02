<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'text' => '¿Cuál es el verdadero nombre de Goku?',
                'answers' => [
                    ['text' => 'Kakarotto', 'is_correct' => true],
                    ['text' => 'Raditz', 'is_correct' => false],
                    ['text' => 'Vegeta', 'is_correct' => false],
                    ['text' => 'Bardock', 'is_correct' => false],
                ],
            ],
            [
                'text' => '¿Quién fue el primer villano de Dragon Ball Z?',
                'answers' => [
                    ['text' => 'Freezer', 'is_correct' => false],
                    ['text' => 'Raditz', 'is_correct' => true],
                    ['text' => 'Cell', 'is_correct' => false],
                    ['text' => 'Majin Buu', 'is_correct' => false],
                ],
            ],
            [
                'text' => '¿Qué técnica usa Goku para aumentar su poder temporalmente?',
                'answers' => [
                    ['text' => 'Kamehameha', 'is_correct' => false],
                    ['text' => 'Kaioken', 'is_correct' => true],
                    ['text' => 'Genkidama', 'is_correct' => false],
                    ['text' => 'Teletransportación', 'is_correct' => false],
                ],
            ],
            [
                'text' => '¿Quién destruyó el planeta Vegeta?',
                'answers' => [
                    ['text' => 'Freezer', 'is_correct' => true],
                    ['text' => 'Buu', 'is_correct' => false],
                    ['text' => 'Beerus', 'is_correct' => false],
                    ['text' => 'Zamasu', 'is_correct' => false],
                ],
            ],
            [
                'text' => '¿Cómo se llama el hijo mayor de Goku?',
                'answers' => [
                    ['text' => 'Gohan', 'is_correct' => true],
                    ['text' => 'Goten', 'is_correct' => false],
                    ['text' => 'Trunks', 'is_correct' => false],
                    ['text' => 'Pan', 'is_correct' => false],
                ],
            ],
            [
                'text' => '¿Quién entrenó a Goku cuando era niño?',
                'answers' => [
                    ['text' => 'Maestro Roshi', 'is_correct' => true],
                    ['text' => 'Piccolo', 'is_correct' => false],
                    ['text' => 'Karin', 'is_correct' => false],
                    ['text' => 'Kami-sama', 'is_correct' => false],
                ],
            ],
            [
                'text' => '¿Cuál es el color del cabello de un Super Saiyajin fase 1?',
                'answers' => [
                    ['text' => 'Negro', 'is_correct' => false],
                    ['text' => 'Azul', 'is_correct' => false],
                    ['text' => 'Rubio', 'is_correct' => true],
                    ['text' => 'Rojo', 'is_correct' => false],
                ],
            ],
            [
                'text' => '¿Quién fusionó con Goku usando los pendientes Pothala?',
                'answers' => [
                    ['text' => 'Vegeta', 'is_correct' => true],
                    ['text' => 'Gohan', 'is_correct' => false],
                    ['text' => 'Krillin', 'is_correct' => false],
                    ['text' => 'Yamcha', 'is_correct' => false],
                ],
            ],
            [
                'text' => '¿Qué desea Goku al encontrar las esferas del dragón por primera vez?',
                'answers' => [
                    ['text' => 'Ser el más fuerte', 'is_correct' => false],
                    ['text' => 'Tener aventuras', 'is_correct' => false],
                    ['text' => 'Nada, solo las protege', 'is_correct' => true],
                    ['text' => 'Pedir comida', 'is_correct' => false],
                ],
            ],
            [
                'text' => '¿Qué animal acompaña a Pilaf?',
                'answers' => [
                    ['text' => 'Un perro', 'is_correct' => false],
                    ['text' => 'Un gato', 'is_correct' => false],
                    ['text' => 'Un zorro', 'is_correct' => false],
                    ['text' => 'Shu', 'is_correct' => true],
                ],
            ],
            [
    'text' => '¿Quién es el creador de las cápsulas Hoi-Poi?',
    'answers' => [
        ['text' => 'Bulma', 'is_correct' => false],
        ['text' => 'Dr. Brief', 'is_correct' => true],
        ['text' => 'Vegeta', 'is_correct' => false],
        ['text' => 'Gero', 'is_correct' => false],
    ],
],
[
    'text' => '¿Cómo se llama la nube voladora de Goku?',
    'answers' => [
        ['text' => 'Nimbus', 'is_correct' => true],
        ['text' => 'Kinto', 'is_correct' => false],
        ['text' => 'Voladora', 'is_correct' => false],
        ['text' => 'Kame', 'is_correct' => false],
    ],
],
[
    'text' => '¿Quién fue el primer maestro de artes marciales de Goku?',
    'answers' => [
        ['text' => 'Maestro Roshi', 'is_correct' => true],
        ['text' => 'Karin', 'is_correct' => false],
        ['text' => 'Kami-sama', 'is_correct' => false],
        ['text' => 'Yajirobe', 'is_correct' => false],
    ],
],
[
    'text' => '¿Cuál es el nombre del androide número 18?',
    'answers' => [
        ['text' => 'Lazuli', 'is_correct' => true],
        ['text' => 'Maron', 'is_correct' => false],
        ['text' => 'Lunch', 'is_correct' => false],
        ['text' => 'Videl', 'is_correct' => false],
    ],
],
[
    'text' => '¿Quién es el padre de Trunks?',
    'answers' => [
        ['text' => 'Vegeta', 'is_correct' => true],
        ['text' => 'Goku', 'is_correct' => false],
        ['text' => 'Piccolo', 'is_correct' => false],
        ['text' => 'Yamcha', 'is_correct' => false],
    ],
],
[
    'text' => '¿Cómo se llama el planeta natal de los Saiyajin?',
    'answers' => [
        ['text' => 'Vegeta', 'is_correct' => true],
        ['text' => 'Namek', 'is_correct' => false],
        ['text' => 'Tierra', 'is_correct' => false],
        ['text' => 'Kai', 'is_correct' => false],
    ],
],
[
    'text' => '¿Quién fue el primer personaje en convertirse en Super Saiyajin?',
    'answers' => [
        ['text' => 'Goku', 'is_correct' => true],
        ['text' => 'Vegeta', 'is_correct' => false],
        ['text' => 'Gohan', 'is_correct' => false],
        ['text' => 'Trunks', 'is_correct' => false],
    ],
],
[
    'text' => '¿Cuál es el nombre del dragón que concede los deseos?',
    'answers' => [
        ['text' => 'Shenlong', 'is_correct' => true],
        ['text' => 'Porunga', 'is_correct' => false],
        ['text' => 'Korin', 'is_correct' => false],
        ['text' => 'Bubbles', 'is_correct' => false],
    ],
],
[
    'text' => '¿Quién es el mejor amigo de Goku desde la infancia?',
    'answers' => [
        ['text' => 'Krillin', 'is_correct' => true],
        ['text' => 'Yamcha', 'is_correct' => false],
        ['text' => 'Piccolo', 'is_correct' => false],
        ['text' => 'Vegeta', 'is_correct' => false],
    ],
],
[
    'text' => '¿Qué objeto necesita Goku para transformarse en mono gigante?',
    'answers' => [
        ['text' => 'Luna llena', 'is_correct' => true],
        ['text' => 'Semilla del ermitaño', 'is_correct' => false],
        ['text' => 'Radar del dragón', 'is_correct' => false],
        ['text' => 'Cápsula Hoi-Poi', 'is_correct' => false],
    ],
],
[
    'text' => '¿Quién es el creador de los androides 17 y 18?',
    'answers' => [
        ['text' => 'Dr. Gero', 'is_correct' => true],
        ['text' => 'Dr. Brief', 'is_correct' => false],
        ['text' => 'Bulma', 'is_correct' => false],
        ['text' => 'Vegeta', 'is_correct' => false],
    ],
],
[
    'text' => '¿Cómo se llama el ataque característico de Piccolo?',
    'answers' => [
        ['text' => 'Makankosappo', 'is_correct' => true],
        ['text' => 'Kamehameha', 'is_correct' => false],
        ['text' => 'Final Flash', 'is_correct' => false],
        ['text' => 'Big Bang Attack', 'is_correct' => false],
    ],
],
[
    'text' => '¿Quién es el dios de la destrucción del Universo 7?',
    'answers' => [
        ['text' => 'Beerus', 'is_correct' => true],
        ['text' => 'Whis', 'is_correct' => false],
        ['text' => 'Zeno', 'is_correct' => false],
        ['text' => 'Champa', 'is_correct' => false],
    ],
],
[
    'text' => '¿Cómo se llama el hijo de Vegeta y Bulma?',
    'answers' => [
        ['text' => 'Trunks', 'is_correct' => true],
        ['text' => 'Goten', 'is_correct' => false],
        ['text' => 'Gohan', 'is_correct' => false],
        ['text' => 'Pan', 'is_correct' => false],
    ],
],
[
    'text' => '¿Quién fue el primer enemigo que mató Goku?',
    'answers' => [
        ['text' => 'Tambourine', 'is_correct' => true],
        ['text' => 'Piccolo', 'is_correct' => false],
        ['text' => 'Raditz', 'is_correct' => false],
        ['text' => 'Cell', 'is_correct' => false],
    ],
],
[
    'text' => '¿Qué raza es Piccolo?',
    'answers' => [
        ['text' => 'Namekiano', 'is_correct' => true],
        ['text' => 'Saiyajin', 'is_correct' => false],
        ['text' => 'Terrícola', 'is_correct' => false],
        ['text' => 'Androide', 'is_correct' => false],
    ],
],
[
    'text' => '¿Cómo se llama el maestro de artes marciales de Krillin y Goku?',
    'answers' => [
        ['text' => 'Maestro Roshi', 'is_correct' => true],
        ['text' => 'Maestro Karin', 'is_correct' => false],
        ['text' => 'Kami-sama', 'is_correct' => false],
        ['text' => 'Yajirobe', 'is_correct' => false],
    ],
],
[
    'text' => '¿Quién es el hermano mayor de Goku?',
    'answers' => [
        ['text' => 'Raditz', 'is_correct' => true],
        ['text' => 'Vegeta', 'is_correct' => false],
        ['text' => 'Bardock', 'is_correct' => false],
        ['text' => 'Nappa', 'is_correct' => false],
    ],
],
[
    'text' => '¿Cuál es el nombre del maestro de Gohan?',
    'answers' => [
        ['text' => 'Piccolo', 'is_correct' => true],
        ['text' => 'Goku', 'is_correct' => false],
        ['text' => 'Vegeta', 'is_correct' => false],
        ['text' => 'Krilin', 'is_correct' => false],
    ],
],
[
    'text' => '¿Quién es el rey de los Saiyajin?',
    'answers' => [
        ['text' => 'Rey Vegeta', 'is_correct' => true],
        ['text' => 'Bardock', 'is_correct' => false],
        ['text' => 'Goku', 'is_correct' => false],
        ['text' => 'Nappa', 'is_correct' => false],
    ],
],
[
    'text' => '¿Cómo se llama la hija de Gohan?',
    'answers' => [
        ['text' => 'Pan', 'is_correct' => true],
        ['text' => 'Bra', 'is_correct' => false],
        ['text' => 'Marron', 'is_correct' => false],
        ['text' => 'Videl', 'is_correct' => false],
    ],
],
        ];

        foreach ($questions as $q) {
            $question = Question::create(['text' => $q['text']]);
            foreach ($q['answers'] as $a) {
                $question->answers()->create($a);
            }
        }
    }
}
