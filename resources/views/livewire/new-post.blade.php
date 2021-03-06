<div class="p-6 sm:px-10 bg-white border-b border-gray-200">
        <form class="w-full" action="#" wire:submit.prevent="savePost">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Title
                    </label>
                    <input wire:model="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" >
                    @error('title') <span class="error text-red-700">{{ $message }}</span> @enderror
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Slug
                    </label>
                    <input wire:model="slug" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
                    @error('slug') <span class="error text-red-700">{{ $message }}</span> @enderror

                </div>

            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Post content
                    </label>
                    <textarea wire:model="content" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </textarea>
{{--                    <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>--}}
                    @error('content') <span class="error text-red-700">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full  px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Category
                    </label>
                    <div class="relative">
                        <select wire:model="category" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="">Please choose a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category') <span class="error text-red-700">{{ $message }}</span> @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <button  class="p-1 transition-colors duration-700 transform bg-indigo-500 hover:bg-blue-400 text-gray-100 text-lg rounded-lg focus:border-4 border-indigo-300">Save Post</button>
            </div>
        </form>
    <div class="flex flex-wrap -mx-3 mb-2">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
