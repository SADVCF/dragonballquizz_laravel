<!DOCTYPE html>
<html>
<head>
    <title>Dragon Ball Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Importante para móviles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajuste para que el modal ocupe casi toda la pantalla en móvil */
        @media (max-width: 576px) {
            .modal-dialog {
                margin: 0;
                max-width: 100vw;
                min-height: 100vh;
                display: flex;
                align-items: center;
            }
            .modal-content {
                border-radius: 0;
                min-height: 100vh;
            }
            .modal-header, .modal-body, .modal-footer {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
    </style>
</head>
<body class="bg-dark text-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4 fs-2">Dragon Ball Quiz</h1>
        <form id="quizForm" action="/submit" method="POST">
            @csrf
            <input type="hidden" name="answers" id="answersInput">
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="quizModal" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-secondary text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="quizModalLabel">Pregunta <span id="questionNumber"></span></h5>
          </div>
          <div class="modal-body">
            <p id="questionText"></p>
            <div id="answersContainer"></div>
          </div>
          <div class="modal-footer">
            <button type="button" id="nextBtn" class="btn btn-success w-100" disabled>Siguiente</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const questions = @json($questions);

        let current = 0;
        let userAnswers = {};

        const modal = new bootstrap.Modal(document.getElementById('quizModal'));
        const questionNumber = document.getElementById('questionNumber');
        const questionText = document.getElementById('questionText');
        const answersContainer = document.getElementById('answersContainer');
        const nextBtn = document.getElementById('nextBtn');
        const answersInput = document.getElementById('answersInput');
        const quizForm = document.getElementById('quizForm');

        function showQuestion(index) {
            const q = questions[index];
            questionNumber.textContent = (index + 1) + ' de ' + questions.length;
            questionText.textContent = q.text;
            answersContainer.innerHTML = '';
            nextBtn.disabled = true;

            q.answers.forEach(ans => {
                const label = document.createElement('label');
                label.className = 'd-block mb-2';
                label.innerHTML = `
                    <input type="radio" name="answer" value="${ans.id}" class="form-check-input me-2">
                    ${ans.text}
                `;
                answersContainer.appendChild(label);
            });

            answersContainer.querySelectorAll('input[type=radio]').forEach(input => {
                input.addEventListener('change', () => {
                    nextBtn.disabled = false;
                });
            });
        }

        // Mostrar la primera pregunta y abrir el modal automáticamente al cargar la página
        window.addEventListener('DOMContentLoaded', () => {
            current = 0;
            userAnswers = {};
            showQuestion(current);
            modal.show();
        });

        nextBtn.addEventListener('click', () => {
            const selected = answersContainer.querySelector('input[type=radio]:checked');
            if (selected) {
                userAnswers[questions[current].id] = selected.value;
            }

            current++;
            if (current < questions.length) {
                showQuestion(current);
            } else {
                answersInput.value = JSON.stringify(userAnswers);
                modal.hide();
                quizForm.submit();
            }
        });
    </script>
</body>
</html>