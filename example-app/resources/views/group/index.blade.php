@include('general.header')

@include('general.menu')

<h1>{{ $title }}</h1>
<div class="main">
    <div class="btn-box">
        <a href="/groups/create" class="btn">Создать новую группу</a>
    </div>
    <div class="content">
        <h5>Список групп:</h5>
        <div class="group-item header-item">
            <div class="group-item_el">id</div>
            <div class="group-item_el">Название</div>
            <div class="group-item_el">Дата начала</div>
            <div class="group-item_el">Активна</div>
            <div class="group-item_el">Создана</div>
            <div class="group-item_el">Обновлена</div>
        </div>
        @foreach ($groups as $gr)
            <a href="/groups/{{ $gr->id }}" class="group-item">
                <div class="group-item_el">{{ $gr->id }}</div>
                <div class="group-item_el">{{ $gr->title }}</div>
                <div class="group-item_el">{{ $gr->start_from ? date('d-m-Y', strtotime($gr->start_from)) : '' }}</div>
                <div class="group-item_el">{{ $gr->is_active ? "Да" : "Нет" }}</div>
                <div class="group-item_el">{{ date('d-m-Y', strtotime($gr->created_at)) }}</div>
                <div class="group-item_el">{{ date('d-m-Y', strtotime($gr->updated_at)) }}</div>
            </a>
        @endforeach
    </div>
</div>

@include('general.footer')