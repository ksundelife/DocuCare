@props(['books'])
<div class="container-fluid">
{{--<<<<<<< HEAD--}}
{{--    <div class="row">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="appointment-tab">--}}
{{--                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Будущие</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#today-appointments" data-toggle="tab">Сегодня</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="tab-content">--}}
{{--                        <div class="tab-pane show active" id="upcoming-appointments">--}}
{{--                            <div class="card card-table mb-0">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="table-responsive">--}}
{{--                                        <table class="table table-hover mb-0">--}}
{{--                                            <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th>Имя пациента</th>--}}
{{--                                                <th>Дата приема</th>--}}
{{--                                                <th>Цель</th>--}}
{{--                                                <th>Тип</th>--}}
{{--                                                <th class="text-center">Стоимость</th>--}}
{{--                                                <th></th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody class="align-middle">--}}
{{--                                            @foreach($books as $book)--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <h2 class="table-avatar">--}}
{{--                                                            <a data-book-id="{{$book->id}}" href="#" data-trigger>{{ $book->user->name . ' ' . $book->user->surname }}</a>--}}
{{--                                                        </h2>--}}
{{--                                                    </td>--}}
{{--                                                    <td>{{  date('d M Y', strtotime($book->datetime )) }}<span--}}
{{--                                                            class="d-block text-info">{{ date('h:i', strtotime($book->datetime )) }}</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td>General</td>--}}
{{--                                                    <td>New Patient</td>--}}
{{--                                                    <td class="text-center">{{ $book->specialist->price }}</td>--}}
{{--                                                    <td class="text-right">--}}
{{--                                                        <div class="table-action">--}}
{{--                                                            @if(!$book->is_over)--}}

{{--                                                                <a href="{{ route('book.isOverUpdate', compact('book')) }}"--}}
{{--                                                                   class="btn btn-sm btn-primary">--}}
{{--                                                                    <i class="fas fa-check"></i> Завершить прием--}}
{{--                                                                </a>--}}
{{--                                                            @endif--}}
{{--                                                            <a data-book-id="{{$book->id}}" href="#" data-trigger--}}
{{--                                                               class="btn btn-sm btn-info">--}}
{{--                                                                <i class="far fa-eye"></i> Посмотреть--}}
{{--                                                            </a>--}}

{{--                                                            <a href="javascript:void(0);"--}}
{{--                                                               class="btn btn-sm btn-danger">--}}
{{--                                                                <i class="fas fa-times"></i> Отменить--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                            @endforeach--}}


{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane" id="today-appointments">--}}
{{--                            <div class="card card-table mb-0">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="table-responsive">--}}
{{--                                        <table class="table table-hover mb-0">--}}
{{--                                            <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th>Имя пациента</th>--}}
{{--                                                <th>Дата приема</th>--}}
{{--                                                <th>Цель</th>--}}
{{--                                                <th>Тип</th>--}}
{{--                                                <th class="text-center">Стоимость</th>--}}
{{--                                                <th></th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody class="align-middle">--}}
{{--                                            @foreach($books as $book)--}}
{{--                                                @if(date('d M Y', strtotime(today()->toDateTimeString())) == date('d M Y', strtotime($book->datetime )))--}}
{{--                                                    <tr>--}}
{{--                                                        <td>--}}
{{--                                                            <h2 class="table-avatar" >--}}
{{--                                                                <a data-book-id="{{$book->id}}" href="#"  data-trigger >{{ $book->user->name . ' ' . $book->user->surname }}</a>--}}
{{--                                                            </h2>--}}
{{--                                                        </td>--}}
{{--                                                        <td>{{  date('d M Y', strtotime($book->datetime )) }}<span--}}
{{--                                                                class="d-block text-info">{{ date('h:i', strtotime($book->datetime )) }}</span>--}}
{{--                                                        </td>--}}
{{--                                                        <td>Fever</td>--}}
{{--                                                        <td>Old Patient</td>--}}
{{--                                                        <td class="text-center">{{ $book->specialist->price }}</td>--}}
{{--                                                        <td class="text-right">--}}
{{--                                                            <div class="table-action">--}}
{{--                                                                @if($book->is_over)--}}
{{--                                                                    <a href="{{ route('books.update', compact('book')) }}"--}}
{{--                                                                       class="btn btn-sm btn-primary">--}}
{{--                                                                        <i class="fas fa-check"></i> Завершить прием--}}
{{--                                                                    </a>--}}
{{--                                                                @endif--}}
{{--                                                                <a data-book-id="{{$book->id}}" href="javascript:void(0);" data-trigger--}}
{{--                                                                   class="btn btn-sm btn-info">--}}
{{--                                                                    <i class="far fa-eye"></i> Посмотреть--}}
{{--                                                                </a>--}}

{{--                                                                <a href="javascript:void(0);"--}}
{{--                                                                   class="btn btn-sm btn-danger">--}}
{{--                                                                    <i class="fas fa-times"></i> Отменить--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}

{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--=======--}}


                    <patient-list :books="{{ $books }}"/>
{{-->>>>>>> 52156262382a7c1c6fc4a6f98781d0a4ce9f0403--}}
                </div>
            </div>
        </div>
    </div>
</div>

