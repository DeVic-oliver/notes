<?php
    if(Str::length($description) > 150){
        $descriptionPreview = Str::substr($description, 0, 150).'...'; 
    }else{
        $descriptionPreview = $description;
    }
?>

<article class="grid grid-cols-1 gap-3 bg-white rounded-xl p-5 pb-8 relative border w-full">
    <div class="">
        <h1 class="font-bold text-lg mt-[25px] text-center sm:text-start">{{$title}}</h1>
        <p class="text-base mt-[15px] mb-[15px]">
            <?php echo $descriptionPreview; ?>
        </p>
    </div>
    @if ( $canShowDelete )
        <form action="/note/delete/{{$id}}" method="POST" class="absolute top-0 right-[10px]">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-amber-50 relative px-3 py-1 top-3 right-2 rounded-full">x</button>
        </form>
    @endif
    <div class="flex flex-row w-full mx-auto mt-5 text-center justify-around">
        @if ( $canShowDelete )
            <form action="/note/edit/{{$id}}" method="GET" class="w-[45%] text-center">
                @csrf
                <button type="submit" class="default-btn btn p-3 w-full">Editar</button>
            </form>
        @endif
        <form action="/note/{{$id}}" method="GET" class="w-[45%]">
            @csrf
            <button type="submit" class="default-btn btn btn-dark p-3 w-full">Ver</button>
        </form>
    </div>
</article>