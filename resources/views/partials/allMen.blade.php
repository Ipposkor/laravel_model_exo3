<div class="flex justify-center gap-5 flex-wrap">
    @foreach ($users as $user )
        @if ($user->genre == 'Homme')
        <div class="w-full max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
        
            <div class="py-5 text-center">
                <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{$user->nom}}</a>
                <span class="text-sm text-gray-700 dark:text-gray-200">{{$user->age}}</span>
                <span class="text-sm text-gray-700 dark:text-gray-200">{{$user->genre}}</span>
            </div>
        </div>
        @endif
        @endforeach
    </div>