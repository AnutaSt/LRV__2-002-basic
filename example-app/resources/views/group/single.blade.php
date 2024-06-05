@include('general.header')

@include('general.menu')

<h1>{{ $title }}</h1>
<div class="main">
    <div class="btn-box">
        <a href="/groups/{{ $groups->id }}/students/create" class="btn">Добавить студента</a>
    </div>
    <div class="content">
        <h5>Данные группы:</h5>
        <div class="group-item header-item">
            <div class="group-item_el">id</div>
            <div class="group-item_el">Название</div>
            <div class="group-item_el">Дата начала</div>
            <div class="group-item_el">Активна</div>
            <div class="group-item_el">Создана</div>
            <div class="group-item_el">Обновлена</div>
        </div>
        <div class="group-item">
            <div class="group-item_el">{{ $groups->id }}</div>
            <div class="group-item_el">{{ $groups->title }}</div>
            <div class="group-item_el">{{ $groups->start_from ? date('d-m-Y', strtotime($groups->start_from)) : '' }}</div>
            <div class="group-item_el">{{ $groups->is_active ? "Да" : "Нет" }}</div>
            <div class="group-item_el">{{ date('d-m-Y', strtotime($groups->created_at)) }}</div>
            <div class="group-item_el">{{ date('d-m-Y', strtotime($groups->updated_at)) }}</div>
        </div>
        <h5>Студенты в группе:</h5>
        <div class="group-item stud-item header-item">
            <div class="group-item_el">id</div>
            <div class="group-item_el">Фамилия</div>
            <div class="group-item_el">Имя</div>
            <div class="group-item_el">Группа</div>
            <div class="group-item_el">Создан</div>
            <div class="group-item_el">Обновлен</div>
        </div>
        @foreach ($students as $stud)
        <a href="/groups/{{ $groups->id }}/students/{{ $stud->id }}" class="group-item">
            <div class="group-item_el stud_el">{{ $stud->id }}</div>
            <div class="group-item_el stud_el">{{ $stud->surname }}</div>
            <div class="group-item_el stud_el">{{ $stud->name }}</div>
            <div class="group-item_el stud_el">{{ $groups->title }}</div>
            <div class="group-item_el stud_el">{{ date('d-m-Y', strtotime($stud->created_at)) }}</div>
            <div class="group-item_el stud_el">{{ date('d-m-Y', strtotime($stud->updated_at)) }}</div>
        </a>
    @endforeach
    </div>
</div>

@include('general.footer')