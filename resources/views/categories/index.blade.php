<x-guest-layout>
    <h2 style="text-align: center;
" class="text-4xl text-green-600">Thực đơn</h2>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($categories as $category)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="{{ Storage::url($category->image) }}" alt="Image" />
                    <div class="px-6 py-4">

                        <a href="{{ route('categories.show', $category->id) }}">
                            <h4
                                class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-400 uppercase">
                                {{ $category->name }}</h4>
                            <p class="leading-normal text-gray-700">{{ $category->description }}.</p>
                                
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-guest-layout>
