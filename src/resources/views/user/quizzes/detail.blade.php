<x-user-layout title="クイズ一覧">
    <x-slot name="head">
        @vite(['resources/js/common.js', 'resources/js/quiz.js'])
    </x-slot>
    <x-slot name="header">
        <x-user.common.header />
    </x-slot>
    <x-user.quiz.title title="{{ $quiz->name }}" />
    <div class="p-quiz-container l-container">
        @foreach ($quiz->questions as $i => $question)
            <section class="p-quiz-box js-quiz" data-quiz="{{ $i }}">
                <div class="p-quiz-box__question">
                    <h2 class="p-quiz-box__question__title">
                        <span class="p-quiz-box__label">Q{{ $i + 1 }}</span>
                        <span class="p-quiz-box__question__title__text">{{ $question->content }}</span>
                    </h2>
                    <figure class="p-quiz-box__question__image">
                        <img src="/assets/img/quiz/{{ $question->image }}" alt="">
                    </figure>
                </div>
                <div class="p-quiz-box__answer">
                    <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
                    <ul class="p-quiz-box__answer__list">
                        @foreach ($question->choices as $key => $choice)
                            <li class="p-quiz-box__answer__item">
                                <button class="p-quiz-box__answer__button js-answer" data-answer="{{ $i }}"
                                    data-correct="{{ $choice->valid }}">
                                    {{ $choice->name }}<i class="u-icon__arrow"></i>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="p-quiz-box__answer__correct js-answerBox">
                        <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
                        <p class="p-quiz-box__answer__correct__content">
                            <span class="p-quiz-box__answer__correct__content__label">A</span>
                            <span class="js-answerText"></span>
                        </p>
                    </div>
                </div>
                @if ($question->supplement)
                    <cite class="p-quiz-box__note">
                        <i class="u-icon__note"></i>{{ $question->supplement }}
                    </cite>
                @endif
            </section>
        @endforeach
        <!-- ./p-quiz-box -->
    </div>
    <!-- /.l-container .p-quiz-container -->
    <x-slot name="footer">
        <x-user.common.footer />
    </x-slot>
</x-user-layout>
