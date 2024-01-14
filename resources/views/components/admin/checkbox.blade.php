@props(['title' => 'Показ', 'data' => ''])
<div class="m-3">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="active" id="flexCheckChecked" @if($data){{'checked'}}@endif>
        <label class="form-check-label" for="flexCheckChecked">
            {{$title}}
        </label>
    </div>
</div>

