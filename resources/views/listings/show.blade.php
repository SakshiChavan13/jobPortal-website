<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="mb-12">
                <h2 class="text-2xl font-medium text-gray-900 title-font">
                    {{ $listing->title }}
                </h2>
                <div class="md:flex-grow mr-8 mt-2 flex items-center justify-start">
                    @foreach($listing->tags as $tag)
                        <span class="inline-block mr-2 tracking-wide text-indigo-500 text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>
            <div class="-my-6">
                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="content w-full md:w-3/5 pr-4 leading-relaxed text-base">
                        {!! $listing->content !!}
                    </div>
                    <div class="ml-2 w-full md:w-1/5 pl-3 rounded">
                        <img
                            src="/storage/{{ $listing->logo }}"
                            alt="{{ $listing->company }} logo"
                            class="rounded max-w-full mb-5"
                        >
                        <p class="leading-relaxed text-base">
                            <strong>Location: </strong>{{ $listing->location }}<br>
                            <strong>Company: </strong>{{ $listing->company }}
                        </p>
                        <a href="{{ route('listing.apply',$listing->slug)}}" class="block text-center my-4 tracking-wide  bg-indigo-500 text-white text-sm font-medium title-font py-2 border border-indigo-500 hover:bg-indigo-500 hover:text-white uppercase">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>