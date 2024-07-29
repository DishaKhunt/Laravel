<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <title>Image - Uploaded</title>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center p-12 min-h-screen">
        <div class="mx-auto w-full max-w-[550px] bg-white p-6 rounded-md shadow-md">
          <form
            class="py-6 px-9"
            action="{{ route('user.store') }}"
            method="POST" enctype="multipart/form-data"
          >
            @csrf
            <div class="mb-6 pt-4">
              <label class="mb-5 block text-xl font-semibold text-gray-700">
                Upload File
              </label>
      
              <div class="mb-8">
                <input type="file" name="photo" id="file" class="sr-only" accept=".jpg,.png,.jpeg" />

                @error('photo')
                    <div class="alert alert-danger my-1 text-red-600">
                        {{ $message }}
                    </div>
                @enderror
                <label
                  for="file"
                  class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-gray-300 p-12 text-center cursor-pointer"
                >
                  <div>
                    <span class="mb-2 block text-xl font-semibold text-gray-700">
                      Drop files here
                    </span>
                    <span class="mb-2 block text-base font-medium text-gray-500">
                      Or
                    </span>
                    <span
                      class="inline-flex rounded border border-gray-300 py-2 px-7 text-base font-medium text-gray-700"
                    >
                      Browse
                    </span>
                  </div>
                </label>
              </div>
            </div>
      
            <div>
              <button
                class="hover:shadow-form w-full rounded-md bg-indigo-600 py-3 px-8 text-center text-base font-semibold text-white outline-none"
              >
                Send File
              </button>
            </div>
          </form>
        </div>

        <div class="mt-4 w-full max-w-[550px]">
            @if (session('status'))
                <div class="alert alert-success bg-green-500 text-white p-3 rounded-md">
                    {{ session('status') }}
                </div>       
            @endif
        </div>
    </div>
</body>
</html>
