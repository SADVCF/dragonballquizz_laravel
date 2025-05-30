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
        ];

        foreach ($questions as $q) {
            $question = Question::create(['text' => $q['text']]);
            foreach ($q['answers'] as $a) {
                $question->answers()->create($a);
            }
        }
    }
}
