<x-user-layout title="クイズ一覧">
    <x-slot name="header">
        <x-user.common.header />
    </x-slot>
    <div class="p-quiz-list__container">
        @foreach ($quizzes as $quiz)
            <div class="p-quiz-list__item">
                <div class="p-quiz-list__item__image-wrapper">
                    <img class="p-quiz-list__item__image" src="{{ $quiz->image }}" alt="クイズ{{ $loop->iteration }}"
                        width="300" height="400">
                </div>
                <h2 class="p-quiz-list__item__title">{{ $quiz->name }}</h2>
                <p class="p-quiz-list__item__description">{{ $quiz->description }}</p>
                <a href="{{ route('quizzes.detail', ['quiz' => $quiz]) }}" class="p-quiz-list__item__button">クイズを解く</a>
            </div>
        @endforeach
    </div>
</x-user-layout>
