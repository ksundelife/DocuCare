<h2 style="color: #504f4f; text-align: center; padding-top: 30px;">Эмулятор почтового сервиса (например Gmail или Mail.ru)</h2>
<h3 style="color: #504f4f; padding-top: 30px; padding-bottom: 30px;">Входящие письма клиентов, которые были на приеме</h3>

@foreach($mail as $oneMail)

    <div style="border-bottom: 1px solid #505050; padding: 10px;">
        <a href="{{ route('send', ['book' => $oneMail,]) }}" style="text-decoration: none">
            <p><span style="color: #969696">Кому:</span>
                {{ $oneMail->getNameAndSurname()}}
                <span style="color: #969696; margin-left: 100px;">Тема: Оцените специалиста</span>
            </p>
            <p style="color: #a3a3a3; padding-left: 30px;">{{ $oneMail->getEmail() }}</p>
        </a>
    </div>
@endforeach
