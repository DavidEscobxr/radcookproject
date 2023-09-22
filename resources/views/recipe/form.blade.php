<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $recipe->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::select('category',  ["Postres" => "Postres",
            "Entradas" => "Entradas",
            "Desayunos" => "Desayunos",
            "Almuerzos" => "Almuerzos",
            "Cenas" => "Cenas",
            "Ensaladas" => "Ensaladas",
            "Sopas" => "Sopas",
            "Platos_vegetarianos" => "Platos Vegetarianos",
            "Platos_veganos" => "Platos Veganos",
            "Platos_de_pescado" => "Platos de Pescado",
            "Platos_de_pollo" => "Platos de Pollo",
            "Platos_de_carne" => "Platos de Carne",
            "Guarniciones" => "Guarniciones",
            "Bebidas" => "Bebidas",
            "Aperitivos" => "Aperitivos"], $recipe->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona la categoría']) }}
            {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}

        </div>

        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('description', $recipe->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::file('photo'), ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Imagen de la receta']}}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('selecciona ingredientes') }}
            <br>
        </div>

        @foreach($map as $type => $ingredients)
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-{{$type}}" aria-expanded="true" aria-controls="collapseOne">
                    {{$type}}
                </button>
              </h2>
            </div>
          </div>
            @foreach ($ingredients as $ingredient)
            <div id="collapseOne-{{$type}}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="ingredients[]" value={{$ingredient['id']}}> <label>{{$ingredient['name']}}</label>
                    </div>
                </div>
              </div>
            @endforeach
        @endforeach


        <!--
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $recipe->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('image_id') }}
            {{ Form::text('image_id', $recipe->image_id, ['class' => 'form-control' . ($errors->has('image_id') ? ' is-invalid' : ''), 'placeholder' => 'Image Id']) }}
            {!! $errors->first('image_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        -->

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">{{ __('Aceptar') }}</button>
    </div>
</div>
