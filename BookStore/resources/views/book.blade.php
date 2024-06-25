<?php
$single_book = $book[0];
?>

<x-layout>
    <body class="bg-white-100">
        <section id="intro" class="pt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <div class="lg:w-1/2 lg:text-left text-center">
                        <h1 class="text-4xl font-bold leading-tight text-gray-800">
                            {{ $single_book->title }}
                        </h1>
                        <h3 class="text-lg text-gray-600 mt-2">by {{ $single_book->author }}</h3>
                        <p class="text-gray-600 text-sm mt-2">{{ $single_book->publisher_date }}</p>
                       
                       
                        <!--                        <div class="mt-4">
                            <a href="{{ route('edit', ['book' => $single_book->id]) }}" class="btn btn-primary inline-block">
                                Edit <i class="fas fa-edit ml-1"></i>
                            </a>
                            <form action="{{ route('destroy', ['book' => $single_book->id]) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete <i class="fas fa-trash-alt ml-1"></i>
                                </button>
                            </form>
                        </div>-->
                    </div>
                    <div class="lg:w-1/2 mt-6 lg:mt-0">
                        <img src="{{$single_book->image_url ? asset('storage/' . $single_book->image_url): asset('images/emgwa.jpg') }}" class="mx-auto rounded-lg shadow-lg" style="height: 400px;" alt="ebook">
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="bg-gray-200 mt-12 py-12">
            <div class="container mx-auto px-4">
                <div class="text-center">
                    <h2 class="text-3xl font-semibold text-gray-800">Pricing Plans</h2>
                    <p class="text-gray-600 mt-2">Choose a pricing plan to suit you.</p>
                </div>

                <div class="flex justify-center mt-10">
                    <div class="max-w-md bg-white rounded-lg overflow-hidden shadow-lg mx-4">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800">Starter Edition</h4>
                            <p class="text-gray-600 text-sm mt-2">eBook download only</p>
                            <p class="text-3xl text-blue-500 font-bold mt-4">${{$single_book->price}}</p>
                            <p class="text-sm text-gray-600 mt-4">{{$single_book->description}}</p>
                            <a href="#" class="btn btn-primary mt-4 inline-block">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</x-layout>
