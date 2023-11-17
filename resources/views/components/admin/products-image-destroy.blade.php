@props(['resource'=>'', 'x'=>'', 'y'=>'', 'img'=>''])
<div class="m-3" title="Видалити даний запис">

        <img src="{{ asset($img) }}" alt="{{ $img }}" height="150">
        <button type="submit" form="del{{$x.$y}}" class="text-danger border">
            <i class="fas fa-trash"></i>
        </button>

    <form id="del{{$x.$y}}" class="inline"
          method="POST"
          action="{{route('admin.products.images.destroy', [$x, $y])}}"
          onsubmit="return confirm('Підтверджуєте видалення об\'єкту?')">
        @method('DELETE')
        @csrf
    </form>

</div>


