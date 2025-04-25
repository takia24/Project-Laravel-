<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .container {
                @apply px-10 mx-auto;
            }
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
       <div class="flex justify-between my-5">
       <h2 class="text-red-500 text-xl">Create</h2>
       <a href="/"class="bg-green-600 text-white rounded py-2 px-4">Back to Home</a>
       </div>
       <div>
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <div class="flex flex-col gap-5">
            <label for="">Name</label>
            <input type="text" name="name">
            <label for="">Description</label>
            <input type="text" name="description">
            <label for="">Select Image</label>
            <input type="file" name="image" id="">
            <div>
            <input type="Submit" class="bg-green-500 text-white py-2 px-4 rounded inline.block">
            </div>
            </div>
           
        </form>
       </div>
    </div>
</body>
</html>