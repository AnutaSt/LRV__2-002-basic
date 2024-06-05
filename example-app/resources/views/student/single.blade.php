@include('general.header')

@include('general.menu')

<h1>{{ $title }}</h1>
<div class="main">
    <div class="content">
        <div class="group-item stud-item header-item">
            <div class="group-item_el">id</div>
            <div class="group-item_el">Фамилия</div>
            <div class="group-item_el">Имя</div>
            <div class="group-item_el">Группа</div>
            <div class="group-item_el">Создан</div>
            <div class="group-item_el">Обновлен</div>
        </div>
        <div class="group-item">
            <div class="group-item_el stud_el">{{ $student->id }}</div>
            <div class="group-item_el stud_el">{{ $student->surname }}</div>
            <div class="group-item_el stud_el">{{ $student->name }}</div>
            <div class="group-item_el stud_el">{{ $group->title }}</div>
            <div class="group-item_el stud_el">{{ date('d-m-Y', strtotime($student->created_at)) }}</div>
            <div class="group-item_el stud_el">{{ date('d-m-Y', strtotime($student->updated_at)) }}</div>
        </div>
    </div>
</div>

@include('general.footer')