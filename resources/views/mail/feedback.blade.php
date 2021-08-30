<div class="mail-content">
    <img src="{{ $book->specialist->photo }}" alt="">
    <h2>Уважаемый {{ $book->getNameAndSurname() }}!</h2>
    <p>Благодарим вас, что выбрали нашу клинику</p>
    <p>Пожалуйста оцените специалиста <span class="specialist">{{ $book->specialist->getNameAndSurname()}}</span>, по шкале от 1 до 5</p>
    <p>И оставьте свой отзыв!</p>
</div>
<a href="{{ route('doctors.show', [
    'specialist' => $book->specialist,
    'bookId' => $book->id
    ]) }}"
   class="button">Оставить свой отзыв
</a>



<style>
    img {
        float: left;
        margin-right: 50px;
    }
    .mail-content {
        margin: 50px;
    }

    .specialist {

    }

    .button {
        text-decoration: none;
        border: 2px solid #7dd051;
        border-radius: 5px;
        background-color: #7dd051;
        padding: 10px;
        color: #fff;
    }

    .button:hover {
        background-color: #fff;
        color: #7dd051;
    }
</style>



