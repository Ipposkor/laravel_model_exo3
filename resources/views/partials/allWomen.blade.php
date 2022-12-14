<div class="flex justify-center gap-5 flex-wrap">
    @foreach ($womens as $women )

        <div class="w-full max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <img class="object-cover w-full h-56" src="https://plusmagazine.levif.be/medias/13047/6680293.jpg" alt="avatar">
        
            <div class="py-5 text-center">
                <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{$women->nom}}</a>
                <span class="text-sm text-gray-700 dark:text-gray-200">{{$women->age}}</span>
                <span class="text-sm text-gray-700 dark:text-gray-200">{{$women->genre}}</span>
            </div>
        </div>

        @endforeach
    </div>