@include('general.header')

@include('general.menu')

<h1>{{ $title }} {{$group}}</h1>
<div class="main">
    <div class="content">
        <form action="/groups/{{$group}}/students" method="POST" class="create-group">
            @csrf
            <label>
                <p>Имя студента</p>
                <input type="text" name="name">
            </label>
            <label>
                <p>Фамилия студента</p>
                <input type="text" name="surname">
            </label>
            <label class="student-group_id">
                <p>Группа</p>
                <input type="number" name="group_id" value="{{$group}}">
            </label>
            <button type="submit">Добавить</button>
        </form>
    </div>
</div>

@include('general.footer')