<x-app-layout meta-title="Blog!" meta-description="Blog App Using Laravel Filament">
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            <div class="flex flex-col items-center">
                @foreach($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                @endforeach
            </div>

            {{ $posts->links() }}

        </section>

        <x-sidebar />
    </div>
</x-app-layout>