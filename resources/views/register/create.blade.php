<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <h1 class="text-center font-bold">Register</h1>
            <form method="POST" action="/register">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 p-2 border rounded-md w-full" value="{{old('name')}}" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 p-2 border rounded-md w-full" value="{{old('email')}}" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                    <input type="text" name="username" id="username" class="mt-1 p-2 border rounded-md w-full" value="{{old('username')}}"  required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 border rounded-md w-full" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Register</button>
            </form>

        </main>
    </section>
</x-layout>