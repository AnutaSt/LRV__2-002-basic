@include('general.header')

@include('general.menu')

<h1>{{ $title }}</h1>
<div class="main">
    <div class="content">
        <form action="/groups" method="POST" class="create-group">
            @csrf
            <label>
                <p>Название группы</p>
                <input type="text" name="title">
            </label>
            <label>
                <input type="checkbox" name="is_active"/>
                <span>начала ли группа обучение?</span>
            </label>
            <label>
                <p>Начало обучения</p>
                <input type="date" name="start_from">
            </label>
            <button type="submit">Создать</button>
        </form>
    </div>
</div>

@include('general.footer')