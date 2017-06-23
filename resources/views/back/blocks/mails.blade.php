@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Почта'])

    <div class="box box-info group-item-widget"
         data-block="sponsor_form_mailto">
        <div class="box-header with-border">
            <h3 class="box-title"> Получатели заявок на получение предложения </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($sponsor_form->sponsor_form_mailto_group as $item)
                    @include('back.groups.sponsor_form_mailto.sponsor_form_mailto_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

    <div class="box box-info group-item-widget"
         data-block="become_sponsor_form_mailto">
        <div class="box-header with-border">
            <h3 class="box-title"> Получатели заявок в спонсоры </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($become_sponsor_form->become_sponsor_form_mailto_group as $item)
                    @include('back.groups.become_sponsor_form_mailto.become_sponsor_form_mailto_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

    <div class="box box-info group-item-widget"
         data-block="become_volunteer_form_mailto">
        <div class="box-header with-border">
            <h3 class="box-title"> Получатели заявок в волонтеры </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($become_volunteer_form->become_volunteer_form_mailto_group as $item)
                    @include('back.groups.become_volunteer_form_mailto.become_volunteer_form_mailto_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection